<?php

Route::get('/', 'MovieController@home');

Route::get('/movies', 'MovieController@index');
Route::get('/movies/new', 'MovieController@new');
Route::post('/movies/new', 'MovieController@create');
Route::delete('/movies/{id}', 'MovieController@delete');

Route::get('/movies/{id}',"MovieController@detail");
Route::get('/movies/{id}/edit',"MovieController@edit");
Route::patch('/movies/{id}', 'MovieController@update');










/**/
