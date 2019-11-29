<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Serie;

class SerieController extends Controller
{

    public function all()
    {
        $data = Serie::all();

        return response()->json($data);
    }


}
