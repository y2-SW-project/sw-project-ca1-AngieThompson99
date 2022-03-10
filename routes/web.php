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

// creating more routes, more pages and their titles

Route::get('/', function () {
    return view('welcome');
});
Route::get('about', 'App\Http\Controllers\AboutController@about');

Route::get('/login', [LoginController::class, 'login']);

Route::get('/register', function () {
    return view('register');
});
Route::get('/myRoster', function () {
    return view('myRoster');
});
