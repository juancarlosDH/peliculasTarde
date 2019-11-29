<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Actor;

class ActorController extends Controller
{

    public function all()
    {
        $data = Actor::all();

        return response()->json($data);
    }


}
