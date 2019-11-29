var acheUno = document.querySelector('h1');
/*acheUno.style.color = 'rgb(255,0,0)';
acheUno.style.fontSize = '30px';
acheUno.style.textDecoration = 'underline';*/

acheUno.setAttribute('class', 'titulo-principal');
acheUno.setAttribute('id', 'Titulo');

//var elesI = document.querySelectorAll('li');
var elesI = document.querySelectorAll('.menu-der li')
elesI[1].style.color = 'blue';

console.log(elesI);
