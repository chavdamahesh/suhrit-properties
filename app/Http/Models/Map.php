<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Map extends Model
{
    protected $fillable = [
        'title'
    ];

    public function year()
    {
        return $this->belongsToMany('App\Http\Models\Year');
    }

}
