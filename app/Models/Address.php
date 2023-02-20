<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use MatanYadaev\EloquentSpatial\Objects\Point;

class Address extends Model
{
    use HasFactory;

    protected $casts = [
        'location' => Point::class
    ];
}
