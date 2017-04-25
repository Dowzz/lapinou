<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('layouts.accueil');
});
Route::get('accueil', function () {
    return view('layouts.accueil');
});
Route::get('home', function () {
    return view('contenu.home');
});
Route::get('classique', function () {
    return view('contenu.classique');
});
Route::get('aventure', function () {
    return view('contenu.aventure');
});

Route::post('/register_action','RegisterController@store');

Route::post('/login_check','RegisterController@login');
Route::post('/logout', 'RegisterController@logout');


Route::get('/forgot-password', 'ForgotPasswordController@ForgotPassword');
Route::post('/forgot-password', 'ForgotPasswordController@postForgotPassword');


//Route::get('{n}', function($n) { return view ($n) ; });
