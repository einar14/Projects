<?php

namespace App\Http\Controllers;

use App\User;
use \DateTime;

class GuidesController extends Controller
{
    public function profile()
    {
        $users = User::where('role', 'guide')->get();

        return view('guides', compact('users'));
    }
}