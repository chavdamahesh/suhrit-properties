<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class CountryList extends Model
{
    protected $fillable = [
        'title'
    ];

    protected $table = 'countries';

}
