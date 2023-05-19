<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyTranslation extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'locale', 
        'property_id', 
        'property_name', 
        'short_desc', 
        'key_feature_1', 
        'key_feature_2', 
        'key_feature_3'
    ];
}
