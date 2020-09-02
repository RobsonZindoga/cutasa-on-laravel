<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable =[
        'id',
        'name',
        'field_of_study',
        'occupation',
        'contact',
        'address',
        'graduation',
        'image_url',
        'email'
    ];
}
