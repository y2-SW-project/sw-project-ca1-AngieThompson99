<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //// controller manages the display of each view
    public function profile(){
        return view('profile');
    }
}
