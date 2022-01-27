const inputs_formulario = document.querySelector('#form1').getElementsByTagName('input');
const selects_formulario = document.querySelector('#form1').getElementsByTagName('select');

if (sessionStorage.getItem('data1__') !== null){ 
    let x = JSON.parse( sessionStorage.getItem('data1__'));
    let x_keys = Object.keys(x); 
    let aux_canton_value = parseInt(x.canton);
    let aux_parroquia_value = parseInt(x.parroquia);
    
    for(var i of inputs_formulario){ 
        if( i.name != '_token'){ 
            if( x_keys.includes(i.name)){ 
                let aux = i.name;
                // console.log(aux);
                i.value = x[aux];
                // console.log(i);

            }
        }
    }
    document.querySelector('#provincia').value = parseInt(x.provincia)
    fetch("/encuesta/seccion1_2/cantones",{
        method: 'POST',
        body: JSON.stringify({ id: parseInt(x.provincia) }),
        headers:{
            'Content-Type': 'application/json; charset=UTF-8',
            "X-CSRF-Token": csrfToken
        }

    }).then( response =>{
        // console.log(response);
        return x = response.json();
    }).then( data =>{
        var opciones =`<option >==Canton==</option>`;
        for (let i in data.lista) {
            opciones += '<option value="'+data.lista[i].id+'" >'+data.lista[i].canton+'</option>';
        }
        
        document.querySelector('#canton').innerHTML = opciones;
        document.querySelector('#canton')[0].removeAttribute('default');
        // console.log('valor:'+aux_canton_value);
        document.querySelector('#canton').value = aux_canton_value;
    }).catch(error =>console.error(error));
    
    fetch("/encuesta/seccion1_2/parroquias",{
        method: 'POST',
        body: JSON.stringify({ id:  parseInt(x.canton)}),
        headers:{
            'Content-Type': 'application/json; charset=UTF-8',
            "X-CSRF-Token": csrfToken
        }

    }).then( response =>{
        let x = response.json();
        return x;
    }).then( datap =>{
        console.log(datap);
        
        var opcionesP = `<option >==Parroquia==</option>`;
        for (let i in datap.lista) {
            opcionesP += '<option value="'+datap.lista[i].id+'" >'+datap.lista[i].parroquia+'</option>';
        }
        document.querySelector('#parroquia').innerHTML = opcionesP;
        document.querySelector('#parroquia')[0].removeAttribute('default');
        document.querySelector('#parroquia').value = aux_parroquia_value;
    }).catch(error =>console.error(error));
}else{
    console.log('todo correcto para editar');
}