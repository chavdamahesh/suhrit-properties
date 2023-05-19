<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class PublicationTypeList extends Model
{
    protected $fillable = [
        'title'
    ];

    protected $table = 'publication_types';

    public function publications()
    {
        return $this->hasMany('App\Http\Models\Publication');
    }
}
