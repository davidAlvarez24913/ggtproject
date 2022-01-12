
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
// Aqui hay un erroe en la devoolucion de los datos no se que tipo de dato devuelve para capturarlo con fetch
// si se que tipo de dato pero no se como trabjarlo ya que es un strign Json
// fetch('/encuesta/retrieve_5',{
//     method: 'POST',
//     headers:{
//         'Content-Type': 'application/json; charset=UTF-8',
//         "X-CSRF-Token": csrfToken
//     }
// }).then( response => {
//     return response.json();
// }).then( data =>{
//     console.log(data.);
//     console.log(typeof data)
//     var data4_2 = data.slice(1,-1);
//     console.log(data4_2);
//     sessionStorage.setItem('data4__2',data4_2);
    
// }).catch(error =>console.error(error));
