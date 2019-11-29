<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Genre;

class GenreController extends Controller
{

    public function all()
    {
        $data = Genre::all();

        return response()->json($data);
    }


}
