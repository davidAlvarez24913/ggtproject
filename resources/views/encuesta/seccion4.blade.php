@extends('layouts.plantilla')

@section('title','Seccion 3')

@section('content')
<h4>3. Características  del Atractivo</h4>
<h5>
    <label for="carac_clima">Características  Climatológicas
        <input type="checkbox" name="carac_clima" id="carac_clima" required>
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
    <label for="pregunta_3_2" class='nombre_pregunta'>Linea de producto al que pertenece el atractivo
        <input type="checkbox" name="pregunta_3_2" id="pregunta_3_2" required>    
    </label>
</h5>
<div class="contenedor_2" id='cont2_lineaProducto'>
    
    <label for="cultura">cultura</label>
    <input type="checkbox" name="cultura" id="cultura">

    <label for="naturaleza">naturaleza</label>
    <input type="checkbox" name="naturaleza" id="naturaleza">

    <label for="aventura">aventura</label>
    <input type="checkbox" name="aventura" id="aventura">
    
</div>
<h5>
    <label for="pregunta_3-2">Escenario donde se localiza el atractivo Turistico
        <input type="checkbox" name="pregunta_3-2" id="pregunta_3-2" required>    
    </label>
</h5>

<div class="contenedor_2" >
    <label for="pristino">a. Prístino</label>
    <input type="checkbox" name="pristino" id="pristino">

    <label for="primitivo">b. Primitivo</label>
    <input type="checkbox" name="primitivo" id="primitivo">

    <label for="rustico">c. Rústico Natural</label>
    <input type="checkbox" name="rustico" id="rustico">

    <label for="rural">d. Rural</label>
    <input type="checkbox" name="rural" id="rural">
    
    <label for="urbano">e. Urbano</label>
    <input type="checkbox" name="urbano" id="urbano">
</div>

<button type="submit" class="atras" onclick="location.href = `{{route('encuesta.seccion3')}}` " >
    <i class="fas fa-arrow-left"></i>
    Atras
</button>

<button type="submit" class="guardar_continuar" onclick="location.href = `{{route('encuesta.seccion5')}}` " >
    Guardar y Continuar 
    <i class="fas fa-arrow-right"></i>
</button>
<script src="{{asset('js/deshabilitarPreguntas.js')}}"></script>
@endsection
    