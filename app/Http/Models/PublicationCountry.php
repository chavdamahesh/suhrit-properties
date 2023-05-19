<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class PublicationCountry extends Model
{
        protected $fillable = [
            'title'
        ];



        public function country(){

            return $this->belongsTo('App\Http\Models\Country');

        }

        public function publications(){

            return $this->hasMany('App\Http\Models\Publication');

        }
}
