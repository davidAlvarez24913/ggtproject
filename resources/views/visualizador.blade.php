@extends('layouts.plantilla')
@section('title','Mapa')

@section('head')

    <link rel="stylesheet" href="{{ asset('/css/mapa.css')}}">
    {{-- css opensrteemap --}}
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
    integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
    crossorigin=""/>

    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
    integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
    crossorigin=""></script>

    
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.css' rel='stylesheet' />

@endsection
    
@section('content')
<div class="contenedor">

    <div id='map'></div>
    
    {{-- <iframe class="iframe" height="500" src="https://www.openstreetmap.org/export/embed.html?bbox=-3.997154,-79.201734&layer=mapnik"></iframe> --}}
        
    
</div>


<script src="/js/mapa.js"></script>
@endsection

{{-- https://norfipc.com/web/como-insertar-mostrar-mapas-open-street-maps-paginas-web.html --}}