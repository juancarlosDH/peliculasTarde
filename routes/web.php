<?php

Route::get('/', function () {
    $user = 'JC';
    $email = 'juan@juan.com';
    //$datos = compact('user', 'email');
    //$datos = compact(['user', 'email']);
    //return view('index', $datos);

    //return view('index')->with('usuarito', $user)->with('mail', $email);
    return view('index')->with(['usuarito' => $user , 'mail' => $email]);
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/movies', function () {
    $pelis = ['Avatar', 'Up', 'It', 'ET'];

    return view('listado', compact('pelis'));
});

Route::get('/movie/{id?}', function ($id='') {
    return $id;
});










/**/
