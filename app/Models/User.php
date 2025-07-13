<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
<<<<<<< HEAD

use Illuminate\Contracts\Auth\MustVerifyEmail;
=======
>>>>>>> b3246b188fcf6efceccbcf2e10fbce7b4a245fc6
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

<<<<<<< HEAD
class User extends Authenticatable implements MustVerifyEmail
=======
class User extends Authenticatable
>>>>>>> b3246b188fcf6efceccbcf2e10fbce7b4a245fc6
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
<<<<<<< HEAD
=======
        'password' => 'hashed',
>>>>>>> b3246b188fcf6efceccbcf2e10fbce7b4a245fc6
    ];
}
