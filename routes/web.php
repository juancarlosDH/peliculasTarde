<?php

Route::get('/', 'MovieController@home');

Route::get('/movies', 'MovieController@index');
Route::get('/movies/new', 'MovieController@new');
Route::post('/movies/new', 'MovieController@create');

Route::get('/movies/{id}',"MovieController@detail");










/**/
