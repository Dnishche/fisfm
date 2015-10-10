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

    return view('home');
});

Route::get('/news/', 'NewsController@index');

Route::get('/home_main-slider/', function () {

    return view('home');
});

Route::get('/home_news/', function () {
    return view('home');
});

