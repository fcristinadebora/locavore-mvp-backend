<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonFavoriteProducer extends Model
{
    use HasFactory;

    protected $fillable = [
        'producer_id',
        'person_id'
    ];
}
