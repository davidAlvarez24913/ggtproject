@extends('layouts.plantilla')

@section('title','Seccion 6')
@section('head')
    <link rel="stylesheet" href="{{asset('/css/seccion6.css')}}">
    <meta name="csrf-token" content="{{ csrf_token()}}">
    
    
@endsection

@section('content')
<h4>6. Estado de conservación e integración del atractivo/entorno</h4>
<form id='form5' action="{{ route('encuesta.retrieve_6')}}" method="POST">
    @csrf
    <h5>
        <label for="subtitulo_seccion" class='nombre_pregunta'>Atractivo
            {{-- <input type="checkbox" name="subtitulo_seccion" id="subtitulo_seccion" > --}}
        </label>
    </h5>
    <div class="menu_lateral ">
        <i class="fas fa-bars _menu"></i>
        <div class="contenido">
            <label for="">Menu Secciones</label>
            <hr>
            <a href="{{route('encuesta.seccion1_2')}}">Seccion 1 y 2</a>
            <a href="{{route('encuesta.seccion3')}}">Seccion 3</a>
            <a href="{{route('encuesta.seccion4')}}">Seccion 4</a>
            <a href="{{route('encuesta.seccion5')}}">Seccion 5</a>
            {{-- <a href="{{route('encuesta.seccion6')}}">Seccion 6</a> --}}
            <a href="{{route('encuesta.seccion7')}}">Seccion 7</a>
            <a href="{{ route('encuesta.guardar')}}">Panel de Progreso</a>

          </div>
        
    </div>
    <div class="contenedor_seccion6_fila s6_aux" >
        <label for="literales_seccion6">Conservado
            <input type="checkbox" name="literales_seccion6" id="conservado" value='false'>
        </label>

        <label for="literales_seccion6">Alterado
            <input type="checkbox" name="literales_seccion6" id="alterado" value='false'>
        </label>

        <label for="literales_seccion6">En proceso de deterioro
            <input type="checkbox" name="literales_seccion6" id="deteriorado" value='false'>
        </label>

        <label for="observaciones">Observaciones
            <input type="text" name="observaciones" id="observaciones" >
        </label>
    </div>
    {{-- pregunta 6.1.1 Factores de alteracion y deterioro (M) --}}
    <label class="enunciado">Factores de alteracion y deterioro (M)</label>

    {{-- titutlo 2 columnas --}}

    <div class="contenedor_seccion6_2cols">
        {{-- 6.1.1.1 Naturales --}}
        <label for="">Naturales</label>

        {{-- 6.1.1.2 Antrópicos/ Antropogénicos--}}
        <label for="">Antrópicos/ Antropogénicos</label>
    </div>

    {{-- matriz 4 columnas --}}

    <div class="contenedor_seccion6_4cols s6_aux2">
        

        {{-- columna 1 --}}
        <div class='col col_aux'>
            <div class="subcolumna_par">
                <label for="">Actividades forestales</label>
                <input type="checkbox" name="forestal" id="" value='false'>
            </div>

            <div class="subcolumna_par">
                <label for="">Negligencia / abandono</label>
                <input type="checkbox" name="negligencia" id="" value='false'>

            </div>
            <div class="subcolumna_par">
                <label for="uso_exposicion">Condiciones de uso y exposición </label>
                <input type="checkbox" name="uso_exposicion" id="uso_exposicion" value='false'>
            </div>
            <div class="subcolumna_par">
                <label for="residuos">Generación de residuos</label>
                <input type="checkbox" name="residuos" id="residuos" value='false'>

            </div>
            <div class="subcolumna_par">
                <label for="industrial_comercial">Desarrollo industrial / comercial </label>
                <input type="checkbox" name="industrial_comercial" id="industrial_comercial" value='false'>

            </div>
            <div class="subcolumna_par">
                <label for="otro">Otro</label>
                <input type="checkbox" name="otro" id="otro" value='false'>
            </div>

        </div>

        {{-- columna 2 --}}
        <div class='col col_aux'>
            <div class="sucolumna_par_2">
                <label for="erocion">Eroción
                </label>
                <input type="checkbox" name="erocion" id="erocion" value='false'>

            </div>
            <div class="sucolumna_par_2">

                <label for="humead">Humedad
                </label>
                <input type="checkbox" name="humead" id="humead" value='false'>

            </div>
            <div class="sucolumna_par_2">
                <label for="desastres_naturales">Desastres Naturales 
                </label>
                <input type="checkbox" name="desastres_naturales" id="desastres_naturales" value='false'>

            </div>
            <div class="sucolumna_par_2">
                <label for="flora_fauna">Flora y Fauna
                </label>
                <input type="checkbox" name="flora_fauna" id="flora_fauna" value='false'>

            </div>
            <div class="sucolumna_par_2">
                <label for="clima">Clima
                </label>
                <input type="checkbox" name="clima" id="clima" value='false'>

            </div>
            <label for="especifique">Especifique
                <input type="text" name="especifique" id="especifique" >
            </label>
            
        </div>

        {{-- columna 3 --}}
        <div class='col'>
            <div class="subcolumna_par3">
                <label for="agricolas_ganaderas">Actividades agrícolas y ganaderas</label>
                <input type="checkbox" name="agricolas_ganaderas" id="agricolas_ganaderas" value='false'>
            </div>

            <div class="subcolumna_par3">
                <label for="industriales">Actividades  industriales </label>
                <input type="checkbox" name="industriales" id="industriales" value='false'>
            </div>

            <div class="subcolumna_par3">
                <label for="conflicto">Conflicto de tenencia</label>
                <input type="checkbox" name="conflicto" id="conflicto" value='false'>
            </div>

            <div class="subcolumna_par3">
                <label for="cantaminacion">Contaminación del ambiente </label>
                <input type="checkbox" name="cantaminacion" id="cantaminacion" value='false'>
            </div>

            <div class="subcolumna_par3">
                <label for="politico_social">Conflicto político / social </label>
                <input type="checkbox" name="politico_social" id="politico_social" value='false'>

            </div>
            <label for="observaciones">Observaciones
                <input type="text" name="observaciones" id="observaciones">
            </label>

        </div>

            {{-- columna 4 --}}
        <div class='col'>
            <div class="subcolumna_par4">
                <label for="mineria">Actividades extractivas / minería</label>
                <input type="checkbox" name="mineria" id="mineria"  value='false'>
            </div>

            <div class="subcolumna_par4">
                <label for="huaqueria">Huaquearía</label>
                <input type="checkbox" name="huaqueria" id="huaqueria"  value='false'>
            </div>

            <div class="subcolumna_par4">
                <label for="falta_mantenimiento"> Falta de mantenimiento </label>
                <input type="checkbox" name="falta_mantenimiento" id="falta_mantenimiento"  value='false'>
            </div>

            <div class="subcolumna_par4">
                <label for="expansion">Expansión urbana</label>
                <input type="checkbox" name="expansion" id="expansion"  value='false'>
            </div>

            <div class="subcolumna_par4">
                <label for="vandalismo">Vandalismo</label>
                <input type="checkbox" name="vandalismo" id="vandalismo" value='false' >
            </div>

        </div>

    </div>

    <h5>
        <label for="subtitulo_seccion_2" class='nombre_pregunta'>Entorno
            {{-- <input type="checkbox" name="subtitulo_seccion_2" id="subtitulo_seccion_2"  value='false'> --}}
        </label>
    </h5>

    <div class="contenedor_seccion6_fila s6_aux3" >
        <label for="literales_seccion6">Conservado
            <input type="checkbox" name="literales_seccion6" id="conservado" value='false'>
        </label>

        <label for="literales_seccion6">Alterado
            <input type="checkbox" name="literales_seccion6" id="alterado" value='false'>
        </label>

        <label for="literales_seccion6">En proceso de deterioro
            <input type="checkbox" name="literales_seccion6" id="deteriorado" value='false'>
        </label>

        <label for="observaciones">Observaciones
            <input type="text" name="observaciones" id="observaciones">
        </label>
    </div>
    {{-- pregunta 6.1.1 Factores de alteracion y deterioro (M) Entorno --}}
    <label class="enunciado">Factores de alteracion y deterioro (M)</label>

    {{-- titutlo 2 columnas Entorno--}}

    <div class="contenedor_seccion6_2cols">
        {{-- 6.1.1.1 Naturales --}}
        <label for="">Naturales</label>

        {{-- 6.1.1.2 Antrópicos/ Antropogénicos Entorno--}}
        <label for="">Antrópicos/ Antropogénicos</label>
    </div>

    {{-- matriz 4 columnas Entorno--}}

    <div class="contenedor_seccion6_4cols s6_aux4">
        

        {{-- columna 1 --}}
        <div class='col col_aux'>
            <div class="subcolumna_par">
                <label for="forestales">Actividades forestales</label>
                <input type="checkbox" name="forestales" id="forestales" value='false'>
            </div>

            <div class="subcolumna_par">
                <label for="abandono">Negligencia / abandono</label>
                <input type="checkbox" name="abandono" id="abandono" value='false'>

            </div>
            <div class="subcolumna_par">
                <label for="uso_exposicion">Condiciones de uso y exposición </label>
                <input type="checkbox" name="uso_exposicion" id="uso_exposicion" value='false'>
            </div>
            <div class="subcolumna_par">
                <label for="residuos">Generación de residuos</label>
                <input type="checkbox" name="residuos" id="residuos" value='false'>

            </div>
            <div class="subcolumna_par">
                <label for="entorno_indus_comercial">Desarrollo industrial / comercial </label>
                <input type="checkbox" name="entorno_indus_comercial" id="entorno_indus_comercial" value='false'>

            </div>
            <div class="subcolumna_par">
                <label for="entorno_observaciones">Otro</label>
                <input type="checkbox" name="entorno_observaciones" id="entorno_observaciones" value='false'>
            </div>

        </div>

        {{-- columna 2 --}}
        <div class='col col_aux'>
            <div class="sucolumna_par_2">
                <label for="erocion">Eroción
                </label>
                <input type="checkbox" name="erocion" id="erocion" value='false' >

            </div>
            <div class="sucolumna_par_2">

                <label for="humead">Humedad
                </label>
                <input type="checkbox" name="humead" id="humead" value='false' >

            </div>
            <div class="sucolumna_par_2">
                <label for="desastres_naturales">Desastres Naturales 
                </label>
                <input type="checkbox" name="desastres_naturales" id="desastres_naturales" value='false' >

            </div>
            <div class="sucolumna_par_2">
                <label for="flora_fauna">Flora y Fauna
                </label>
                <input type="checkbox" name="flora_fauna" id="flora_fauna" value='false' >

            </div>
            <div class="sucolumna_par_2">
                <label for="clima">Clima
                </label>
                <input type="checkbox" name="clima" id="clima" value='false' >

            </div>
            <label for="entorno_especifique">Especifique
                <input type="text" name="entorno_especifique" id="entorno_especifique">
            </label>
            
        </div>

        {{-- columna 3 --}}
        <div class='col'>
            <div class="subcolumna_par3">
                <label for="eentorno_agricolas">Actividades agrícolas y ganaderas</label>
                <input type="checkbox" name="entorno_agricolas" id="entorno_agricolas" value='false'>
            </div>

            <div class="subcolumna_par3">
                <label for="entorno_industriales">Actividades  industriales </label>
                <input type="checkbox" name="entorno_industril" id="entorno_industriales" value='false'>
            </div>

            <div class="subcolumna_par3">
                <label for="entorno_conflicto">Conflicto de tenencia</label>
                <input type="checkbox" name="entorno_conflicto" id="entorno_conflicto" value='false'>
            </div>

            <div class="subcolumna_par3">
                <label for="entorno_contminacion">Contaminación del ambiente </label>
                <input type="checkbox" name="entorno_contminacion" id="entorno_contminacion" value='false'>
            </div>

            <div class="subcolumna_par3">
                <label for="entorno_politico_social">Conflicto político / social </label>
                <input type="checkbox" name="entorno_politico_social" id="entorno_politico_social" value='false'>

            </div>
            <label for="entorno_observacione">Observaciones
                <input type="text" name="entorno_observacione" id="entorno_observacione">
            </label>

        </div>

            {{-- columna 4 --}}
        <div class='col'>
            <div class="subcolumna_par4">
                <label for="entorno_mineria">Actividades extractivas / minería</label>
                <input type="checkbox" name="entorno_mineria" id="entorno_mineria" value='false'>
            </div>

            <div class="subcolumna_par4">
                <label for="entorno_huaqueria">Huaquearía</label>
                <input type="checkbox" name="entorno_huaqueria" id="entorno_huaqueria" value='false'>
            </div>

            <div class="subcolumna_par4">
                <label for="entorno_falta_mantenimiento"> Falta de mantenimiento </label>
                <input type="checkbox" name="entorno_falta_mantenimiento" id="entorno_falta_mantenimiento" value='false'>
            </div>

            <div class="subcolumna_par4">
                <label for="entorno_expansion">Expansión urbana</label>
                <input type="checkbox" name="entorno_expansion" id="entorno_expansion" value='false'>
            </div>

            <div class="subcolumna_par4">
                <label for="entorno_vandalismo">Vandalismo</label>
                <input type="checkbox" name="entorno_vandalismo" id="entorno_vandalismo" value='false'>
            </div>

        </div>

    </div>

    <h5>
        <label for="subtitulo_seccion_3" class='nombre_pregunta'>Declaratoria del espacio turístico asociado al atractivo
            {{-- <input type="checkbox" name="subtitulo_seccion_3" id="subtitulo_seccion_3"  value='false'>     --}}
        </label>
    </h5>

    {{-- 6.3. Declaratoria del espacio turístico asociado al atractivo --}}

    <div class='contenedor_seccion6_fila s6_aux5'>
        <label for="declarante">Declarante
            <input type="text" name="declarante" id="declarante" required>
        </label>
        <label for="denomincacion">Denomincación
            <input type="text" name="denomincacion" id="denomincacion" required>
        </label>
        <label for="fecha_declaracion">Fecha Declaración
            <input type="text" name="fecha_declaracion" id="fecha_declaracion" required>
        </label>
        <label for="alcance">Alcance
            <input type="text" name="alcance" id="alcance" required>
        </label>
        <label for="declaratoria_observacion">Observaciones
            <input type="text" name="declaratoria_observacion" id="declaratoria_observacion" >
        </label>
    </div>
    <div>
        @if (isset($data_5))
        <script>
            var data5 = '{{!!$data_5!!}}'.slice(1,-1);
            console.log(data5);
            sessionStorage.setItem('data5__',data5);
        </script>
        
    @else
        <script> console.error("Algo muy malo ocurrio!"); </script>

    @endif
    </div>

    <button type="submit" class="guardar_continuar" >
        Guardar y Continuar 
        <i class="fas fa-arrow-right"></i>
    </button>
</form>
<button class="atras" onclick="location.href = `{{route('encuesta.seccion5')}}` " >
    <i class="fas fa-arrow-left"></i>
    Atras
</button>
<script src="{{asset('js/deshabilitarPreguntas.js')}}"></script>
@endsection
@section('scripts')
    <script>
        chk_to_validate('.s6_aux');
        chk_to_validate('.s6_aux2');
        chk_to_validate('.s6_aux3');
        chk_to_validate('.s6_aux4');
        chk_to_validate('.s6_aux5');
    </script>
    <script>
        var errores = JSON.parse('{{!!$errors!!}}'.slice(1,-1));
        console.log(errores);
        document.querySelector('#form5').addEventListener('submit',(e)=>{
            if(errores.length >0){
                e.preventDefault();
            }
        });
        
    </script>
    <script src="{{asset('js/checkbox_change_value_boolean.js')}}"></script>
    <script src="{{asset('js/pre_load_sec6.js')}}"></script>
    
@endsection
    