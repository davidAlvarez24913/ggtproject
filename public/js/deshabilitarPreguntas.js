// alert('hola');s

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
        if(enunciado.checked){
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

let pregunta3_2 ='pregunta_3_2';
let contenid_pregunta3_2 ='cont2_lineaProducto';

validar(pregunta3_2 , contenid_pregunta3_2 );
