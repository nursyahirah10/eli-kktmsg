<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable, 
        HasRoles,
        \Nicolaslopezj\Searchable\SearchableTrait;

    /**
     * Searchable rules.
     *
     * @var array
     */
    protected $searchable = [
        /**
         * Columns and their priority in search results.
         * Columns with higher values are more important.
         * Columns with equal values have equal importance.
         *
         * @var array
         */
        'columns' => [
            'users.name' => 10,
            'users.email' => 10,
            'registrations.quota' => 9,
            'registrations.semester' => 9,
        ],
        'joins' => [
            'registrations' => ['users.id','registrations.user_id'],
        ],
    ];

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
