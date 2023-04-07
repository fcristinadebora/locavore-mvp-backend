<?php

namespace App\Models;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use MatanYadaev\EloquentSpatial\Objects\Point;

class Product extends Model
{
    use HasFactory;

    public $fillable = [
        'is_active',
        'producer_id',
        'name',
        'description',
        'image',
        'price',
        'unit_of_price',
        'categories',
    ];

    public const IMAGES_FOLDER = '/products';

    // ============================
    // ========== Relations =======
    // ============================
    public function producer(): BelongsTo
    {
        return $this->belongsTo(Producer::class);
    }

    public function availability(): HasMany
    {
        return $this->hasMany(AvailabilityProduct::class);
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'category_products');
    }

    public function favorites(): HasMany
    {
        return $this->hasMany(PersonFavoriteProduct::class);
    }

    public function reviews(): HasMany
    {
        return $this->hasMany(ProductReview::class);
    }

    public function averageReview()
    {
        return $this->reviews()
            ->selectRaw("avg(rate) as rate, product_id")
            ->groupBy('product_id');
    }

    public function getAverageReviewAttribute()
    {
        if ( ! array_key_exists('averageReview', $this->relations)) {
            $this->load('averageReview');
        }

        $relation = $this->getRelation('averageReview')->first();

        return ($relation) ? round($relation->rate, 2) : null;
    }
    
    // ==================================
    // ========== Scope functions =======
    // ==================================
    
    // Apply here the filters suitable for search
    public function scopeWhereSearch(Builder $query, $searchString): Builder
    {
        return $query->where('name', 'like', "%{$searchString}%");
    }

    public function scopeWhereCategories(Builder $query, array $categories): Builder
    {
        return $query->whereHas("categories", function ($query) use ($categories) {
            return $query->whereIn("category_id", $categories);
        });
    }

    public function scopeWhereProducer(Builder $query, int $producerId): Builder
    {
        return $query->where('producer_id', $producerId);
    }

    public function scopeWithDistance(Builder $query, Point $coordinates): Builder
    {
        return $query->with("producer.address", function ($query) use ($coordinates) {
            $query->withDistance("location", $coordinates);
        });
    }

    public function scopeWhereIsFavorite(Builder $query): Builder
    {
        // TODO improve this later
        $user = auth('api')->user();

        if (!$user) {
            return $query->whereRaw("false");
        }
        
        return $query->whereHas('favorites', function ($query) use ($user) {
            return $query->where('person_id', $user->person->id);
        });
    }

    public function scopeOrderByDistance(Builder $query, Point $coordinates): Builder
    {
        return $query->orderBy(
            Address::subqueryOrderByLocation(
                $coordinates,
                [
                    'local' => 'producer_id',
                    'parent' =>  'products.producer_id'
                ]
            )
        );
    }

    public function scopeWhereMaxDistance(Builder $query, Point $coordinates, float $maxDistance): Builder
    {
        return $query->whereHas("producer.address", function ($query) use ($coordinates, $maxDistance) {
            $query->whereDistance("location", $coordinates, '<=', $maxDistance);
        });
    }

    public function scopeExcludeIds(Builder $query, array $excludeIds): Builder
    {
        return $query->whereNotIn('id', $excludeIds);
    }

    // ===========================================
    // ========== Business rules functions =======
    // ===========================================
    public static function listPaginated(
        ?Point $coordinates,
        string $search = "",
        array $categories = [], 
        int $currentPage = 1,
        int $perPage = 0,
        int $producerId = 0,
        array $excludeIds = [],
        int $maxDistance = 0,
        bool $onlyFavorites = false,
    ): LengthAwarePaginator
    {
        if (!$perPage) {
            $perPage = config('models.pagination_defaul_per_page');
        }

        return self::getFromFilters($coordinates, $search, $categories, $producerId, $excludeIds, $maxDistance, $onlyFavorites)->paginate(perPage: $perPage, page: $currentPage);
    }

    public static function list(
        ?Point $coordinates,
        string $search = "",
        array $categories = [],
        int $producerId = 0,
        int $limit = 0,
        array $excludeIds = [],
        int $maxDistance = 0,
        bool $onlyFavorites = false,
    ): Collection
    {
        if (!$limit) {
            $limit = config('models.list_default_max_items');
        }

        $products = self::getFromFilters($coordinates, $search, $categories, $producerId, $excludeIds, $maxDistance, $onlyFavorites)->limit($limit);

        return $products->get();
    }


    public static function getFromFilters(
        ?Point $coordinates,
        string $search = "",
        array $categories = [],
        int $producerId = 0,
        array $excludeIds = [],
        int $maxDistance = 0,
        bool $onlyFavorites = false
    ): Builder
    {
        $query = self::whereSearch($search);

        if ($coordinates) {
            $query->withDistance($coordinates)
                ->orderByDistance($coordinates);
        }

        if (!empty($categories)) {
            $query->whereCategories($categories);
        }

        if ($producerId) {
            $query->whereProducer($producerId);
        }

        if ($excludeIds) {
            $query->excludeIds($excludeIds);
        }

        if ($maxDistance && $coordinates) {
            $query->whereMaxDistance($coordinates, $maxDistance);
        }

        if ($onlyFavorites) {
            $query->whereIsFavorite();
        }

        return $query;
    }

    public static function listPaginatedByProducer(int $producerId, string $search = '', int $page = 1, int $perPage = 0): LengthAwarePaginator
    {
        if (!$perPage) {
            $perPage = config('models.pagination_defaul_per_page');
        }

        return self::where('producer_id', $producerId)
            ->where(function ($query) use ($search) {
                if (!$search) {
                    return true;
                }

                $query->whereSearch($search);
                if (is_numeric($search)) {
                    $query->orWhere('id', (int) $search);
                }
            })
            ->orderBy('id', 'DESC')
            ->paginate(perPage: $perPage, page: $page);
    }

    public function getImageUrl(): ?string
    {
        if(!$this->image) {
            return null;
        }

        if (filter_var($this->image, FILTER_VALIDATE_URL)) {
            return $this->image;
        }

        return asset('storage' .  $this->getImagePath());
    }

    public function getImagePath(): ?string
    {
        if(!$this->image) {
            return null;
        }

        if (filter_var($this->image, FILTER_VALIDATE_URL)) {
            return null;
        }

        return self::IMAGES_FOLDER . '/' . $this->image;
    }

    public static function getBestRated(int $limit) {
        return self::withAvg('reviews', 'rate')
            ->withCount('reviews')
            ->limit($limit)
            ->orderBy('reviews_avg_rate', 'DESC')
            ->orderBy('reviews_count', 'DESC')
            ->inRandomOrder()
            ->inRandomOrder()
            ->get();
    }
}
