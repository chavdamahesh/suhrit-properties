<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Property extends Model implements TranslatableContract, HasMedia
{
    use Translatable;
    use InteractsWithMedia;

    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';

    protected $table = 'properties';

    public $translatedAttributes = [
        'property_name',
        'short_desc',
        'property_id',
        'locale',
        'key_feature_1',
        'key_feature_2',
        'key_feature_3',
    ];

    public $fillable = [
        'property_name','id','short_desc','email','phone','last_name','first_name','contract','image_upload','type','place','lift','security_door','double_glazing','garage','garden','parking','terrase','price','floor','total_area_int','total_area_ext','year_built','garage_no','no_bath','no_bedrooms','orientation','garden_terrace_orientation','charges','energy_efficiency','year_reno','no_outdoor_parking_spots','kitchen_type','key_feature_1','key_feature_2','key_feature_3',
    ];

    public function images(){
        return $this->hasMany('App\Http\Models\Image', 'id_properties');
    }

    public function location(){
        return $this->belongsTo('App\Http\Models\Location', 'location_id');
    }


}
