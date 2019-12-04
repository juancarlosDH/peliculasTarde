window.onload = function () {

    var boton = document.querySelector('#mi_boton');

    boton.onclick = function () {
        //hago la peticion al servidor usando el endpoint
        fetch('http://localhost:8000/api/series')
            .then(function(respuesta) {
                return respuesta.json();
            }).then(function(datos) {
                //capturo el div donde voy a pintar todo
                var divSeries = document.querySelector('div.card-group');
                //ahora si voy a pintar todo con js
                    //recorro al array de datos
                    datos.forEach(function(serie) {
                        //creo un div
                        var div = document.createElement('div');
                        //le pongo el texto
                        div.innerHTML = serie.title;
                        //lo appendeo a divSeries
                        divSeries.append(div);
                    });
            }).catch(function (error){
                console.log(error);
                alert('servidor en mantenimiento')
            });
    }







/**/
}
