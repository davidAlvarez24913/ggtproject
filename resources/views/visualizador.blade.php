@extends('layouts.plantilla')
@section('title','Mapa')

@section('head')
    <meta name="csrf-token" content="{{ csrf_token()}}">
    {{-- Estiloss CSS --}}
    <link rel="stylesheet" href="{{ asset('/css/mapa.css')}}">
    {{-- CDN Leaflet --}}
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
    

@endsection
    
@section('content')

<div class="mapa">
    @if (isset($respuesta1))
        <script> const arr = [];</script>
        @foreach ($respuesta1 as $r)
            <script> arr.push('{{!!$r!!}}')</script>
        @endforeach
        
    @endif
    <div id="map"></div>    
</div>

<script src="/js/mapa.js">
    document.addEventListener("DOMContentLoaded", funcionInit);

</script>
@endsection

{{-- https://norfipc.com/web/como-insertar-mostrar-mapas-open-street-maps-paginas-web.html --}}