<?php

namespace App\Http\Services;

use App\Dto\ListProductsInputDto;
use App\Models\Address;
use App\Models\Product;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Collection as SupportCollection;
use MatanYadaev\EloquentSpatial\Objects\Point;

class ProductService
{
    public function listPaginated(
        ListProductsInputDto $dto
    ): LengthAwarePaginator
    {
        return Product::listPaginated(
            coordinates: $dto->coordinates,
            search: $dto->search,
            perPage: $dto->pagination->perPage,
            categories: $dto->categoryIds,
            currentPage: $dto->pagination->currentPage,
            producerId: $dto->producerId,
        );
    }

    public function list(
        ListProductsInputDto $dto
    ): Collection
    {
        return Product::list(
            coordinates: $dto->coordinates,
            search: $dto->search,
            categories: $dto->categoryIds,
            producerId: $dto->producerId,
            limit: $dto->limit
        );
    }
}