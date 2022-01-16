// alert('hola');

// pregunta 7.1 a
// document.querySelector('.guardar_continuar').addEventListener('click',()=>{
//     var contenedor = document.querySelector('.pregunta7-1-a');
//     var lista = contenedor.querySelectorAll('input[type="checkbox"]');


//     var lista_auxiliar = [];
//     for (let i = 0; i < lista.length; i++) {
//         lista_auxiliar.push( [lista[i].name , lista[i].checked ]);
        
//     }
//     // esto ya debo hacer en php
//     var puntuacion= 0;
//     for (let j = 0; j < lista_auxiliar.length; j++) {
//         if( lista_auxiliar[j][1] )
//         puntuacion = 1.5;
        
//     }

//     function respondio(nombreContenedor){

//         var contenedor = document.querySelector(nombreContenedor);
//         var lista = contenedor.querySelectorAll('input[type="checkbox"]');

//         var lista_auxiliar = [];
//         for (let i = 0; i < lista.length; i++) {
//             lista_auxiliar.push( [lista[i].name , lista[i].checked ]);
//             // lista_auxiliar.push( [lista[i].name , lista[i].value ]);
//         }
//         let flag = 'No';
//         for (let j = 0; j < lista_auxiliar.length; j++) {
//             if( lista_auxiliar[j][1] ){
//                 flag = 'Si';
//             }
//         }
//         return flag;
//     }

//     var r = document.createElement("input");
//     r.type ='hidden';
//     r.value = respondio('.fila2_col');
//     r.name = 'respuesta7_1a';
//     contenedor.appendChild(r);

// });
// pregunta 7.1 b

// pregunta 7.2 material
// madera literal a
var contenedor = document.querySelector('.fila2_col');
// fila2_col


// document.querySelector('.guardar_continuar').addEventListener('click',()=>{
//     document.querySelector('#form6').appendChild
// });

// var r = document.createElement("input");
// r.value = respondio('.fila2_col');
// r.name = 'respuesta7_1a';
// contenedor.appendChild(r);

// pregunta 7.2 estado

// pregunta 7.3 a alojamiento

// pregunta 7.3 b en el pueblo mas cercano
 
// nombres de los contenedores

// var x = document.querySelectorAll('input[type="checkbox"]');

// var lista_auxiliar = [];
// for (let i = 0; i < x.length; i++) {
//     lista_auxiliar.push( x[i].name );
    
// }
// delegación de eventos
var sec4_p2 = document.querySelector('.contenedor_seccion4_3');
var list_checkbox = sec4_p2.querySelectorAll('input[type="checkbox"]');
var lista_auxiliar = [];
for (let i = 0; i < list_checkbox.length; i++) {
    lista_auxiliar.push( list_checkbox[i].name );
    
}
lista_auxiliar;
sec4_p2.addEventListener('click',(e)=>{
    console.log(e);
    
});

function chk_to_validate(nombreContenedor){
    var cont = document.querySelector(nombreContenedor);
    var list_checkbox = cont.querySelectorAll('input[type="checkbox"]');
    var lista_auxiliar = [];
    for (let i = 0; i < list_checkbox.length; i++) {
        lista_auxiliar.push( list_checkbox[i].name );
        
    }
    lista_auxiliar;
    sec4_p2.addEventListener('click',(e)=>{
        console.log(e);
        
    });
}