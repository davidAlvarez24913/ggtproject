
const csrfToken = document.head.querySelector('[name~=csrf-token][content]').content;
const botnGuardar = document.querySelector('.guardar_continuar');


// botnGuardar.addEventListener('click',()=>{
//     fetch('/encuesta/retrieve_5',{
//         method: 'POST',
//         headers:{
//             'Content-Type': 'application/json; charset=UTF-8',
//             "X-CSRF-Token": csrfToken
//         }
//     }).then( response => {
//         return response.json();
//     }).then( data =>{
//         var out = data.replace(/&quot;/g, '\"');
//         // console.log(typeof(JSON.parse(x)));
//         console.log(out);
//         console.log(typeof out);
//         console.log(typeof(JSON.parse(out)));
//         console.log(JSON.parse(out));

//         // sessionStorage.setItem('prueba2',out);
        
//     }).catch(error =>console.error(error));
    
    
// });

fetch('/encuesta/retrieve_5',{
    method: 'POST',
    headers:{
        'Content-Type': 'application/json; charset=UTF-8',
        "X-CSRF-Token": csrfToken
    }
}).then( response => {
    return response.json();
}).then( data =>{
    var out = data.replace(/&quot;/g, '\"');
    // console.log(typeof(JSON.parse(x)));
    console.log(out);
    console.log(typeof out);
    console.log(typeof(JSON.parse(out)));
    console.log(JSON.parse(out));

    // sessionStorage.setItem('prueba2',out);
    
}).catch(error =>console.error(error));
