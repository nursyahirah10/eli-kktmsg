<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable, HasRoles;

    protected $appends = [
        'registered', 'reg'
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'ic', 'matric', 'profile_picture', 'programme', 'email', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function address()
    {
        return $this->morphOne('App\Address', 'addressable');
    }

    public function getProfilePictureAttribute($pp)
    {
        return $pp ?? 'dummy.jpg';
    }

    public function registration()
    {
        return $this->hasOne('App\Registration');
    }
}
