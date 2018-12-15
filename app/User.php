<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Carbon\Carbon;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'first_name', 'last_name', 'gender', 'email', 'phone_number', 'dob', 'role', 'en_level', 'transport', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function age()
    {
        return Carbon::parse($this->attributes['dob'])->age;
    }

    public function getPathFile(){
        $ID = $this -> id;
        $filename = $ID.".jpg";
        $path = 'images/users/'.$filename;
        return $path;

    }

    public function ifFileExist(){
        return file_exists($this->getPathFile());
    }


}
