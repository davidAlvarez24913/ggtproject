
var validar = (element, content_element) => {
    // element check box
    let enunciado = document.getElementById(element);
    // contenedor de inputs
    let deshabilitar = document.getElementById(content_element).getElementsByTagName('input') ; 
    
    enunciado.addEventListener('change',()=>{
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


validar('reservas', 'p_reservas');
validar('formas_pago', 'formas_pago_div');
