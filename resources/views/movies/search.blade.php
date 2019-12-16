@extends('movies_layout')

@section('css')
<link rel="stylesheet" href="/css/styles.css">
@endsection

@section('main')

<section class="principal">
   <article class="nuevas" id="peliculas">
       <div class="peliculas">
          <div class="titulo-nav">
               <h3>Buscador de Digital Movies</h3>
         </div>

         <form class="" action="" method="get">
             <div class="sub-titulo row">
                 <div class="col-3">
                     <label for="title">Titulo</label>
                     <input type="text" class="form-control" name="title" value="{{$_GET['title']}}">
                 </div>
                 <div class="col-3">
                     <label for="title">Genero</label>
                     <select class="form-control" name="genre_id">
                         <option value="">Seleccione</option>
                     @foreach ($genres as $genero)
                         <option value="{{ $genero['id']}}"
                            @if($_GET['genre_id'] == $genero['id']) selected @endif
                         >{{$genero['name']}}</option>
                     @endforeach
                     </select>
                 </div>
                 <div class="col-3">
                     <button class="btn btn-primary" type="submit">Buscar</button>
                 </div>
                 <div class="col-3">
                 </div>
             </div>

         </form>

         <div class="card-group">

@foreach ($movies as $peli)

    <div class="card card-peli">
      <img class="fondo-peli" src="/images/default.png">
      <div class="card-header">
          <span class="card-title">{{ $peli->title }}</span>
          <form class="form-add-my-list" action="/my-list/{{$peli->id}}" method="post">
              @csrf
              <button type="submit" class="no-button">
                  <img src="/images/heart_no_like.png" class="like">
              </button>
          </form>
          </a>
      </div>
      <div class="card-body">
        <p class="card-text">{{ $peli->getGenreName() }}</p>
        <p class="card-text">Rating: {{  $peli->rating }}</p>
        <p class="card-text">Awards: {{  $peli->awards }}</p>
        <p class="card-text">
          <a class="btn btn-primary" href="/movies/{{$peli->id}}">Ver Mas</a>
        </p>
      </div>
    </div>
@endforeach
          </div>

       </div>
   </article>
</section>


  @endsection
