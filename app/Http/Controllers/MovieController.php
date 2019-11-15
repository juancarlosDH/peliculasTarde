<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Genre;

class MovieController extends Controller
{
    public function home()
    {
        return view('movies/index');
    }

    public function index()
    {
        $pelis = Movie::paginate(6);

        return view('movies/list', compact('pelis'));
    }

    public function new()
    {
        $genres = Genre::all();
        return view('movies/new', compact('genres'));
    }

    public function create()
    {
        dd($_POST);
    }

    public function detail($id)
    {
        $movie = Movie::find($id);

        return view('movies/show', compact('movie'));
    }






}
