<?php

namespace App\Http\Controllers; // checking controller exists

use Illuminate\Http\Request;

class LoginController extends Controller
{
    // login function that wiull login users 
    // controller manages the display of each view
    public function login(){
        return view('login');
    }

}
