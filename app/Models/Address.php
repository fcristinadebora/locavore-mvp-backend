<?php

namespace App\Models;

use Illuminate\Contracts\Database\Query\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\DB;
use MatanYadaev\EloquentSpatial\Objects\Point;
use MatanYadaev\EloquentSpatial\SpatialBuilder;
use MatanYadaev\EloquentSpatial\Traits\HasSpatial;

class Address extends Model
{
    use HasFactory, HasSpatial;

    public $fillable = [
        'city_id',
        'lat',
        'lng',
        'location',
        'address',
        'producer_id'
    ];

    protected $casts = [
        'location' => Point::class
    ];

    public function person(): BelongsTo
    {
        return $this->belongsTo(Person::class);
    }

    public function producer(): BelongsTo
    {
        return $this->belongsTo(Producer::class);
    }

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    public function scopeSelectDistance(Builder $query, Point $coordinates): Builder
    {
        return $this->select(
            DB::raw(
                "ST_DISTANCE(`location`, ST_GeomFromText('POINT({$coordinates->longitude} {$coordinates->latitude})', {$coordinates->srid}, 'axis-order=long-lat')) as distance"
            )
        );
    }

    public static function subqueryOrderByLocation(Point $coordinates, array $whereColumn): Builder
    {
        return self::selectDistance($coordinates)
            ->orderBy("distance")
            ->whereColumn($whereColumn['local'], $whereColumn['parent'])
            ->limit(1);
    }

    public static function searchByLocation($lat, $lng)
    {
        $searchLocation = new Point($lat, $lng, 4326);

        /** @var SpatialBuilder $queryBuilder */
        $queryBuilder = self::query();

        return $queryBuilder
            ->withDistance('location', $searchLocation)
            ->with('city')
            ->orderByDistance('location', $searchLocation, 'asc');
    }

    public function loadDistance (Point $coordinates) {
        return self::withDistance('location', $coordinates)->find($this->id);
    }
}
