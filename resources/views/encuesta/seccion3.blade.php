@extends('layouts.plantilla')

@section('title','Seccion 3')
@section('head')
<link rel="stylesheet" href="{{asset('/css/seccion3.css')}}">   
<meta name="csrf-token" content="{{ csrf_token()}}">

@endsection

@section('content')
<h4>3. Características  del Atractivo</h4>
{{-- action es la ruta que se va encargar de procesar esa informacion es decir recuperarla --}}
<form  id ='form2' action="{{route('encuesta.retrieve_3')}}" method="post">
    @csrf
    <h5>
        <label for="carac_clima" class='nombre_pregunta'>Características  Climatológicas
            <input type="checkbox" id="carac_clima" >
        </label>
    </h5>
    <div class="menu_lateral ">
        <i class="fas fa-bars _menu"></i>
        <div class="contenido">
            <label for="">Menu Secciones</label>
            <hr>
            <a href="{{route('encuesta.seccion1_2')}}">Seccion 1 y 2</a>
            {{-- <a href="{{route('encuesta.seccion3')}}">Seccion 3</a> --}}
            <a href="{{route('encuesta.seccion4')}}">Seccion 4</a>
            <a href="{{route('encuesta.seccion5')}}">Seccion 5</a>
            <a href="{{route('encuesta.seccion6')}}">Seccion 6</a>
            <a href="{{route('encuesta.seccion7')}}">Seccion 7</a>
            <a href="{{ route('encuesta.guardar')}}">Guaradar Datos</a>

          </div>
        
    </div>
    <div class="contenedor_2" id='cont2_clima'>
        <label for="clima">Clima</label>
        <input type="text" name="clima" id="clima" required>
        <label for="temperatura">Temperatura(°C)</label>
        <input type="number" name='temperatura' id='temperatura' required>
        <label for="precipitacion">Precipitacion Pluviometrica</label>
        <input type="number" name='precipitacion' id='precipitacion' required>
    </div>   
    <h5>
        <label for="linea_producto" class='nombre_pregunta'>Linea de producto al que pertenece el atractivo
            <input type="checkbox" id="linea_producto"  >    
        </label>
    </h5>
    <div class="contenedor_2" id='cont2_lineaProducto'>
        
        <label for="cultura">Cultura</label>
        <input type="checkbox" name="cultura" id="cultura" required>
    
        <label for="naturaleza">Naturaleza</label>
        <input type="checkbox" name="naturaleza" id="naturaleza" required>
    
        <label for="aventura">Aventura</label>
        <input type="checkbox" name="aventura" id="aventura" required>
        
    </div>
    <h5>
        <label class='nombre_pregunta' for="escenario">Escenario donde se localiza el atractivo Turistico
            <input type="checkbox" id="escenario" >    
        </label>
    </h5>
    
    <div class="contenedor_2" >
        <label for="pristino">Prístino</label>
        <input type="checkbox" name="pristino" id="pristino" required>
    
        <label for="primitivo">Primitivo</label>
        <input type="checkbox" name="primitivo" id="primitivo" required>
    
        <label for="rustico">Rústico Natural</label>
        <input type="checkbox" name="rustico" id="rustico" required>
    
        <label for="rural">Rural</label>
        <input type="checkbox" name="rural" id="rural" required>
        
        <label for="urbano">Urbano</label>
        <input type="checkbox" name="urbano" id="urbano" required>
    </div>
    <h5>
        <label for="ingreso_atractivo" class='nombre_pregunta'> Ingreso al atractivo(U)
            <input type="checkbox" id="ingreso_atractivo" >    
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
        <input type="datetime" name="ingreso" id="ingreso" required>
        <label for='salida' >Salida</label>
        <input type="datetime" name="salida" id="salida" required>
    
        <label for="">Atención</label>
        <label for="todos_los_dias">Todos los dias</label>
        <input type="checkbox" name="todos_los_dias" id="todos_los_dias" required>
    
        <label for="fin_de_semana">Fines de semana y feriados</label>
        <input type="checkbox" name="fin_de_semana" id="fin_de_semana" required>
        <label for="dias_habiles">Solo dias habiles</label>
        <input type="checkbox" name="dias_habiles" id="dias_habiles" required>
    </div>    
    
    <h5>
        <label class='nombre_pregunta'>Reservas y Formas de Pago </label>
    </h5>
    <div class="contenedor_tarjetas">
        <div class="tarjeta">
            <div class="titulo">
                <label for="reservas">Maneja un sistema de reservas</label>
                <input type="checkbox" id="reservas" checked>
            </div>
            <div class="pregunta" id="p_reservas">
                <label for="reservas">Precio:</label>
                <label for="minimo">minimo</label>
                <input type="text" name="minimo" id="minimo" required>
        
                <label for="maximo">maximo</label>
                <input type="text" name="maximo" id="maximo" required>
            </div>
        </div>
        
        <div class="tarjeta">
            <div class="titulo">
                <label for="formas_pago" >Forma de Pago</label>
                <input type="checkbox"  id="formas_pago" checked>    
    
            </div>
            
            <div class="pregunta formas_pago" id="formas_pago_div">
                <label for="efectivo" >Efectivo</label>
                <input type="checkbox" name="efectivo" id="efectivo" required>
            
                <label for="dinero_electronico">Dinero Electronico</label>
                <input type="checkbox" name="dinero_electronico" id="dinero_electronico" required>
            
                <label for="tarjeta_debito">Tarjeta debito</label>
                <input type="checkbox" name="tarjeta_debito" id="tarjeta_debito" required>
            
                <label for="tarjeta_credito">Tarjeta credito</label>
                <input type="checkbox" name="tarjeta_credito" id="tarjeta_credito" required>
            
                <label for="transferencia_bancaria">Transferencia Bancaria</label>
                <input type="checkbox" name="transferencia_bancaria" id="transferencia_bancaria" required>
                
                <label for="cheque">cheque</label>
                <input type="checkbox" name="cheque" id="cheque" required>
            
                <label for="deposito_bancario">Deposito bancario</label>
                <input type="checkbox" name="deposito_bancario" id="deposito_bancario" required>
            
               
            </div>
        </div>
        
    </div>
    
    
    <div class="contenedor_2">
        <label for="meses">Meses recomendables de visita:</label>
        <input type="text" name="meses" id="meses" required>
        <label for="observaciones">Observaciones:</label>
        <input type="text" name="observaciones" id="observaciones">
    </div>
    <div>
        @if (isset($data))
            <script>
                var data1 = '{{!!$data!!}}'.slice(1,-1);
                console.log(data1);
                sessionStorage.setItem('data1__',data1);
            </script>            
            
        @else
            <script> console.error("Algo muy malo ocurrio!"); </script>

        @endif
    </div>

    <button type="submit" class="guardar_continuar"  >
        Guardar y Continuar 
        <i class="fas fa-arrow-right"></i>
    </button>
</form>
<button type="submit" class="atras" onclick="location.href = `{{route('encuesta.seccion1_2')}}` " >
    <i class="fas fa-arrow-left"></i>
    Atras
</button>
<script>
    var errores = JSON.parse('{{!!$errors!!}}'.slice(1,-1));
    console.log(errores);
    document.querySelector('#form2').addEventListener('submit',(e)=>{
        if(errores.length >0){
            e.preventDefault();
        }
    });
    
</script>


<script src="{{asset('js/deshabilitarPreguntasSeccion3.js')}}"></script>
<script src="{{asset('js/ayuda.js')}}"></script>

@endsection
    
