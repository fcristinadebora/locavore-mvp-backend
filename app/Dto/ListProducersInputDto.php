<?php

declare(strict_types=1);

namespace App\Dto;

use App\Traits\CoordinatesTrait;
use App\Dto\Traits\HasPaginationTrait;
use Illuminate\Http\Request;
use MatanYadaev\EloquentSpatial\Objects\Point;
use Spatie\DataTransferObject\DataTransferObject;

final class ListProducersInputDto extends DataTransferObject
{
    use HasPaginationTrait, CoordinatesTrait;

    public ?string $search;
    public ?Point $coordinates;
    public array $categoryIds = [];
    public array $excludeIds = [];
    public ?int $producerId;
    public ?int $limit;
    public ?int $maxDistance;
    public bool $paginate = false;
    public ?PaginationInputDto $pagination;
    public bool $onlyFavorites = false;

    public static function fromRequest(Request $request): self
    {
        $paginate = $request->input('paginate') !== null
            ? (bool) $request->input('paginate')
            : true;
            
        return new static([
            'pagination' => $paginate ? (new self)->getPaginationFromRequest($request) : null,
            'coordinates' => (new self)->getCoordinatesFromRequest($request),
            'paginate' => $paginate,
            'search' => $request->input('search') ?? "",
            'categoryIds' => $request->input('categories') ? explode(",", $request->input('categories')) : [],
            'excludeIds' => $request->input('excludeIds') ? explode(",", $request->input('excludeIds')) : [],
            'limit' => $request->input('limit') ?? 1,
            'maxDistance' => $request->input('maxDistance') ?? 0,
            'onlyFavorites' => $request->input('onlyFavorites') ?? 0,
        ]);
    }
}