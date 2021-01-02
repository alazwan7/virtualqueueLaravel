<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::get('/users', function () {
//     return new UsersResource(users::find(1));
// });
Route::get('/users', "App\Http\Controllers\userController@index");
Route::get('/users/{id}', "App\Http\Controllers\userController@show");
Route::post('/users', "App\Http\Controllers\userController@store");
Route::put('/users/{id}', "App\Http\Controllers\userController@update");
Route::post('/login', "App\Http\Controllers\userController@authenticate");

Route::post('/requests', "App\Http\Controllers\RequestsController@store");
// Route::get('/login', "App\Http\Controllers\userController@authenticate");
