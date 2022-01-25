@extends('layouts.plantilla')

@section('title','Encuesta Accesibilidad')

@section('head')
    <link rel="stylesheet" href="{{ asset('/css/accesiblidad.css')}}">
@endsection

@section('content')
    <div class="titulo">
        <h4> Encuesta técnica de Accesibilidad</h4>
    </div>  
    {{-- General --}}
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
                    <input type="checkbox" name="si_no_estacionamiento" >
                    
                </div>
                <div class="col col-3">
                    <input type="checkbox" name="si_no_estacionamiento" >
                </div>
                <div class="col col-4">
                    <input type="text" name="general_obs_1" >
    
                </div>
            </div>
            <div class="fila_4cols">
                <div class="col col-1">
                    <label >Estacionamiento vehicular para personas con discapacidad</label>
                </div>
                <div class="col col-2">
                    <input type="checkbox" name="si_no_general_2" >
                </div>
                <div class="col col-3">
                    <input type="checkbox" name="si_no_general_2" >
                </div>
                <div class="col col-4">
                    <input type="text" name="general_obs_2" >
    
                </div>
            </div>
            <div class="fila_4cols">
                <div class="col col-1">
                    <label >Rampas externas a desnivel</label>
                </div>
                <div class="col col-2">
                    <input type="checkbox" name="si_no_general_3" >
                    
                </div>
                <div class="col col-3">
                    <input type="checkbox" name="si_no_general_3" >
                </div>
                <div class="col col-4">
                    <input type="text" name="general_obs_3" >
    
                </div>
            </div>
            <div class="fila_4cols">
                <div class="col col-1">
                    <label >Gradas externas (Ingresos)</label>
                </div>
                <div class="col col-2">
                    <input type="checkbox" name="si_no_general_4" >
                    
                </div>
                <div class="col col-3">
                    <input type="checkbox" name="si_no_general_4" >
                </div>
                <div class="col col-4">
                    <input type="text" name="general_obs_4" >
    
                </div>
            </div>
            <div class="fila_4cols">
                <div class="col col-1">
                    <label >Vías de circulación peatonal</label>
                </div>
                <div class="col col-2">
                    <input type="checkbox" name="si_no_general_5" >
                    
                </div>
                <div class="col col-3">
                    <input type="checkbox" name="si_no_general_5" >
                </div>
                <div class="col col-4">
                    <input type="text" name="general_obs_5" >
    
                </div>
            </div>
            <div class="fila_4cols">
                <div class="col col-1">
                    <label >Señalética Informativa</label>
                </div>
                <div class="col col-2">
                    <input type="checkbox" name="si_no_general_6" >
                    
                </div>
                <div class="col col-3">
                    <input type="checkbox" name="si_no_general_6" >
                </div>
                <div class="col col-4">
                    <input type="text" name="general_obs_6" >
    
                </div>
            </div>
            <div class="fila_4cols">
                <div class="col col-1">
                    <label >Señalética Direccional</label>
                </div>
                <div class="col col-2">
                    <input type="checkbox" name="si_no_genreal_7" >
                    
                </div>
                <div class="col col-3">
                    <input type="checkbox" name="si_no_genreal_7" >
                </div>
                <div class="col col-4">
                    <input type="text" name="general_obs_7" >
    
                </div>
            </div>
            <div class="fila_4cols">
                <div class="col col-1">
                    <label >Señalética Preventiva</label>
                </div>
                <div class="col col-2">
                    <input type="checkbox" name="si_no_genreal_8" >
                    
                </div>
                <div class="col col-3">
                    <input type="checkbox" name="si_no_genreal_8" >
                </div>
                <div class="col col-4">
                    <input type="text" name="general_obs_8" >
    
                </div>
            </div>
            
            <div class="fila_4cols">
                <div class="col col-1">
                    <label >Puertas automáticas</label>
                </div>
                <div class="col col-2">
                    <input type="checkbox" name="si_no_genreal_9" >
                    
                </div>
                <div class="col col-3">
                    <input type="checkbox" name="si_no_genreal_9" >
                </div>
                <div class="col col-4">
                    <input type="text" name="general_obs_9" >
    
                </div>
            </div>

            <div class="fila_4cols">
                <div class="col col-1">
                    <label >Ascensor</label>
                </div>
                <div class="col col-2">
                    <input type="checkbox" name="si_no_genreal_10" >
                    
                </div>
                <div class="col col-3">
                    <input type="checkbox" name="si_no_genreal_10" >
                </div>
                <div class="col col-4">
                    <input type="text" name="general_obs_10" >
    
                </div>
            </div>

            <div class="fila_4cols">
                <div class="col col-1">
                    <label >Recepción</label>
                </div>
                <div class="col col-2">
                    <input type="checkbox" name="si_no_genreal_11" >
                    
                </div>
                <div class="col col-3">
                    <input type="checkbox" name="si_no_genreal_11" >
                </div>
                <div class="col col-4">
                    <input type="text" name="general_obs_11" >
    
                </div>
            </div>
            <div class="fila_4cols">
                <div class="col col-1">
                    <label >Puntos de concentración turística</label>
                </div>
                <div class="col col-2">
                    <input type="checkbox" name="si_no_genreal_12" >
                    
                </div>
                <div class="col col-3">
                    <input type="checkbox" name="si_no_genreal_12" >
                </div>
                <div class="col col-4">
                    <input type="text" name="general_obs_12" >
    
                </div>
            </div>
            <div class="fila_4cols">
                <div class="col col-1">
                    <label >Cuartos de baño y aseo (Comunal o Social)</label>
                </div>
                <div class="col col-2">
                    <input type="checkbox" name="si_no_general_13" >
                    
                </div>
                <div class="col col-3">
                    <input type="checkbox" name="si_no_general_13" >
                </div>
                <div class="col col-4">
                    <input type="text" name="general_obs_13" >
    
                </div>
            </div>
            <div class="fila_4cols">
                <div class="col col-1">
                    <label >Baño - Accesorio indicador libre/ocupado</label>
                </div>
                <div class="col col-2">
                    <input type="checkbox" name="si_no_general_14" >
                    
                </div>
                <div class="col col-3">
                    <input type="checkbox" name="si_no_general_14" >
                </div>
                <div class="col col-4">
                    <input type="text" name="general_obs_14" >
    
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
                    <input type="checkbox" name="si_no_visual_1" >
                    
                </div>
                <div class="col col-3">
                    <input type="checkbox" name="si_no_visual_1" >
                </div>
                <div class="col col-4">
                    <input type="text" name="visual_obs_1" >
    
                </div>
            </div>
            <div class="fila_4cols">
                <div class="col col-1">
                    <label >Sensores de voz/ bucle magnético</label>
                </div>
                <div class="col col-2">
                    <input type="checkbox" name="si_no_visual_2" >
                    
                </div>
                <div class="col col-3">
                    <input type="checkbox" name="si_no_visual_2" >
                </div>
                <div class="col col-4">
                    <input type="text" name="visual_obs_2" >
    
                </div>
            </div>
            <div class="fila_4cols">
                <div class="col col-1">
                    <label >Rotulación para personas ciegas (Ejm: Braille, alto relieve, plano háptica)</label>
                </div>
                <div class="col col-2">
                    <input type="checkbox" name="si_no_visual_3" >
                    
                </div>
                <div class="col col-3">
                    <input type="checkbox" name="si_no_visual_3" >
                </div>
                <div class="col col-4">
                    <input type="text" name="visual_obs_3" >
    
                </div>
            </div>
            <div class="fila_4cols">
                <div class="col col-1">
                    <label >Pasamanos</label>
                </div>
                <div class="col col-2">
                    <input type="checkbox" name="si_no_visual_4" >
                    
                </div>
                <div class="col col-3">
                    <input type="checkbox" name="si_no_visual_4" >
                </div>
                <div class="col col-4">
                    <input type="text" name="visual_obs_4" >
    
                </div>
            </div>
            <div class="fila_4cols">
                <div class="col col-1">
                    <label >Cuartos de baño adaptados (Comunal o Social) </label>
                </div>
                <div class="col col-2">
                    <input type="checkbox" name="si_no_visual_5" >
                    
                </div>
                <div class="col col-3">
                    <input type="checkbox" name="si_no_visual_5" >
                </div>
                <div class="col col-4">
                    <input type="text" name="visual_obs_5" >
    
                </div>
            </div>
            <div class="fila_4cols">
                <div class="col col-1">
                    <label >Baño - espacio de maniobra (circunferencia libre 1,50m)</label>
                </div>
                <div class="col col-2">
                    <input type="checkbox" name="si_no_visual_6" >
                    
                </div>
                <div class="col col-3">
                    <input type="checkbox" name="si_no_visual_6" >
                </div>
                <div class="col col-4">
                    <input type="text" name="visual_obs_6" >
    
                </div>
            </div>
            <div class="fila_4cols">
                <div class="col col-1">
                    <label >Baño - Grifería de pulsación, palanca o sensor</label>
                </div>
                <div class="col col-2">
                    <input type="checkbox" name="si_no_visual_7" >
                    
                </div>
                <div class="col col-3">
                    <input type="checkbox" name="si_no_visual_7" >
                </div>
                <div class="col col-4">
                    <input type="text" name="visual_obs_7" >
    
                </div>
            </div>
            <div class="fila_4cols">
                <div class="col col-1">
                    <label >Bandas podotáctiles o contraste en piso</label>
                </div>
                <div class="col col-2">
                    <input type="checkbox" name="si_no_visual_8" >
                    
                </div>
                <div class="col col-3">
                    <input type="checkbox" name="si_no_visual_8" >
                </div>
                <div class="col col-4">
                    <input type="text" name="visual_obs_8" >
    
                </div>
            </div>
            
            <div class="fila_4cols">
                <div class="col col-1">
                    <label >Baño - Sistema de Asistencia (botón o cordón de halar)</label>
                </div>
                <div class="col col-2">
                    <input type="checkbox" name="si_no_visual_9" >
                    
                </div>
                <div class="col col-3">
                    <input type="checkbox" name="si_no_visual_9" >
                </div>
                <div class="col col-4">
                    <input type="text" name="visual_obs_9" >
    
                </div>
            </div>

            <div class="fila_4cols">
                <div class="col col-1">
                    <label >Puntos accesibles de concentración turística</label>
                </div>
                <div class="col col-2">
                    <input type="checkbox" name="si_no_visual_10" >
                    
                </div>
                <div class="col col-3">
                    <input type="checkbox" name="si_no_visual_10" >
                </div>
                <div class="col col-4">
                    <input type="text" name="visual_obs_10" >
    
                </div>
            </div>

            <div class="fila_4cols">
                <div class="col col-1">
                    <label >Maquetas táctiles (3D)</label>
                </div>
                <div class="col col-2">
                    <input type="checkbox" name="si_no_visual_11" >
                    
                </div>
                <div class="col col-3">
                    <input type="checkbox" name="si_no_visual_11" >
                </div>
                <div class="col col-4">
                    <input type="text" name="visual_obs_11" >
    
                </div>
            </div>
            <div class="fila_4cols">
                <div class="col col-1">
                    <label >Vías de circulación peatonal accesibles (Senderos, veredas, pasillos) con bandas podotáctiles.</label>
                </div>
                <div class="col col-2">
                    <input type="checkbox" name="si_no_visual_12" >
                    
                </div>
                <div class="col col-3">
                    <input type="checkbox" name="si_no_visual_12" >
                </div>
                <div class="col col-4">
                    <input type="text" name="visual_obs_12" >
    
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
                    <input type="checkbox" name="si_no_auditiva_1" >
                    
                </div>
                <div class="col col-3">
                    <input type="checkbox" name="si_no_auditiva_1" >
                </div>
                <div class="col col-4">
                    <input type="text" name="auditiva_obs_1" >
    
                </div>
            </div>
            <div class="fila_4cols">
                <div class="col col-1">
                    <label >Sensores y alarmas visuales (Luces intermitentes)</label>
                </div>
                <div class="col col-2">
                    <input type="checkbox" name="si_no_auditiva_2" >
                    
                </div>
                <div class="col col-3">
                    <input type="checkbox" name="si_no_auditiva_2" >
                </div>
                <div class="col col-4">
                    <input type="text" name="auditiva_obs_2" >
    
                </div>
            </div>
            <div class="fila_4cols">
                <div class="col col-1">
                    <label >Rotulación para personas sordas (Visual, ilustrada)</label>
                </div>
                <div class="col col-2">
                    <input type="checkbox" name="si_no_auditiva_3" >
                    
                </div>
                <div class="col col-3">
                    <input type="checkbox" name="si_no_auditiva_3" >
                </div>
                <div class="col col-4">
                    <input type="text" name="auditiva_obs_3" >
    
                </div>
            </div>
            <div class="fila_4cols">
                <div class="col col-1">
                    <label >Cuartos de baño adaptados (Comunal o Social) </label>
                </div>
                <div class="col col-2">
                    <input type="checkbox" name="si_no_auditiva_4" >
                    
                </div>
                <div class="col col-3">
                    <input type="checkbox" name="si_no_auditiva_4" >
                </div>
                <div class="col col-4">
                    <input type="text" name="auditiva_obs_4" >
    
                </div>
            </div>
            <div class="fila_4cols">
                <div class="col col-1">
                    <label >Baño - Sistema de Asistencia (botón o cordón de halar)</label>
                </div>
                <div class="col col-2">
                    <input type="checkbox" name="si_no_auditiva_5" >
                    
                </div>
                <div class="col col-3">
                    <input type="checkbox" name="si_no_auditiva_5" >
                </div>
                <div class="col col-4">
                    <input type="text" name="auditiva_obs_5" >
    
                </div>
            </div>
            <div class="fila_4cols">
                <div class="col col-1">
                    <label >Puntos accesibles de concentración turística (Información gráfica /fotografías, pósters, videos). 

                    </label>
                </div>
                <div class="col col-2">
                    <input type="checkbox" name="si_no_auditiva_6" >
                    
                </div>
                <div class="col col-3">
                    <input type="checkbox" name="si_no_auditiva_6" >
                </div>
                <div class="col col-4">
                    <input type="text" name="auditiva_obs_6" >
    
                </div>
            </div>
            <div class="fila_4cols">
                <div class="col col-1">
                    <label >Vías de circulación peatonal accesibles (Senderos, veredas, pasillos). Rotulación , Ilustraciones.</label>
                </div>
                <div class="col col-2">
                    <input type="checkbox" name="si_no_auditiva_7" >
                    
                </div>
                <div class="col col-3">
                    <input type="checkbox" name="si_no_auditiva_7" >
                </div>
                <div class="col col-4">
                    <input type="text" name="auditiva_obs_7" >
    
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
                    <input type="checkbox" name="si_no_intelectual_1" >
                    
                </div>
                <div class="col col-3">
                    <input type="checkbox" name="si_no_intelectual_1" >
                </div>
                <div class="col col-4">
                    <input type="text" name="intelectual_obs_1" >
    
                </div>
            </div>
            <div class="fila_4cols">
                <div class="col col-1">
                    <label >Accesibilidad cognitiva (señalética clara, gráfica y bien distribuida)</label>
                </div>
                <div class="col col-2">
                    <input type="checkbox" name="si_no_intelectual_2" >
                    
                </div>
                <div class="col col-3">
                    <input type="checkbox" name="si_no_intelectual_2" >
                </div>
                <div class="col col-4">
                    <input type="text" name="intelectual_obs_2" >
    
                </div>
            </div>
            <div class="fila_4cols">
                <div class="col col-1">
                    <label >Baño - Sistema de Asistencia (botón o cordón de halar)</label>
                </div>
                <div class="col col-2">
                    <input type="checkbox" name="si_no_intelectual_3" >
                    
                </div>
                <div class="col col-3">
                    <input type="checkbox" name="si_no_intelectual_3" >
                </div>
                <div class="col col-4">
                    <input type="text" name="intelectual_obs_3" >
    
                </div>
            </div>
            <div class="fila_4cols">
                <div class="col col-1">
                    <label >Puntos accesibles de concentración turística</label>
                </div>
                <div class="col col-2">
                    <input type="checkbox" name="si_no_intelectual_4" >
                    
                </div>
                <div class="col col-3">
                    <input type="checkbox" name="si_no_intelectual_4" >
                </div>
                <div class="col col-4">
                    <input type="text" name="intelectual_obs_4" >
    
                </div>
            </div>
            
            
        </div>
    </div>
    <button type="submit" class="guardar_continuar" >
        Guardar
        <i class="fas fa-arrow-right"></i>
    </button>
    <button type="submit" class="atras" onclick="location.href = `{{route('encuesta.home')}}` " >
        <i class="fas fa-arrow-left"></i>
        Atras
    </button>
@endsection
    