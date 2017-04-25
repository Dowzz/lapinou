<?php

//Pages

Route::get('/', function () {
    return view('layouts.accueil');
});
Route::get('accueil', function () {
    return view('layouts.accueil');
});
Route::get('home', function () {
    return view('contenu.home');
});
Route::get('profil', function () {
    return view('contenu.profil');
});
Route::get('classique', function () {
    return view('contenu.classique');
});
Route::get('aventure', function () {
    return view('contenu.aventure');
});

//Fin Pages

//Login et register

Route::post('/register_action','RegisterController@store');

Route::post('/login_check','RegisterController@login');
Route::post('/logout', 'RegisterController@logout');

//fin Login et Register

//Password reset

Route::get('authi/reset/{token?}','PasswordController@showResetForm');
Route::post('authi/email','PasswordController@sendResetlinkEmail');
Route::post('/reset','PasswordController@reset');

//Fin Password Reset