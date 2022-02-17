<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// each of these linksw return the appropriavte views, there are multiple
//ways to load controllers
Route::get('/about', 'App\Http\Controllers\AboutController@about');// shows the about page

// altering web.php so they call controllers isntead of loading views
Route::get('/login', [LoginController::class, 'login']);
Route::get('/register', [RegisterController::class, 'register']);

//Route::get('/register', 'App\Http\Controllers\RegisterController@register');
Route::get('/profile', 'App\Http\Controllers\ProfileController@profile');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
/* adding two more routes to this, 
admin home and user home, this is what amkes it possible for an admin and user to have two sdifferent home pages
*/
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.home'); //admin homepage
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('user.home'); // user homepage