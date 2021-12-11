

mapboxgl.accessToken = 'pk.eyJ1IjoiZGF2aWRhYWMiLCJhIjoiY2t3eG5tc3Y4MDA2MzJybDRlbzJoejBqNCJ9.4uAVHSCqxmlH-oppark5EA';
const map = new mapboxgl.Map({
    container: 'map', // container ID
    style: 'mapbox://styles/mapbox/streets-v11', // style URL
    center: [-3.9720775375463497, -79.20375129557661], // starting position [lng, lat]
    zoom: 9 // starting zoom
});
