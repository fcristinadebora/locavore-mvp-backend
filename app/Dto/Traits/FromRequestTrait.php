<?php

namespace App\Dto\Traits;

use Illuminate\Http\Request;

trait FromRequestTrait {

    public static function fromRequest(Request $request): self
    {
        return new static($request->validated());
    }

    public static function snakeToCamel ($str) {
        // Remove underscores, capitalize words, squash, lowercase first.
        return lcfirst(str_replace(' ', '', ucwords(str_replace('_', ' ', $str))));
    }
}