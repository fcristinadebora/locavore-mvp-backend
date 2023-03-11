<?php

namespace App\Models;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use MatanYadaev\EloquentSpatial\Objects\Point;

class Product extends Model
{
    use HasFactory;

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
            return $query->whereIn("id", $categories);
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

    // ===========================================
    // ========== Business rules functions =======
    // ===========================================
    public static function listPaginated(
        Point $coordinates,
        string $search = "",
        array $categories = [], 
        $currentPage = 1,
        $perPage = 0,
        $producerId = 0
    ): LengthAwarePaginator
    {
        if (!$perPage) {
            $perPage = config('models.pagination_defaul_per_page');
        }

        return self::getFromFilters($coordinates, $search, $categories, $producerId)->paginate(perPage: $perPage, page: $currentPage);
    }

    public static function list(
        Point $coordinates,
        string $search = "",
        array $categories = [],
        int $producerId = 0,
        int $limit = 0
    ): Collection
    {
        if (!$limit) {
            $limit = config('models.list_default_max_items');
        }

        $products = self::getFromFilters($coordinates, $search, $categories, $producerId)->limit($limit);

        return $products->get();
    }


    public static function getFromFilters(Point $coordinates, string $search = "", array $categories = [], $producerId = 0): Builder
    {
        $query = self::whereSearch($search)
            ->withDistance($coordinates)
            ->orderByDistance($coordinates);

        if (!empty($categories)) {
            $query->whereCategories($categories);
        }

        if ($producerId) {
            $query->whereProducer($producerId);
        }

        return $query;
    }
}
