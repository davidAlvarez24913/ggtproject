@extends('layouts.plantilla')

@section('title','Seccion 4')

@section('head')
<meta name="csrf-token" content="{{ csrf_token()}}">

<link rel="stylesheet" href="{{asset('/css/seccion4.css')}}">   

@endsection
@section('content')
<h4>4. Accesibilidad y Connectividad al atractivo</h4>

<form id='form3'action="{{route('encuesta.retrieve_4')}}" method="post">
     @csrf
    <div class="contenedor_seccion4">
        <label for="poblado_cercano">a. Nombre de la cuidad o pobaldo mas cercano (que presente condiciones minimas de servicios)</label>
        <input type="text" name="poblado_cercano" id="poblado_cercano">
    </div>
    <div class="menu_lateral ">
        <i class="fas fa-bars _menu"></i>
        <div class="contenido">
            <label for="">Menu Secciones</label>
            <hr>
            <a href="{{route('encuesta.seccion1_2')}}">Seccion 1 y 2</a>
            <a href="{{route('encuesta.seccion3')}}">Seccion 3</a>
            <a href="{{route('encuesta.seccion5')}}">Seccion 5</a>
            <a href="{{route('encuesta.seccion6')}}">Seccion 6</a>
            <a href="{{route('encuesta.seccion7')}}">Seccion 7</a>
            <a href="{{ route('encuesta.guardar')}}">Guardar Datos</a>
          </div>
        
    </div>
    <div class="contenedor_seccion4">
        <label for="distancia_km">Distancia desde la cuidad o poblado mas cercano</label>
        <input type="number" name="distancia_km" id="distancia_km" required>
        <label for="tiempo_en_auto">Tiempo estimado de desplazamiento en auto</label>
        <input type="datetime" name="tiempo_en_auto" id="tiempo_en_auto" required>
    </div>
    <h5>
        <label for="pregunta_4_2" class='nombre_pregunta'>Vias de Acceso (M)
            <input type="checkbox" name="pregunta_4_2" id="pregunta_3_2" required>    
        </label>
    </h5>
    <div class="contenedor_seccion4_3">
        <div class="contenedor_seccion4_2">
            <div class='titulo_seccion4_subpregunta'>
                <label for="terrestre">Terrestre</label>
                <input type="checkbox" name="terrestre" id="terrestre">
            </div>

            <label for="tipo_via">tipo de via</label>
            <select name="tipo_via" id="tipo_via">
                <option default disabled>Selecione orden de via</option>
                <option value="primer_orden">Primer orden</option>
                <option value="segundo_orden">Segundo orden</option>
                <option value="tercer_orden"> Terer orden</option>
            </select>
            <label for="coordenada_inicio">Coordenada de inicio</label>
            <input type="text" name="coordenada_inicio" id="coordenada_inicio" required>

            <label for="coordenada_fin">Coordenada de fin</label>
            <input type="text" name="coordenada_fin" id="coordenada_fin" required>
            <label for="distancia">Distancia (km)</label>
            <input type="number" name="distancia" id="distancia" required>
            <label for="tipo_material">Tipo de material</label>
            <input type="text" name="tipo_material" id="tipo_material" required>
            <label for="estado">Estado</label>
            <input type="text" name="estado" id="estado" required>
        </div>
        <div class="contenedor_seccion4_2">
            <div class='titulo_seccion4_subpregunta'>
                <label for="acuatico">Acuatico</label>
                <input type="checkbox" name="acuatico" id="acuatico" required>
            </div>
            
            <label for="subtipo_acuatico">subtipo acuatico</label>
            <select name="subtipo_acuatico" id="subtipo_acuatico">
                <option disable default>subtipo</option>
                <option value="maritimo">maritimo</option>
                <option value="lacustre">lacustre</option>
                <option value="fluvial">fluvial</option>

            </select>
            <label for="puerto_muelle_partida">Puerto/Muelle de partida</label>
            <input type="text" name="puerto_muelle_partida" id="puerto_muelle_partida" required>

            <label for="estado_puerto_partida">estado_puerto_partida</label>
            <input type="text" name="estado_puerto_partida" id="estado_puerto_partida" required>

            <label for="puerto_muelle_llegada">Puerto/Muelle de llegada</label>
            <input type="text" name="puerto_muelle_llegada" id="puerto_muelle_llegada" required>

            <label for="estado_puerto_llegada">estado_puerto_llegada</label>
            <input type="text" name="estado_puerto_llegada" id="estado_puerto_llegada" required>

            <label for="observaciones_acuatico">observaciones</label>
            <input type="text" name="observaciones_acuatico" id="observaciones_acuatico" required>
        </div>
        
        <div class="contenedor_seccion4_2">
            <div class='titulo_seccion4_subpregunta'>
                <label for="aereo">Aereo</label>
                <input type="checkbox" name="aereo" id="aereo">
            </div>
            <div class="seccion4_row">
                <label for="nacional"> Nacional </label>
                <input type="checkbox" name="nacional" id="nacional">

        
                <label for="Internacional">Internacional</label>
                <input type="checkbox" name="Internacional" id="Internacional">

            </div>
            

            <label for="observaciones_aereo">observaciones</label>
            <input type="text" name="observaciones_aereo" id="observaciones_aereo">
        </div>
        
    </div>
    <h5>
        <label for="pregunta_4_3" class='nombre_pregunta'> Servicio de Transporte (M)
            <input type="checkbox" name="pregunta_4_3" id="pregunta_3_2" required>    
        </label>
    </h5>
    <div class="contenedor_seccion4">
        <label for="bus">bus</label>
        <input type="checkbox" name="bus" id="bus">
        <label for="buseta">buseta</label>
        <input type="checkbox" name="buseta" id="buseta">
        <label for="tranporte_4x4">tranporte_4x4</label>
        <input type="checkbox" name="tranporte_4x4" id="tranporte_4x4">
        <label for="taxi">taxi</label>
        <input type="checkbox" name="taxi" id="taxi">
        <label for="mototaxi">mototaxi</label>
        <input type="checkbox" name="mototaxi" id="mototaxi">
        <label for="teleferico">teleferico</label>
        <input type="checkbox" name="teleferico" id="teleferico">
        <label for="barco">barco</label>
        <input type="checkbox" name="barco" id="barco">
        <label for="lancha">lancha</label>
        <input type="checkbox" name="lancha" id="lancha">
    </div>
    <div class="contenedor_seccion4">
        <label for="bote">bote</label>
        <input type="checkbox" name="bote" id="bote">
        <label for="canoa">canoa</label>
        <input type="checkbox" name="canoa" id="canoa">
        <label for="avion">avion</label>
        <input type="checkbox" name="avion" id="avion">
        <label for="avioneta">avioneta</label>
        <input type="checkbox" name="avioneta" id="avioneta">
        <label for="helicoptero">helicoptero</label>
        <input type="checkbox" name="helicoptero" id="helicoptero">
        <label for="otro">otro</label>
        <input type="checkbox" name="otro" id="otro">
        
    </div>
    <h5>
        <label for="pregunta_4_3" class='nombre_pregunta'> Detalle de transporte hacia el atractivo (M)
            <input type="checkbox" name="pregunta_4_3" id="pregunta_3_2" required>    
        </label>
    </h5>
    <div class="contenedor_seccion4_3filas">
        <div class="row row_1 ">
            <label for="">Nombre de la cooperatia o asociacion que presta el servicio</label>
            <input type="text">
            <label for="">Estacion - Terminal</label>
            <input type="text">
        </div>
        <div class="row row_2 ">
            <label >Frecuencia:</label>
            <label for="diaria" style="display: flex;">Diaria
                <input type="checkbox" name="diaria" id="diaria" required>

            </label>
            <label for="semanal" style="display: flex;">Semanal
                <input type="checkbox" name="semanal" id="semanal" required>
            </label>
            <label for="mensual" style="display: flex;">Mensual
                <input type="checkbox" name="mensual" id="mensual" required>
            </label>
            <label for="eventual" style="display: flex;">Eventual
                <input type="checkbox" name="eventual" id="eventual" required>
                
            </label>
        </div>
        <div class="row row_3 ">
            <label for="">Detalle</label>
            <input type="text" name="detalle" id="detalle" placeholder="Traslado origen - destino">
        </div>
        
        
        
        
    </div>

    <h5>
        <label for="pregunta_4_3" class='nombre_pregunta'> Condicciones de Accesibilidad del atractivo turistico al medio fisico para personas con discapacidad (M)
            <input type="checkbox" name="pregunta_4_3" id="pregunta_3_2" required>    
        </label>
    </h5>
    <div class="contenedor_seccion4">
        <label for="">general</label>
        <input type="checkbox" name="general" id="general" required>
        <label for="">discapacidad_fisica</label>
        <input type="checkbox" name="discapacidad_fisica" id="discapacidad_fisica" required>
        <label for="">discapacidad_visual</label>
        <input type="checkbox" name="discapacidad_visual" id="discapacidad_visual" required>
        <label for="">discapacidad_auditiva</label>
        <input type="checkbox" name="discapacidad_auditiva" id="discapacidad_auditiva" required>
        <label for=""> Discapcidad intelectual psicosocial</label>
        <input type="checkbox" name="intelectual_psicosocial" id="intelectual_psicosocial" required>
        <label for="">no_accesible</label>
        <input type="checkbox" name="no_accesible" id="no_accesible">
    </div>
    <h5>
        <label for="pregunta_4_3" class='nombre_pregunta'> Señalización (M)
            <input type="checkbox" name="pregunta_4_3" id="pregunta_3_2" required>    
        </label>
    </h5>
    <div class="contenedor_seccion4">
        


        <label for="">Señalizacion de aproximacion al atractivo</label>
        <input type="checkbox" name="" id="">
        <label for="">Estado</label>
        
        <label for="estado_4-5">bueno</label>
        <input type="checkbox" name="estado_4-5" id="bueno">
        <label for="">regular</label>
        <input type="checkbox" name="estado_4-5" id="regular">
        <label for="">malo</label>
        <input type="checkbox" name="estado_4-5" id="malo">
    </div>

    <div>
        
        @if (isset($data3))
            <script>
                var data3 = '{{!!$data3!!}}'.slice(1,-1);
            console.log(data3);
            sessionStorage.setItem('data3__',data3);
            </script>
            
        @else
            <script> console.error("Algo muy malo ocurrio!"); </script>
        @endif
        
    </div>
    {{-- <button type="submit" class="guardar_continuar" onclick="location.href = `{{route('encuesta.seccion5')}}` " > --}}
    <button type="submit" class="guardar_continuar" >

        Guardar y Continuar 
        <i class="fas fa-arrow-right"></i>
    </button>
</form>

<button type="submit" class="atras" onclick="location.href = `{{route('encuesta.seccion3')}}` " >
    <i class="fas fa-arrow-left"></i>
    Atras
</button>
<script></script>

<script src="{{asset('js/deshabilitarPreguntas.js')}}"></script>
@endsection
@section('scripts')
    <script>
        var errores = JSON.parse('{{!!$errors!!}}'.slice(1,-1));
        console.log(errores);
        document.querySelector('#form3').addEventListener('submit',(e)=>{
            if(errores.length >0){
                e.preventDefault();
            }
        });
        
    </script>
    
@endsection