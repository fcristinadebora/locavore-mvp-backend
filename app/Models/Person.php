<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Person extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id'
    ];

    public function addresses(): HasMany
    {
        return $this->hasMany(Address::class);
    }

    public function favoriteProducts(): HasMany
    {
        return $this->hasMany(PersonFavoriteProducts::class);
    }

    public function favoriteProducers(): HasMany
    {
        return $this->hasMany(PersonFavoriteProducers::class);
    }

    public function producer(): HasOne
    {
        return $this->hasOne(Producer::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
