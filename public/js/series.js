var series = [{"id":1,"created_at":null,"updated_at":null,"title":"Game of Thrones","release_date":"2011-01-01 00:00:00","end_date":"2016-03-04 00:00:00","genre_id":11},{"id":2,"created_at":null,"updated_at":null,"title":"Supernatural","release_date":"2005-01-01 00:00:00","end_date":"2016-01-04 00:00:00","genre_id":6},{"id":3,"created_at":null,"updated_at":null,"title":"The Walking Dead","release_date":"2010-01-01 00:00:00","end_date":"2016-01-04 00:00:00","genre_id":2},{"id":4,"created_at":null,"updated_at":null,"title":"Person of Interest","release_date":"2011-01-01 00:00:00","end_date":"2015-01-04 00:00:00","genre_id":4},{"id":5,"created_at":null,"updated_at":null,"title":"The Big Bang Theory","release_date":"2007-01-01 00:00:00","end_date":"2016-01-04 00:00:00","genre_id":1},{"id":6,"created_at":null,"updated_at":null,"title":"Breaking Bad","release_date":"2008-01-01 00:00:00","end_date":"2013-01-04 00:00:00","genre_id":3}];

function cargarSeries(series) {
    //capturo el elemento donde los voy a dibujar
    var divSeries = document.querySelector('.card-group');
    for (serie of series) {
        //creo el elemento li
        var liSerie = document.createElement('div');
        liSerie.setAttribute('class', 'card')
        var textoSerie = document.createTextNode(serie.title);
        liSerie.append(textoSerie);

        //appendeo este li a el elemento capturado
        divSeries.append(liSerie)
    }
}


window.onload = function (){

    ////eventos
    //asigno el evento a ese boton
    var mi_boton = document.getElementById('mi_boton');
    mi_boton.onclick = function (){
        alert('Voy a cargar las Series y desapareceré');
    }

    //agrego otra funcionalidad del evento click evento a ese boton
    mi_boton.addEventListener('click', function () {
        //cargo primero las series llamando a la funcion cargarSeries
        cargarSeries(series)
        //manera uno
            //busco al padre
            //var padre = this.parentElement;
            //el padre elimina al hijo
            //padre.removeChild(this);
        //manera dos
        this.remove();
    });

}

var objeto = {
    nombre : 'tato', email : 'sdfsdfs'
}
function fromObjectToArray(objeto) {
    var miArray = [];
    for (var prop in objeto) {
        //miArray[prop] = objeto.prop  // no sirve por que prop no es la propiedad
        miArray[prop] = objeto[prop]
    }
    return miArray;
}












/**/
