if (sessionStorage.getItem('data4__')){ 
    var inputs_formulario = document.querySelector('#form3').getElementsByTagName('input');
    var selects_formulario = document.querySelector('#form3').getElementsByTagName('select');
    var radios_formulario = [... inputs_formulario].filter( _ => _.type =='radio');
    
    var x = JSON.parse( sessionStorage.getItem('data4__'));
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
                    if(i.type =="text"){
                        i.value = x[aux];

                    }

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
    var rrr =  x_keys.filter( _ => radios_formulario.map(j => j.name).includes(_));
    
    // for(var i in x){
    //     console.log(x[i]);
    // }
    var arr_aux = Object.entries(x);
    var ttt =  arr_aux.filter(_ => rrr.includes(_[0]) );
    
    radios_formulario.filter(_ => _.value == ttt[0][1] && ttt[0][0] == _.name)[0].checked =true;
    radios_formulario.filter(_ => _.value == ttt[1][1] && ttt[1][0] == _.name)[0].checked =true;
}