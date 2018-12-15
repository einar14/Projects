<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurants extends Model
{
    protected $fillable = [
        'name', 'site', 'average_s', 'description', 'lat', 'lng'
    ];

    public static function getPathFile($ID){
        $filename = $ID.".jpg";
        $path = 'images/restaurants/'.$filename;
        return $path;
    }
}
