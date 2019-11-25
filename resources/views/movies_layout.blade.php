<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Digital Movies</title>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:200" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/digital_movies.css">
    <link rel="stylesheet" href="/css/peliculas.css">

    @yield('css')

</head>
<body>

  <div class="container">

      <header>
        <!-- Menu hamburguesa en base64 -->
        <label for="menu-check" id="menu-toggle">
          <img class="img-menu" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPUAAADNCAMAAABXRsaXAAAAaVBMVEUAAAD////4+PjOzs7u7u7R0dH09PSBgYFGRka7u7taWlq6urp+fn5xcXGEhIT8/Pzc3Nw4ODjl5eUxMTFUVFQgICBgYGDHx8dnZ2ctLS2JiYlBQUEoKChERESUlJTDw8NMTEwUFBRtbW2QILMFAAADxUlEQVR4nO2d6ZKqQAxGbRDcUFER3MZl3v8h70w59gbo/UNSlS/nCb5TMwWSpNMjg8iIOwALao1D2zpfFOeRHM7FIv9o3VTcMQegur21zo7cAQfikvZbL7nDDch3j/X4wZ1sUB7jLustd6zB2batx9yZCBi3rPfckQh4xNaSH2SO79A6485DRBpY77jjEHHxrRvuNGQ0nvWcOwwZlbNOuLMQklvrBXcUQhbWesIdhZDCWk+5oxByttbcSUhRaxzUGgdrfedOQsjdWp+4oxCystY37iiEzKz1mjsKIWv3zXXgzkJG7X1popRSRqPMr6V8cach4hxUkEruOESUYY0U4+W1iirDZsOdiICdia0RqkhJy9rk3JkGx7X3vJ7mWtKIQptNYrqsjblyJxuQky8azipsJc5n/FJtTb/1z4u74A44AMsysuyYvEqvBzmvsc3hmrYVdd4MB7XGQa1xUGsc1BoHtcZBrXFQaxzUGge1xkGtcVBrHNQaB7XGQa1xUGsc1BoHtcZBrXFQaxza1uvbqZKzG+hRnW7rj9aZxOM+dTxeGFqXUoelN2W/tcTJ2RdFj3UudaXbk0veZS1/6VXHpi/5xz7+dqUE1hfuSARcYmvJDzLHMrRGObGYBdZyjjy8Z+dbp9xpyPA3fdXcYciYO2uEM5ovEms9445CiNv0teKOQsjEWt+5oxDyZa25k5Ci1jioNQ6Qz/Ap+Psa6bcZ5qYv9zsc85sL6Ps6RaylbLRuhlIjfbV9bD1cdrvnSaseDtr7AOhzdW76ymVff3Hs7Gka2Zvy+/rXvy8wqRs6z29mFYzQuZRDFll2TF41p7mcC5z28/+ZQcJArXFQaxzUGge1xkGtcVBrHNQaB7XGQa1xUGsc1BoHtcZBrXFQaxzUGge1xkGtcVBrHNQaB7X+I73WcuZod/W1+WxdLrlzDsCHu1O3d+6AA3F/Mz0r+Zr3vjuRE9nHm7rvv5Z/8KPjBATCzpT2vfay/72f7GJrjCPYk9Aa5cRiGVhL3cgZE5xOzbjTkOGfRJZ4sKeb2lkjbRhYW+sbdxRC3DYJjNfWk5W1vnNHIcRtieFOQopa46DWOFjrKXcSQs7WWvJmgZjCWiNt+nJbWBGqRy+8TV9z7ixkVN6XZsMdhgx/k7aR09h6zzGoIKEUU6JNXxKbem2i2xCMkbMipZ+9ia3lr7zyWj6uz7XlzjQ4HTfa/Py1Zf+T711zL+xfS36kLX3RcFYhk/rePoZbr+K5lEbij9N5PJDTnkFKZhNJ39vTySJpOeq8GQ5qjcM/Ek9sNuAF0BMAAAAASUVORK5CYII=" alt="">
        </label>

        <a href="/" class="logo"><img class="" src="/images/dm_logo.png" alt=""></a>

        <input type="checkbox" id="menu-check">

        <nav class="navigation">
          <ul class="izquierdos navigation-ul">
            <a href="#"><li>Recientes</li></a>
            <a href="/movies"><li>Películas</li></a>
            <a href="#"><li>Series</li></a>
          </ul>
          <ul class="derechos navigation-ul">
            <a href="/search"><li>Buscar</li></a>
        @auth
            <a href="#"><li>Mi Lista</li></a>
        @else
            <a href="/login"><li>Login</li></a>
            <a href="/register"><li>Registro</li></a>
        @endauth
          </ul>
        </nav>
      </header>

      <section class="principal">
          @yield('main')
      </section>

  </div>

</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>
