@extends('layouts.plantilla')

@section('title','Welcome Administrador')
@section('head')
    {{-- Styles CSS--}}
    <link rel="stylesheet" href="{{ asset('/css/home_formularios.css')}}">

    {{-- Sweet Alert CDN --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection

@section('content')
<div class="contenedor_formularios">
    <h2><b class ="homeencuesta"> Modulos para Administrador</b></h2>

    <div class="sub_contenedor_admin">

        <div class="tarjeta">
            <div class="titulo_admin">
                <h2> <a href="{{route('encuesta.seccion1_2')}}">Ficha técnica Entidad Turística</a></h2>
            </div>
            
        </div>
        <div class="tarjeta">
            <div class="titulo_admin">
                <h2> <a href="{{route('encuesta.accesibilidad')}}">Llenar -Ficha técnica de Accesibilidad</a></h2>
            </div>
            
        </div>
        <div class="tarjeta">
            <div class="titulo_admin">
                <h2> <a href="">Llenar - Validación GAD</a></h2>
            </div>
            
        </div>
    {{-- </div>

    <div class="sub_contenedor"> --}}

        <div class="tarjeta">
            <div class="titulo_admin">
                <h2> <a href="{{route('gad.ponderacion')}}">Ponderación y Jerarquización</a></h2>
            </div>
            
        </div>
        <div class="tarjeta">
            <div class="titulo_admin">
                <h2> <a href="">Gestión de Usuarios</a></h2>
            </div>
            
        </div>
        
    </div>

</div>
    
@endsection
    