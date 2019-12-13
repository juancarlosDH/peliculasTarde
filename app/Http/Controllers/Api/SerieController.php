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

    public function save(Request $req)
    {
        $datos = $req->json()->all();

        //deberiamos de validar los datos en laravel


        //si esta todo bien, lo guardo usando el Model
        $serie = new Serie();
        $serie->title = $datos['title'];
        $serie->release_date = $datos['release_date'];
        $serie->end_date = $datos['end_date'];
        $serie->save();

        $respuesta = [
            'mensaje' => 'Guardado Exitosamente',
        ];

        return response()->json($respuesta);
    }






}
