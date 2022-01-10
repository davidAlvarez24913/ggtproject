@extends('layouts.plantilla')
 
@section('title','Guardar datos llenados')

@section('head')
    <meta name="csrf-token" content="{{ csrf_token()}}">

    <link rel="stylesheet" href="{{asset('/css/guardar.css')}}">
@endsection
@section('content')
    <h4> 
        Felicitaciones has llenado el 50% del formulario
    </h4>
    <div class="contenedor_guardar">
        <p> Se guardaran los datos de las 7 primeras secciones del formulario.</p>
        Se debe guardar en inputs para hacer un save
        <form action="{{route('encuesta.store')}}" method="POST">
            @csrf
            <div >
                Seccion 7:
                @if (isset($data_7))
                    {{$data_7}}
                    
                @else
                    {{'algo salio mal'}} 
                    <br>           
                @endif
                
            </div>
            <button type="submit">Guardar </button>
            <script >
                // document.write(sessionStorage.getItem('data'));
                // document.querySelector('#respuesta3').value = sessionStorage.getItem('prueba3');
                // console.console.log(typeof(sessionStorage.getItem('prueba3') ) );
                // document.write( sessionStorage.getItem('prueba3') );
            </script>
        </form>
    </div>
    

@endsection