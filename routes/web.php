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
    return view('welcome');
});


Auth::routes();

Route::get('/welcome', 'HomeController@index');
Route::get('profil', function () {
    return view('contenu.profil');
});
Route::get('template_miniature', function () {
    return view('contenu.template_miniature');
});

