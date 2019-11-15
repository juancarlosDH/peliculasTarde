@extends('movies_layout')

@section('main')

<div class="row">
<div class="col-md-6 offset-md-3">
  <article class="nuevas" id="peliculas">
      <div class="peliculas">

            <h2>La Pelicula</h2>
                <div class="form-group">
                  <label for="title">Titulo:</label>
                  {{$movie->title}}
                </div>
                <div class="form-group">
                  <label for="rating">Rating:</label>
                  {{$movie->rating}}
                </div>
                <div class="form-group">
                  <label for="awards">Premios:</label>
                  {{$movie->awards}}
                </div>
                <div class="form-group">
                  <label for="length">Duración:</label>
                  {{$movie->length}}
                </div>

                <div class="form-group">
                  <label for="release_date">Fecha de Lanzamiento:</label>
                  {{$movie->release_date}}
                </div>

                <div class="form-group">
                  <label for="genre_id">Genero:</label>

                  {{$movie->getGenreName()}}
                </div>


      </div>

  </article>
</div>
</div>

@endsection
