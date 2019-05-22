<?php

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
//    return view('welcome');

$user = \App\User::first();
$kermes = \App\Kermes::first();

//$user->kermeses()->attach($kermes);
//$user->kermeses()->sync([2]);
//$user->kermeses()->syncWithoutDetaching([5]);
//$user->kermeses()->detach($kermes);
//dd($kermes);
});

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
//Route::post('/refresh', 'HomeController@refresh')->name('refresh');
