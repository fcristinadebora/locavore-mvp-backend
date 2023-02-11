<?php

namespace App\Http\Services;

use App\Models\City;
use Illuminate\Database\Eloquent\Collection;

class CityService
{
    public function search(string $searchString): Collection
    {
        return City::search($searchString);
    }
}