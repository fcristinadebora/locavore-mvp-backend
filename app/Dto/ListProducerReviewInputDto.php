<?php

declare(strict_types=1);

namespace App\Dto;

use App\Traits\CoordinatesTrait;
use App\Dto\Traits\HasPaginationTrait;
use Illuminate\Http\Request;
use MatanYadaev\EloquentSpatial\Objects\Point;
use Spatie\DataTransferObject\DataTransferObject;

final class ListProducerReviewInputDto extends DataTransferObject
{
    use HasPaginationTrait, CoordinatesTrait;

    public int $personId = 0;
    public int $limit = 0;
    public ?PaginationInputDto $pagination;

    public static function fromRequest(Request $request): self
    {
        return new static([
            'pagination' => $request->input('paginate') ? (new self)->getPaginationFromRequest($request) : null,
            'personId' => $request->input('personId') ?? 0,
            'limit' => $request->input('limit') ?? 0
        ]);
    }
}