<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{

    public function all()
    {
        $data = Movie::all();

        return response()->json($data);
    }


}
