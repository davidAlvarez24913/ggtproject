@extends('layouts.plantilla')

@section('title','Seccion 3')
@section('head')
<link rel="stylesheet" href="{{asset('/css/seccion3.css')}}">   
<meta name="csrf-token" content="{{ csrf_token()}}">

@endsection

@section('content')
<h4>3. Características  del Atractivo</h4>
<form action="{{route('encuesta.retrieve_3')}}" method="POST">
    @csrf
    <h5>
        <label for="carac_clima" class='nombre_pregunta'>Características  Climatológicas
            <input type="checkbox" name="carac_clima" id="carac_clima"  >
        </label>
    </h5>
    <div class="contenedor_2" id='cont2_clima'>
        <label for="clima">Clima</label>
        <input type="text" name="clima" id="clima">
        <label for="temperatura">Temperatura(°C)</label>
        <input type="number" name='temperatura' id='temperatura'>
        <label for="precipitacion">Precipitacion Pluviometrica</label>
        <input type="number" name='precipitacion' id='precipitacion'>
    </div>   
    <h5>
        <label for="linea_producto" class='nombre_pregunta'>Linea de producto al que pertenece el atractivo
            <input type="checkbox" name="linea_producto" id="linea_producto"  >    
        </label>
    </h5>
    <div class="contenedor_2" id='cont2_lineaProducto'>
        
        <label for="cultura">Cultura</label>
        <input type="checkbox" name="cultura" id="cultura">
    
        <label for="naturaleza">Naturaleza</label>
        <input type="checkbox" name="naturaleza" id="naturaleza">
    
        <label for="aventura">Aventura</label>
        <input type="checkbox" name="aventura" id="aventura">
        
    </div>
    <h5>
        <label for="escenario_entidad" class='nombre_pregunta'>Escenario donde se localiza el atractivo Turistico
            <input type="checkbox" name="escenario_entidad" id="escenario_entidad"  >    
        </label>
    </h5>
    
    <div class="contenedor_2" >
        <label for="pristino">Prístino</label>
        <input type="checkbox" name="pristino" id="pristino">
    
        <label for="primitivo">Primitivo</label>
        <input type="checkbox" name="primitivo" id="primitivo">
    
        <label for="rustico">Rústico Natural</label>
        <input type="checkbox" name="rustico" id="rustico">
    
        <label for="rural">Rural</label>
        <input type="checkbox" name="rural" id="rural">
        
        <label for="urbano">Urbano</label>
        <input type="checkbox" name="urbano" id="urbano">
    </div>
    <h5>
        <label for="ingreso_atractivo" class='nombre_pregunta'> Ingreso al atractivo(U)
            <input type="checkbox" name="pregunta_3-2" id="ingreso_atractivo"  >    
        </label>
    </h5>
    <div class="contenedor_2">
        <label for="ingreso">Tipo de Ingreso</label>
        <select name="tipo_ingreso" id="ingreso">
            <option default>Tipo Ingreso</option>
            <option value="libre">libre</option>
            <option value="restringido">restringido</option>
            <option value="pagado">pagado</option>
    
        </select>
        <label >Horario de atención</label>
        <label for='ingreso' >Ingreso</label>
        <input type="datetime" name="ingreso" id="ingreso">
        <label for='salida' >Salida</label>
        <input type="datetime" name="salida" id="salida">
    
        <label for="">Atención</label>
        <label for="todos_los_dias">Todos los dias</label>
        <input type="checkbox" name="todos_los_dias" id="todos_los_dias">
    
        <label for="fin_de_semana">Fines de semana y feriados</label>
        <input type="checkbox" name="fin_de_semana" id="fin_de_semana">
        <label for="dias_habiles">Solo dias habiles</label>
        <input type="checkbox" name="dias_habiles" id="dias_habiles">
    </div>    
    
    <h5>
        <label class='nombre_pregunta'>Reservas y Formas de Pago </label>
    </h5>
    <div class="contenedor_tarjetas">
        <div class="tarjeta">
            <div class="titulo">
                <label for="reservas">Maneja un sistema de reservas</label>
                <input type="checkbox" name="reservas" id="reservas">
            </div>
            <div class="pregunta">
                <label for="reservas">Precio:</label>
                <label for="minimo">minimo</label>
                <input type="text" name="minimo" id="minimo">
        
                <label for="maximo">maximo</label>
                <input type="text" name="maximo" id="maximo">
            </div>
        </div>
        
        <div class="tarjeta">
            <div class="titulo">
                <label for="formas_pago" >Forma de Pago</label>
                <input type="checkbox" name="formas_pago" id="formas_pago"  >    
    
            </div>
            
            <div class="pregunta formas_pago">
                <label for="efectivo" >Efectivo</label>
                <input type="checkbox" name="efectivo" id="efectivo">
            
                <label for="dinero_electronico">Dinero Electronico</label>
                <input type="checkbox" name="dinero_electronico" id="dinero_electronico">
            
                <label for="tarjeta_debito">Tarjeta debito</label>
                <input type="checkbox" name="tarjeta_debito" id="tarjeta_debito">
            
                <label for="tarjeta_credito">Tarjeta credito</label>
                <input type="checkbox" name="tarjeta_credito" id="tarjeta_credito">
            
                <label for="transferencia_bancaria">Transferencia Bancaria</label>
                <input type="checkbox" name="transferencia_bancaria" id="transferencia_bancaria">
                
                <label for="cheque">cheque</label>
                <input type="checkbox" name="cheque" id="cheque">
            
                <label for="deposito_bancario">Deposito bancario</label>
                <input type="checkbox" name="deposito_bancario" id="deposito_bancario">
            
               
            </div>
        </div>
        
    </div>
    
    
    <div class="contenedor_2">
        <label for="meses">Meses recomendables de visita:</label>
        <input type="text" name="meses" id="meses">
        <label for="observaciones">Observaciones:</label>
        <input type="text" name="observaciones" id="observaciones">
    </div>
    <div>
        {{-- @foreach ($data_1_2 as $d)
        Retrive 1_2: {{$d}}
        @endforeach --}}
        {{-- @if (isset($data))
        <input type="hidden" name="data_1_2" value="{{ json_encode($data) }}">
        {{$data}} --}}

        {{-- @endif --}}
    </div>

    <button type="submit" class="atras" onclick="location.href = `{{route('encuesta.seccion1_2')}}` " >
        <i class="fas fa-arrow-left"></i>
        Atras
    </button>

    <button type="submit" class="guardar_continuar" onclick="location.href = `{{route('encuesta.seccion4')}} `" >
        Guardar y Continuar 
        <i class="fas fa-arrow-right"></i>
    </button>
</form>

<script src="{{asset('js/deshabilitarPreguntas.js')}}"></script>
@endsection
    
