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

/* ----  routes principales  ---- */

Auth::routes();

Route::get('/welcome', 'HomeController@index');

Route::get('/',function(){
	return view('welcome');
});

Route::get('style', function(){
	return view('style');
});

Route::get('error', function(){
	return view('error');
});

/* ----  routes ajax contenu ---- */

Route::get('contenu/detail', function()
{
	return view('contenu.detail');
});
Route::get('contenu/profil', function () {
    return view('contenu.profil');
});
Route::get('contenu/admin', function () {
    return view('contenu.admin');
});
Route::get('contenu/accueil', function () {
    return view('contenu.accueil');
});
Route::get('search', function() {
	return view('contenu.search');
});

/* ----  route Catégorie  ---- */

Route::get('contenu.{categorie?}', function($categorie = null)
{
	if ($categorie) return View::make('contenu.template_miniature')->with('categorie', $categorie); 
	else return view('/welcome');
});

/* ----  routes methodes  ---- */

Route::post('insertodo', 'TodoController@store');
Route::post('deleteall', 'TodoController@deleteall');
Route::post('deleteid', 'TodoController@deleteid');
Route::post('notation', 'Bookcontrol@notation');
Route::post('/livrestore', 'Bookcontrol@livrestore');
Route::post('/addcomment', 'Commentcontroller@addcomment');
Route::post('/majuser', 'usercontrol@majuser');
Route::post('/majtodo', 'Todocontroller@majtodo');
Route::post('/delaccount', 'usercontrol@delaccount');
Route::post('/ajoutcontact', 'contactcontrol@storecontact');
Route::get('/deletecontact', 'contactcontrol@deletecontact');
Route::post('/addpanier', 'panierctrl@addpanier');

/* ----  routes mentions  ---- */

Route::get('politique', function()
{
	return view('mentions.politique');
});
Route::get('cgv', function()
{
	return view('mentions.cgv');
});
Route::get('cookie', function()
{
	return view('mentions.cookie');
});



