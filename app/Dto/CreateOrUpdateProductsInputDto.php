<?php

declare(strict_types=1);

namespace App\Dto;

use App\Dto\Traits\FromRequestTrait;
use App\Traits\CoordinatesTrait;
use App\Dto\Traits\HasPaginationTrait;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use MatanYadaev\EloquentSpatial\Objects\Point;
use Spatie\DataTransferObject\DataTransferObject;

final class CreateOrUpdateProductsInputDto extends DataTransferObject
{
    use FromRequestTrait;

    public ?bool $is_active = null;
    public ?bool $delete_image = false;
    public ?string $name = null;
    public ?string $description = null;
    public ?UploadedFile $image = null;
    public ?float $price = null;
    public ?string $unit_of_price = null;
    public ?array $categories = null;
}