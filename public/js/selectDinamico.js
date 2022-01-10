
const csrfToken = document.head.querySelector('[name~=csrf-token][content]').content;
// console.log(csrfToken );

const selectProvincia = document.getElementById('provincia');
const selectCanton = document.getElementById('canton');
const selectParroquia = document.getElementById('parroquia');

selectProvincia.addEventListener("change",(event)=>{
    fetch("/encuesta/seccion1_2/cantones",{
        method: 'POST',
        body: JSON.stringify({ id: event.target.value}),
        headers:{
            'Content-Type': 'application/json; charset=UTF-8',
            "X-CSRF-Token": csrfToken
        }

    }).then( response =>{
        console.log(response);
        return x = response.json();
    }).then( data =>{
        console.log(data);

        var opciones =`<option disabled>==Canton==</option>`;
        for (let i in data.lista) {
            opciones += '<option value="'+data.lista[i].id+'" >'+data.lista[i].canton+'</option>';
            
        }
        
        selectCanton.innerHTML = opciones;
    }).catch(error =>console.error(error));
});


selectCanton.addEventListener("change",(event2)=>{
    // alert('hola');
    fetch("/encuesta/seccion1_2/parroquias",{
        method: 'POST',
        body: JSON.stringify({ id: event2.target.value}),
        headers:{
            'Content-Type': 'application/json; charset=UTF-8',
            "X-CSRF-Token": csrfToken
        }

    }).then( response =>{
        let x = response.json();
        console.log(x);
    
        return x;
        // return response.json();
    }).then( datap =>{
        
        console.log(datap);
        var opcionesP = `<option >==Parroquia==</option>`;
        for (let i in datap.lista) {
            opcionesP += '<option value="'+datap.lista[i].id+'" >'+datap.lista[i].parroquia+'</option>';
        }
        
        selectParroquia.innerHTML = opcionesP;
        console.log(opcionesP);
    }).catch(error =>console.error(error));
});