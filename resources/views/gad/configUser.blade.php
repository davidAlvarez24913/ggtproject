@extends('layouts.plantilla')

@section('title','Encuesta Tecnica')
@section('head')
    {{-- Styles CSS--}}
    <link rel="stylesheet" href="{{ asset('/css/home_formularios.css')}}">

    {{-- Sweet Alert CDN --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection

@section('content')
<div class="contenedor_formularios">
    <div class="titulo">
        <h2><b class ="homeencuesta"> Perfil de Usuario GAD</b></h2>

               
    </div>

</div>
    
@endsection
    