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
        <label for="poblado_cercano">Nombre de la cuidad o pobaldo mas cercano (que presente condiciones minimas de servicios)</label>
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
            <a href="{{ route('encuesta.guardar')}}">Panel de Progreso</a>
          </div>
        
    </div>
    <div class="contenedor_seccion4">
        <label for="distancia_km">Distancia desde la cuidad o poblado mas cercano</label>
        <input type="number" name="distancia_km" id="distancia_km" required min="0">
        <label for="tiempo_en_auto">Tiempo estimado de desplazamiento en auto</label>
        <input type="datetime" name="tiempo_en_auto" id="tiempo_en_auto" required>
    </div>
    <h5>
        <label for="pregunta_4_2" class='nombre_pregunta'>Vias de Acceso (M)
        </label>
    </h5>
    <div class="contenedor_seccion4_3">
        <div class="contenedor_seccion4_2">
            <div class='titulo_seccion4_subpregunta'>   
                <label for="terrestre">Terrestre
                    <input type="checkbox" name="terrestre" id="terrestre" value='false'>
                </label>
            </div>
            <hr>
            <label for="tipo_via">Tipo de via</label>
            <select name="tipo_via" id="tipo_via">
                <option default value="">Selecione orden de via</option>
                <option value="primer_orden">Primer orden</option>
                <option value="segundo_orden">Segundo orden</option>
                <option value="tercer_orden"> Terer orden</option>
            </select>
            <label for="coordenada_inicio">Coordenada de inicio</label>
            <input type="text" name="coordenada_inicio" id="coordenada_inicio" >

            <label for="coordenada_fin">Coordenada de fin</label>
            <input type="text" name="coordenada_fin" id="coordenada_fin" >
            <label for="distancia">Distancia (km)</label>
            <input type="number" name="distancia" id="distancia" min="0">
            <label for="tipo_material">Tipo de material</label>
            <input type="text" name="tipo_material" id="tipo_material" placeholder="Ejm: Asfalto.">
            <label for="select_estado_4_2">Estado</label>
            <select name="select_estado_4_2">
                <option value=""  default>Seleccione estado</option>
                <option value="bueno">Bueno</option>
                <option value="regular">Regular</option>
                <option value="malo">Malo</option>
            </select>
        </div>
        <div class="contenedor_seccion4_2">
            <div class='titulo_seccion4_subpregunta'>
                <label for="acuatico">Acuatico
                    <input type="checkbox" name="acuatico" id="acuatico" value='false'>
                </label>
            </div>
            <hr>
            <label for="subtipo_acuatico">Subtipo acuático</label>
            <select name="subtipo_acuatico" id="subtipo_acuatico">
                <option value="" default>Subtipo</option>
                <option value="maritimo">Maritimo</option>
                <option value="lacustre">Lacustre</option>
                <option value="fluvial">Fluvial</option>

            </select>
            <label for="puerto_muelle_partida">Puerto / Muelle de partida</label>
            <input type="text" name="puerto_muelle_partida" id="puerto_muelle_partida" placeholder="Nombre del Puerto">

            <label for="estado_puerto_partida">Estado Puerto Partida</label>
            <select name="estado_puerto_partida">
                <option value="" default>Seleccione estado</option>
                <option value="bueno">Bueno</option>
                <option value="regular">Regular</option>
                <option value="malo">Malo</option>
            </select>

            <label for="puerto_muelle_llegada">Puerto / Muelle de llegada</label>
            <input type="text" name="puerto_muelle_llegada" id="puerto_muelle_llegada" placeholder="Nombre del Puerto">

            <label for="estado_puerto_llegada">Estado Puerto Llegada</label>
            <select name="estado_puerto_llegada">
                <option value="" default>Seleccione estado</option>
                <option value="bueno">Bueno</option>
                <option value="regular">Regular</option>
                <option value="malo">Malo</option>
            </select>

            <label for="observaciones_acuatico">Observaciones</label>
            <input type="text" name="observaciones_acuatico" id="observaciones_acuatico">
        </div>
        
        <div class="contenedor_seccion4_2">
            <div class='titulo_seccion4_subpregunta'>
                <label for="aereo">Aéreo
                    <input type="checkbox" name="aereo" id="aereo" value='false'>
                </label>
            </div>
            <hr>
            <div class="seccion4_row">
                <label for="nacional"> Nacional </label>
                <input type="radio" name="inter_nacional" id="nacional" >

        
                <label for="Internacional">Internacional</label>
                <input type="radio" name="inter_nacional" id="Internacional" >

            </div>
            

            <label for="observaciones_aereo">Observaciones</label>
            <input type="text" name="observaciones_aereo" id="observaciones_aereo">
        </div>
        
    </div>
    <h5>
        <label for="pregunta_4_3" class='nombre_pregunta'> Servicio de Transporte (M)
        </label>
    </h5>
    <div class="transportes">
        <label for="bus">Bus
            <input type="checkbox" name="bus" id="bus"  value='false'>
        </label>
        <label for="buseta">Buseta
            <input type="checkbox" name="buseta" id="buseta" value='false'>
        </label>
        <label for="tranporte_4x4">Tranporte 4x4
            <input type="checkbox" name="tranporte_4x4" id="tranporte_4x4" value='false'>
        </label>
        <label for="taxi">Taxi
            <input type="checkbox" name="taxi" id="taxi" value='false'>
        </label>
        <label for="mototaxi">Mototaxi
            <input type="checkbox" name="mototaxi" id="mototaxi" value='false'>
        </label>
        <label for="teleferico">Teleferico
            <input type="checkbox" name="teleferico" id="teleferico" value='false'>
        </label>
        <label for="barco">Barco
            <input type="checkbox" name="barco" id="barco" value='false'>
        </label>
        <label for="lancha">Lancha
            <input type="checkbox" name="lancha" id="lancha" value='false'>
        </label>
    </div>
    <div class="transportes2">
        <label for="bote">Bote
            <input type="checkbox" name="bote" id="bote" value='false'>
        </label>
        <label for="canoa">Canoa
            <input type="checkbox" name="canoa" id="canoa" value='false'>
        </label>
        <label for="avion">Avion
            <input type="checkbox" name="avion" id="avion" value='false'>
        </label>
        <label for="avioneta">Avioneta
            <input type="checkbox" name="avioneta" id="avioneta" value='false'>
        </label>
        <label for="helicoptero">Helicoptero
            <input type="checkbox" name="helicoptero" id="helicoptero" value='false'>
        </label>
        <label for="otro">Otro
            <input type="checkbox" name="otro" id="otro" value='false'>
        </label>
        
    </div>
    <h5>
        <label for="pregunta_4_3" class='nombre_pregunta'> Detalle de transporte hacia el atractivo (M)
        </label>
    </h5>
    <div class="contenedor_seccion4_3filas">
        <div class="row row_1 ">
            <label for="">Nombre de la cooperatia o asociacion que presta el servicio</label>
            <input type="text" name="name_coop">
            <label for="">Estacion - Terminal</label>
            <input type="text" name="estacion">
        </div>
        <div class="row row_2 ">
            <label >Frecuencia:</label>
            <label for="diaria" style="display: flex;">Diaria
                <input type="checkbox" name="diaria" id="diaria" value='false'>

            </label>
            <label for="semanal" style="display: flex;">Semanal
                <input type="checkbox" name="semanal" id="semanal" value='false'>
            </label>
            <label for="mensual" style="display: flex;">Mensual
                <input type="checkbox" name="mensual" id="mensual" value='false'>
            </label>
            <label for="eventual" style="display: flex;">Eventual
                <input type="checkbox" name="eventual" id="eventual" value='false'>
                
            </label>
        </div>
        <div class="row row_3 ">
            <label for="">Detalle</label>
            <input type="text" name="detalle" id="detalle" placeholder="Traslado origen - destino">
        </div>
        
        
        
        
    </div>

    <h5>
        <label for="pregunta_4_3" class='nombre_pregunta'> Condicciones de Accesibilidad del atractivo turistico al medio fisico para personas con discapacidad (M)
        </label>
    </h5>
    <div class="aux condiciones_accesibilidad">
        <label for="">General</label>
        <input type="checkbox" name="general" id="general" value='false'>
        <label for="">Discapacidad fisica</label>
        <input type="checkbox" name="discapacidad_fisica" id="discapacidad_fisica" value='false'>
        <label for="">Discapacidad visual</label>
        <input type="checkbox" name="discapacidad_visual" id="discapacidad_visual" value='false'>
        <label for="">Discapacidad auditiva</label>
        <input type="checkbox" name="discapacidad_auditiva" id="discapacidad_auditiva" value='false'>
        <label for="">Discapcidad intelectual psicosocial</label>
        <input type="checkbox" name="intelectual_psicosocial" id="intelectual_psicosocial" value='false'>
        <label for="">No accesible
            <input type="checkbox" name="no_accesible" id="no_accesible" value='false'>
        </label>
    </div>
    <h5>
        <label for="pregunta_4_3" class='nombre_pregunta'> Señalización (M)
            {{-- <input type="checkbox" name="pregunta_4_3" id="pregunta_3_2" value='false'>     --}}
        </label>
    </h5>
    <div class="aux">
        <label for="">Estado de la Señalizacion de aproximacion al atractivo:</label>
        
        <label for="estado_4-5">Bueno</label>
        <input type="radio" name="estado_4-5" id="bueno" value="3">
        <label for="">Regular</label>
        <input type="radio" name="estado_4-5" id="regular" value="2">
        <label for="">Malo</label>
        <input type="radio" name="estado_4-5" id="malo" value="1">
    </div>

    <div>
        
        @if (isset($data3))
            <script>
                var data3 = '{{!!$data3!!}}'.slice(1,-1);
            console.log(data3);
            sessionStorage.setItem('data3__',data3);
            </script>
            
        @else
            <script> console.error("data3__ no se lleno!"); </script>
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
    <script src="{{asset('js/checkbox_change_value_boolean.js')}}"></script>
    <script>
        chk_to_validate('.contenedor_seccion4_3');
        chk_to_validate('.contenedor_seccion4');
        chk_to_validate('.transportes');
        chk_to_validate('.transportes2');
        chk_to_validate('.row_2');
        chk_to_validate('.aux');
        chk_to_validate('.condiciones_accesibilidad');
    </script>
    <script src="{{asset('js/pre_load_sec4.js')}}"></script>
@endsection