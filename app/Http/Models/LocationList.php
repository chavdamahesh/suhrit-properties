<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class LocationList extends Model
{
    protected $fillable = [
        'title'
    ];

    protected $table = 'locations';

}
