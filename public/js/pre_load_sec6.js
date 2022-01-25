if (sessionStorage.getItem('data6__')){ 
    var inputs_formulario = document.querySelector('#form5').getElementsByTagName('input');
    var selects_formulario = document.querySelector('#form5').getElementsByTagName('select');
    
    var x = JSON.parse( sessionStorage.getItem('data6__'));
    var x_keys = Object.keys(x); 
    for(var i of inputs_formulario){ 
        if( i.name != '_token'){ 
            if( x_keys.includes(i.name)){ 
                let aux = i.name;
                // console.log(aux);
                // console.log(i);
                if(i.type == "checkbox"){
                    i.checked = true;
                    i.value = x[aux];
                    console.log(i);
                }else{
                    i.value = x[aux];

                }
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