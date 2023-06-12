<?php

namespace App\Models;

use Collection;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Illuminate\Support\Collection as SupportCollection;

class Quiz extends Model
{
    use HasFactory;

    public $fillable = [
        'name',
        'is_active',
        'producer_id',
    ];

    public function questions(): HasMany
    {
        return $this->HasMany(Question::class)->orderBy('order', 'asc');
    }

    public static function listPaginatedByProducer(int $producerId, string $search = '', int $page = 1, int $perPage = 0): LengthAwarePaginator
    {
        if (!$perPage) {
            $perPage = config('models.pagination_defaul_per_page');
        }

        return self::getFromProducerFilters($producerId, $search)
            ->paginate(perPage: $perPage, page: $page);
    }

    public static function listByProducer(int $producerId, string $search = ''): SupportCollection
    {
        return  self::getFromProducerFilters($producerId, $search)->get();
    }

    public static function getFromProducerFilters(int $producerId, string $search = ''): Builder
    {
        return self::where('producer_id', $producerId)
            ->where(function ($query) use ($search) {
                if (!$search) {
                    return true;
                }

                $query->where('name', 'like', "%{$search}%");

                if (is_numeric($search)) {
                    $query->orWhere('id', (int) $search);
                }
            })
            ->with('questions')
            ->orderBy('id', 'DESC');
    }
}
