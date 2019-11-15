<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MoviesController extends Controller
{
    public function index()
    {
        $pelis = Movie::all();

        return view('listado', compact('pelis'));
    }

    public function detail($id)
    {
        $detalle=Movie::find($id);
        var_dump($detalle);

    }






}
