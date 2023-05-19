<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Dataset extends Model
{
        protected $fillable = [
        'title'
    ];

    public function year()
    {
        return $this->belongsTo('App\Http\Models\Year');
    }

    public function source()
    {
        return $this->hasOne('App\Http\Models\Source');
    }

}
