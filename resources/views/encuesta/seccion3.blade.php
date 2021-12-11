@extends('layouts.plantilla')

@section('title','Seccion 3')

@section('content')
<h4>3. Características  del Atractivo</h4>
<h5>
    <label for="carac_clima">Características  Climatológicas
        <input type="checkbox" name="carac_clima" id="carac_clima">
    </label>
</h5>
<div class="contenedor_2" id='cont2_clima'>
    <label for="">Clima</label>
    <input type="text" name="clima" id="clima">
    <label for="">Temperatura(°C)</label>
    <input type="number" name='temperatura' id='temperatura'>
    <label for="">Precipitacion Pluviometrica</label>
    <input type="number" name='precipitacion' id='precipitacion'>
</div>   
<h5>
    <label for="" class='nombre_pregunta'>Linea de producto al que pertenece el atractivo
        <input type="checkbox" name="pregunta_3-2" id="pregunta_3-2">    
    </label>
</h5>
<div class="contenedor_2">
    
    <label for="">cultura</label>
    <input type="checkbox" name="cultura" id="cultura">

    <label for="">naturaleza</label>
    <input type="checkbox" name="naturaleza" id="naturaleza">

    <label for="">aventura</label>
    <input type="checkbox" name="aventura" id="aventura">
    
</div>
<h5>
    <label for="">Escenario donde se localiza el atractivo Turistico
        <input type="checkbox" name="pregunta_3-2" id="pregunta_3-2">    
    </label>
</h5>

<div class="contenedor_2" >
    <label for="">a. Prístino</label>
    <input type="checkbox" name="cultura" id="cultura">

    <label for="">b. Primitivo</label>
    <input type="checkbox" name="naturaleza" id="naturaleza">

    <label for="">c. Rústico Natural</label>
    <input type="checkbox" name="aventura" id="aventura">

    <label for="">d. Rural</label>
    <input type="checkbox" name="aventura" id="aventura">
    
    <label for="">d. Rural</label>
    <input type="checkbox" name="aventura" id="aventura">
</div>

<button type="submit" class="guardar_continuar" onclick="location.href = {{route('encuesta.seccion3')}} " >Guardar y Continuar</button>
<script src="{{asset('js/deshabilitarPreguntas.js')}}"></script>
@endsection
    