@extends('layouts.plantilla')

@section('title','Encuesta Tecnica')
@section('head')
    <link rel="stylesheet" href="{{ asset('/css/home_formularios.css')}}">
@endsection

@section('content')
<div class="contenedor_formularios">
    <div class="titulo">
        <h2><b class ="homeencuesta"> Encuesta tecnica de atractivos turistico</b></h2>

        <div class="tarjeta">
            <div class="titulo">
                <h2> <a href="{{route('encuesta.seccion1_2')}}">Ficha tecnica Entidad Turistica</a></h2>
            </div>
            
        </div>
        <div class="tarjeta">
            <div class="titulo">
                <h2> <a href="{{route('encuesta.accesibilidad')}}">Ficha tecnica de Accesibilidad De la Entidad Turistica</a></h2>
            </div>
            
        </div>
    </div>
    
    
</div>
    
@endsection
    