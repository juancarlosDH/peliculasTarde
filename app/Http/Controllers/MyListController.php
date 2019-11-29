<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MyListController extends Controller
{
    public function index()
    {
        $pelis = \Auth::user()->myList;
        dd($pelis);

        return view('my-list/list', compact('pelis'));
    }

    public function add(int $movie_id, Request $request)
    {
        //busco al user logeado
        $user = \Auth::user();

        //verifico que no este la peli en la lista
        $movie = $user->myList->first(function (Movie $movie) use ($movie_id) {
            return $movie_id == $movie->id;
        });

        // si esta la peli le mando un mensaje
        if ($movie) {
            return redirect('/movies')
                ->with('status', 'Pelicula ya está en Mi Lista!!!')
                ->with('operation', 'danger');
        }

        //uso la relacion myList para agregar la movie a la lista.
        $user->myList()->attach($movie_id);

        //redirijo
        return redirect('/movies')
            ->with('status', 'Pelicula agregada exitosamente a Mi Lista!!!')
            ->with('operation', 'success');
    }


}
