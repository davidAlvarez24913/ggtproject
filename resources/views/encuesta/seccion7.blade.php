@extends('layouts.plantilla')

@section('title','Seccion 7')
@section('head')
    <link rel="stylesheet" href="{{asset('/css/seccion7.css')}}">
    <meta name="csrf-token" content="{{ csrf_token()}}">
    
@endsection

@section('content')
<h4>7. Higiene y Seguridad Turística</h4>
<h5>
    <label for="" class='nombre_pregunta'>Servicios Básicos
        {{-- <input type="checkbox" name="" id="" > --}}
    </label>
</h5>
<form id='form6' action="{{route('encuesta.retrieve_7')}}" method="POST">
    @csrf
    <div class="menu_lateral ">
        <i class="fas fa-bars _menu"></i>
        <div class="contenido">
            <label for="">Menu Secciones</label>
            <hr>
            <a href="{{route('encuesta.seccion1_2')}}">Seccion 1 y 2</a>
            <a href="{{route('encuesta.seccion3')}}">Seccion 3</a>
            <a href="{{route('encuesta.seccion4')}}">Seccion 4</a>
            <a href="{{route('encuesta.seccion5')}}">Seccion 5</a>
            <a href="{{route('encuesta.seccion6')}}">Seccion 6</a>
            <a href="{{route('encuesta.guardar')}}">Panel de Progreso</a>
        </div>
        
    </div>
    <div class="contenedor_padre ">
        <div class="_titulo_" >En el Alojamiento.</div>
        <hr>
        {{-- pregunta 7.1-a --}}
        <div class='contenedor_seccion7 pregunta7-1-a'>
            <div class="col_1">
                <label for="agua">Agua:</label>
                <label for="energia">Energía eléctrica:</label>
            </div>
            <div class="col_2">
                <input type="checkbox" name="p7_1-a_agua" id="agua" value='false'>
                <input type="checkbox" name="p7_1-a_energia" id="energia" value='false'>
            </div>
            <div class="col_3_aux">
                <input type="text" name="p7_1-a_especifique_agua" placeholder=" Especifique">
                <input type="text" name="p7_1-a_especifique_energia"  placeholder=" Especifique">
            </div>
            <div class="col_1">
                <label for="">Saneamiento:</label>
                <label for="">Disposición de desechos</label>
            </div>
            <div class="col_2">
                <input type="checkbox" name="p7_1-a_saneamiento" id="" value='false'>
                <input type="checkbox" name="p7_1-a_desechos" id="" value='false'>
        
            </div>
            <div class="col_3_aux">
                <input type="text" name="p7_1-a_especifique_saneamieno"  placeholder=" Especifique">
                <input type="text" name="p7_1-a_especifique_desechos"  placeholder=" Especifique">
            </div>
        </div>
        <div class="fila">
            <label for="observaciones">Observaciones:</label>
            <input type="text" name="observaciones">
        </div>
        {{-- FIN pregunta 7.1-a --}}


    </div>

    <div class="contenedor_padre">
        <div class="_titulo_" >En la cuidad o el pueblo mas cercano.</div>
        <hr>
        <div class='contenedor_seccion7 pregunta7-1-b'>
            <div class="col_1">
                <label for="b_agua">Agua:</label>
                <label for="p7_1-b_energia">Energía eléctrica:</label>
            </div>
            <div class="col_2">
                <input type="checkbox" name="p7_1-b_agua" id="p7_1-b_agua" value='false'>
                <input type="checkbox" name="p7_1-b_energia" id="p7_1-b_energia" value='false'>
            </div>
            <div class="col_3_aux">
                <input type="text" name="p7_1-b_observacion1" id="p7_1-b_observacion1" placeholder=" Especifique">
                <input type="text" name="p7_1-b_observacion2" id="p7_1-b_observacion2" placeholder=" Especifique">
            </div>
            <div class="col_1">
                <label for="p7_1-b_saneamiento">Saneamiento:</label>
                <label for="p7_1-b_desechos">Disposición de desechos</label>
            </div>
            <div class="col_2">
                <input type="checkbox" name="p7_1-b_saneamiento" id="p7_1-b_saneamiento" value='false'>
                <input type="checkbox" name="p7_1-b_desechos" id="p7_1-b_desechos" value='false'>
        
            </div>
            <div class="col_3_aux">
                <input type="text" name="p7_1-b_observacion3" id="p7_1-b_observacion3" placeholder=" Especifique">
                <input type="text" name="p7_1-b_observacion4" id="p7_1-b_observacion4" placeholder=" Especifique">
            </div>
        </div>
        <div class="fila">
            <label for="observaciones">Observaciones:</label>
            <input type="text" name="observaciones">
        </div>

    </div>

    <h5>
        <label for="pregunta_3_2" class='nombre_pregunta'>Señaléctica en el atractivo
            {{-- <input type="checkbox" name="pregunta_3_2" id="pregunta_3_2" value='false'>     --}}
        </label>
    </h5>
    <div class="contenedor_5filas">
        {{--  --}}
        <div class="fila_1">
            <label for="">Ambiente</label>
            <label for="">Tipo</label>
            <div class="subtitulos_materiales">
                <label for="">Materiales</label>
                <div class="subtitulos_materiales_3cols">
                    <label for="">  Madera</label>
                    <label for="">Aluminio</label>
                    <label for="">Otro</label>
                </div>

            </div>
            <label for="">Estado</label>

        </div>

        {{-- EEn áreas urbanas --}}

        <div class="fila_2">
            <label class='label_ambiente'>En áreas urbanas</label>
            <div class="fila2_col">
                <div class='col2_fila2'>   
                    <label for="">Pictograma de atractivos naturales</label>
                    <label for="">Pictograma de atractivos culturales</label>
                    <label for="">Pictograma de actividades turísticas</label>
                    <label for="">Pictograma de servicios de apoyo</label>
                    <label for="">Pictogramas de restricción</label>
                    <label for="">Tótems de atractivos turísticos</label>
                    <label for="">Tótems de sitio</label>
                    <label for="">Tótems direccionales</label>

                </div>

                <div class="fila2_col3">
                    <div class="fila2_col4_col-1">  
                        <script>
                            let count = document.querySelector('.col2_fila2').childElementCount;
                            for (var i = 0; i < count; i++) {
                                document.write('<input type="number"  placeholder="0" name="'+'au_madera_inp_'+String(i)+'" >') ;
                            }
                        </script>
                        
                    </div>
                    <div class="fila2_col4_col-2">
                        <script>
                            let count2 = document.querySelector('.col2_fila2').childElementCount;
                            for (var i = 0; i < count2; i++) {
                                document.write('<input type="number" placeholder="0" name="'+'au_aluminio_inp_'+String(i)+'" >') ;
                            }
                        </script>
                    </div>
                    <div class="fila2_col4_col-3">
                        <script>
                            let count3 = document.querySelector('.col2_fila2').childElementCount;
                            for (var i = 0; i < count3; i++) {
                                document.write('<input type="text" name="'+'au_otro_inp_'+String(i)+'" placeholder="Especifique">') ;
                            }
                        </script>

                    </div>
                </div>
                <div class="fila_2_col4">
                    <script>
                        let count4 = document.querySelector('.col2_fila2').childElementCount;
                        for (var i = 0; i < count3; i++) {
                            document.write(`
                                            <select name="select_estado_`+String(i)+`">
                                                <option default value="">Seleccione estado</option>
                                                <option value="bueno">Bueno</option>
                                                <option value="regular">Regular</option>
                                                <option value="malo">Malo</option>
                                            </select>`) ;
                        }
                    </script>
                    
                    
                </div>
                
            </div>
            
        </div>

        {{-- En áreas naturales --}}
        <div class="fila_2">
            <label class='label_ambiente'>En áreas naturales</label>
            <div class="fila2_col">
                <div class="col2_fila2 aux1">
                    <label for="">En áreas naturales</label>
        
                    <label>Pictograma de atractivos naturales</label>
                    <label>Pictograma de atractivos culturales</label>
                    <label>Pictograma de actividades turísticas</label>
                    <label>Pictograma de servicios de apoyo</label>
                    <label>Pictogramas de restricción</label>
                    <label>Señales turísticas de aproximación</label>
                    <label>Tótems de sitio</label>
                    <label>Tótems direccionamientos</label>
                    <label>Panel informativo de atractivos</label>
                    <label>Mesas interpretativas</label>
                    <label>Paneles de direccionamiento hacia  atractivos</label>
                    <label>Panel informativo de direccionamiento hacia atractivos, servicios y actividades</label>

                </div>
                <div class="fila2_col3">
                    <div class="fila2_col4_col-1">
                        <script>
                            let count5 = document.querySelector('.aux1').childElementCount;
                            for (var i = 0; i < count5; i++) {
                                document.write('<input type="number" placeholder="0" name="'+'an_madera_inp_'+String(i)+'" >') ;
                            }
                        </script>
                    </div>
                    <div class="fila2_col4_col-2">
                        {{-- an significa area natural --}}
                        <script>
                            let count6 = document.querySelector('.aux1').childElementCount;
                            for (var i = 0; i < count6; i++) {
                                document.write('<input type="number" placeholder="0" name="'+'an_madera_inp_'+String(i)+'" >') ;
                            }
                        </script>
                    </div>
                    <div class="fila2_col4_col-3">
                        <script>
                            let count7 = document.querySelector('.aux1').childElementCount;
                            for (var i = 0; i < count7; i++) {
                                document.write('<input type="text" name="'+'au_otro_inp_'+String(i)+'" placeholder="Especifique">') ;
                            }
                        </script>
                        
                    </div>
                </div>
                <div class="fila_2_col4">
                    <script>
                        let count8 = document.querySelector('.aux1').childElementCount;
                        for (var i = 0; i < count8; i++) {
                            document.write(`
                                            <select name="an_select_estado_`+String(i)+`">
                                                <option default value="">Seleccione estado</option>
                                                <option value="bueno">Bueno</option>
                                                <option value="regular">Regular</option>
                                                <option value="malo">Malo</option>
                                            </select>`) ;
                        }
                    </script>
                </div>
            </div>
        </div>
        
        {{-- Letreros informativos --}}
        <div class="fila_2">
            <label class="label_ambiente">Letreros informativos</label>
            <div class="fila2_col">
                <div class="col2_fila2">
                    <label for="">De información botánica</label>
                    <label for="">Normativos de concienciación</label>
                </div>
                <div class="fila2_col3">
                    <div class="fila2_col4_col-1">
                        <input type="number" name="info_botanica_madera"  placeholder="0" >
                        <input type="number" name="normativas_madera"  placeholder="0" >

                    </div>
                    <div class="fila2_col4_col-2">
                        <input type="number" name="info_botanica_al"  placeholder="0" >
                        <input type="number" name="normativas_al"  placeholder="0" >

                    </div>
                    <div class="fila2_col4_col-3">
                        <input type="text" name="info_botanica_e"  placeholder="Especifique">
                        <input type="text" name="normativas_e"  placeholder="Especifique">

                    </div>

                </div>
                <div class="fila_2_col4">
                    <select name="" id="">
                        <option value="">Seleccione estado</option>
                        <option value="bueno">Bueno</option>
                        <option value="regular">Regular</option>
                        <option value="malo">Malo</option>
        
                    </select>
                    <select name="" id="">
                        <option value="">Seleccione estado</option>
                        <option value="bueno">Bueno</option>
                        <option value="regular">Regular</option>
                        <option value="malo">Malo</option>
        
                    </select>
                </div>
                
            </div>
        </div>
        
        
        {{-- Señalética interna de seguridad --}}
        <div class="fila_2">
            <label class="label_ambiente" >Señalética interna de seguridad</label>
            <div class="fila2_col">
                <div class="col2_fila2">
                    <label for="">Protección de los elementos del atractivo</label>
                </div>
                <div class="fila2_col3">
                    <div class="fila2_col4_col-1">
                        <input type="number" name="seguridad_madera" >
                    </div>
                    <div class="fila2_col4_col-2">
                        <input type="number" name="seguridad_al" >
                    </div>
                    <div class="fila2_col4_col-3">
                        <input type="text" name="seguridad_e"  placeholder="Especifique">
                    </div>
                    
                </div>
                <div class="fila_2_col4">
                    <select name="" id="">
                        <option default value="">Seleccione estado</option>
                        <option value="bueno">Bueno</option>
                        <option value="regular">Regular</option>
                        <option value="malo">Malo</option>
        
                    </select>
                </div>
            </div>

        </div>
        
        
        {{-- Otros --}}
        {{-- <label for="">Otros</label> --}}

    </div>
    <h5>
        <label for="pregunta_3-2" class='nombre_pregunta'>Salud ( Más Cercano )
            {{-- <input type="checkbox" name="pregunta_3-2" id="pregunta_3-2" value='false'>     --}}
        </label>
    </h5>
    <div class="contenedor_pregunta_7-3">
        <div class="dos_columnas">
            <div class="col col_1">
                <div class="seis_filas">
                    <label for=""> En el atractivo</label>
                    <div class="_3col">
                        <div class="3col_a" for="hospital">Hospital o Clínica</div>
                        <div class="3col_b">
                            <input type="checkbox" name="hospital_atrac" id="hospital_atrac" value='false'>
                        </div>
                        <div class="_3col_c">
                            <input type="text" name="nro_h_atrac" id="nro_h_atrac" placeholder="0">
                        </div>
                    </div>
                    <div class="_3col">
                        <div class="3col_a">Puesto / Centro de salud</div>
                        <div class="3col_b">
                            <input type="checkbox" name="ctrsalud_atrac" id="ctrsalud_atrac" value='false'>
                        </div>
                        <div class="_3col_c">
                            <input type="text" name="nro_cs_atrac" id="nro_cs_atrac" placeholder="0">
                        </div>
                    </div>
                    <div class="_3col">
                        <div class="3col_a">Dispensario médico</div>
                        <div class="3col_b"><input type="checkbox" name="dispensario_atrac" id="dispensario_atrac" value='false'></div>
                        <div class="_3col_c">
                            <input type="text" name="nro_dis_atrac" placeholder="0" id="nro_dis_atrac">
                        </div>
                    </div>
                    <div class="_3col">
                        <div class="3col_a">Botiquín de primeros auxilios</div>
                        <div class="3col_b"><input type="checkbox" name="botiquin_atrac" id="botiquin_atrac" value='false'></div>
                        <div class="_3col_c">
                            <input type="text" name="nro_botiquin_atrac" placeholder="0" id="nro_botiquin_atrac">
                        </div>
                    </div>
                    <div class="_3col">
                        <div class="3col_a">Otros</div>
                        <div class="3col_b"><input type="checkbox" name="otros_atrac" id="otros_atrac" value='false'></div>
                        <div class="_3col_c">
                            <input type="text" name="nro_otros_atrac" placeholder="0" id="nro_otros_atrac">
                        </div>
                    </div>

                </div>
            </div>
            <div class="col col_2">
                <div class="seis_filas">
                    <label for=""> En la cuidad o pueblo mas cercano</label>
                    <div class="_3col">
                        <div class="3col_a">Hospital o Clínica</div>
                        <div class="3col_b">
                            <input type="checkbox" name="hospital_cuidad" id="hospital_cuidad" value='false'>
                        </div>
                        <div class="3col_c">
                            <input type="number" name="nro_hosp_cuidad" id="nro_hosp_cuidad" placeholder="0">
                        </div>
                    </div>
                    <div class="_3col">
                        <div class="3col_a">Puesto / Centro de salud</div>
                        <div class="3col_b">
                            <input type="checkbox" name="centrsalud_cuidad" id="centrsalud_cuidad" value='false'>
                        </div>
                        <div class="3col_c">
                            <input type="number" name="nro_cs_cuidad" id="nro_cs_cuidad" placeholder="0">
                        </div>
                    </div>
                    <div class="_3col">
                        <div class="3col_a">Dispensario médico</div>
                        <div class="3col_b"><input type="checkbox" name="dispensario_cuidad" id="dispensario_cuidad" value='false'></div>
                        <div class="3col_c">
                            <input type="number" name="nro_dispensario_cuidad" placeholder="0" id="">
                        </div>
                    </div>
                    <div class="_3col">
                        <div class="3col_a">Botiquín de primeros auxilios</div>
                        <div class="3col_b"><input type="checkbox" name="botiquin_cuidad" id="botiquin_cuidad" value='false'></div>
                        <div class="3col_c">
                            <input type="number" name="nro_botiquin_cuidad" placeholder="0" id="nro_botiquin_cuidad">
                        </div>
                    </div>
                    <div class="_3col">
                        <div class="3col_a">Otros</div>
                        <div class="3col_b"><input type="checkbox" name="otros_cuidad" id="otros_cuidad" value='false'></div>
                        <div class="3col_c">
                            <input type="number" name="nro_otros_cuidad" placeholder="0" id="nro_otros_cuidad">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div>
        @if (isset($data_6))
        <script>
            var data6 = '{{!!$data_6!!}}'.slice(1,-1);
            console.log(data6);
            sessionStorage.setItem('data6__',data6);
        </script>
        
        @else
            <script> console.error("no se recupero la dat6, para no perder datos mientras se navega en el form!"); </script>

        @endif
    </div>
    <button type="submit" class="guardar_continuar"  >
        Guardar y Continuar 
        <i class="fas fa-arrow-right"></i>
    </button>
</form>
<button  class="atras" onclick="location.href = `{{route('encuesta.seccion6')}}` " >
    <i class="fas fa-arrow-left"></i>
    Atras
</button>

@endsection
@section('scripts')
    
    <script>
        var errores = JSON.parse('{{!!$errors!!}}'.slice(1,-1));
        console.log(errores);
        document.querySelector('#form6').addEventListener('submit',(e)=>{
            if(errores.length >0){
                e.preventDefault();
            }
        });
        const percent6 =Object.keys(JSON.parse( sessionStorage.data6__)).length;
        localStorage.setItem('percent6',percent6);
        
    </script>

    <script src="{{asset('js/checkbox_change_value_boolean.js')}}"></script>
    <script>
        chk_to_validate('.pregunta7-1-a');
        chk_to_validate('.pregunta7-1-b');
        chk_to_validate('.contenedor_pregunta_7-3');
    </script>
    <script src="{{asset('js/pre_load_sec7.js')}}"></script>
@endsection
    