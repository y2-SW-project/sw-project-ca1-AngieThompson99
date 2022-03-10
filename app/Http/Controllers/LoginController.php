<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
  public function  login()
  {
      return view('login');
  }
    // a controller contains the logic, they load the correct view of your webpage
    // i am managing the display of each view with customised controllers with the relevant view
}

