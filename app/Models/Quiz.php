<?php

namespace App\Models;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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
        return $this->HasMany(Question::class);
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

                $query->where('name', 'like', "%{$search}%");

                if (is_numeric($search)) {
                    $query->orWhere('id', (int) $search);
                }
            })
            ->with('questions')
            ->orderBy('id', 'DESC')
            ->paginate(perPage: $perPage, page: $page);
    }
}
