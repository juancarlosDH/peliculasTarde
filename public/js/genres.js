window.addEventListener('load', function () {


    //traeme los generos
    fetch('http://localhost:8000/api/genres')
        .then(function (resp) {
            return resp.json();
        })
        .then(function (datos) {
            //deberia de haber capturado al div donde voy a meter los datos
            var divGeneral = document.querySelector('.card-group')
            for (var genre of datos) {
                //crear el div nuevo
                var divNuevo = document.createElement('div');
                //agregar al div que contiene a todo el html la(s) clase(s)
                divNuevo.setAttribute('class', 'card card-peli');
                //colocarle el text que seria el nombre del genero
                divNuevo.innerHTML = `<img class="fondo-peli" src="/images/default.png">
                <div class="card-header">
                    <span class="card-title">${genre.name}</span>
                    <form class="form-add-my-list" action="/my-list/1" method="post">
                        <input type="hidden" name="_token" value="qY2mOcUyGlYJNDKN7orssybIkM6jM4vdrMeOvKC7">              <button type="submit" class="no-button">
                            <img src="/images/heart_no_like.png" class="like">
                        </button>
                    </form>

                </div>
                <div class="card-body">
                    <a class="btn btn-primary" href="/movies/1">Ver Mas</a>
                </div>`;
                //meter ese div nuevo en el div capturado
                divGeneral.append(divNuevo);
            }
        })
        .catch(function (error) {
            console.log(error);
        });
});
