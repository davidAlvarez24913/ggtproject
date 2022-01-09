@extends('layouts.plantilla')

@section('title','Seccion 6')
@section('head')
    <link rel="stylesheet" href="{{asset('/css/seccion6.css')}}">
    <meta name="csrf-token" content="{{ csrf_token()}}">
    
    
@endsection

@section('content')
<h4>6. Estado de conservación e integración del atractivo/entorno</h4>
    <h5>
        <label for="subtitulo_seccion" class='nombre_pregunta'>Atractivo
            <input type="checkbox" name="subtitulo_seccion" id="subtitulo_seccion" required>
        </label>
    </h5>
    <div class="contenedor_seccion6_fila" >
        <label for="literales_seccion6">Conservado
            <input type="checkbox" name="literales_seccion6" id="conservado">
        </label>

        <label for="literales_seccion6">Alterado
            <input type="checkbox" name="literales_seccion6" id="alterado">
        </label>

        <label for="literales_seccion6">En proceso de deterioro
            <input type="checkbox" name="literales_seccion6" id="deteriorado">
        </label>

        <label for="observaciones">Observaciones
            <input type="text" name="observaciones" id="observaciones">
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

    <div class="contenedor_seccion6_4cols">
        

        {{-- columna 1 --}}
        <div class='col'>
            <div class="subcolumna_par">
                <label for="">Actividades forestales</label>
                <input type="checkbox" name="" id="">
            </div>

            <div class="subcolumna_par">
                <label for="">Negligencia / abandono</label>
                <input type="checkbox" name="" id="">

            </div>
            <div class="subcolumna_par">
                <label for="">Condiciones de uso y exposición </label>
                <input type="checkbox" name="" id="">
            </div>
            <div class="subcolumna_par">
                <label for="">Generación de residuos</label>
                <input type="checkbox" name="" id="">

            </div>
            <div class="subcolumna_par">
                <label for="">Desarrollo industrial / comercial </label>
                <input type="checkbox" name="" id="">

            </div>
            <div class="subcolumna_par">
                <label for="">Otro</label>
                <input type="checkbox" name="" id="">
            </div>

        </div>

        {{-- columna 2 --}}
        <div class='col'>
            <div class="sucolumna_par_2">
                <label for="erocion">Eroción
                </label>
                <input type="checkbox" name="erocion" id="erocion">

            </div>
            <div class="sucolumna_par_2">

                <label for="humead">Humedad
                </label>
                <input type="checkbox" name="humead" id="humead">

            </div>
            <div class="sucolumna_par_2">
                <label for="desastres_naturales">Desastres Naturales 
                </label>
                <input type="checkbox" name="desastres_naturales" id="desastres_naturales">

            </div>
            <div class="sucolumna_par_2">
                <label for="flora_fauna">Flora y Fauna
                </label>
                <input type="checkbox" name="flora_fauna" id="flora_fauna">

            </div>
            <div class="sucolumna_par_2">
                <label for="clima">Clima
                </label>
                <input type="checkbox" name="clima" id="clima">

            </div>
            <label for="">Especifique
                <input type="text" name="" id="">
            </label>
            
        </div>

        {{-- columna 3 --}}
        <div class='col'>
            <div class="subcolumna_par3">
                <label for="">Actividades agrícolas y ganaderas</label>
                <input type="checkbox" name="" id="">
            </div>

            <div class="subcolumna_par3">
                <label for="">Actividades  industriales </label>
                <input type="checkbox" name="" id="">
            </div>

            <div class="subcolumna_par3">
                <label for="">Conflicto de tenencia</label>
                <input type="checkbox" name="" id="">
            </div>

            <div class="subcolumna_par3">
                <label for="">Contaminación del ambiente </label>
                <input type="checkbox" name="" id="">
            </div>

            <div class="subcolumna_par3">
                <label for="">Conflicto político / social </label>
                <input type="checkbox" name="" id="">

            </div>
            <label for="">Observaciones
                <input type="text" name="" id="">
            </label>

        </div>

            {{-- columna 4 --}}
        <div class='col'>
            <div class="subcolumna_par4">
                <label for="">Actividades extractivas / minería</label>
                <input type="checkbox" name="" id="">
            </div>

            <div class="subcolumna_par4">
                <label for="">Huaquearía</label>
                <input type="checkbox" name="" id="">
            </div>

            <div class="subcolumna_par4">
                <label for=""> Falta de mantenimiento </label>
                <input type="checkbox" name="" id="">
            </div>

            <div class="subcolumna_par4">
                <label for="">Expansión urbana</label>
                <input type="checkbox" name="" id="">
            </div>

            <div class="subcolumna_par4">
                <label for="">Vandalismo</label>
                <input type="checkbox" name="" id="">
            </div>

        </div>

    </div>

    <h5>
        <label for="subtitulo_seccion_2" class='nombre_pregunta'>Entorno
            <input type="checkbox" name="subtitulo_seccion_2" id="subtitulo_seccion_2" required>    
        </label>
    </h5>

    <div class="contenedor_seccion6_fila" >
        <label for="literales_seccion6">Conservado
            <input type="checkbox" name="literales_seccion6" id="conservado">
        </label>

        <label for="literales_seccion6">Alterado
            <input type="checkbox" name="literales_seccion6" id="alterado">
        </label>

        <label for="literales_seccion6">En proceso de deterioro
            <input type="checkbox" name="literales_seccion6" id="deteriorado">
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

    <div class="contenedor_seccion6_4cols">
        

        {{-- columna 1 --}}
        <div class='col'>
            <div class="subcolumna_par">
                <label for="">Actividades forestales</label>
                <input type="checkbox" name="" id="">
            </div>

            <div class="subcolumna_par">
                <label for="">Negligencia / abandono</label>
                <input type="checkbox" name="" id="">

            </div>
            <div class="subcolumna_par">
                <label for="">Condiciones de uso y exposición </label>
                <input type="checkbox" name="" id="">
            </div>
            <div class="subcolumna_par">
                <label for="">Generación de residuos</label>
                <input type="checkbox" name="" id="">

            </div>
            <div class="subcolumna_par">
                <label for="">Desarrollo industrial / comercial </label>
                <input type="checkbox" name="" id="">

            </div>
            <div class="subcolumna_par">
                <label for="">Otro</label>
                <input type="checkbox" name="" id="">
            </div>

        </div>

        {{-- columna 2 --}}
        <div class='col'>
            <div class="sucolumna_par_2">
                <label for="erocion">Eroción
                </label>
                <input type="checkbox" name="erocion" id="erocion">

            </div>
            <div class="sucolumna_par_2">

                <label for="humead">Humedad
                </label>
                <input type="checkbox" name="humead" id="humead">

            </div>
            <div class="sucolumna_par_2">
                <label for="desastres_naturales">Desastres Naturales 
                </label>
                <input type="checkbox" name="desastres_naturales" id="desastres_naturales">

            </div>
            <div class="sucolumna_par_2">
                <label for="flora_fauna">Flora y Fauna
                </label>
                <input type="checkbox" name="flora_fauna" id="flora_fauna">

            </div>
            <div class="sucolumna_par_2">
                <label for="clima">Clima
                </label>
                <input type="checkbox" name="clima" id="clima">

            </div>
            <label for="">Especifique
                <input type="text" name="" id="">
            </label>
            
        </div>

        {{-- columna 3 --}}
        <div class='col'>
            <div class="subcolumna_par3">
                <label for="">Actividades agrícolas y ganaderas</label>
                <input type="checkbox" name="" id="">
            </div>

            <div class="subcolumna_par3">
                <label for="">Actividades  industriales </label>
                <input type="checkbox" name="" id="">
            </div>

            <div class="subcolumna_par3">
                <label for="">Conflicto de tenencia</label>
                <input type="checkbox" name="" id="">
            </div>

            <div class="subcolumna_par3">
                <label for="">Contaminación del ambiente </label>
                <input type="checkbox" name="" id="">
            </div>

            <div class="subcolumna_par3">
                <label for="">Conflicto político / social </label>
                <input type="checkbox" name="" id="">

            </div>
            <label for="">Observaciones
                <input type="text" name="" id="">
            </label>

        </div>

            {{-- columna 4 --}}
        <div class='col'>
            <div class="subcolumna_par4">
                <label for="">Actividades extractivas / minería</label>
                <input type="checkbox" name="" id="">
            </div>

            <div class="subcolumna_par4">
                <label for="">Huaquearía</label>
                <input type="checkbox" name="" id="">
            </div>

            <div class="subcolumna_par4">
                <label for=""> Falta de mantenimiento </label>
                <input type="checkbox" name="" id="">
            </div>

            <div class="subcolumna_par4">
                <label for="">Expansión urbana</label>
                <input type="checkbox" name="" id="">
            </div>

            <div class="subcolumna_par4">
                <label for="">Vandalismo</label>
                <input type="checkbox" name="" id="">
            </div>

        </div>

    </div>

    <h5>
        <label for="subtitulo_seccion_3" class='nombre_pregunta'>Declaratoria del espacio turístico asociado al atractivo
            <input type="checkbox" name="subtitulo_seccion_3" id="subtitulo_seccion_3" required>    
        </label>
    </h5>

    {{-- 6.3. Declaratoria del espacio turístico asociado al atractivo --}}

    <div class='contenedor_seccion6_fila'>
        <label for="declarante">Declarante
            <input type="text" name="declarante" id="declarante">
        </label>
        <label for="denomincacion">Denomincación
            <input type="text" name="denomincacion" id="denomincacion">
        </label>
        <label for="fecha_declaracion">Fecha Declaración
            <input type="text" name="fecha_declaracion" id="fecha_declaracion">
        </label>
        <label for="alcance">Alcance
            <input type="text" name="alcance" id="alcance">
        </label>
        <label for="">Observaciones
            <input type="text" name="" id="">
        </label>
    </div>

    <button type="submit" class="atras" onclick="location.href = `{{route('encuesta.seccion5')}}` " >
        <i class="fas fa-arrow-left"></i>
        Atras
    </button>

    <button type="submit" class="guardar_continuar" onclick="location.href = `{{route('encuesta.seccion7')}}` " >
        Guardar y Continuar 
        <i class="fas fa-arrow-right"></i>
    </button>
<script src="{{asset('js/deshabilitarPreguntas.js')}}"></script>
@endsection
    