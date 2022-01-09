@extends('layouts.plantilla')
 
@section('title','Guardar datos llenados')

@section('head')

    <link rel="stylesheet" href="">
@endsection
@section('content')
    <h4> 
        Felicitaciones has llenado el 50% del formulario
    </h4>
    <p> Se guardaran los datos de las 7 primeras secciones del formulario.</p>
    
    
    <form action="{{route('encuesta.store')}}">
        <div>
            <input type="text" name="respuesta3" id="respuesta3">
        </div>
        <button type="submit">Guardar </button>
        <script >
            document.querySelector('#respuesta3').value = sessionStorage.getItem('prueba3');
            console.console.log(typeof(sessionStorage.getItem('prueba3') ) );
            // document.write( sessionStorage.getItem('prueba3') );
        </script>
    </form>

@endsection