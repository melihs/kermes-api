<?php

use Illuminate\Http\Request;

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

Route::group(['prefix' => 'v1'], function (){
    Route::post('register','AuthController@register')->name('auth.register');
    Route::post('login','AuthController@login')->name('auth.login');
    Route::post('logout','AuthController@logout')->name('auth.logout');
});

Route::middleware('auth:api')->prefix('v1')->group(function(){
    Route::resource('users','UserController');
    Route::resource('kermes','KermesController');
});