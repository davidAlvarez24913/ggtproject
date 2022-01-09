@extends('layouts.plantilla')

@section('title','Seccion 4')

@section('head')
<link rel="stylesheet" href="{{asset('/css/seccion4.css')}}">   
<meta name="csrf-token" content="{{ csrf_token()}}">

@endsection
@section('content')
<h4>4. Accesibilidad y Connectividad al atractivo</h4>
{{-- <form action="{{route('encuesta.retrieve_4')}}" method="post"> --}}
    <form action="">

    @csrf
    <div class="contenedor_seccion4">
        <label for="poblado_cercano">a. Nombre de la cuidad o pobaldo mas cercano (que presente condiciones minimas de servicios)</label>
        <input type="text" name="poblado_cercano" id="poblado_cercano">
    </div>

    <div class="contenedor_seccion4">
        <label for="distancia_km">Distancia desde la cuidad o poblado mas cercano</label>
        <input type="number" name="distancia_km" id="distancia_km">
        <label for="tiempo_en_auto">Tiempo estimado de desplazamiento en auto</label>
        <input type="datetime" name="tiempo_en_auto" id="tiempo_en_auto">
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
            <input type="text" name="coordenada_inicio" id="coordenada_inicio">

            <label for="coordenada_fin">Coordenada de fin</label>
            <input type="text" name="coordenada_fin" id="coordenada_fin">
            <label for="distancia">Distancia (km)</label>
            <input type="number" name="distancia" id="distancia">
            <label for="tipo_material">Tipo de material</label>
            <input type="text" name="tipo_material" id="tipo_material">
            <label for="estado">Estado</label>
            <input type="text" name="estado" id="estado">
        </div>
        <div class="contenedor_seccion4_2">
            <div class='titulo_seccion4_subpregunta'>
                <label for="acuatico">Acuatico</label>
                <input type="checkbox" name="acuatico" id="acuatico">
            </div>
            
            <label for="subtipo_acuatico">subtipo acuatico</label>
            <select name="subtipo_acuatico" id="subtipo_acuatico">
                <option disable default>subtipo</option>
                <option value="maritimo">maritimo</option>
                <option value="lacustre">lacustre</option>
                <option value="fluvial">fluvial</option>

            </select>
            <label for="puerto_muelle_partida">Puerto/Muelle de partida</label>
            <input type="text" name="puerto_muelle_partida" id="puerto_muelle_partida">

            <label for="estado_puerto_partida">estado_puerto_partida</label>
            <input type="text" name="estado_puerto_partida" id="estado_puerto_partida">

            <label for="puerto_muelle_llegada">Puerto/Muelle de llegada</label>
            <input type="text" name="puerto_muelle_llegada" id="puerto_muelle_llegada">

            <label for="estado_puerto_llegada">estado_puerto_llegada</label>
            <input type="text" name="estado_puerto_llegada" id="estado_puerto_llegada">

            <label for="observaciones_acuatico">observaciones</label>
            <input type="text" name="observaciones_acuatico" id="observaciones_acuatico">
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
    <div>
        <label for="">Nombre de la cooperatia o asociacion que presta el servicio</label>
        <input type="text">
        <label for="">Estacion - Terminal</label>
        <input type="text">
        <label for="">Frecuencia</label>
        <label for="">diaria</label>
        <input type="checkbox" name="diaria" id="diaria">
        <label for="">semanal</label>
        <input type="checkbox" name="semanal" id="semanal">
        <label for="">Mensual</label>
        <input type="checkbox" name="mensual" id="mensual">
        <label for="">eventual</label>
        <input type="checkbox" name="eventual" id="eventual">
        <label for="">Detalle</label>
        <input type="text" name="detalle" id="detalle" placeholder="Traslado origen - destino">
        
    </div>

    <h5>
        <label for="pregunta_4_3" class='nombre_pregunta'> Condicciones de Accesibilidad del atractivo turistico al medio fisico para personas con discapacidad (M)
            <input type="checkbox" name="pregunta_4_3" id="pregunta_3_2" required>    
        </label>
    </h5>
    <div>
        <label for="">general</label>
        <input type="checkbox" name="general" id="general">
        <label for="">discapacidad_fisica</label>
        <input type="checkbox" name="discapacidad_fisica" id="discapacidad_fisica">
        <label for="">discapacidad_visual</label>
        <input type="checkbox" name="discapacidad_visual" id="discapacidad_visual">
        <label for="">discapacidad_auditiva</label>
        <input type="checkbox" name="discapacidad_auditiva" id="discapacidad_auditiva">
        <label for=""> Discapcidad intelectual psicosocial</label>
        <input type="checkbox" name="intelectual_psicosocial" id="intelectual_psicosocial">
        <label for="">no_accesible</label>
        <input type="checkbox" name="no_accesible" id="no_accesible">
    </div>
    <h5>
        <label for="pregunta_4_3" class='nombre_pregunta'> Señalización (M)
            <input type="checkbox" name="pregunta_4_3" id="pregunta_3_2" required>    
        </label>
    </h5>
    <div>
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
        {{-- @foreach ($data3 as $de)
        Retrive 3: {{$de}}
        @endforeach 
        @if (isset($data_3))
            <div>
                {{$data_3["carac_clima"]}}

            </div>
        @endif--}}
        {{-- {{$data3}} --}}
        {{-- {{!!$data3!!}} --}}

        
    </div>
    <script>
        var x = "{{$data3}}";
        
        // var respuesta3 = x.replace(/&quot;/g, '\"');
        // console.log(respuesta3);
        // console.log(typeof respuesta3);
        // console.log(typeof(JSON.parse(respuesta3)));
        // console.log(JSON.parse(respuesta3));
        // sessionStorage.setItem('prueba3',respuesta3);
        
        // console.log(x.slice(1, -1));
        // console.log(typeof x);
        // console.log(JSON.parse(x.slice(1, -1)));
        // var y = JSON.parse(x.slice(1, -1));
        // sessionStorage.setItem('prueba4',x);
        
        console.log( x);
        console.log(typeof x);
        console.log(JSON.parse(x));
        sessionStorage.setItem('prueba5',x);


    </script>

    <button type="submit" class="atras" onclick="location.href = `{{route('encuesta.seccion3')}}` " >
        <i class="fas fa-arrow-left"></i>
        Atras
    </button>

    <button type="submit" class="guardar_continuar" onclick="location.href = `{{route('encuesta.seccion5')}}` " >
        Guardar y Continuar 
        <i class="fas fa-arrow-right"></i>
    </button>
</form>

<script src="{{asset('js/deshabilitarPreguntas.js')}}"></script>
@endsection
    