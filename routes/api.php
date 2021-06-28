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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('jadwal', 'App\Http\Controllers\JadwalController@index');
Route::get('jadwal/{id}','App\Http\Controllers\JadwalController@show');
Route::post('jadwal/add','App\Http\Controllers\JadwalController@store');
Route::post('jadwal/edit','App\Http\Controllers\JadwalController@update');
Route::delete('jadwal/delete/{id}','App\Http\Controllers\JadwalController@destroy');
