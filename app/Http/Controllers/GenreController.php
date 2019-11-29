<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Serie;

class GenreController extends Controller
{
    public function index()
    {
        return view('genres/list');
    }

    public function new()
    {
        return view('genres/new');
    }

    public function create(Request $req)
    {
        dd($req->all());
    }


}
