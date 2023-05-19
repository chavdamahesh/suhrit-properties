<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
        protected $fillable = [
            'title',
            'type_id',
            'pub_file',
            'country_id',
            'is_published',
            'language_code',
            'pub_thumb',
        ];

        public function type()
        {
            return $this->belongsTo('App\Http\Models\PublicationType', 'type_id');
        }

        public function countries()
        {
            return $this->belongsToMany('App\Http\Models\Country');
        }


}
