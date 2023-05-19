<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
	const UPDATED_AT = null;
	const CREATED_AT = null;
	
    protected $fillable = [
        'id',
		'id_properties',
		'image',
		'user_id',
		'image_dir',
		'thumb_image',
		'sort_order'
    ];
}