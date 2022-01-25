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
            <a href="{{ route('encuesta.guardar')}}">Guardar Datos</a>

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
                <input type="checkbox" name="hotel" id="hotel" value='false' >
    
            </label>
            <label for="hostal">
                Hostal
                <input type="checkbox" name="hostal" id="hostal" value='false' >
                
            </label>
            <label for="hosteria">
                Hosteria
                <input type="checkbox" name="hosteria" id="hosteria" value='false' >
                
            </label>
            <label for="hacienda_turistica">
                Hacienda Turistica
                <input type="checkbox" name="hacienda_turistica" id="hacienda_turistica" value='false' >
                
            </label>
            <label for="lodge">
                Lodge
                <input type="checkbox" name="lodge" id="lodge" value='false' >
                
            </label>
            <label for="resort">
                Resort
            <input type="checkbox" name="resort" id="resort" value='false' >
                
            </label>
            <label for="refugio">
                Refugio
                <input type="checkbox" name="refugio" id="refugio" value='falsvalue='false'e' >
                
            </label>
            <label for="campamento_turistico">
                Campamento Turistico
                <input type="checkbox" name="campamento_turistico" id="campamento_turistico" value='falsvalue='false'e' >
            </label>
            <label for="casa_huespedes">
                Casa de Huespedes
                <input type="checkbox" name="casa_huespedes" id="casa_huespedes" value='falsvalue='false'e' >
                
            </label>
            
            
        </div> 
        <div class="contenedor_pregunta5-1 c_a">
            <label for="establecimientos_registrados">
                Establecimientos registrados
                <input type="number" name='establecimientos_registrados' id ='establecimientos_registrados'  >
            </label>
    
            <label for="numero_habitaciones">
                Número de habitaciones
                <input type="number" name='numero_habitaciones' id ='numero_habitaciones'  >
            </label>
            
            <label for="numero_plazas">
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
            <label for="cafeterias">cafeterias
                <input type="checkbox" name="cafeterias" id="cafeterias" value='false' >
            </label>
            <label for="bares">bares
                <input type="checkbox" name="bares" id="bares" value='false' >
            </label>
            <label for="fuentes_soda">fuentes_soda
                <input type="checkbox" name="fuentes_soda" id="fuentes_soda" value='false' >
            </label>
            <label for="observaciones_alim_bebi">observaciones
                <input type="text" name="observaciones_alim_bebi" id="observaciones_alim_bebi"  >
            </label>
        </div>
        <div class="contenedor_pregunta5-1 c_a">
            <label for="establecimientos_registrados">
                Establecimientos registrados
                <input type="number" name='establecimientos_registrados' id ='establecimientos_registrados'  >
            </label>
    
            <label for="numero_habitaciones">
                Número de Mesas
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
                {{-- <input type="checkbox" name="agencias" id="agencias"  value='false'> --}}
            </label>
        </div>
        
        <div class="contenedor_pregunta5-1 c_a">
            <label for="mayoristas">Mayoristas
                <input type="checkbox" name="mayoristas" id="mayoristas"  value='false'>
            </label>

            <label for="internacionales">Internacionales
                <input type="checkbox" name="internacionales" id="internacionales"  value='false'>
            </label>
            
            <label for="operadores">Operadores
                <input type="checkbox" name="operadores" id="operadores"  value='false'>
            </label>
            <label for="agencias_establecimientos_registrados">Establecimientos registrados
                <input type="number" name="agencias_establecimientos_registrados" id="agencias_establecimientos_registrados"  >

            </label>
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
            <label for="centro_interpretacion"> centro interpretacion
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
            <label for="5-2_select_estado">
                Estado(U)
                <select name="5-2_select_estado" id="5-2_select_estado">
                    <option >Seleccione estado</option>
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
            <label for="5-2_select_estado">
                Estado(U)
                <select name="5-2_select_estado" id="5-2_select_estado">
                    <option >Seleccione estado</option>
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
            <label for="5-2_select_estado">
                Estado(U)
                <select name="5-2_select_estado" id="5-2_select_estado">
                    <option >Seleccione Estado</option>
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
            <label for="cantidad"> Cantidad
                <input type="number" name="cantidad" id="cantidad">
            </label>
            <label for="corrdenadas"> Coordenadas
                <input type="number" name="corrdenadas" id="corrdenadas">
            </label>
            <label for="administrador">Administrador
                <input type="text" name="administrador" id="administrador">
            </label>
            <label for="5-2_select_estado">
                Estado(U)
                <select name="5-2_select_estado" id="5-2_select_estado">
                    <option >Seleccione estado</option>
                    <option value="bueno">Bueno</option>
                    <option value="regular">Regular</option>
                    <option value="malo">Malo</option>
                </select>
            </label>
        </div>

    </div>

    <h5>
        <label class='nombre_pregunta'>Complementarios a ala activida turistica (M)
            {{-- <input type="checkbox"  >     --}}
        </label>
    </h5>
    <div class="contenedor_padre aux_chk5">
        <label class="enunciado"> En el atractivo</label>
        <div class="contenedor_pregunta5-1 c_a">
            <label for="equipamiento_atrac">Alquiler y venta de equipo especializado
                <input type="checkbox" name="equipamiento_atrac" id="equipamiento_atrac" value='false'>
            </label>
            <label for="artesanias_atrac">Venta de artesanoas y merchandising
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
            <label for="artesanias_cui">Venta de artesanos y merchandising
                <input type="checkbox" name="artesanias_cui" id="artesanias_cui" value='false'>
            </label>
            <label for="casa_cambio_cui">Casa de cambio
                <input type="checkbox" name="casa_cambio_cui" id="casa_cambio_cui" value='false'>
            </label>
            <label for="cajero_cui">Cajero automático
                <input type="checkbox" name="cajero_cui" id="cajero_cui" value='false'>
            </label>
            <label for="otro_cui">Otro
                <input type="checkbox" name="otro_cui" id="otro_cui" value='false'>
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

    </script>
    <script src="{{asset('js/pre_load_sec5.js')}}"></script>
    
@endsection