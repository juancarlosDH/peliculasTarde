<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/movies', 'Api\MovieController@all');
Route::get('/genres', 'Api\GenreController@all');
Route::get('/series', 'Api\SerieController@all');
Route::get('/actors', 'Api\ActorController@all');
