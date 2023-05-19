<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Block extends Model implements TranslatableContract
{
    use Translatable;
    
    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';

    public $translatedAttributes = [
        'title',
        'content',
        'summary', 
    ];

    protected $fillable = [
        'block_key',
        'title',
    ];
}
