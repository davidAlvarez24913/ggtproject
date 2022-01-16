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
        <h2><b class ="homeencuesta"> Formularios de atractivos turísticos</b></h2>

        <div class="tarjeta">
            <div class="titulo">
                <h2> <a href="{{route('encuesta.seccion1_2')}}">Ficha técnica Entidad Turística</a></h2>
            </div>
            
        </div>
        <div class="tarjeta">
            <div class="titulo">
                <h2> <a href="{{route('encuesta.accesibilidad')}}">Ficha técnica de Accesibilidad De la Entidad Turística</a></h2>
            </div>
            
        </div>
        <div class="tarjeta">
            <div class="titulo">
                <h2> <a href="">Validacion GAD</a></h2>
            </div>
            
        </div>
        <div class="tarjeta">
            <div class="titulo">
                <h2> <a href="">Ponderación y Jerarquización</a></h2>
            </div>
            
        </div>
        
    </div>
    <script>
        Swal.fire({
            title: 'Bienvenido {{ Auth::user()->name }}',
            text: 'Has iniciado sesión con rol :{{ Auth::user()->rol }}',
            confirmButtonColor:'#26ae31',
            confirmButtonText: 'OK'
        
        });
    </script>

</div>
    
@endsection
    