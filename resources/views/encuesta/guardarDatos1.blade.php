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
    <div>
        {{-- <form action="{{route('encuesta.store')}}">
            @foreach ($data_1_2 as $d)
            Data retrieved: {{ $d}}
            <br>
            @endforeach 
        </form>
        --}}
        
    </div>
    <form action="{{route('encuesta.store')}}">
        <button type="submit">Guardar </button>
    </form>

@endsection