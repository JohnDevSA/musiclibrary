<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{

    protected  $guarded = ['_token'];

    public function reviews()
    {
        return $this->hasMany('App\Reviews');
    }

    public  function genre()
    {
        return $this->belongsTo('App\Genre');
    }


    public function photo()
    {
        return $this->belongsTo('App\Photo');
    }
}
