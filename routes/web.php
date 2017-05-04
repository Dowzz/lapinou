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

Route::get('{id?}', function($id)
{
	return View::make('detail/')->with('id', $id); 

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


