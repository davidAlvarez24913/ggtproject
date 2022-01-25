if (sessionStorage.getItem('data3__')){ 
    var inputs_formulario = document.querySelector('#form2').getElementsByTagName('input');

    var x = JSON.parse( sessionStorage.getItem('data3__'));
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
    
}