<?php

namespace App\Http\Services;

use App\Dto\ListProducersInputDto;
use App\Models\Producer;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;

class ProducerService
{
    public function listPaginated(
        ListProducersInputDto $dto
    ): LengthAwarePaginator
    {
        return Producer::listPaginated(
            coordinates: $dto->coordinates,
            search: $dto->search,
            perPage: $dto->pagination->perPage,
            categories: $dto->categoryIds,
            currentPage: $dto->pagination->currentPage
        );
    }

    public function list(
        ListProducersInputDto $dto
    ): Collection
    {
        return Producer::list(
            coordinates: $dto->coordinates,
            search: $dto->search,
            categories: $dto->categoryIds,
            limit: $dto->limit
        );
    }
}