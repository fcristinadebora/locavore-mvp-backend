<?php

namespace App\Models;

use App\Models\Traits\ModelEventLogger;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use MatanYadaev\EloquentSpatial\Objects\Point;

class Producer extends Model
{
    use HasFactory, ModelEventLogger;

    protected static $recordEvents = ['updated'];

    public $fillable = [
        'person_id',
        'name',
        'is_enabled',
        'name',
        'short_description',
        'long_description',
        'categories',
    ];

    public const IMAGES_FOLDER = '/producers';

    // ============================
    // ========== Relations =======
    // ============================

    public function person(): BelongsTo
    {
        return $this->belongsTo(Person::class);
    }

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }

    public function contacts(): HasMany
    {
        return $this->hasMany(ProducerContact::class);
    }

    public function address(): HasOne
    {
        return $this->hasOne(Address::class);
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'category_producers');
    }

    public function favorites(): HasMany
    {
        return $this->hasMany(PersonFavoriteProducer::class);
    }

    public function reviews(): HasMany
    {
        return $this->hasMany(ProducerReview::class);
    }

    public function averageReview()
    {
        return $this->reviews()
            ->selectRaw("avg(rate) as rate, producer_id")
            ->groupBy('producer_id');
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
        return $query->whereRaw("LOWER(name) like '%{$searchString}%'");
    }

    public function scopeWithDistance(Builder $query, Point $coordinates): Builder
    {
        return $query->with("address", function ($query) use ($coordinates) {
            $query->withDistance("location", $coordinates);
        });
    }

    public function scopeOrderByDistance(Builder $query, Point $coordinates): Builder
    {
        return $query->orderBy(
            Address::subqueryOrderByLocation(
                $coordinates,
                [
                    'local' => 'producer_id',
                    'parent' =>  'producers.id'
                ]
            )
        );
    }

    public function scopeWhereCategories(Builder $query, array $categories): Builder
    {
        return $query->whereHas("categories", function ($query) use ($categories) {
            return $query->whereIn("category_id", $categories);
        });
    }

    public function scopeWhereMaxDistance(Builder $query, Point $coordinates, float $maxDistance): Builder
    {
        return $query->whereHas("address", function ($query) use ($coordinates, $maxDistance) {
            $query->whereDistance("location", $coordinates, '<=', $maxDistance);
        });
    }

    public function scopeExcludeIds(Builder $query, array $excludeIds): Builder
    {
        return $query->whereNotIn('id', $excludeIds);
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

    // ===========================================
    // ========== Business rules functions =======
    // ===========================================

    public static function listPaginated(
        ?Point $coordinates,
        string $search = "",
        array $categories = [], 
        int $currentPage = 1,
        int $perPage = 0,
        array $excludeIds = [],
        int $maxDistance = 0,
        bool $onlyFavorites = false
    ): LengthAwarePaginator
    {
        if (!$perPage) {
            $perPage = config('models.pagination_defaul_per_page');
        }

        return self::getFromFilters($coordinates, $search, $categories, $excludeIds, $maxDistance, $onlyFavorites)->paginate(perPage: $perPage, page: $currentPage);
    }

    public static function List(
        ?Point $coordinates,
        string $search = "",
        array $categories = [], 
        int $limit = 0,
        array $excludeIds = [],
        int $maxDistance = 0,
        bool $onlyFavorites = false
    ): Collection
    {
        if (!$limit) {
            $limit = config('models.list_default_max_items');
        }

        return self::getFromFilters($coordinates, $search, $categories, $excludeIds, $maxDistance, $onlyFavorites)->limit($limit)->get();
    }


    public static function getFromFilters(
        ?Point $coordinates,
        string $search = "",
        array $categories = [],
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

    public function getProfilePictureUrl(): ?string
    {
        if(!$this->profile_picture) {
            return null;
        }

        if (filter_var($this->profile_picture, FILTER_VALIDATE_URL)) {
            return $this->profile_picture;
        }

        return asset('storage' .  $this->getProfilePicturePath());
    }

    public function getProfilePicturePath(): ?string
    {
        if(!$this->profile_picture) {
            return null;
        }

        if (filter_var($this->profile_picture, FILTER_VALIDATE_URL)) {
            return null;
        }

        return self::IMAGES_FOLDER . '/' . $this->profile_picture;
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
