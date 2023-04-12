<?php

declare(strict_types=1);

namespace App\Dto;

use App\Dto\Traits\FromRequestTrait;
use App\Traits\CoordinatesTrait;
use App\Dto\Traits\HasPaginationTrait;
use Illuminate\Http\Request;
use MatanYadaev\EloquentSpatial\Objects\Point;
use Spatie\DataTransferObject\DataTransferObject;

final class ProducerReplaceContactsInputDto extends DataTransferObject
{
    /** @var ContactInputDto[] */
    public array $contacts = [];

    public static function fromRequest(Request $request): self
    {
        $contacts = $request->input('contacts');
        $contacts = array_map(function ($contact) {
            return new ContactInputDto($contact['type'], $contact['value']);
        }, $contacts);
        
        return new static(['contacts' => $contacts]);
    }
}