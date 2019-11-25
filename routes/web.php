<?php

Route::get('/', 'MovieController@home');

Route::get('/movies', 'MovieController@index');
Route::get('/movies/new', 'MovieController@new')->middleware(['auth', 'is_admin']);
Route::post('/movies/new', 'MovieController@create');
Route::delete('/movies/{id}', 'MovieController@delete');

Route::get('/movies/{id}',"MovieController@detail");
Route::get('/movies/{id}/edit',"MovieController@edit");
Route::patch('/movies/{id}', 'MovieController@update');



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

Route::get('/home', 'HomeController@index')->name('home');










/**/
