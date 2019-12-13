window.addEventListener('load', function(){
    //capturo el form
    var form = document.querySelector('#form-serie-new');

    form.onsubmit = function (event) {
        event.preventDefault();

        fetch('http://localhost:8000/api/series/new',
            {
                method : 'POST',
                body : JSON.stringify({
                    title : document.querySelector('input[name="title"]').value,
                    release_date : document.querySelector('input[name="release_date"]').value,
                    end_date : document.querySelector('input[name="end_date"]').value
                }),
                headers: {
                    'Content-Type': 'application/json'
                  }
            })
        .then(function (resp) {
            return resp.json();
        })
        .then(function (datos){
            console.log(datos);
        })
        .catch(function (error){
            console.log(error);
        });
    };


})
