<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    protected $fillable=[
        'id',
        'title',
        'description',
        'category_id',
        'image_url',
        'date'
    ];
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}