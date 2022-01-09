
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

map.on('click', function(e) {
    alert("Lat, Lon : " + e.latlng.lat + ", " + e.latlng.lng)
});
// https://gis.stackexchange.com/questions/39055/getting-lat-long-of-clicked-location-using-leaflet-api