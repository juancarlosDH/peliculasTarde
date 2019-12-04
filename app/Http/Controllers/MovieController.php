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

    public function create(Request $request)
    {
        //primero valido los datos
        $reglas = [
            'title' => 'required|string',
            'rating' => 'numeric|between:1,10',
            'length' => 'numeric',
            'awards' => 'integer',
            'release_date' => 'date',
            'genre_id' => 'required',
        ];

        $mensajes = [
            'required' => 'Completa este campo',
            'title.string' => 'El titulo debe ser un texto',
            'numeric' => 'Debe ser un numero',
            'between' => 'Debe de estar entre :min y :max',
            'integer' => 'Debe ser un numero',
            'date' => 'Fecha invalida',
        ];

        $this->validate($request, $reglas, $mensajes);

        //por defecto le dejo vacia la imagen
        $imagen = '';
        //si mandé una imagen la guardo
        if ($request->file('poster')) {
            $imagen = $request->file('poster')->store('public');
            $imagen = basename($imagen);
        }

        //instacio una Movie
        $movie = new Movie;
        //asigno a los atributos de trs maneras distintas
        $movie->title = $request['title'];
        $movie->awards = $request->awards;
        $movie->length = $request->input('length');
        $movie->rating = $request->rating;
        $movie->release_date = $request->release_date;
        $movie->genre_id = $request->genre_id;
        $movie->poster = $imagen;

        //lo guardo en la BD
        $movie->save();

        //redirijo
        return redirect('/movies')
            ->with('status', 'Pelicula creada exitosamente!!!')
            ->with('operation', 'success');
    }

    public function detail($id)
    {
        //buscamos la pelicula por su id
        $movie = Movie::find($id);

        return view('movies/show', compact('movie'));
    }

    public function edit($id)
    {
        //buscamos la pelicula por su id
        $movie = Movie::find($id);

        $genres = Genre::all();

        return view('movies/edit', compact(['movie', 'genres']));
    }

    public function update(Request $request, $id)
    {
        //primero valido los datos
        $reglas = [
            'title' => 'required|string',
            'rating' => 'numeric|between:1,10',
            'length' => 'numeric',
            'awards' => 'integer',
            'release_date' => 'date',
            'genre_id' => 'required',
        ];

        $mensajes = [
            'required' => 'Completa este campo',
            'title.string' => 'El titulo debe ser un texto',
            'numeric' => 'Debe ser un numero',
            'between' => 'Debe de estar entre :min y :max',
            'integer' => 'Debe ser un numero',
            'date' => 'Fecha invalida',
        ];

        $this->validate($request, $reglas, $mensajes);

        //instacio una Movie
        $movie = Movie::find($id);
        //asigno a los atributos de trs maneras distintas
        $movie->title = $request['title'];
        $movie->awards = $request->awards;
        $movie->length = $request->input('length');
        $movie->rating = $request->rating;
        $movie->release_date = $request->release_date;
        $movie->genre_id = $request->genre_id;

        //por defecto le dejo la anterior
        $imagen = $movie->poster;
        //si mandé una imagen la guardo
        if ($request->file('poster')) {
            $imagen = $request->file('poster')->store('public');
            $imagen = basename($imagen);
        }

        $movie->poster = $imagen;

        //lo guardo en la BD
        $movie->save();

        //redirijo
        return redirect('/movies')
            ->with('status', 'Pelicula modificada exitosamente!!!')
            ->with('operation', 'success');
    }

    public function delete($id)
    {
        //buscamos la pelicula por su id
        $movie = Movie::find($id);

        //si tiene imagen la borro
        $image_path = storage_path('app/public/') . $movie->poster;
        if ($movie->poster && file_exists($image_path)) {
            unlink($image_path);
        }
        //elimino los actor_movie
        // TODO: hacerlo

        //elimino de los que es favorito
        $movie->soyFavoritoDe->forEach(function(Actor $actor){
            $actor->favorite_movie_id = null;
            $actor->save();
        });
        
        //la elimino de la bd
        $movie->delete();

        return redirect('/movies')
            ->with('status', 'Pelicula eliminada exitosamente!!!')
            ->with('operation', 'warning');
    }




}
