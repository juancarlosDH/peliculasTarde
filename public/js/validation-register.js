function validateImage(element) {
    //saco la extension del atributo name, separando por el punto y obteniendo el ultimo elemento de ese array
    var ext = element.name.split('.').pop().toLowerCase();
    //valido que esas extensiones sean imagenes
    if (ext != 'png' || ext != 'jpg' || ext != 'jpeg') {
        return false;
    }
    return true;
}

function showError(element, error){
    element.classList.add('is-invalid');
    var divError = element.parentElement.querySelector('div.invalid-feedback');
    divError.innerText = error;
}

function hideError(element){
    element.classList.remove('is-invalid');
    var divError = element.parentElement.querySelector('div.invalid-feedback');
    divError.innerText = '';
}

window.onload = function (){

    var regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,6})+$/;
    var passw = /^\w{8,10}$/;

    var form = document.getElementById('form-register');

    form.onsubmit = function (event) {
        for(var element of form.elements) {
            if (element.type == 'hidden' || element.type == 'submit') {
                continue;
            }
            //ocultos los errores si los hay
            hideError(element);
            //valido el archivo por separado
            if (element.type == 'file') {
                if (element.files.length > 0 && validateImage(element.files[0])) {
                    showError(element, 'Imagen invalida');
                }
            }
            //deberia de validar los elementos que no son file
            if (element.value.trim() == '' && element.type != 'file') {
                showError(element, 'Completa el campo');
                event.preventDefault();
            } else {
                if (element.name == 'name' && element.value.trim().length < 2) {
                    showError(element, 'Al menos dos letras');
                    event.preventDefault();
                }
                if (element.name == 'email' && !regexEmail.test(element.value.trim())) {
                    showError(element, 'Email invalido');
                    event.preventDefault();
                }
                if (element.name == 'password') {
                    var password = element.value.trim();
                    if(!passw.test(password)) {
                        showError(element, 'Password invalido');
                        event.preventDefault();
                    }
                }
                if (element.name == 'password_confirmation' && password != element.value.trim()) {
                    showError(element, 'Passwords no coinciden');
                    event.preventDefault();
                }
            }
        }
    }



/**/

}
