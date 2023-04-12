<?php

declare(strict_types=1);

namespace App\Dto;

use App\Dto\Traits\FromRequestTrait;
use App\Traits\CoordinatesTrait;
use App\Dto\Traits\HasPaginationTrait;
use Illuminate\Http\Request;
use MatanYadaev\EloquentSpatial\Objects\Point;
use Spatie\DataTransferObject\DataTransferObject;

final class UpdateProducerInputDto extends DataTransferObject
{
    use FromRequestTrait;

    public ?bool $is_enabled = null;
    public ?string $name = null;
    public ?string $short_description = null;
    public ?string $long_description = null;
    public ?array $categories = null;
}