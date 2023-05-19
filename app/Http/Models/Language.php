<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $fillable = [
        'title'
    ];

    public function countries()
    {
        return $this->belongsToMany('App\Http\Models\Country');
    }

}
