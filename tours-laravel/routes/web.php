<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TourController;

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

//Start tours route
Route::get('/index','App\Http\Controllers\TourController@index');

Route::get('/about','App\Http\Controllers\TourController@about');

Route::get('/places/{id}','App\Http\Controllers\TourController@places');

Route::get('/details/{id}','App\Http\Controllers\TourController@details');

Route::get('/checkout/{id}','App\Http\Controllers\TourController@checkout');
Route::post('/checkout/{id}','App\Http\Controllers\TourController@postCheckout');

Route::get('/login','App\Http\Controllers\TourController@login');


