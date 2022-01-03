@extends('layouts.plantilla')

@section('title','Seccion 3')
@section('head')
<meta name="csrf-token" content="{{ csrf_token()}}">
    
@endsection
@section('content')
<h4>5. Planta Turistica / Complementarios</h4>
<form action="" method="post">
    <h5>
        <label for="5planta_turistica" class='nombre_pregunta'>Planta turistica
            <input type="checkbox" name="5planta_turistica" id="5planta_turistica">
        </label>
    </h5>
    <div class="contenedor_2">
        <label for="atractivo">En el atractivo</label>
        <input type="checkbox" name="atractivo" id="atractivo">
        <label for="5_1_b">En la cuidad o poblado mas cercano</label>
        <input type="checkbox" name="5_1_b" id="5_1_b">
        
    </div>  
    <div class="contenedor_2">
        <label for="hotel">Hotel</label>
        <input type="checkbox" name="hotel" id="hotel">
        <label for="hostal">hostal</label>
        <input type="checkbox" name="hostal" id="hostal">
        <label for="hosteria">hosteria</label>
        <input type="checkbox" name="hosteria" id="hosteria">
        <label for="hacienda_turistica">Hacienda Turistica</label>
        <input type="checkbox" name="hacienda_turistica" id="hacienda_turistica">
        <label for="lodge">Lodge</label>
        <input type="checkbox" name="lodge" id="lodge">
        <label for="resort">Resort</label>
        <input type="checkbox" name="resort" id="resort">
        <label for="refugio">Refugio</label>
        <input type="checkbox" name="refugio" id="refugio">
        <label for="campamento_turistico">Campamento Turistico</label>
        <input type="checkbox" name="campamento_turistico" id="campamento_turistico">
        <label for="casa_huespedes">Casa de Huespedes</label>
        <input type="checkbox" name="casa_huespedes" id="casa_huespedes">
    </div> 
    <h5>
        <label for="pregunta_3_2" class='nombre_pregunta'>Facilidades en el entorno al atractivo
            <input type="checkbox" name="pregunta_3_2" id="pregunta_3_2" required>    
        </label>
    </h5>
    <div class="contenedor_2" >
        
        
    </div>
    <h5>
        <label for="pregunta_3-2">Complementarios a la actividad turistica
            <input type="checkbox" name="pregunta_3-2" id="pregunta_3-2" required>    
        </label>
    </h5>

    <div class="contenedor_2" >
        <label for="pristino">a. Prístino</label>
        
    </div>
</form>
<div>
    {{-- {{$data_4}} --}}
    {{-- @foreach ($data_4 as $d_4)
    {{$d_4}}
    @endforeach --}}
</div>
<button type="submit" class="atras" onclick="location.href = `{{route('encuesta.seccion4')}}` " >
    <i class="fas fa-arrow-left"></i>
    Atras
</button>

<button type="submit" class="guardar_continuar" onclick="location.href = `{{route('encuesta.seccion6')}}` " >
    Guardar y Continuar 
    <i class="fas fa-arrow-right"></i>
</button>
<script src="{{asset('js/deshabilitarPreguntas.js')}}"></script>
@endsection
    