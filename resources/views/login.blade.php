@extends('movies_layout')

@section('main')
<script type="text/javascript" src="/js/validacion-login.js"></script>

 <div class="row">
    <div class="col-md-6 offset-md-3">
      <article class="nuevas" id="peliculas">
          <div class="peliculas">
            <h2>Login a Digital Movies</h2>
            <form method="post" id="login-form">
                @csrf
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Tu Email" name="email" value="{{ old('email') }}">
                  <span class="invalid-feedback" role="alert">
                      <strong>@error('email') {{ $message }} @enderror</strong>
                  </span>
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Tu Password" name="password">
                  <span class="invalid-feedback" role="alert">
                      <strong>@error('password') {{ $message }} @enderror</strong>
                  </span>
                </div>
                <div class="form-group">
                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label for="remember">Mantenerme logueado</label>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Login</button>

                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">¿Olvidaste Contraseña?</a>
                    @endif
                </div>

              </form>

              @include('partials/buttons_login')
          </div>

      </article>
  </div>
</div>
  @endsection
