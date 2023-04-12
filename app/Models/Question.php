<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    public $fillable = [
        'quiz_id',
        'question',
        'order',
        'type',
        'options',
    ];

    public function getOptionsAttribute(): mixed
    {
        $hasOptions = $this->attributes['options'] && $this->attributes['options'] != 'null';
        return $hasOptions ? json_decode($this->attributes['options']) : null;
    }
}
