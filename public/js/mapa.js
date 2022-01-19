
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
// --------------** Marker Rojo **-------------------------------------------
var redIcon = new L.Icon({
    iconUrl: 'images/marker-icon-2x-red.png',
    shadowUrl: 'images/marker-shadow.png',
    iconSize: [25, 41],
    iconAnchor: [12, 41],
    popupAnchor: [1, -34],
    shadowSize: [41, 41]
  });
// --------------** Obtner geolocalizacion API Navigator **-------------------

var options = {
    enableHighAccuracy: true,
    timeout: 5000,
    maximumAge: 0
  };
  
  function success(pos) {
    var crd = pos.coords;
    L.marker([crd.latitude, crd.longitude],{icon: redIcon}).addTo(map)
        .bindPopup('Aqui estas')
        .openPopup();
    
    // console.log('Your current position is:');
    // console.log(`Latitude : ${crd.latitude}`);
    // console.log(`Longitude: ${crd.longitude}`);
    // console.log(`More or less ${crd.accuracy} meters.`);
  }
  
  function error(err) {
    console.warn(`ERROR(${err.code}): ${err.message}`);
  }
  
// navigator.geolocation.getCurrentPosition(success, error, options);
// typeof (navigator.geolocation.watchPosition(success, error, options)); 