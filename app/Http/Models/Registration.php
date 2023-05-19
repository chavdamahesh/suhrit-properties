<?php

namespace App\Http\Models;
use Illuminate\Database\Eloquent\Model;
class Registration extends Model
{
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $fillable = [
            'id','short_desc','email','phone','last_name','first_name','property_name','for','type','location','lift','security_door','double_glazing','garage','garden','parking','terrase','price','floor','total_area_int','total_area_ext','year_built','garage_no','no_bath','no_bedrooms','orientation','garden_terrace_orientation','charges','energy_efficiency','year_reno','no_outdoor_parking_spots','kitchen_type','key_feature_1','key_feature_2','key_feature_3',
    ];
}
