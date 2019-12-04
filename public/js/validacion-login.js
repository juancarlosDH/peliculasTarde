window.onload = function() {
    //Capturo el formulario
    var formulario = document.querySelector('#login-form');
    //agregar el evento onSubmit al formulario
    formulario.onsubmit = function(event) {
        //validar los campos
        //console.log(formulario.elements);
        for(var elemento of formulario.elements) {
            //solo valido los campos que necesito
            if ( elemento.name == 'email' || elemento.name == 'password') {
                //ahora si valido cada campo
                if (elemento.value == '') {
                    //si hay errores lo muestro en el html (formulario)
                    var strong = elemento.parentElement.querySelector('span.invalid-feedback strong');
                    elemento.classList.toggle('is-invalid');
                    strong.innerHTML = 'El campo esta vacio';
                    event.preventDefault();
                } else{
                    elemento.classList.toggle('is-invalid');
                }
            }
        }
    }








/**/

}
