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
    <h2><b class ="homeencuesta"> Formularios de atractivos turísticos</b></h2>

    <div class="sub_contenedor">

        {{-- <div class="tarjeta_normal">
            <div class="titulo">
                <h2> <a href="{{route('encuesta.seccion1_2')}}">Ficha técnica Entidad Turística</a></h2>
            </div>
            
        </div>
        <div class="tarjeta_normal">
            <div class="titulo">
                <h2> <a href="{{route('encuesta.accesibilidad')}}">Ficha técnica de Accesibilidad</a></h2>
            </div>
            
        </div>

        <div class="tarjeta_normal">
            <div class="titulo">
                <h2> <a href="{{ route('gad.fichasRegistradas')}}"> Ver Fichas Registradas</a></h2>
            </div>
        </div> --}}
        <button class="tarjeta_normal" onclick="location.href = `{{route('encuesta.seccion1_2')}}`">
            Ficha técnica Entidad Turística
        </button>
        <button class="tarjeta_normal" onclick="location.href = `{{route('encuesta.accesibilidad')}}`">
            Ficha técnica de Accesibilidad
        </button>
        <button class="tarjeta_normal" onclick="location.href = `{{route('gad.fichasRegistradas')}}`">
            Ver Fichas Registradas
        </button>
        
    </div>
   

</div>
    
@endsection
    