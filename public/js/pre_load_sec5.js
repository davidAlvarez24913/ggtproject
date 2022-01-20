if (sessionStorage.getItem('data1__')){ 
    var inputs_formulario = document.querySelector('#form4').getElementsByTagName('input');
    var selects_formulario = document.querySelector('#form4').getElementsByTagName('select');
    
    var x = JSON.parse( sessionStorage.getItem('data1__'));
    var x_keys = Object.keys(x); 
    for(var i of inputs_formulario){ 
        if( i.name != '_token'){ 
            if( x_keys.includes(i.name)){ 
                let aux = i.name;
                console.log(aux);
                i.value = x[aux];
                console.log(i);

            }
        }
    }
    for(var i of selects_formulario){ 
        if( i.name != '_token'){ 
            if( x_keys.includes(i.name)){ 
                let aux = i.name;
                console.log(aux);
                i.value = x[aux];
                console.log(i);

            }
        }
    }
}