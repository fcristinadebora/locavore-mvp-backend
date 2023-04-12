<?php

declare(strict_types=1);

namespace App\Dto;

use App\Dto\Traits\FromRequestTrait;
use App\Traits\CoordinatesTrait;
use App\Dto\Traits\HasPaginationTrait;
use Illuminate\Http\Request;
use MatanYadaev\EloquentSpatial\Objects\Point;
use Spatie\DataTransferObject\DataTransferObject;

final class QuestionDto extends DataTransferObject
{
    use FromRequestTrait;

    public ?int $order = 0;
    public ?string $type = null;
    public ?string $question = null;
    public ?array $options = null;
}