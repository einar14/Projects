<?php

namespace App\Http\Controllers;

use App\Restaurants;
use App\User;
use \DateTime;

class RestaurantsController extends Controller
{
    public function index()
    {
        $rests = Restaurants::all()->toArray();


        return view('restaurants', compact('rests'));
    }




}