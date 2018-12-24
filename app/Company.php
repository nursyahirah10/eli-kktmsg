<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $guarded = [];

    protected $casts = [
        'status' => 'boolean'
    ];

    public function address()
    {
        return $this->morphOne('App\Address', 'addressable');
    }

    public function registrations()
    {
        return $this->belongsToMany('App\Registration')->withPivot('status')->withTimestamps();;
    }

    public function setStatusAttribute($value)
    {
        $this->attributes['status'] = (boolean) $value;
    }

    public function scopeByState($query, $value)
    {
        return $query->whereHas('address', function ($q) use ($value) {
            $q->where('state', 'LIKE', "%$value%");
        });
    }
}
