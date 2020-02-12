<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public function album()
    {
        return $this->belongsTo('App\Album');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
