<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $guarded = [];

    public function address()
    {
        return $this->morphOne('App\Address', 'addressable');
    }
}
