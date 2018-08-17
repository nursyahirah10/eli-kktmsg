<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $guarded = [];

    public function addressable()
    {
        return $this->morphTo();
    }

    public function setCityAttribute($value)
    {
        $this->attributes['city'] = strtoupper($value);
    }

    public function setStateAttribute($value)
    {
        $this->attributes['state'] = strtoupper($value);
    }

    public function setCountryAttribute($value)
    {
        $this->attributes['country'] = strtoupper($value);
    }
}
