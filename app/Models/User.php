<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function person(): HasOne
    {
        return $this->hasOne(Person::class);
    }

    public function producer(): HasOne
    {
        return $this->person()->producer();
    }

    // this is a recommended way to declare event handlers
    public static function boot() {
        parent::boot();
        self::deleting(function($user) { // before delete() method call this
            $user->person->address && $user->person->address()->forceDelete();
            $user->person->favoriteProducts && $user->person->favoriteProducts()->forceDelete();
            $user->person->favoriteProducers && $user->person->favoriteProducers()->forceDelete();
            $user->person->producer && $user->person->producer->address && $user->person->producer->address()->forceDelete();
            $user->person->producer && $user->person->producer->products()->forceDelete();
            $user->person->producer && $user->person->producer->categories()->forceDelete();
            $user->person->producer && $user->person->producer->forceDelete();
            $user->person->producer && $user->person->forceDelete();
        });
    }
}
