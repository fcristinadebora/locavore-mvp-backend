<?php

namespace App\Models;

use Illuminate\Contracts\Database\Query\Builder;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductReview extends Model
{
    use HasFactory;

    protected $fillable = [
        'person_id',
        'product_id',
        'rate',
        'comment'
    ];

    public function person(): BelongsTo
    {
        return $this->belongsTo(Person::class);
    }

    public static function listPaginated(
        int $productId = 0,
        int $personId = 0,
        int $currentPage = 1,
        int $perPage = 0
    ): LengthAwarePaginator
    {
        if (!$perPage) {
            $perPage = config('models.pagination_defaul_per_page');
        }

        return self::getFromFilters($productId, $personId)->paginate(perPage: $perPage, page: $currentPage);
    }

    public static function list(
        int $productId = 0,
        int $personId = 0,
        int $limit = 0
    ): Collection
    {
        if (!$limit) {
            $limit = config('models.list_default_max_items');
        }

        return self::getFromFilters($productId, $personId)->limit($limit)->get();
    }

    public static function findByPerson(int $productId, int $personId): ?self
    {
        return self::getFromFilters($productId, $personId)->first();
    }

    public static function getFromFilters(
        int $productId = 0,
        int $personId = 0
    ): Builder
    {
        $query = self::orderBy('created_at', 'DESC');
        
        if ($personId) {
            $query->where('person_id', $personId);
        }

        if ($productId) {
            $query->where('product_id', $productId);
        }

        return $query;
    }
}
