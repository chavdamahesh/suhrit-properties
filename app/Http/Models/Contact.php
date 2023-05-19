<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    public $table = 'contacts';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'message'
    ];
}
