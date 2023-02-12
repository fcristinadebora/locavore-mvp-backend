<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use MatanYadaev\EloquentSpatial\Objects\Point;

class City extends Model
{
    use HasFactory;

    protected $casts = [
        'location' => Point::class
    ];

    public function country ()
    {
        return $this->belongsTo(Country::class);
    }

    public static function search(string $searchString, int $maxResults = 100) {
        return self::query()
            ->with('country')
            ->where('name', 'like', "%$searchString%")
            // FOR TIME BEING WE`RE ONLY OPERATING IN BRASIL SO IT DOESN`T MAKE SENSE TO RETURN THE COUNTRY :)
            // ->orWhereHas('country', function ($query) use ($searchString) {
            //     $query->where('name', 'like', "%$searchString%");
            // })
            ->orderBy('name', 'ASC')
            ->limit($maxResults)
            ->get();
    }
}
