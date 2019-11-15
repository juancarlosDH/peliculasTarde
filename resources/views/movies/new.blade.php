@extends('movies_layout')

@section('main')

<div class="row">
<div class="col-md-6 offset-md-3">
  <article class="nuevas" id="peliculas">
      <div class="peliculas">

            <h2>Alta de Pelicula</h2>
            <form method="post">
                @csrf
                <div class="form-group">
                  <label for="title">Titulo</label>
                  <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="form-group">
                  <label for="rating">Rating</label>
                  <input type="text" class="form-control " id="rating" name="rating">
                  <div class="invalid-feedback"></div>
                </div>
                <div class="form-group">
                  <label for="awards">Premios</label>
                  <input type="text" class="form-control" id="awards" name="awards">
                </div>
                <div class="form-group">
                  <label for="length">Duración</label>
                  <input type="password" class="form-control" id="length" name="length">
                </div>

                <div class="form-group">
                  <label for="release_date">Fecha de Lanzamiento</label>
                  <input type="password" class="form-control" id="release_date" name="release_date">
                </div>

                <div class="form-group">
                  <label for="genre_id">Genero</label>
                  <select class="form-control" name="genre_id" id="genre_id">
                    <option value="">Elije uno</option>
                @foreach ($genres as $genre)
                    <option value="{{$genre->id}}">{{$genre->name}}</option>
                @endforeach
                  </select>
                </div>

                <button type="submit" class="btn btn-primary">Guardar</button>
              </form>

      </div>

  </article>
</div>
</div>

@endsection
