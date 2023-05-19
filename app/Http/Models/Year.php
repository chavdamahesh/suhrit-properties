<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
        protected $fillable = [
        'title'
    ];

    public function country()
    {
        return $this->belongsTo('App\Http\Models\Country');
    }

    public function dataStreams()
    {
        return $this->belongsTo('App\Http\Models\DataStream');
    }

    public function datasets()
    {
        return $this->hasMany('App\Http\Models\Dataset');
    }

    public function map()
    {
        return $this->hasOne('App\Http\Models\Map');
    }

}
