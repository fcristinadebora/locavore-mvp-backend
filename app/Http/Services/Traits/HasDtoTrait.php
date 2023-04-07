<?php

namespace App\Http\Services\Traits;

use App\Http\Services\AuthService;
use App\Models\Producer;
use App\Models\User;
use Illuminate\Validation\UnauthorizedException;

trait HasDtoTrait {

    public function mergeDtoIntoTarget(object $dto, object $target): object
    {
        foreach ($dto as $key => $value) {
            // Skip null values
            if ($value === null) {
                continue;
            }
    
            if (in_array($key, $target->fillable ?? []) && !is_array($value)) {
                $target->$key = $value;
            }
        }

        return $target;
    }
}