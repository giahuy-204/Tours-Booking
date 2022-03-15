<?php

use Illuminate\Support\Facades\Route;
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

//Start tours booking route
Route::get('/index','App\Http\Controllers\TourController@index')->name('index');

Route::get('/about','App\Http\Controllers\TourController@about');

Route::get('/places/{id}','App\Http\Controllers\TourController@places');

Route::get('/details/{id}','App\Http\Controllers\TourController@details')->name('details');

Route::get('/checkout/{id}','App\Http\Controllers\TourController@checkout');
Route::post('/checkout/{id}','App\Http\Controllers\TourController@postCheckout');

Route::get('/bill_details','App\Http\Controllers\TourController@viewBill')->name('bill_details');

Route::get('/register','App\Http\Controllers\UserController@register');
Route::post('/register','App\Http\Controllers\UserController@postRegister');

Route::get('/login','App\Http\Controllers\UserController@login');
Route::post('/login','App\Http\Controllers\UserController@postLogin');

Route::get('/logout','App\Http\Controllers\UserController@logout');
//End 

//Start admin management tours route
Route::get('/admin-index','App\Http\Controllers\AdminController@index');
Route::get('/admin-bills','App\Http\Controllers\AdminController@bills');
Route::get('/admin-tours','App\Http\Controllers\AdminController@tours');
Route::get('/admin-types','App\Http\Controllers\AdminController@types');

//manage for tours table
Route::get('/admin-addtour','App\Http\Controllers\AdminController@addTour');
Route::post('/admin-addtour','App\Http\Controllers\AdminController@postAddTour');
Route::get('/admin-edittour/{id}','App\Http\Controllers\AdminController@editTour');
Route::post('/admin-edittour/{id}','App\Http\Controllers\AdminController@postEditTour');
Route::get('/admin-deletetour/{id}','App\Http\Controllers\AdminController@deleteTour');

//manage for bills table
Route::get('/admin-deletebill/{id}','App\Http\Controllers\AdminController@deleteBill');

//manage for types table
Route::get('/admin-addtype','App\Http\Controllers\AdminController@addType');
Route::post('/admin-addtype','App\Http\Controllers\AdminController@postAddType');
Route::get('/admin-edittype/{id}','App\Http\Controllers\AdminController@editType');
Route::post('/admin-edittype/{id}','App\Http\Controllers\AdminController@postEditType');
Route::get('/admin-deletetype/{id}','App\Http\Controllers\AdminController@deleteType');
