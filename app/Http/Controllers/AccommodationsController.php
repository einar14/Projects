<?php

namespace App\Http\Controllers;

use App\Accommodation;
use App\Restaurants;
use App\User;
use \DateTime;

class AccommodationsController extends Controller
{
    public function index()
    {
        $accoms = Accommodation::all()->toArray();


        return view('accommodations', compact('accoms'));
    }




}