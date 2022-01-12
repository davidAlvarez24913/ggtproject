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
            <input type="checkbox" name="5planta_turistica" id="5planta_turistica">
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
            <a href="{{ route('encuesta.guardar')}}">Guaradar Datos</a>

          </div>
        
    </div>
    {{-- Pregunta 5 parte a --}}
    <div class="contenedor_padre">
        <div class="contenedor_pregunta5-1 c_a">
            <label for="atractivo">
                En el atractivo Alojamiento
                <input type="checkbox" name="atractivo" id="atractivo">
            </label>
            
        </div>  
        {{-- Alojamiento --}}
        <div class="contenedor_pregunta5-1 c_a">
            <label for="hotel">
                Hotel
                <input type="checkbox" name="hotel" id="hotel" required>
    
            </label>
            <label for="hostal">
                hostal
                <input type="checkbox" name="hostal" id="hostal" required>
                
            </label>
            <label for="hosteria">
                hosteria
                <input type="checkbox" name="hosteria" id="hosteria" required>
                
            </label>
            <label for="hacienda_turistica">
                Hacienda Turistica
                <input type="checkbox" name="hacienda_turistica" id="hacienda_turistica" required>
                
            </label>
            <label for="lodge">
                Lodge
                <input type="checkbox" name="lodge" id="lodge" required>
                
            </label>
            <label for="resort">
                Resort
            <input type="checkbox" name="resort" id="resort" required>
                
            </label>
            <label for="refugio">
                Refugio
                <input type="checkbox" name="refugio" id="refugio" required>
                
            </label>
            <label for="campamento_turistico">
                Campamento Turistico
                <input type="checkbox" name="campamento_turistico" id="campamento_turistico" required>
            </label>
            <label for="casa_huespedes">
                Casa de Huespedes
                <input type="checkbox" name="casa_huespedes" id="casa_huespedes" required>
                
            </label>
            
            
        </div> 
        <div class="contenedor_pregunta5-1 c_a">
            <label for="establecimientos_registrados">
                Establecimientos Registrados
                <input type="number" name='establecimientos_registrados' id ='establecimientos_registrados' required>
            </label>
    
            <label for="numero_habitaciones">
                Número de habitaciones 
                <input type="number" name='numero_habitaciones' id ='numero_habitaciones' required>
            </label>
            
            <label for="numero_plazas">
                Número de Plazas
                <input type="number" name='numero_plazas' id ='numero_plazas' required>
            </label>
    
        </div>
        <hr>
        {{-- Alimentos y bebidas --}}

        <div class="contenedor_pregunta5-1 c_a">
            <label for="alimentos_bebidas" class='nombre_pregunta'>
                Alimentos y bebidas
                <input type="checkbox" name="alimentos_bebidas" id="alimentos_bebidas" required>
            </label>
        </div>
        <div class="contenedor_pregunta5-1 c_a">
            <label for="">
                Restaurantes
                <input type="checkbox" name="restaurantres" id="restaurantres" required>
            </label>
            <label for="cafeterias">cafeterias
                <input type="checkbox" name="cafeterias" id="cafeterias" required>
            </label>
            <label for="bares">bares
                <input type="checkbox" name="bares" id="bares" required>
            </label>
            <label for="fuentes_soda">fuentes_soda
                <input type="checkbox" name="fuentes_soda" id="fuentes_soda" required>
            </label>
            <label for="observaciones_alim_bebi">observaciones
                <input type="text" name="observaciones_alim_bebi" id="observaciones_alim_bebi" required>
            </label>
        </div>
        <div class="contenedor_pregunta5-1 c_a">
            <label for="establecimientos_registrados">
                Establecimientos registrados
                <input type="number" name='establecimientos_registrados' id ='establecimientos_registrados' required>
            </label>
    
            <label for="numero_habitaciones">
                Número de mesas
                <input type="number" name='numero_habitaciones' id ='numero_habitaciones' required>
            </label>
            
            <label for="numero_plazas">
                Número de Plazas
                <input type="number" name='numero_plazas' id ='numero_plazas' required>
            </label>
    
        </div>
        <hr>
        {{-- Agencias --}}
        <div class="contenedor_pregunta5-1 c_a">
            <label for="agencias">
                Agencias de viaje
                <input type="checkbox" name="agencias" id="agencias">
            </label>
        </div>
        
        <div class="contenedor_pregunta5-1 c_a">
            <label for="mayoristas">Mayoristas
                <input type="checkbox" name="mayoristas" id="mayoristas" required>
            </label>
        
            <label for="internacionales">Internacionales
                <input type="checkbox" name="internacionales" id="internacionales" required>
            </label>
            
            <label for="operadores">operadores
                <input type="checkbox" name="operadores" id="operadores" required>
            </label>

            <label for="agencias_establecimientos_registrados">Establecimientos registrados
                <input type="number" name="agencias_establecimientos_registrados" id="agencias_establecimientos_registrados" required>
            </label>
        </div>
       
    </div>
    {{-- Pregunta 5 parte b --}}

    <div class="contenedor_padre">
        {{-- Alojamiento --}}

        <div class="contenedor_pregunta5-1 c_a">
            <label for="5_1_b">
                En la cuidad o poblado mas cercano Alojamiento
                <input type="checkbox" name="5_1_b" id="5_1_b" required>
    
            </label>
            
        </div>  
        <div class="contenedor_pregunta5-1 c_a">
            <label for="hotel">
                Hotel
                <input type="checkbox" name="hotel" id="hotel" required>
    
            </label>
            <label for="hostal">
                hostal
                <input type="checkbox" name="hostal" id="hostal" required>
                
            </label>
            <label for="hosteria">
                hosteria
                <input type="checkbox" name="hosteria" id="hosteria" required>
                
            </label>
            <label for="hacienda_turistica">
                Hacienda Turistica
                <input type="checkbox" name="hacienda_turistica" id="hacienda_turistica" required>
                
            </label>
            <label for="lodge">
                Lodge
                <input type="checkbox" name="lodge" id="lodge" required>
                
            </label>
            <label for="resort">
                Resort
            <input type="checkbox" name="resort" id="resort" required>
                
            </label>
            <label for="refugio">
                Refugio
                <input type="checkbox" name="refugio" id="refugio" required>
                
            </label>
            <label for="campamento_turistico">
                Campamento Turistico
                <input type="checkbox" name="campamento_turistico" id="campamento_turistico" required>
            </label>
            <label for="casa_huespedes">
                Casa de Huespedes
                <input type="checkbox" name="casa_huespedes" id="casa_huespedes" required>
                
            </label>
            
            
        </div> 
        <div class="contenedor_pregunta5-1 c_a">
            <label for="establecimientos_registrados">
                Establecimientos registrados
                <input type="number" name='establecimientos_registrados' id ='establecimientos_registrados' required>
            </label>
    
            <label for="numero_habitaciones">
                Número de habitaciones
                <input type="number" name='numero_habitaciones' id ='numero_habitaciones' required>
            </label>
            
            <label for="numero_plazas">
                Número de Plazas
                <input type="number" name='numero_plazas' id ='numero_plazas' required>
            </label>
    
        </div>
        <hr>
        {{-- Alimentos y bebidas --}}

        <div class="contenedor_pregunta5-1 c_a">
            <label for="alimentos_bebidas" class='nombre_pregunta'>
                Alimentos y bebidas
                <input type="checkbox" name="alimentos_bebidas" id="alimentos_bebidas" required>
            </label>
        </div>
        <div class="contenedor_pregunta5-1 c_a">
            <label for="">
                Restaurantes
                <input type="checkbox" name="restaurantres" id="restaurantres" required>
            </label>
            <label for="cafeterias">cafeterias
                <input type="checkbox" name="cafeterias" id="cafeterias" required>
            </label>
            <label for="bares">bares
                <input type="checkbox" name="bares" id="bares" required>
            </label>
            <label for="fuentes_soda">fuentes_soda
                <input type="checkbox" name="fuentes_soda" id="fuentes_soda" required>
            </label>
            <label for="observaciones_alim_bebi">observaciones
                <input type="text" name="observaciones_alim_bebi" id="observaciones_alim_bebi" required>
            </label>
        </div>
        <div class="contenedor_pregunta5-1 c_a">
            <label for="establecimientos_registrados">
                Establecimientos registrados
                <input type="number" name='establecimientos_registrados' id ='establecimientos_registrados' required>
            </label>
    
            <label for="numero_habitaciones">
                Número de Mesas
                <input type="number" name='numero_habitaciones' id ='numero_habitaciones' required>
            </label>
            
            <label for="numero_plazas">
                Número de Plazas
                <input type="number" name='numero_plazas' id ='numero_plazas' required>
            </label>
    
        </div>
        <hr>
        {{-- Agencias --}}
        <div class="contenedor_pregunta5-1 c_a">
            <label for="agencias">
                Agencias de viaje
                <input type="checkbox" name="agencias" id="agencias" required>
            </label>
        </div>
        
        <div class="contenedor_pregunta5-1 c_a">
            <label for="mayoristas">mayoristas
                <input type="checkbox" name="mayoristas" id="mayoristas" required>
            </label>

            <label for="internacionales">internacionales
                <input type="checkbox" name="internacionales" id="internacionales" required>
            </label>
            
            <label for="operadores">operadores
                <input type="checkbox" name="operadores" id="operadores" required>
            </label>
            <label for="agencias_establecimientos_registrados">Establecimientos registrados
                <input type="number" name="agencias_establecimientos_registrados" id="agencias_establecimientos_registrados" required>

            </label>
        </div>
    </div>
    
    {{-- Facilidades en el entorno atractivo --}}
    <h5>
        <label for="pregunta_3_2" class='nombre_pregunta'>Facilidades en el entorno al atractivo
            <input type="checkbox" name="pregunta_3_2" id="pregunta_3_2" required>    
        </label>
    </h5>
    <div class="contenedor_padre">
        <label>De apoyo de la gestion turistica</label>

        <div class="contenedor_pregunta5-1 c_a">
            <label for="punto_informacion">Punto de Información
                <input type="checkbox" name="punto_informacion" id="punto_informacion">
            </label>
            <label for="l-tur">l-tur
                <input type="checkbox" name="l-tur" id="l-tur">
            </label>
            <label for="centro_interpretacion"> centro interpretacion
                <input type="checkbox" name="centro_interpretacion" id="centro_interpretacion">
            </label>
            <label for="facilitacion_turistica"> Centro de faciltacion turistica
                <input type="checkbox" name="facilitacion_turistica" id="facilitacion_turistica">
            </label>
            <label for="recepcion">Centro de recepcion de visitantes
                <input type="checkbox" name="recepcion" id="recepcion">
            </label>
            
        </div>
        <div class="contenedor_pregunta5-1 c_a">
            <label for="cantidad">cantidad
                <input type="number" name="cantidad" id="cantidad">
            </label>
            <label for="corrdenadas">corrdenadas
                <input type="number" name="corrdenadas" id="corrdenadas">
            </label>
            <label for="administrador">administrador
                <input type="text" name="administrador" id="administrador">
            </label>
            <label for="5-2_select_estado">
                Estado(U)
                <select name="5-2_select_estado" id="5-2_select_estado">
                    <option >Seleccione estado</option>
                    <option value="bueno">bueno</option>
                    <option value="regular">regular</option>
                    <option value="malo">malo</option>
                </select>
            </label>
        </div>
        
        <label for="">De recorrido y descanso</label>

        <div class="contenedor_pregunta5-1 c_a">
            <label for="senderos">senderos
                <input type="checkbox" name="senderos" id="senderos">
            </label>
            <label for="estaciones_descanso">estaciones_descanso
                <input type="checkbox" name="estaciones_descanso" id="estaciones_descanso">
            </label>
            <label for="areas_acampar">areas_acampar
                <input type="checkbox" name="areas_acampar" id="areas_acampar">
            </label>
            <label for="regufio">regufio de alta maontaña
                <input type="checkbox" name="regufio" id="regufio">
            </label>
        </div>
        <div class="contenedor_pregunta5-1 c_a">
            <label for="cantidad">cantidad
                <input type="number" name="cantidad" id="cantidad">
            </label>
            <label for="corrdenadas">corrdenadas
                <input type="number" name="corrdenadas" id="corrdenadas">
            </label>
            <label for="administrador">administrador
                <input type="text" name="administrador" id="administrador">
            </label>
            <label for="5-2_select_estado">
                Estado(U)
                <select name="5-2_select_estado" id="5-2_select_estado">
                    <option >Seleccione estado</option>
                    <option value="bueno">bueno</option>
                    <option value="regular">regular</option>
                    <option value="malo">malo</option>
                </select>
            </label>
        </div>

        <label for="">De Servicio</label>
        <div class="contenedor_pregunta5-1 c_a">
            <label for="baterias_sanitarias">Baterías Sanitarias
                <input type="checkbox" name="baterias_sanitarias" id="baterias_sanitarias">
            </label>
            <label for="estacionamientos">estacionamientos
                <input type="checkbox" name="estacionamientos" id="estacionamientos">
            </label>
        </div>
        
        <div class="contenedor_pregunta5-1 c_a">
            <label for="cantidad">cantidad
                <input type="number" name="cantidad" id="cantidad">
            </label>
            <label for="corrdenadas">corrdenadas
                <input type="number" name="corrdenadas" id="corrdenadas">
            </label>
            <label for="administrador">administrador
                <input type="text" name="administrador" id="administrador">
            </label>
            <label for="5-2_select_estado">
                Estado(U)
                <select name="5-2_select_estado" id="5-2_select_estado">
                    <option >Seleccione estado</option>
                    <option value="bueno">bueno</option>
                    <option value="regular">regular</option>
                    <option value="malo">malo</option>
                </select>
            </label>
        </div>

        <label for="">de observacion y vigilacia</label>
        <div class="contenedor_pregunta5-1 c_a">
            <label for="guardiania">guardiania
                <input type="checkbox" name="guardiania" id="guardiania">
            </label>
            <label for="miradores">miradores
                <input type="checkbox" name="miradores" id="miradores">
            </label>
            <label for="torres_aves">torres_aves
                <input type="checkbox" name="torres_aves" id="torres_aves">
            </label>
            <label for="torres_salvavidas">
                <input type="checkbox" name="torres_salvavidas" id="torres_salvavidas">
            </label>
        </div>
        <div class="contenedor_pregunta5-1 c_a">
            <label for="cantidad">cantidad
                <input type="number" name="cantidad" id="cantidad">
            </label>
            <label for="corrdenadas">corrdenadas
                <input type="number" name="corrdenadas" id="corrdenadas">
            </label>
            <label for="administrador">administrador
                <input type="text" name="administrador" id="administrador">
            </label>
            <label for="5-2_select_estado">
                Estado(U)
                <select name="5-2_select_estado" id="5-2_select_estado">
                    <option >Seleccione estado</option>
                    <option value="bueno">bueno</option>
                    <option value="regular">regular</option>
                    <option value="malo">malo</option>
                </select>
            </label>
        </div>

        <label for="">Otros</label>
        <div class="contenedor_pregunta5-1 c_a">
            <label for="cantidad">cantidad
                <input type="number" name="cantidad" id="cantidad">
            </label>
            <label for="corrdenadas">corrdenadas
                <input type="number" name="corrdenadas" id="corrdenadas">
            </label>
            <label for="administrador">administrador
                <input type="text" name="administrador" id="administrador">
            </label>
            <label for="5-2_select_estado">
                Estado(U)
                <select name="5-2_select_estado" id="5-2_select_estado">
                    <option >Seleccione estado</option>
                    <option value="bueno">bueno</option>
                    <option value="regular">regular</option>
                    <option value="malo">malo</option>
                </select>
            </label>
        </div>

    </div>

    <h5>
        <label for="" class='nombre_pregunta'>Complementarios a ala activida turistica (M)
            <input type="checkbox" name="" id="" required>    
        </label>
    </h5>
    <div class="contenedor_padre">
        <label for=""> En el atractivo</label>
        <div class="contenedor_pregunta5-1 c_a">
            <label for="equipamiento">Alquiler y venta de equipo especializado
                <input type="checkbox" name="equipamiento" id="equipamiento">
            </label>
            <label for="artesanias">Venta de artesanoas y merchandising
                <input type="checkbox" name="artesanias" id="artesanias">
            </label>
            <label for="casa_cambio">casa de cambio
                <input type="checkbox" name="casa_cambio" id="casa_cambio">
            </label>
            <label for="cajero">cajero automatico
                <input type="checkbox" name="cajero" id="cajero">
            </label>
            <label for="otro">otro
                <input type="checkbox" name="otro" id="otro">
            </label>
        </div>
        
    </div>
    <div class="contenedor_padre">
        <label for=""> En la cuidad o poblado más cercano</label>
        <div class="contenedor_pregunta5-1 c_a">
            <label for="equipamiento">Alquiler y venta de equipo especializado
                <input type="checkbox" name="equipamiento" id="equipamiento">
            </label>
            <label for="artesanias">Venta de artesanoas y merchandising
                <input type="checkbox" name="artesanias" id="artesanias">
            </label>
            <label for="casa_cambio">casa de cambio
                <input type="checkbox" name="casa_cambio" id="casa_cambio">
            </label>
            <label for="cajero">cajero automatico
                <input type="checkbox" name="cajero" id="cajero">
            </label>
            <label for="otro">otro
                <input type="checkbox" name="otro" id="otro">
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
            <script> console.error("Algo muy malo ocurrio!"); </script>

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

<script src="{{asset('js/deshabilitarPreguntas.js')}}"></script>
<script src="{{asset('js/retrieve5.js')}}"></script>
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
    
@endsection