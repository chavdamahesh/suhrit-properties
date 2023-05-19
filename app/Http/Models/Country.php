<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = [
        'title'
    ];

    public function years()
    {
        return $this->hasMany('App\Http\Models\Year');
    }

    public function countryOptions()
    {
        return $this->hasMany('App\Http\Models\CountryOptionList');
    }

    public function languages()
    {
        return $this->belongsToMany('App\Http\Models\Language');
    }
}
