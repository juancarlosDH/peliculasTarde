<?php

Route::get('/', 'MovieController@home');

Route::get('/movies', 'MovieController@index');
Route::get('/movies/search', 'MovieController@search');
Route::get('/movies/new', 'MovieController@new')->middleware(['auth', 'is_admin']);
Route::post('/movies/new', 'MovieController@create')->middleware(['auth', 'is_admin']);
Route::delete('/movies/{id}', 'MovieController@delete')->middleware(['auth', 'is_admin']);

Route::get('/movies/{id}',"MovieController@detail")->middleware(['auth']);
Route::get('/movies/{id}/edit',"MovieController@edit")->middleware(['auth', 'is_admin']);
Route::patch('/movies/{id}', 'MovieController@update')->middleware(['auth', 'is_admin']);

Route::get('/my-list', 'MyListController@index')->middleware('auth');
Route::post('/my-list/{id}', 'MyListController@add')->middleware('auth');

Route::get('/series', 'SerieController@index');
Route::get('/series/new', 'SerieController@new');
Route::post('/series/new', 'SerieController@create');

Route::get('/genres', 'GenreController@index');
Route::get('/genres/new', 'GenreController@new');
Route::post('/genres/new', 'SerieController@create');

Auth::routes();
/*
GET  | login                  | Auth\LoginController@showLoginForm
POST | login                  | Auth\LoginController@login
POST | logout                 | Auth\LoginController@logout
POST | password/email         | Auth\ForgotPasswordController@sendResetLinkEmail
GET  | password/reset         | Auth\ForgotPasswordController@showLinkRequestForm
POST | password/reset         | Auth\ResetPasswordController@reset
GET  | password/reset/{token} | Auth\ResetPasswordController@showResetForm
GET  | register               | Auth\RegisterController@showRegistrationForm
POST | register               | Auth\RegisterController@register
*/

Route::get('/google/login', 'Auth\LoginController@redirectToGoogle');
Route::get('/google/redireccion', 'Auth\LoginController@handleGoogleCallback');

//Route::get('/home', 'HomeController@index')->name('home');






/**/
