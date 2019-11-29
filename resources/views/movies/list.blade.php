@extends('movies_layout')

@section('css')
<link rel="stylesheet" href="/css/styles.css">
@endsection

@section('main')

<section class="principal">
   <article class="nuevas" id="peliculas">
       <div class="peliculas">
          <div class="titulo-nav">
               <h3>Peliculas en Digital Movies</h3>
               <div>
             @if(Auth::user() && Auth::user()->admin)
                 <a href="/movies/new" class="btn btn-primary">Nueva</a>
             @endif
               </div>
         </div>
         <div class="sub-titulo">
             <div class="ordenamiento">
               <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="?orden=title">Titulo</a></li>
                <li class="breadcrumb-item"><a href="?orden=genero">Genero</a></li>
                <li class="breadcrumb-item "><a href="?orden=rating">Rating</a></li>
                <li class="breadcrumb-item active"><a href="?orden=awards">Awards</a></li>
              </ol>
             </div>
             <nav >
                 {{$pelis->links()}}
             </nav>
         </div>

         <div class="">
             @if (session('status'))
                <div class="alert alert-{{session('operation')}}">
                    {{ session('status') }}
                </div>
            @endif
         </div>

         <div class="card-group">

@foreach ($pelis as $peli)

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
      @if(Auth::user() && Auth::user()->admin)
          <a class="btn btn-success" href="/movies/{{$peli->id}}/edit">Editar</a>
      @endif
          </p>
      </div>
    </div>
@endforeach
          </div>


       </div>
   </article>
</section>


  @endsection
