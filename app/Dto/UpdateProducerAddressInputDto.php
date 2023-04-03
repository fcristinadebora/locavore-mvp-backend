<?php

declare(strict_types=1);

namespace App\Dto;

use App\Dto\Traits\FromRequestTrait;
use App\Traits\CoordinatesTrait;
use App\Dto\Traits\HasPaginationTrait;
use Illuminate\Http\Request;
use MatanYadaev\EloquentSpatial\Objects\Point;
use Spatie\DataTransferObject\DataTransferObject;

final class UpdateProducerAddressInputDto extends DataTransferObject
{
    use FromRequestTrait;

    public ?int $city_id = null;
    public ?string $address = null;
    public ?float $lat = null;
    public ?float $lng = null;
}