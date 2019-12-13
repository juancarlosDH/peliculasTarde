window.addEventListener('load', function (){
    var boton = document.getElementById('mi_boton');

    //asigno el evento click
    boton.addEventListener('click', function() {
        //uso la llamada asincrona fetch
        fetch('http://localhost:8000/api/series')
            .then(function (resp) {
                return resp.json();
            })
            .then(function (datos) {
                //capturo el div donde voy a imprimir cada serie
                var div = document.querySelector('.series-list');
                //recorro el array de json que me devolvio laravel
                datos.forEach(function (serie){
                    //crear elemento
                    var ele = document.createElement('div');
                    //le coloco la clase que necesita para que se vea bien
                    ele.setAttribute('class', 'card card-peli');
                    //le coloco el HTML entero
                    ele.innerHTML = '<img class="fondo-peli" src="/images/default.png">'+
                    '<div class="card-header">'+
                        '<span class="card-title">' + serie.title + '</span>'+
                        '<form class="form-add-my-list" action="/my-list/' + serie.id + '" method="post">'+
                            '<button type="submit" class="no-button">'+
                                '<img src="/images/heart_no_like.png" class="like">'+
                            '</button>'+
                        '</form>'+
                        '</a>'+
                    '</div>'+
                    '<div class="card-body">'+
                      '<p class="card-text">' + serie.genre_id + '</p>'+
                      '<p class="card-text">Lanzamiento: ' + serie.release_date + '</p>'+
                      '<p class="card-text">Fin: ' + serie.end_date + '</p>'+
                      '<p class="card-text">'+
                        '<a class="btn btn-primary" href="/series/' + serie.id + '">Ver Mas</a>'+
                        '<a class="btn btn-success" href="/series/' + serie.id + '/edit">Editar</a>'+
                        '</p>'+
                    '</div>';
                    //appendeo con js el html en el div
                    div.append(ele);
                });
            })
            .catch(function (error) {
                console.log(error);
            });

    });

});
