/*
var nombre = 'Tato';
var edad = 25;
var esAlumno = false;
var hobbies = [
    'programar', 'surf', 'cocinar'
];
var quiereCafe = '';
*/

var usuario = {
    nombre : 'Tato',
    edad : 25,
    esAlumno : false,
    hobbies : [
        'programar', 'surf', 'cocinar'
    ],
    quiereCafe : null,
    agregarHobbie : function (hobby) {
        this.hobbies.push(hobby)
    }
};

usuario.agregarHobbie('correr');

usuario.email = 'tato@tato.com';

usuario.amigos = [];

usuario.amigos.push('Cosa');

//console.log(usuario);









/**/
