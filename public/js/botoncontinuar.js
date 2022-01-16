console.log('i am here!')
// prueba  para ver si las preguntas fue respondida
var modificado = false;
console.log(modificado);
var lista_inputs = document.getElementsByTagName('input');

document.addEventListener('change',()=>{
        modificado = true; 
        console.log(modificado);

});
lista_inputs_modified = [];
for (let i = 0; i < lista_inputs.length; i++) {
        // const element = lista_inputs[i];
        // console.log(lista_inputs[i]);
        lista_inputs_modified.push([lista_inputs[i].name , lista_inputs[i].value ]);
        
}
// lista_inputs_modified.filter(x =>x[0] != '_token');