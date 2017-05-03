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
use App\Livre;

Route::get('/', function () {
    return view('welcome');
    $livre= Livre::all();
});

Auth::routes();

Route::get('/welcome', 'HomeController@index');

Route::get('profil', function () {
    return view('contenu.profil');
});
Route::get('template_miniature', function () {
    return view('contenu.template_miniature');
});
Route::get('admin', function () {
    return view('contenu.admin');
});


