<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Serie;

class SerieController extends Controller
{
    public function index()
    {
        return view('series/list');
    }

    public function new()
    {
        return view('series/new');
    }

    public function create(Request $req)
    {
        dd($req->all());
    }


}
