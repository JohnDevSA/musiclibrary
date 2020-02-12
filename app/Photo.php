<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{


    protected  $fillable = ['file'];

    protected $uploads = '/images/';

    protected $no_image= '/images/No_image_available.svg';


    public static function  getUploadDir()
    {
        return (new self)->uploads;
    }

    public static function getImageFullPath($file_name)
    {
        return   (strlen($file_name) < 1) ? (new self)->no_image : (new self)->uploads.$file_name;
    }


}
