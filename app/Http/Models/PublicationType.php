<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class PublicationType extends Model
{
    protected $fillable = [
        'title',
        'type_id'
    ];



    public function publications()
    {
        return $this->belongsTo('App\Http\Models\Publication');
    }
}
