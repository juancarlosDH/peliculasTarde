@extends('movies_layout')

@section('css')
<link rel="stylesheet" href="/css/styles.css">
<script src="/js/series.js"></script>
@endsection

@section('main')

<section class="principal">
   <article class="nuevas" id="peliculas">
       <div class="peliculas">
          <div class="titulo-nav">
               <h3>Series en Digital Movies</h3>
               <div>
             @if(Auth::user() && Auth::user()->admin)
                 <a href="/series/new" class="btn btn-primary">Nueva</a>
             @endif

             <a href="#" id="mi_boton" class="btn btn-primary">Cargar</a>
               </div>
         </div>
         <div class="sub-titulo">
             <div class="ordenamiento">
               <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Titulo</a></li>
                <li class="breadcrumb-item"><a href="">Genero</a></li>
                <li class="breadcrumb-item "><a href="">Rating</a></li>
                <li class="breadcrumb-item active"><a href="">Awards</a></li>
              </ol>
             </div>
             <nav >
             </nav>
         </div>

         <div class="">
             @if (session('status'))
                <div class="alert alert-{{session('operation')}}">
                    {{ session('status') }}
                </div>
            @endif
         </div>

         <div class="card-group series-list">

          </div>


       </div>
   </article>
</section>

<script src="/js/datos.js"></script>











  @endsection
