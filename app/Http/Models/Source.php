<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Source extends Model
{
        protected $fillable = [
        'title'
    ];

    public function year()
    {
        return $this->belongsTo('App\Http\Models\Year');
    }

}
