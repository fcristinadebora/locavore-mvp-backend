<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProducerContact extends Model
{
    use HasFactory;

    public $fillable = [
        'producer_id', 'type', 'value'
    ];
}
