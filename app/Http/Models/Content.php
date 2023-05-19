<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Content extends Model implements TranslatableContract
{
    use Translatable;
    
    protected $table = 'content';

    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';

    public $translatedAttributes = [
        'title',
    ];

    protected $fillable = [
        'content_key',
        'title',
    ];
}
