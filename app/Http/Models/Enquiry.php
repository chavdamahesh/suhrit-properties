<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    public $timestamps = true;
    public $table = 'enquiries';

    protected $fillable = [
        'property_id',
        'type',
        'name',
        'email',
        'phone',
        'content',
        'subject',
        'status'
    ];

    public function property(){
        return $this->belongsTo(Property::class, 'property_id');
    }
}
