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
        <input type="checkbox" name="" id="" required>
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
            {{-- <a href="{{route('encuesta.seccion7')}}">Seccion 7</a> --}}
        </div>
        
    </div>
    <div class="contenedor_padre">
        <div class='contenedor_seccion7'>
            <div class="col_1">
                <label for="">Agua:</label>
                <label for="">Energía eléctrica:</label>
            </div>
            <div class="col_2">
                <input type="checkbox" name="" id="">
                <input type="checkbox" name="" id="">
            </div>
            <div class="col_3_aux">
                <input type="text" name="" id="" placeholder=" Especifique">
                <input type="text" name="" id="" placeholder=" Especifique">
            </div>
            <div class="col_1">
                <label for="">Saneamiento:</label>
                <label for="">Disposición de desechos</label>
            </div>
            <div class="col_2">
                <input type="checkbox" name="" id="">
                <input type="checkbox" name="" id="">
        
            </div>
            <div class="col_3_aux">
                <input type="text" name="" id="" placeholder=" Especifique">
                <input type="text" name="" id="" placeholder=" Especifique">
            </div>
        </div>
        <div class="fila">
            <label for="observaciones">Observaciones:</label>
            <input type="text" name="observaciones">
        </div>

    </div>

    <h5>
        <label for="pregunta_3_2" class='nombre_pregunta'>Señaléctica en el atractivo
            <input type="checkbox" name="pregunta_3_2" id="pregunta_3_2" required>    
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
                                document.write('<input type="number" name="'+'au_madera_inp_'+String(i)+'" >') ;
                            }
                        </script>
                        
                    </div>
                    <div class="fila2_col4_col-2">
                        <script>
                            let count2 = document.querySelector('.col2_fila2').childElementCount;
                            for (var i = 0; i < count2; i++) {
                                document.write('<input type="number" name="'+'au_aluminio_inp_'+String(i)+'" >') ;
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
                                                <option value="">Seleccione estado</option>
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
        
                    <label for="">Pictograma de atractivos naturales</label>
                    <label for="">Pictograma de atractivos culturales</label>
                    <label for="">Pictograma de actividades turísticas</label>
                    <label for="">Pictograma de servicios de apoyo</label>
                    <label for="">Pictogramas de restricción</label>
                    <label for="">Señales turísticas de aproximación</label>
                    <label for="">Tótems de sitio</label>
                    <label for="">Tótems direccionamientos</label>
                    <label for="">Panel informativo de atractivos</label>
                    <label for="">Mesas interpretativas</label>
                    <label for="">Paneles de direccionamiento hacia  atractivos</label>
                    <label for="">Panel informativo de direccionamiento hacia atractivos, servicios y actividades</label>

                </div>
                <div class="fila2_col3">
                    <div class="fila2_col4_col-1">
                        <script>
                            let count5 = document.querySelector('.aux1').childElementCount;
                            for (var i = 0; i < count5; i++) {
                                document.write('<input type="number" name="'+'an_madera_inp_'+String(i)+'" >') ;
                            }
                        </script>
                    </div>
                    <div class="fila2_col4_col-2">
                        {{-- an significa area natural --}}
                        <script>
                            let count6 = document.querySelector('.aux1').childElementCount;
                            for (var i = 0; i < count6; i++) {
                                document.write('<input type="number" name="'+'an_madera_inp_'+String(i)+'" >') ;
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
                                                <option value="">Seleccione estado</option>
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
                        <input type="number" name="" >
                        <input type="number" name="" >

                    </div>
                    <div class="fila2_col4_col-2">
                        <input type="number" name="" >
                        <input type="number" name="" >

                    </div>
                    <div class="fila2_col4_col-3">
                        <input type="text" name=""  placeholder="Especifique">
                        <input type="text" name=""  placeholder="Especifique">

                    </div>

                </div>
                <div class="fila_2_col4">
                    <select name="" id="">
                        <option value="">Seleccione estado</option>
                        <option value="">Bueno</option>
                        <option value="">Regular</option>
                        <option value="">Malo</option>
        
                    </select>
                    <select name="" id="">
                        <option value="">Seleccione estado</option>
                        <option value="">Bueno</option>
                        <option value="">Regular</option>
                        <option value="">Malo</option>
        
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
                        <input type="number" name="" id="">
                    </div>
                    <div class="fila2_col4_col-2">
                        <input type="number" name="" id="">
                    </div>
                    <div class="fila2_col4_col-3">
                        <input type="text" name="" id="" placeholder="Especifique">
                    </div>
                    
                </div>
                <div class="fila_2_col4">
                    <select name="" id="">
                        <option value="">Seleccione estado</option>
                        <option value="">Bueno</option>
                        <option value="">Regular</option>
                        <option value="">Malo</option>
        
                    </select>
                </div>
            </div>

        </div>
        
        
        {{-- Otros --}}
        <label for="">Otros</label>

    </div>
    <h5>
        <label for="pregunta_3-2" class='nombre_pregunta'>Salud ( Más Cercano )
            <input type="checkbox" name="pregunta_3-2" id="pregunta_3-2" required>    
        </label>
    </h5>
    <h5>
        <label for="pregunta_3-2" class='nombre_pregunta'>Seguridad (M)
            <input type="checkbox" name="pregunta_3-2" id="pregunta_3-2" required>    
        </label>
    </h5>
    <h5>
        <label for="pregunta_3-2" class='nombre_pregunta'>Servicio de comuncación de uso público
            <input type="checkbox" name="pregunta_3-2" id="pregunta_3-2" required>    
        </label>
    </h5>
    <div>
        @if (isset($data_6))
        <script>
            var data6 = '{{!!$data_6!!}}'.slice(1,-1);
            console.log(data6);
            sessionStorage.setItem('data6__',data6);
        </script>
        
        @else
            <script> console.error("Algo muy malo ocurrio!"); </script>

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


<script src="{{asset('js/deshabilitarPreguntas.js')}}"></script>
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
        
    </script>
    
@endsection
    