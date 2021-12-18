<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CRUDController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//start crud route
Route::get('/view-tours', [CRUDController::class, 'index']);
Route::get('/tours', [CRUDController::class, 'index']);
Route::post('/add-tour', [CRUDController::class, 'store']);
Route::get('/edit-tour/{id}', [CRUDController::class, 'edit']);
Route::put('/update-tour/{id}', [CRUDController::class, 'update']);
Route::delete('/delete-tour/{id}', [CRUDController::class, 'destroy']);
//end crud route
