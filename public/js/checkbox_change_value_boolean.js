
// validar(pregunta3_2 , contenid_pregunta3_2 );

// --------ayuda para los checkbox -------
// recibe selector css y nombre del contenedor
// delegación de eventos para chechkbox
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



