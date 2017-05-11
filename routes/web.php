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



Route::get('/{categorie?}', function($categorie = null)
{
	if ($categorie) return View::make('contenu.template_miniature')->with('categorie', $categorie); 
	else return view('welcome');
});

Route::get('contenu/detail', function()
{
	return view('contenu.detail');
});

Auth::routes();

Route::get('/welcome', 'HomeController@index');

Route::get('contenu/profil', function () {
    return view('contenu.profil');
});

Route::get('contenu/admin', function () {
    return view('contenu.admin');
});
Route::get('contenu/accueil', function () {
    return view('contenu.accueil');
});
Route::post('insertodo', 'TodoController@store');
Route::post('deleteall', 'TodoController@deleteall');
Route::post('deleteid', 'TodoController@deleteid');
Route::post('notation', 'Bookcontrol@notation');




