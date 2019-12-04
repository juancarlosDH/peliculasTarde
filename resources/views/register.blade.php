@extends('movies_layout')

@section('main')
<script type="text/javascript" src="/js/validation-register.js"></script>
 <div class="row">
    <div class="col-md-6 offset-md-3">
      <article class="nuevas" id="peliculas">
          <div class="peliculas">

                <h2>Unirme a Digital Movies</h2>
                <form method="post" id="form-register" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" aria-describedby="nameHelp" placeholder="Tu Nombre" name="name"
                         value="{{ old('name')}}">
                      <div class="invalid-feedback">
                          @error('name'){{$message}}@enderror
                      </div>

                    </div>
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="emailHelp" placeholder="Tu Email" name="email"
                          value="{{ old('email')}}">
                       <div class="invalid-feedback">@error('email')
                         {{$message}}
                      @enderror</div>
                    </div>
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Tu Password" name="password">
                      <div class="invalid-feedback">@error('password')
                          {{$message}}</div>
                      @enderror</div>
                    </div>
                    <div class="form-group">
                      <label for="password_confirmation">Confirmar Password</label>
                      <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirmacion del Password">
                      <div class="invalid-feedback">
                          @error('password_confirmation'){{$message}}@enderror
                      </div>
                    </div>

                    <div class="custom-file">
                      <input type="file" class="custom-file-input @error('avatar') is-invalid @enderror" id="avatar" name="avatar">
                      <label class="custom-file-label" for="avatar">Selecciona para un Avatar</label>
                      <div class="invalid-feedback">@error('avatar')
                          {{$message}}
                      @enderror</div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Unirme</button>
                    </div>
                  </form>

          </div>

      </article>
  </div>
</div>
  @endsection
