function obtenerPelis()
{
    fetch('http://localhost:8000/api/movies')
    .then(function (res) {
        return res.json()
    })
    .then(function (data) {
        console.log(data)
    });
}

function obtenerGeneros()
{
    return fetch('http://localhost:8000/api/genres')
    .then(function (res) {
        return res.json()
    })
    .then( (data) => {
        console.log(data)
    });

}

function obtenerSeries()
{
    return fetch('http://localhost:8000/api/series')
    .then(function (res) {
        return res.json()
    })
    .then( (data) => {
        console.log(data)
    });

}
