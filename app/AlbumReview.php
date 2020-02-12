<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlbumReview extends Model
{
    protected $fillable = ['album_id','user_id','review','is_approved','created_at','updated_at','user_name'];

    public function album()
    {
        return $this->belongsTo('App\Album');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
