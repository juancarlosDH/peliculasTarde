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
                 <a href="/movies/new" class="btn btn-primary">Nueva</a>
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

         <div class="card-group">

@foreach ($pelis as $peli)

    <div class="card card-peli">
      <img class="fondo-peli" src="images/default.png">
      <div class="card-header">{{ $peli->title }}</div>
      <div class="card-body">
        <p class="card-text">{{ $peli->genre_id }}</p>
        <p class="card-text">Rating: {{  $peli->rating }}</p>
        <p class="card-text">Awards: {{  $peli->awards }}</p>
        <p class="card-text">
          <a class="btn btn-primary" href="/movies/{{$peli->id}}">Ver Mas</a>
          <a class="btn btn-success" href="modificarPelicula.php?id={{  $peli['id'] }}">Editar</a>
          </p>
      </div>
    </div>
@endforeach
          </div>


       </div>
   </article>
</section>


  @endsection
