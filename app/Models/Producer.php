<?php

namespace App\Models;

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
    use HasFactory;

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

    public function address(): HasOne
    {
        return $this->hasOne(Address::class);
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'category_producers');
    }

    // ==================================
    // ========== Scope functions =======
    // ==================================

    // Apply here the filters suitable for search
    public function scopeWhereSearch(Builder $query, $searchString): Builder
    {
        return $query->whereHas('person.user', function ($query) use ($searchString) {
            if (empty($searchString)) {
                return;
            }

            $searchString = strtolower($searchString);
            $query->whereRaw("LOWER(name) like '%{$searchString}%'");
        });
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
            return $query->whereIn("id", $categories);
        });
    }

    // ===========================================
    // ========== Business rules functions =======
    // ===========================================

    public static function listPaginated(
        Point $coordinates,
        string $search = "",
        array $categories = [], 
        $currentPage = 1,
        $perPage = 0
    ): LengthAwarePaginator
    {
        if (!$perPage) {
            $perPage = config('models.pagination_defaul_per_page');
        }

        return self::getFromFilters($coordinates, $search, $categories)->paginate(perPage: $perPage, page: $currentPage);
    }

    public static function List(
        Point $coordinates,
        string $search = "",
        array $categories = [], 
        $limit = 0
    ): Collection
    {
        if (!$limit) {
            $limit = config('models.list_default_max_items');
        }

        return self::getFromFilters($coordinates, $search, $categories)->limit($limit)->get();
    }


    public static function getFromFilters(Point $coordinates, string $search = "", array $categories = []): Builder
    {
        $query = self::whereSearch($search)
            ->withDistance($coordinates)
            ->orderByDistance($coordinates);

        if (!empty($categories)) {
            $query->whereCategories($categories);
        }

        return $query;
    }
}
