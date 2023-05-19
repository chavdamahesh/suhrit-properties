<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class BlockTranslation extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'locale', 
        'block_id', 
        'title', 
        'content', 
        'summary'
    ];
}
