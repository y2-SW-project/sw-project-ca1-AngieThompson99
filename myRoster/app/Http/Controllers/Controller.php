<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController


{
        // a controller contains the logic, they load the correct view of your webpage
    // i am managing the display of each view with customised controllers with the relevant view
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
