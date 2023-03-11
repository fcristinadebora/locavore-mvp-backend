<?php

namespace App\Traits;

use Illuminate\Http\Request;
use MatanYadaev\EloquentSpatial\Objects\Point;

trait CoordinatesTrait {

    public function getCoordinatesFromRequest(Request $request): ?Point
    {
        $lat = $request->input('lat');
        $lng = $request->input('lng');

        if (!empty($lat) && !empty($lng)) {
            return new Point($lat, $lng, config("spatial.default_srid"));
        }

        return null;
    }
}