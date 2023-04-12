<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonFavoriteProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'person_id'
    ];
}
