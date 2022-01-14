
var map = L.map('map').setView([-1.548, -78.027], 7);
        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        maxZoom: 20,
        id: 'mapbox/streets-v11',
        tileSize: 512,
        zoomOffset: -1,
        accessToken: 'pk.eyJ1IjoiZGF2aWRhYWMiLCJhIjoiY2t4M2drMnUwMXNicjJ2cDI1ZDV1a2ZjdSJ9.OoOsKzUxYpr96qjCNu6uZw'
    }).addTo(map);

    //  -1.548,-78.027  -3.9878,-79.1989 -3.097, -78.998

    L.marker([-3.9878,-79.1989]).addTo(map)
        .bindPopup('UTPL')
        .openPopup();

    L.marker([-3.097, -78.998]).addTo(map)
        .bindPopup('Cualquier punto')
        .openPopup();
    
    const markers = arr.map(_ => [JSON.parse(_.slice(15,-3)).nombre, JSON.parse(_.slice(15,-3)).latitud, JSON.parse(_.slice(15,-3)).longitud])
    
    markers.forEach(element => {
        L.marker([element[1], element[2]]).addTo(map)
        .bindPopup(element[0])
        .openPopup();
    });

    


// map.on('click', function(e) {
//     alert("Lat, Lon : " + e.latlng.lat + ", " + e.latlng.lng)
// });
// https://gis.stackexchange.com/questions/39055/getting-lat-long-of-clicked-location-using-leaflet-api

const csrfToken = document.head.querySelector('[name~=csrf-token][content]').content;
const getCoordenadas =async()=>{
    let peticion =  await fetch("/visualizador",{
        method: 'GET',
            // body: JSON.stringify({ id: event.target.value}),
            headers:{
                'Content-Type': 'application/json; charset=UTF-8',
                "X-CSRF-Token": csrfToken
            }
    });
    console.log(peticion);

    let resultado = await JSON.parse(peticion) ;
};

// getCoordenadas();

// fetch("/visualizador/coordenadas",{
//     method: 'POST',
//         // body: JSON.stringify({ id: event.target.value}),
//         headers:{
//             'Content-Type': 'application/json; charset=UTF-8',
//             "X-CSRF-Token": csrfToken
//         }
// }).then( response =>{
//     // x = response.json()
//     // console.log(response);
//     // console.log(x);
//     return response;
// }).then( data =>{
//     console.log(data);
    
// }).catch(error =>console.error(error));
// const respuestasJs= JSON.parse('{{!!$respuesta1!!}}'.slice(16,-4));
            // console.log(respuestasJs);
            // console.log(typeof JSON.parse(texto));

            // JSON.parse(arr[0].slice(15,-3))