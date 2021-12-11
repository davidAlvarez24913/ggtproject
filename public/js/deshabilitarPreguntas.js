// alert('hola');s

document.querySelector('#carac_clima').addEventListener('click',()=>{
    let enunciado = document.querySelector('#carac_clima').value;
    let deshabilitar =document.getElementById('cont2_clima').getElementsByTagName('input');
    if(enunciado ='on'){
        for(let x of deshabilitar){
            console.log(x);
            x.disabled = true;
            x.value = null;
        }
        // console.log( document.getElementById('cont2_clima'));
    }else{
        
        for(let x of deshabilitar){
            console.log(x);
            x.disabled = false;
        }

    }
    // console.log(enunciado);
});

