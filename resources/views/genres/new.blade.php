@extends('movies_layout')

@section('main')

<div class="row">
<div class="col-md-6 offset-md-3">
  <article class="nuevas" id="peliculas">
      <div class="peliculas">

            <h2>Alta de Serie</h2>
            <form method="post" action="" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="title">Titulo</label>
                  <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title')}}">
                  @error('title')
                      {{ $message }}
                  @enderror
                </div>

                <div class="form-group">
                  <label for="release_date">Fecha de Lanzamiento</label>
                  <input type="date" class="form-control" id="release_date" name="release_date"  value="{{old('release_date')}}">
                  @error('release_date')
                      {{ $message }}
                  @enderror
                </div>

                <div class="form-group">
                  <label for="end_date">Fecha de Fin</label>
                  <input type="date" class="form-control" id="end_date" name="end_date"  value="{{old('end_date')}}">
                  @error('end_date')
                      {{ $message }}
                  @enderror
                </div>

                <div class="form-group">
                  <label for="genre_id">Genero</label>
                  <select class="form-control" name="genre_id" id="genre_id">
                    <option value="">Elije uno</option>
                  </select>
                  @error('genre_id')
                      {{ $message }}
                  @enderror
                </div>

                <div class="form-group">
                  <label for="poster">Poster</label>
                  <input type="file" id="poster" name="poster">
                  @error('poster')
                      {{ $message }}
                  @enderror
                </div>

                <a class="btn btn-secondary" href="/movies/">Volver</a>
                <button type="submit" class="btn btn-primary">Guardar</button>
              </form>

      </div>

  </article>
</div>
</div>

<script src="/js/datos.js"></script>
<script src="/js/series.js"></script>
@endsection
