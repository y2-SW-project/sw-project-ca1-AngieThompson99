<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //// controller manages the display of each view
    public function about(){
        return view('about');
    }
}
