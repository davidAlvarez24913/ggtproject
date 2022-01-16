@extends('layouts.plantilla')

@section('title','Encuesta Accesibilidad')

@section('head')
    <link rel="stylesheet" href="{{ asset('/css/home_formularios.css')}}">
@endsection

@section('content')
<div class="contenedor_formularios">
    <div class="titulo">
        <h2> Encuesta tecnica de Accesibilidad</h2>
    </div class='contenedor_4cols_accesibilidad'>
        <div class="col col-1">
            {{-- General --}}
            <div class="row row_14">
                <label for="chk_0">Estacionamiento</label>
                <label for="chk_1">Estacionamiento vehicular para personas con discapacidad</label>
                <label for="chk_2">Rampas externas a desnivel</label>
                <label for="chk_3">Gradas externas (Ingresos)</label>
                <label for="chk_4">Vías de circulación peatonal</label>
                <label for="chk_5">Señalética Informativa</label>
                <label for="chk_6">Señalética Direccional</label>
                <label for="chk_7">Señalética Preventiva</label>
                <label for="chk_8">Puertas automáticas</label>
                <label for="chk_9">Ascensor</label>
                <label for="chk_10">Recepción </label>
                <label for="chk_11">Puntos de concentración turística (Salones, auditorios, miradores, muelles, malecones, centros de interpretación, granjas, etc.)</label>
                <label for="chk_12">Cuartos de baño y aseo (Comunal o Social)</label>
                <label for="chk_13">Baño - Accesorio indicador libre/ocupado</label>

            </div>
            {{-- Discapacidad Física --}}
            <div class="row row_14">
                <label for="">Rampas externas de existir desnivel entre acera y acceso</label>
                <label for="">Pasamanos</label>
                <label for="">Recepción adaptada para personas con discapacidad (silla de ruedas, talla baja)</label>
                <label for="">Cuartos de baño adaptados (Comunal o Social) </label>
                <label for="">Baño - Espacio de maniobra (circunferencia libre de 1,50m) </label>
                <label for="">Baño - Barras de apoyo </label>
                <label for="">Baño - Sistema de Asistencia (botón o cordón de halar)</label>
                <label for="">Baño - Espejo (ubicado a 50 mm desde el borde superior del lavabo)</label>
                <label for="">Baño - Grifería de pulsación, palanca o sensor</label>
                <label for="">Baño - Lavabo sin pedestal</label>
                <label for="">Baño - Lavabo sin pedestal</label>
                <label for="">Vías de circulación peatonal accesibles (Senderos, veredas, pasillos)</label>
                <label for="">Puntos accesibles de concentración turística (que tengan rampas, pasamanos, señalética, etc. )</label>
                <label for="">Accesorios de limpieza y aseo (Ejm. Dispensadores de gel, papel higiénico, jabón de manos, etc.) a 800 a 1100mm desde el piso.</label>
            </div>

            {{-- Discapacidad Visual --}}
            <div class="row row_12">
                <label for="">Recepción adaptada para personas con discapacidad (Registros en braille, sistema JAWS, formatos accesibles, otras herramientas de apoyo al cliente.)</label>
                <label for="">Sensores de voz/ bucle magnético</label>
                <label for="">Rotulación para personas ciegas (Ejm: Braille, alto relieve, plano háptica)</label>
                <label for="">Pasamanos</label>
                <label for="">Cuartos de baño adaptados (Comunal o Social) </label>
                <label for="">Baño - espacio de maniobra (circunferencia libre 1,50m)</label>
                <label for="">Baño - Grifería de pulsación, palanca o sensor</label>
                <label for="">Baño - Sistema de Asistencia (botón o cordón de halar)</label>
                <label for="">Bandas podotáctiles o contraste en piso</label>
                <label for="">Puntos accesibles de concentración turística ( Información autodescriptiva, braille, "audio").</label>
                <label for="">Maquetas táctiles (3D)</label>
                <label for="">Vías de circulación peatonal accesibles (Senderos, veredas, pasillos) con bandas podotáctiles.</label>
            </div>

            {{-- Discapacidad Auditiva --}}
            <div class="row row_7">
                <label for=""></label>
                <label for=""></label>
                <label for=""></label>
                <label for=""></label>
                <label for=""></label>
                <label for=""></label>
                <label for=""></label>
            </div>
            {{-- Discapacidad Intelectual o Psicosocial --}}
            <div class="row row_4">
                <label for=""></label>
                <label for=""></label>
                <label for=""></label>
                <label for=""></label>
            </div>

        </div>
        <div class="col col-2">
            <input type="checkbox" name="" id="">
        </div>
        <div class="col col-3">
            <input type="checkbox" name="" id="">

        </div>
        <div class="col col-4">
            <input type="text" name="" id="">

        </div>
    <div>
    </div>    
    
</div>
    
@endsection
    