// alert('hola');s
// Seccion 1 y 2
document.querySelector('#carac_clima').addEventListener('click',()=>{
    let enunciado = document.querySelector('#carac_clima');
    let deshabilitar =document.getElementById('cont2_clima').getElementsByTagName('input');
    
    if(enunciado.checked){
        
        console.log(enunciado.checked);
        
        for(let x of deshabilitar){
            // console.log(x);
            x.disabled =true;
            
        }
    }
    else{
        for(let x of deshabilitar){
            // console.log(x);
            x.removeAttribute('disabled');
            
        }
    }
});

var validar = (element, content_element) => {
    let enunciado = document.getElementById(element);
    let deshabilitar = document.getElementById(content_element).getElementsByTagName('input') ; 
    enunciado.addEventListener('click',()=>{
        if(enunciado.checked == false){
            for (let x of deshabilitar) {
                x.disabled =true;
            }
        }else{
            for (let x of deshabilitar) {
                x.removeAttribute('disabled');
            }
        } 
    });
};
// Preguntas seccion 3
let pregunta3_2 ='pregunta_3_2';
let contenid_pregunta3_2 ='cont2_lineaProducto';

validar(pregunta3_2 , contenid_pregunta3_2 );

// ayudata para los checkbox 
function chk_to_validate(nombreContenedor){
    var cont = document.querySelector(nombreContenedor);
    var list_checkbox = cont.querySelectorAll('input[type="checkbox"]');
    var lista_auxiliar = [];
    for (let i = 0; i < list_checkbox.length; i++) {
        lista_auxiliar.push( list_checkbox[i].name );
        
    }
    lista_auxiliar;
    cont.addEventListener('click',(e)=>{
        // console.log(e.target.type );
        if (e.target.type =='checkbox') {
            e.target.value = e.target.checked;
            console.log(e.target);
        }
        
    });
}