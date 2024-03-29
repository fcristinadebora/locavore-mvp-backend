<?php

namespace App\Http\Services;

use App\Dto\ListProducersInputDto;
use App\Models\Producer;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;

class ProducerService
{
    public function createProducer(int $personId, string $name): Producer
    {
        return Producer::create([
            'is_active' => true,
            'person_id' => $personId,
            'name' => $name
        ]);
    }

    public function listPaginated(
        ListProducersInputDto $dto
    ): LengthAwarePaginator
    {
        return Producer::listPaginated(
            coordinates: $dto->coordinates,
            search: $dto->search,
            perPage: $dto->pagination->perPage,
            categories: $dto->categoryIds,
            currentPage: $dto->pagination->currentPage,
            excludeIds: $dto->excludeIds,
            maxDistance: $dto->maxDistance,
            onlyFavorites: $dto->onlyFavorites
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
            limit: $dto->limit,
            excludeIds: $dto->excludeIds,
            maxDistance: $dto->maxDistance,
            onlyFavorites: $dto->onlyFavorites
        );
    }


    public function getBestRated(int $limit): Collection
    {
        return Producer::getBestRated($limit ?? 0);
    }
}