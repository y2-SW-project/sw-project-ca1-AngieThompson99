<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //// controller manages the display of each view
    public function register(){
        return view('register');
    }
}
