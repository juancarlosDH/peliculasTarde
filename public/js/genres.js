window.addEventListener('load', function(){
    var genres = [
        {"id":1,"created_at":"2016-07-04 00:00:00","updated_at":null,"name":"Comedia","ranking":1,"active":1},
        {"id":2,"created_at":"2014-07-04 00:00:00","updated_at":null,"name":"Terror","ranking":2,"active":1},
        {"id":3,"created_at":"2013-07-04 00:00:00","updated_at":null,"name":"Drama","ranking":3,"active":1},
        {"id":4,"created_at":"2011-07-04 00:00:00","updated_at":null,"name":"Accion","ranking":4,"active":1},
        {"id":5,"created_at":"2010-07-04 00:00:00","updated_at":null,"name":"Ciencia Ficcion","ranking":5,"active":1},{"id":6,"created_at":"2013-07-04 00:00:00","updated_at":null,"name":"Suspenso","ranking":6,"active":1},
        {"id":7,"created_at":"2005-07-04 00:00:00","updated_at":null,"name":"Animacion","ranking":7,"active":1},
        {"id":8,"created_at":"2003-07-04 00:00:00","updated_at":null,"name":"Aventuras","ranking":8,"active":1},
        {"id":9,"created_at":"2008-07-04 00:00:00","updated_at":null,"name":"Documental","ranking":9,"active":1},
        {"id":10,"created_at":"2013-07-04 00:00:00","updated_at":null,"name":"Infantiles","ranking":10,"active":1},
        {"id":11,"created_at":"2011-07-04 00:00:00","updated_at":null,"name":"Fantasia","ranking":11,"active":1},
        {"id":12,"created_at":"2013-07-04 00:00:00","updated_at":null,"name":"Musical","ranking":12,"active":1}
    ];

    var divGeneros = document.querySelector('div.card-group');

    function cargarGeneros() {
        genres.forEach(function (genre){
            //creo el elemento div
            var divGenero = document.createElement('div');
            //creo el texto del nombre del genero
            var texto = document.createTextNode(genre.name);
            //meter el texto en el div
            divGenero.append(texto);
            //luego meto el div en los generos
            divGeneros.append(divGenero);

        });
    }


    //eventos

    //capturo al boton
    var boton = document.getElementById('mi_boton');

    boton.onclick = function () {
        //necesito obtener al padre para eliminar al hijo
        //var padre = this.parentElement;
        //padre.removeChild(this);
        cargarGeneros();

        this.remove()
    }


    //creo un temporizador de deslogeo

    var temporizador = setTimeout(function(){
        alert('no has hecho nada en el sitio')
    }, 5000)

    boton.addEventListener('click', function () {
        clearTimeout(temporizador);
        alert('Pause el temporizador')
    });

});

/**/







/**/
