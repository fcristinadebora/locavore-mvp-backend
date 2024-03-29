<?php

namespace App\Http\Services;

use App\Models\City;
use Illuminate\Database\Eloquent\Collection;

class CityService
{
    public function search(string $searchString, int $maxResults = 0): Collection
    {
        return City::search($searchString, $maxResults);
    }
}