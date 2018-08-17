<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $guarded = [];

    protected $dates = [
        'start_at', 'end_at'
    ];

    public function companies()
    {
        return $this->belongsToMany('App\Company')->withPivot('status')->withTimestamps();;
    }
}
