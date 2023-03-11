<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\BaseApiController;
use App\Http\Services\CityService;
use App\Models\City;
use Illuminate\Http\Request;

class CitiesController extends BaseApiController
{
    public function __construct(private CityService $cityService){}

    public function search(Request $request)
    {
        $searchString = $request->query('search');
        $max = $request->query('max') ?? 0;
        return $this->sendResponse($this->cityService->search($searchString, $max));
    }

    public function getById(City $city)
    {
        return $this->sendResponse($city);
    }
}
