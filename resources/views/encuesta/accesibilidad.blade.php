@extends('layouts.plantilla')

@section('title','Encuesta Accesibilidad')

@section('head')
    <link rel="stylesheet" href="{{ asset('/css/accesiblidad.css')}}">
@endsection

@section('content')
    <div class="titulo">
        <h4> Encuesta tecnica de Accesibilidad</h4>
    </div>  
    <div class="contenedor_padre">
        <div class="contedor_filas">
            <div class="fila_4cols">
                <div class="col col-1">
                    <label for="" class="enunciado">General</label>
                </div>
                <div class="col col-2">
                    <label for="" class="enunciado">Si</label>
                </div>
                <div class="col col-3">
                    <label for="" class="enunciado">No</label>
                </div>
                <div class="col col-4">
                    <label for="" class="enunciado">Observaciones</label>
                </div>
            </div>
            <hr>
            <div class="fila_4cols">
                <div class="col col-1">
                    <label >Estacionamiento</label>
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
            </div>
            <div class="fila_4cols">
                <div class="col col-1">
                    <label >Estacionamiento vehicular para personas con discapacidad</label>
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
            </div>
            <div class="fila_4cols">
                <div class="col col-1">
                    <label >Rampas externas a desnivel</label>
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
            </div>
            <div class="fila_4cols">
                <div class="col col-1">
                    <label >Gradas externas (Ingresos)</label>
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
            </div>
            <div class="fila_4cols">
                <div class="col col-1">
                    <label >Vías de circulación peatonal</label>
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
            </div>
            <div class="fila_4cols">
                <div class="col col-1">
                    <label >Señalética Informativa</label>
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
            </div>
            <div class="fila_4cols">
                <div class="col col-1">
                    <label >Señalética Direccional</label>
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
            </div>
            <div class="fila_4cols">
                <div class="col col-1">
                    <label >Señalética Preventiva</label>
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
            </div>
            
            <div class="fila_4cols">
                <div class="col col-1">
                    <label >Puertas automáticas</label>
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
            </div>

            <div class="fila_4cols">
                <div class="col col-1">
                    <label >Ascensor</label>
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
            </div>

            <div class="fila_4cols">
                <div class="col col-1">
                    <label >Recepción</label>
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
            </div>
            <div class="fila_4cols">
                <div class="col col-1">
                    <label >Puntos de concentración turística</label>
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
            </div>
            <div class="fila_4cols">
                <div class="col col-1">
                    <label >Cuartos de baño y aseo (Comunal o Social)</label>
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
            </div>
            <div class="fila_4cols">
                <div class="col col-1">
                    <label >Baño - Accesorio indicador libre/ocupado</label>
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
            </div>
        </div>
    </div>
    {{-- Discapacidad Visual --}}

    <div class="contenedor_padre">
        <div class="contedor_filas">
            <div class="fila_4cols">
                <div class="col col-1">
                    <label for="" class="enunciado">Discapacidad Visual</label>
                </div>
                <div class="col col-2">
                    <label for="" class="enunciado">Si</label>
                </div>
                <div class="col col-3">
                    <label for="" class="enunciado">No</label>
                </div>
                <div class="col col-4">
                    <label for="" class="enunciado">Observaciones</label>
                </div>
            </div>
            <hr>
            <div class="fila_4cols">
                <div class="col col-1">
                    <label >Recepción adaptada para personas con discapacidad</label>
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
            </div>
            <div class="fila_4cols">
                <div class="col col-1">
                    <label >Sensores de voz/ bucle magnético</label>
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
            </div>
            <div class="fila_4cols">
                <div class="col col-1">
                    <label >Rotulación para personas ciegas (Ejm: Braille, alto relieve, plano háptica)</label>
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
            </div>
            <div class="fila_4cols">
                <div class="col col-1">
                    <label >Pasamanos</label>
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
            </div>
            <div class="fila_4cols">
                <div class="col col-1">
                    <label >Cuartos de baño adaptados (Comunal o Social) </label>
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
            </div>
            <div class="fila_4cols">
                <div class="col col-1">
                    <label >Baño - espacio de maniobra (circunferencia libre 1,50m)</label>
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
            </div>
            <div class="fila_4cols">
                <div class="col col-1">
                    <label >Baño - Grifería de pulsación, palanca o sensor</label>
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
            </div>
            <div class="fila_4cols">
                <div class="col col-1">
                    <label >Bandas podotáctiles o contraste en piso</label>
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
            </div>
            
            <div class="fila_4cols">
                <div class="col col-1">
                    <label >Baño - Sistema de Asistencia (botón o cordón de halar)</label>
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
            </div>

            <div class="fila_4cols">
                <div class="col col-1">
                    <label >Puntos accesibles de concentración turística</label>
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
            </div>

            <div class="fila_4cols">
                <div class="col col-1">
                    <label >Maquetas táctiles (3D)</label>
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
            </div>
            <div class="fila_4cols">
                <div class="col col-1">
                    <label >Vías de circulación peatonal accesibles (Senderos, veredas, pasillos) con bandas podotáctiles.</label>
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
            </div>
           
        </div>
    </div>

    {{-- Discapacidad Auditiva --}}
    <div class="contenedor_padre">
        <div class="contedor_filas">
            <div class="fila_4cols">
                <div class="col col-1">
                    <label for="" class="enunciado">Discapacidad Auditiva</label>
                </div>
                <div class="col col-2">
                    <label for="" class="enunciado">Si</label>
                </div>
                <div class="col col-3">
                    <label for="" class="enunciado">No</label>
                </div>
                <div class="col col-4">
                    <label for="" class="enunciado">Observaciones</label>
                </div>
            </div>
            <hr>
            <div class="fila_4cols">
                <div class="col col-1">
                    <label >Recepción adaptada para personas con discapacidad</label>
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
            </div>
            <div class="fila_4cols">
                <div class="col col-1">
                    <label >Sensores y alarmas visuales (Luces intermitentes)</label>
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
            </div>
            <div class="fila_4cols">
                <div class="col col-1">
                    <label >Rotulación para personas sordas (Visual, ilustrada)</label>
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
            </div>
            <div class="fila_4cols">
                <div class="col col-1">
                    <label >Cuartos de baño adaptados (Comunal o Social) </label>
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
            </div>
            <div class="fila_4cols">
                <div class="col col-1">
                    <label >Baño - Sistema de Asistencia (botón o cordón de halar)</label>
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
            </div>
            <div class="fila_4cols">
                <div class="col col-1">
                    <label >Puntos accesibles de concentración turística (Información gráfica /fotografías, pósters, videos). 

                    </label>
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
            </div>
            <div class="fila_4cols">
                <div class="col col-1">
                    <label >Vías de circulación peatonal accesibles (Senderos, veredas, pasillos). Rotulación , Ilustraciones.</label>
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
            </div>
            
        </div>
    </div>
    {{-- Discapacidad Intelectual o Psicosocial --}}

    <div class="contenedor_padre">
        <div class="contedor_filas">
            <div class="fila_4cols">
                <div class="col col-1">
                    <label for="" class="enunciado">Discapacidad Intelectual o Psicosocial</label>
                </div>
                <div class="col col-2">
                    <label for="" class="enunciado">Si</label>
                </div>
                <div class="col col-3">
                    <label for="" class="enunciado">No</label>
                </div>
                <div class="col col-4">
                    <label for="" class="enunciado">Observaciones</label>
                </div>
            </div>
            <hr>
            <div class="fila_4cols">
                <div class="col col-1">
                    <label >Recepción adaptada para personas con discapacidad (Personal capacitado)</label>
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
            </div>
            <div class="fila_4cols">
                <div class="col col-1">
                    <label >Accesibilidad cognitiva (señalética clara, gráfica y bien distribuida)</label>
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
            </div>
            <div class="fila_4cols">
                <div class="col col-1">
                    <label >Baño - Sistema de Asistencia (botón o cordón de halar)</label>
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
            </div>
            <div class="fila_4cols">
                <div class="col col-1">
                    <label >Puntos accesibles de concentración turística</label>
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
            </div>
            
            
        </div>
    </div>
    
@endsection
    