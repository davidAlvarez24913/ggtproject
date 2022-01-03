

document.querySelector('.lat_long').addEventListener('click',(e)=>{
    e.preventDefault();
    Swal.fire({
        title: 'Mapa Provisional',
        text: 'Pulse click para ver la longitud y latitud',
        showConfirmButton: false,
        html: `<b>Pulse click para ver la longitud y latitud</b> <div id="map"></div>`,
        footer: `<label for="" class='label_title'>Ubicación geográfica:</label><label for="" class='label_lat_long'></label>`
      });
    console.log(document.querySelector('#map'));    

    var map = L.map('map').setView([-1.548, -78.027], 6.33);
    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        maxZoom: 18,
        id: 'mapbox/streets-v11',
        tileSize: 512,
        zoomOffset: -1,
        accessToken: 'pk.eyJ1IjoiZGF2aWRhYWMiLCJhIjoiY2t4M2drMnUwMXNicjJ2cDI1ZDV1a2ZjdSJ9.OoOsKzUxYpr96qjCNu6uZw'
    }).addTo(map);
    
    map.on('click', function(e) {
        document.querySelector('.label_lat_long').innerHTML='Latitud: ' + e.latlng.lat + '<br>Longitud : ' + e.latlng.lng;
    });

});

