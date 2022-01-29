@extends('layouts.plantilla')

@section('title','Seccion 5')

@section('head')
    <meta name="csrf-token" content="{{ csrf_token()}}">
    <link rel="stylesheet" href="{{asset('/css/seccion5.css')}}">
@endsection

@section('content')
<h4>5. Planta Turistica / Complementarios</h4>
<form id="form4" action="{{route('encuesta.retrieve_5')}}" method="post">
    @csrf
    <h5>
        <label for="5planta_turistica" class='nombre_pregunta'>Planta turistica
            {{-- <input type="checkbox" name="5planta_turistica" id="5planta_turistica" value='false'> --}}
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
            {{-- <a href="{{route('encuesta.seccion5')}}">Seccion 5</a> --}}
            <a href="{{route('encuesta.seccion6')}}">Seccion 6</a>
            <a href="{{route('encuesta.seccion7')}}">Seccion 7</a>
            <a href="{{ route('encuesta.guardar')}}">Panel de Progreso</a>

          </div>
        
    </div>
    {{-- Pregunta 5 parte a --}}
    <div class="contenedor_padre">
        <div class="contenedor_pregunta5-1 c_a">
            <label for="atractivo" class="enunciado">
                Alojamiento en el atractivo 
                {{-- <input type="checkbox" name="atractivo" id="atractivo"value='false'> --}}
            </label>
            
        </div>  
        {{-- Alojamiento --}}
        <div class="contenedor_pregunta5-1 c_a">
            <label for="hotel" >
                Hotel
                <input type="checkbox" name="hotel" id="hotel"  value='false'>
    
            </label>
            <label for="hostal" >
                Hostal
                <input type="checkbox" name="hostal" id="hostal"  value='false'>
                
            </label>
            <label for="hosteria" >
                Hosteria
                <input type="checkbox" name="hosteria" id="hosteria"  value='false'>
                
            </label>
            <label for="hacienda_turistica" >
                Hacienda Turistica
                <input type="checkbox" name="hacienda_turistica" id="hacienda_turistica"  value='false'>
                
            </label>
            <label for="lodge" >
                Lodge
                <input type="checkbox" name="lodge" id="lodge"  value='false'>
                
            </label>
            <label for="resort" >
                Resort
            <input type="checkbox" name="resort" id="resort"  value='false'>
                
            </label>
            <label for="refugio" >
                Refugio
                <input type="checkbox" name="refugio" id="refugio"  value='false'>
                
            </label>
            <label for="campamento_turistico" >
                Campamento Turistico
                <input type="checkbox" name="campamento_turistico" id="campamento_turistico"  value='false'>
            </label>
            <label for="casa_huespedes" >
                Casa de Huespedes
                <input type="checkbox" name="casa_huespedes" id="casa_huespedes"  value='false'>
                
            </label>
            
            
        </div> 
        <div class="contenedor_pregunta5-1 c_a">
            <label for="establecimientos_registrados">
                Establecimientos Registrados
                <input type="number" name='establecimientos_registrados' id ='establecimientos_registrados'  >
            </label>
    
            <label for="numero_habitaciones">
                Número de habitaciones 
                <input type="number" name='numero_habitaciones' id ='numero_habitaciones'  >
            </label>
            
            <label for="numero_plazas" >
                Número de Plazas
                <input type="number" name='numero_plazas' id ='numero_plazas'  >
            </label>
    
        </div>
        <hr>
        {{-- Alimentos y bebidas --}}

        <div class="contenedor_pregunta5-1 c_a">
            <label for="alimentos_bebidas" class="enunciado">
                Alimentos y bebidas
                {{-- <input type="checkbox" name="alimentos_bebidas" id="alimentos_bebidas" value='false' > --}}
            </label>
        </div>
        <div class="contenedor_pregunta5-1 c_a">
            <label for="">
                Restaurantes
                <input type="checkbox" name="restaurantres" id="restaurantres" value='false' >
            </label>
            <label for="cafeterias">Cafeterías
                <input type="checkbox" name="cafeterias" id="cafeterias" value='false' >
            </label>
            <label for="bares">Bares
                <input type="checkbox" name="bares" id="bares" value='false' >
            </label>
            <label for="fuentes_soda">Fuentes soda
                <input type="checkbox" name="fuentes_soda" id="fuentes_soda" value='false' >
            </label>
            <label for="observaciones_alim_bebi">Observaciones
                <input type="text" name="observaciones_alim_bebi" id="observaciones_alim_bebi"  >
            </label>
        </div>
        <div class="contenedor_pregunta5-1 c_a">
            <label for="establecimientos_registrados">
                Establecimientos registrados
                <input type="number" name='establecimientos_registrados' id ='establecimientos_registrados'  >
            </label>
    
            <label for="numero_habitaciones">
                Número de mesas
                <input type="number" name='numero_habitaciones' id ='numero_habitaciones'  >
            </label>
            
            <label for="numero_plazas">
                Número de Plazas
                <input type="number" name='numero_plazas' id ='numero_plazas'  >
            </label>
    
        </div>
        <hr>
        {{-- Agencias --}}
        <div class="contenedor_pregunta5-1 c_a">
            <label for="agencias" class="enunciado">
                Agencias de viaje
                {{-- <input type="checkbox" name="agencias" id="agenciasvalue='false'"> --}}
            </label>
        </div>
        
        <div class="contenedor_pregunta5-1 c_a">
            
            <label for="mayoristas">Mayoristas
                <input type="checkbox" name="mayoristas" id="mayoristas" value='false' >
            </label>
        
            <label for="internacionales">Internacionales
                <input type="checkbox" name="internacionales" id="internacionales" value='false' >
            </label>
            
            <label for="operadores">Operadores
                <input type="checkbox" name="operadores" id="operadores" value='false' >
            </label>

            <label for="agencias_establecimientos_registrados">Establecimientos registrados
                <input type="number" name="agencias_establecimientos_registrados" id="agencias_establecimientos_registrados"  >
            </label>
        </div>
        <div class="contenedor_pregunta5-1 c_a aux_guia">
            <label for="guia">Guía </label>
            <input type="checkbox" name="guia" id="guia" value="false">

            <label for="local">Local <input type="number" name="local" id="local" placeholder="0"></label>
            <label for="nacional">Nacional <input type="number" name="nacional" id="nacional" placeholder="0"></label>
            <label for="especializado">Nacional Especializado <input type="number" name="especializado" id="especializado" placeholder="0"></label>
            <label for="cultura">Cultura <input type="number" name="cultura" id="cultura" placeholder="0"></label>
            <label for="aventura">Aventura <input type="number" name="aventura" id="aventura" placeholder="0"></label>

        </div>
       
    </div>
    {{-- Pregunta 5 parte b --}}

    <div class="contenedor_padre aux_chk">
        {{-- Alojamiento --}}

        <div class="contenedor_pregunta5-1 c_a">
            <label for="5_1_b" class="enunciado">
                Alojamiento en la cuidad o poblado mas cercano. 
                {{-- <input type="checkbox" name="5_1_b" id="5_1_b" value='false' > --}}
    
            </label>
            
        </div>  
        <div class="contenedor_pregunta5-1 c_a">
            <label for="hotel">
                Hotel
                <input type="checkbox" name="hotel_b" id="hotel_b" value='false' >
    
            </label>
            <label for="hostal">
                Hostal
                <input type="checkbox" name="hostal_b" id="hostal_b" value='false' >
                
            </label>
            <label for="hosteria">
                Hosteria
                <input type="checkbox" name="hosteria_b" id="hosteria_b"_b value='false' >
                
            </label>
            <label for="hacienda_turistica">
                Hacienda Turistica
                <input type="checkbox" name="hacienda_turistica_b" id="hacienda_turistica_b" value='false' >
                
            </label>
            <label for="lodge">
                Lodge
                <input type="checkbox" name="lodge_b" id="lodge_b" value='false' >
                
            </label>
            <label for="resort">
                Resort
            <input type="checkbox" name="resort_b" id="resort_b" value='false' >
                
            </label>
            <label for="refugio">
                Refugio
                <input type="checkbox" name="refugio_b" id="refugio_b" value='false' >
                
            </label>
            <label for="campamento_turistico">
                Campamento Turistico
                <input type="checkbox" name="campamento_turistico_b" id="campamento_turistico_b" value='false' >
            </label>
            <label for="casa_huespedes">
                Casa de Huespedes
                <input type="checkbox" name="casa_huespedes_b" id="casa_huespedes_b" value='false' >
                
            </label>
            
            
        </div> 
        <div class="contenedor_pregunta5-1 c_a">
            <label for="establecimientos_registrados">
                Establecimientos registrados
                <input type="number" name='establecimientos_registrados_b' id ='establecimientos_registrados_b'  >
            </label>
    
            <label for="numero_habitaciones">
                Número de habitaciones
                <input type="number" name='numero_habitaciones_b' id ='numero_habitaciones_b'  >
            </label>
            
            <label for="numero_plazas">
                Número de Plazas
                <input type="number" name='numero_plazas_b' id ='numero_plazas_b'  >
            </label>
    
        </div>
        <hr>
        {{-- Alimentos y bebidas --}}

        <div class="contenedor_pregunta5-1 c_a">
            <label for="alimentos_bebidas" class="enunciado">
                Alimentos y bebidas
                {{-- <input type="checkbox" name="alimentos_bebidas" id="alimentos_bebidas" value='false' > --}}
            </label>
        </div>
        <div class="contenedor_pregunta5-1 c_a">
            <label for="">
                Restaurantes
                <input type="checkbox" name="restaurantres_b" id="restaurantres_b" value='false' >
            </label>
            <label for="cafeterias">cafeterias
                <input type="checkbox" name="cafeterias_b" id="cafeterias_b" value='false' >
            </label>
            <label for="bares">bares
                <input type="checkbox" name="bares_b" id="bares_b" value='false' >
            </label>
            <label for="fuentes_soda">fuentes_soda
                <input type="checkbox" name="fuentes_soda_b" id="fuentes_soda_b" value='false' >
            </label>
            <label for="observaciones_alim_bebi">observaciones
                <input type="text" name="observaciones_alim_bebi_b" id="observaciones_alim_bebi_b"  >
            </label>
        </div>
        <div class="contenedor_pregunta5-1 c_a">
            <label for="establecimientos_registrados">
                Establecimientos registrados
                <input type="number" name='establecimientos_registrados_b' id ='establecimientos_registrados_b'  >
            </label>
    
            <label for="numero_habitaciones">
                Número de Mesas
                <input type="number" name='numero_habitaciones_b' id ='numero_habitaciones_b'  >
            </label>
            
            <label for="numero_plazas">
                Número de Plazas
                <input type="number" name='numero_plazas_b' id ='numero_plazas_b'  >
            </label>
    
        </div>
        <hr>
        {{-- Agencias --}}
        <div class="contenedor_pregunta5-1 c_a">
            <label for="agencias" class="enunciado">
                Agencias de viaje
                {{-- <input type="checkbox" name="agencias" id="agencias"  value='false'> --}}
            </label>
        </div>
        
        <div class="contenedor_pregunta5-1 c_a">
            <label for="mayoristas">Mayoristas
                <input type="checkbox" name="mayoristas_b" id="mayoristas_b"  value='false'>
            </label>

            <label for="internacionales">Internacionales
                <input type="checkbox" name="internacionales_b" id="internacionales_b"  value='false'>
            </label>
            
            <label for="operadores">Operadores
                <input type="checkbox" name="operadores_b" id="operadores_b"  value='false'>
            </label>
            <label for="agencias_establecimientos_registrados">Establecimientos registrados
                <input type="number" name="agencias_establecimientos_registrados_b" id="agencias_establecimientos_registrados_b"  >

            </label>
        </div>
        <div class="contenedor_pregunta5-1 c_a aux_guia">
            <label for="guia">Guía </label>
            <input type="checkbox" name="guia_b" id="guia_b" value="false">

            <label for="local">Local <input type="number" name="local_b" id="local_b" placeholder="0"></label>
            <label for="nacional">Nacional <input type="number" name="nacional_b" id="naciona_bl" placeholder="0"></label>
            <label for="especializado">Nacional Especializado <input type="number" name="especializado_b" id="especializado_b" placeholder="0"></label>
            <label for="cultura">Cultura <input type="number" name="cultura_b" id="cultura_b" placeholder="0"></label>
            <label for="aventura">Aventura <input type="number" name="aventura_b" id="aventura_b" placeholder="0"></label>

        </div>
    </div>
    
    {{-- Facilidades en el entorno atractivo --}}
    <h5>
        <label for="pregunta_3_2" class='nombre_pregunta'>Facilidades en el entorno al atractivo
            {{-- <input type="checkbox" name="pregunta_3_2" id="pregunta_3_2" value='false' >     --}}
        </label>
    </h5>

    <div class="contenedor_padre aux_chk1">
        <label class="enunciado">De apoyo de la gestion turistica</label>
        <hr>
        <div class="contenedor_pregunta5-1 c_a">
            <label for="punto_informacion">Punto de Información
                <input type="checkbox" name="punto_informacion" id="punto_informacion" value='false'>
            </label>
            <label for="l-tur">l-tur
                <input type="checkbox" name="l-tur" id="l-tur" value='false'>
            </label>
            <label for="centro_interpretacion">Centro interpretacion
                <input type="checkbox" name="centro_interpretacion" id="centro_interpretacion" value='false'>
            </label>
            <label for="facilitacion_turistica"> Centro de faciltacion turistica
                <input type="checkbox" name="facilitacion_turistica" id="facilitacion_turistica" value='false'>
            </label>
            <label for="recepcion">Centro de recepcion de visitantes
                <input type="checkbox" name="recepcion" id="recepcion" value='false'>
            </label>
            
        </div>
        <div class="contenedor_pregunta5-1 c_a">
            <label for="cantidad"> Cantidad
                <input type="number" name="cantidad" id="cantidad">
            </label>
            <label for="corrdenadas"> Coordenadas
                <input type="number" name="corrdenadas" id="corrdenadas">
            </label>
            <label for="administrador">Administrador
                <input type="text" name="administrador" id="administrador">
            </label>
            <label for="5-2_select_estado_a">
                Estado(U)
                <select name="5-2_select_estado_a" id="5-2_select_estado_a">
                    <option value="">Seleccione estado</option>
                    <option value="bueno">Bueno</option>
                    <option value="regular">Regular</option>
                    <option value="malo">Malo</option>
                </select>
            </label>
        </div>
    </div>

    <div class="contenedor_padre aux_chk2">
        
        <label for="" class="enunciado">De Servicio</label>
        <hr>
        <div class="contenedor_pregunta5-1 c_a">
            <label for="baterias_sanitarias">Baterías Sanitarias
                <input type="checkbox" name="baterias_sanitarias" id="baterias_sanitarias" value='false'>
            </label>
            <label for="estacionamientos">estacionamientos
                <input type="checkbox" name="estacionamientos" id="estacionamientos" value='false'>
            </label>
        </div>
        
        <div class="contenedor_pregunta5-1 c_a">
            <label for="cantidad"> Cantidad
                <input type="number" name="cantidad" id="cantidad">
            </label>
            <label for="corrdenadas"> Coordenadas
                <input type="number" name="corrdenadas" id="corrdenadas">
            </label>
            <label for="administrador">Administrador
                <input type="text" name="administrador" id="administrador">
            </label>
            <label for="5-2_select_estado_b">
                Estado(U)
                <select name="5-2_select_estado_b" id="5-2_select_estado_b">
                    <option value="">Seleccione estado</option>
                    <option value="bueno">Bueno</option>
                    <option value="regular">Regular</option>
                    <option value="malo">Malo</option>
                </select>
            </label>
        </div>
    </div>
    <div class="contenedor_padre aux_chk3">

        <label for="" class="enunciado">De observacion y vigilacia</label>
        <hr>
        <div class="contenedor_pregunta5-1 c_a">
            <label for="guardiania">Guardianía
                <input type="checkbox" name="guardiania" id="guardiania" value='false'>
            </label>
            <label for="miradores">Miradores
                <input type="checkbox" name="miradores" id="miradores" value='false'>
            </label>
            <label for="torres_aves">Torres aves
                <input type="checkbox" name="torres_aves" id="torres_aves" value='false'>
            </label>
            <label for="torres_salvavidas">
                <input type="checkbox" name="torres_salvavidas" id="torres_salvavidas" value='false'>
            </label>
        </div>
        <div class="contenedor_pregunta5-1 c_a">
            <label for="cantidad">Cantidad
                <input type="number" name="cantidad" id="cantidad">
            </label>
            <label for="corrdenadas">Coordenadas
                <input type="number" name="corrdenadas" id="corrdenadas">
            </label>
            <label for="administrador">Administrador
                <input type="text" name="administrador" id="administrador">
            </label>
            <label for="5-2_select_estado_c">
                Estado(U)
                <select name="5-2_select_estado_c" id="5-2_select_estado_c">
                    <option value="" >Seleccione Estado</option>
                    <option value="bueno">Bueno</option>
                    <option value="regular">Regular</option>
                    <option value="malo">Malo</option>
                </select>
            </label>
        </div>
    </div>
    <div class="contenedor_padre aux_chk5555">
        <label for="" class="enunciado">De recorrido y descanso</label>
        <hr>
        <div class="contenedor_pregunta5-1 c_a">
            <label for="senderos">Senderos
                <input type="checkbox" name="senderos" id="senderos" value='false'>
            </label>
            <label for="sombra">Estaciones de descanso y sombra
                <input type="checkbox" name="sombra" id="sombra" value='false'>
            </label>
            <label for="acampar">Áreas de acampar
                <input type="checkbox" name="acampar" id="acampar" value='false'>
            </label>
            <label for="refugios">Refugios de Alta montaña
                <input type="checkbox" name="refugios" id="refugios" value='false'>
            </label>
        </div>
        <div class="contenedor_pregunta5-1 c_a">
            <label for="cantidad">Cantidad
                <input type="number" name="cantidad_d" id="cantidad_d">
            </label>
            <label for="corrdenadas">Coordenadas
                <input type="number" name="corrdenadas_d" id="corrdenadas_d">
            </label>
            <label for="administrador">Administrador
                <input type="text" name="administrador_d" id="administrador_d">
            </label>
            <label for="5-2_select_estado_c">
                Estado(U)
                <select name="5-2_select_estado_d" id="5-2_select_estado_d">
                    <option value="">Seleccione Estado</option>
                    <option value="bueno">Bueno</option>
                    <option value="regular">Regular</option>
                    <option value="malo">Malo</option>
                </select>
            </label>
        </div>
    </div>
    <div class="contenedor_padre aux_chk4">    
        <label for="" class="enunciado">Otros</label>
        <hr>
        <div class="contenedor_pregunta5-1 c_a">
            <label for="cantidad_e"> Cantidad
                <input type="number" name="cantidad_e" id="cantidad_e">
            </label>
            <label for="corrdenadas"> Coordenadas
                <input type="number" name="corrdenadas_e" id="corrdenadas_e">
            </label>
            <label for="administrador">Administrador
                <input type="text" name="administrador_e" id="administrador_e">
            </label>
            <label for="5-2_select_estado_e">
                Estado(U)
                <select name="5-2_select_estado_e" id="5-2_select_estado_e">
                    <option value="" >Seleccione estado</option>
                    <option value="bueno">Bueno</option>
                    <option value="regular">Regular</option>
                    <option value="malo">Malo</option>
                </select>
            </label>
        </div>

    </div>

    <h5>
        <label class='nombre_pregunta'>Complementarios a la actividad turística (M)
            {{-- <input type="checkbox"  >     --}}
        </label>
    </h5>
    <div class="contenedor_padre aux_chk5">
        <label class="enunciado"> En el atractivo</label>
        <div class="contenedor_pregunta5-1 c_a">
            <label for="equipamiento_atrac">Alquiler y venta de equipo especializado
                <input type="checkbox" name="equipamiento_atrac" id="equipamiento_atrac" value='false'>
            </label>
            <label for="artesanias_atrac">Venta de artesanías y merchandising
                <input type="checkbox" name="artesanias_atrac" id="artesanias_atrac" value='false'>
            </label>
            <label for="casa_cambio_atrac">Casa de cambio
                <input type="checkbox" name="casa_cambio_atrac" id="casa_cambio_atrac" value='false'>
            </label>
            <label for="cajero_atrac">Cajero automatico
                <input type="checkbox" name="cajero_atrac" id="cajero_atrac" value='false'>
            </label>
            <label for="otro_atrac">Otro
                <input type="checkbox" name="otro_atrac" id="otro_atrac" value='false'>
            </label>
        </div>
        
    </div>
    <div class="contenedor_padre aux_chk6">
        <label class="enunciado"> En la cuidad o poblado más cercano</label>
        <div class="contenedor_pregunta5-1 c_a">
            <label for="equipamiento_cui">Alquiler y venta de equipo especializado
                <input type="checkbox" name="equipamiento_cui" id="equipamiento_cui" value='false'>
            </label>
            <label for="artesanias_mas_cercano">Venta de artesanías y merchandising
                <input type="checkbox" name="artesanias_mas_cercano" id="artesanias_mas_cercano" value='false'>
            </label>
            <label for="casa_cambio_cui">Casa de cambio
                <input type="checkbox" name="casa_cambio_mas_cercano" id="casa_cambio_mas_cercano" value='false'>
            </label>
            <label for="cajero_mas_cercano">Cajero automático
                <input type="checkbox" name="cajero_mas_cercano" id="cajero_mas_cercano" value='false'>
            </label>
            <label for="otro_cui">Otro
                <input type="checkbox" name="otro_mas_cercano" id="otro_mas_cercano" value='false'>
            </label>
        </div>
        
    </div>
    <div>
        @if (isset($data_4))
            <script>
                var data4 = '{{!!$data_4!!}}'.slice(1,-1);
                console.log(data4);
                sessionStorage.setItem('data4__',data4);
            </script>
        @else
            <script> console.error("Dta4__ no fue agregada!"); </script>

        @endif
        
    </div>
    <button type="submit" class="guardar_continuar" >
        Guardar y Continuar 
        <i class="fas fa-arrow-right"></i>
    </button>
</form>
    
    <button class="atras" onclick="location.href = `{{route('encuesta.seccion4')}}` " >
        <i class="fas fa-arrow-left"></i>
        Atras
    </button>
    
@endsection
@section('scripts')
    
    <script>
        var errores = JSON.parse('{{!!$errors!!}}'.slice(1,-1));
        console.log(errores);
        document.querySelector('#form4').addEventListener('submit',(e)=>{
            if(errores.length >0){
                e.preventDefault();
            }
        });
        
    </script>
    <script src="{{asset('js/checkbox_change_value_boolean.js')}}"></script>
    <script>
        chk_to_validate('.contenedor_padre');
        chk_to_validate('.aux_chk');
        chk_to_validate('.aux_chk1');
        chk_to_validate('.aux_chk2');
        chk_to_validate('.aux_chk3');
        chk_to_validate('.aux_chk4');
        chk_to_validate('.aux_chk5');
        chk_to_validate('.aux_chk6');
        chk_to_validate('.aux_chk5555');


    </script>
    <script src="{{asset('js/pre_load_sec5.js')}}"></script>
    
@endsection