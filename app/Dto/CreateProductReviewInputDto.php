<?php

declare(strict_types=1);

namespace App\Dto;

use App\Traits\CoordinatesTrait;
use App\Dto\Traits\HasPaginationTrait;
use Illuminate\Http\Request;
use MatanYadaev\EloquentSpatial\Objects\Point;
use Spatie\DataTransferObject\DataTransferObject;

final class CreateProductReviewInputDto extends DataTransferObject
{
    public ?string $comment;
    public ?int $personId;
    public int $rate = 0;
    public int $productId = 0;

    public static function fromRequest(Request $request): self
    {
        return new static([
            'rate' => $request->post('rate') ?? 0,
            'comment' => $request->post('comment') ?? null
        ]);
    }
}