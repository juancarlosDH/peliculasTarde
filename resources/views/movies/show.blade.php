@extends('movies_layout')

@section('main')

<div class="row">
<div class="col-md-6 offset-md-3">
  <article class="nuevas" id="peliculas">
      <div class="peliculas">

            <h2>{{$movie->title}}</h2>
            <img src="/storage/{{$movie->poster}}" alt="" width="100%">
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
                  {{$movie->releaseDate()}}
                </div>

                <div class="form-group">
                  <label for="genre_id">Genero:</label>

                  {{ $movie->getGenreName() }}
                </div>

                <div class="form-group">
                  <label for="genre_id">Actores:</label>

                  @forelse($movie->actors as $actor)
                     {{ $actor->first_name }}
                  @empty
                    No hay Actores
                  @endforelse
                </div>

                <div class="">
                    <form class="" action="/movies/{{$movie->id}}" method="post">
                        @csrf
                        @method('delete')
                        <a class="btn btn-secondary" href="/movies/">Volver</a>

                        <a class="btn btn-success" href="/movies/{{$movie->id}}/edit">Editar</a>

                        <button type="submit" class="btn btn-danger" name="button">Eliminar</button>
                    </form>
                </div>

      </div>

  </article>
</div>
</div>

@endsection
