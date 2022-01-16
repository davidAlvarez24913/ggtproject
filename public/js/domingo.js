
var contenedor = document.querySelector('.pregunta7-1-a');
var lista = contenedor.querySelectorAll('input[type="checkbox"]');


var lista_auxiliar = [];
for (let i = 0; i < lista.length; i++) {
    lista_auxiliar.push( [lista[i].name , lista[i].checked ]);
    
}
// esto ya debo hacer en php
var puntuacion= 0;
for (let j = 0; j < lista_auxiliar.length; j++) {
    if( lista_auxiliar[j][1] )
    puntuacion = 1.5;
    
}

function respondio(nombreContenedor){

    var contenedor = document.querySelector(nombreContenedor);
    var lista = contenedor.querySelectorAll('input[type="checkbox"]');


    var lista_auxiliar = [];
    for (let i = 0; i < lista.length; i++) {
        lista_auxiliar.push( [lista[i].name , lista[i].checked ]);
    
    }
    let flag = 'No';
    for (let j = 0; j < lista_auxiliar.length; j++) {
        if( lista_auxiliar[j][1] ){
            flag = 'Si';
        }
    }
    return flag;
}