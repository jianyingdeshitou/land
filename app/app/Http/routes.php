<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home.index');
});

// Registration Routes...
Route::get('register', 'Auth\AuthController@getRegister')->name('auth.register');
Route::post('register', 'Auth\AuthController@postRegister');

