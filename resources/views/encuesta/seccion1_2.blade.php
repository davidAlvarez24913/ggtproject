@extends('layouts.plantilla')

@section('title','Seccion1-2')
    
@section('head')
    <meta name="csrf-token" content="{{ csrf_token()}}">
    {{-- Sweet Alert CDN --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- CSS --}}
    <link rel="stylesheet" href="{{asset('/css/seccion1_2.css')}}">
    {{-- cdn leaflet --}}
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
    {{-- CDN Toastr --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
@endsection

@section('content')

    @include("encuesta.titulo")
    
    <h4>1. Datos Generales</h4>
    
    {{-- formulario 1  --}}
    <form  id='form1' action="{{route('encuesta.retrieve_1_2')}}" method="post">
        @csrf
        <div class="menu_lateral ">
            <i class="fas fa-bars _menu"></i>
            <div class="contenido">
                <label for="">Menu Secciones</label>
                <hr>
                {{-- <a href="{{route('encuesta.seccion1_2')}}">Seccion 1 y 2</a> --}}
                <a href="{{route('encuesta.seccion3')}}">Seccion 3</a>
                <a href="{{route('encuesta.seccion4')}}">Seccion 4</a>
                <a href="{{route('encuesta.seccion5')}}">Seccion 5</a>
                <a href="{{route('encuesta.seccion6')}}">Seccion 6</a>
                <a href="{{route('encuesta.seccion7')}}">Seccion 7</a>
                <a href="{{ route('encuesta.guardar')}}">Panel de Progreso</a>

              </div>
            
        </div>
        
        <div class="contenedor">
            <label for="nombre">Nombre del Atractivo turistico:</label>
            <input type="text" name="nombre" class="in-name"   required>
        
            <label for="categoria">Categor??a:</label>
            <select name="categoria" id="categoria"  required >
                <option default value="">Selcciona categor??a</option>
                <option value="atracciones_naturales">Atracciones Naturales</option>
                <option value="manifestaciones_culturales">Manifestaciones Culturales</option>

            </select>
            <label for="tipo" >tipo:</label>
            <select name="tipo" id="tipo" required >
                <option default value="">Selecione Tipo</option>
            </select>
        
            <label for="subtipo">Subtipo:</label>
            <select name="subtipo" id="subtipo">
                <option default value="">Selccione Subtipo</option>
            </select>
            
        </div>
        
        <h4>2. Ubicacion del Atractivo</h4>
        <div class="contenedor">
            <label for="provincia">Provincia:</label>
            <select name="provincia" id="provincia"  >
            <option default>==Provincia==</option>
            @if (isset($provincias))
                @foreach ($provincias as $pro)
                <option value="{{$pro->id}}">{{$pro->provincia}}</option>
                @endforeach
            @endif
            
            
            </select>
            <label for="canton">Canton:</label>
            <select name="canton" id="canton"  >
                <option default>== Canton ==</option>
            </select>
            <label for="parroquia">Parroquia:</label>
            <select name="parroquia" id="parroquia"  >
                <option default>==Parroquia==</option>
            </select>
            <label for="barrio">Barrio, sector o comuna</label>
            <input type="text" name="barrio" class="barrio"   required>
            <label for="c_principal">Calle principal</label>
            <input type="text" name="c_principal" class="inp-c_principal"   required>
            <label for="">N??mero</label>
            <input type="number" name="numero" class="inp-numero"  required>
            <label for="transversal">Transversal</label>
            <input type="text" name="transversal" class="inp-transversal"  required>
            <label for="latitud">Latitud</label>
            <input type="double" name="latitud" class="inp-latitud"   required>
            <label for="longitud">Longitud</label>
            <input type="double" name="longitud" class="inp-longitud"   required>

            <button class="lat_long">
                Ver Latitud y Longuitud
            </button>
            

        </div>
        <h4>Informacion del administrador</h4>

        <div class="contenedor">
            
            <label for="administrador">Tipo de administrador</label>
            <input type="text" name="administrador"  class="@error('password') is-invalid @enderror" id="administrador" required>
            <label for="nombre_admin">Nombre del administrador</label>
            <input type="text" name="nombre_admin" id="nombre_admin"  required>
            <label for="nombre_institucion">Nombre institucion</label>
            <input type="text" name="nombre_institucion" id="nombre_institucion"  required>
            <label for="cargo">Cargo</label>
            <input type="text" name="cargo" id="cargo"  required>
            <label for="email">Email</label>
            <input type="email" name="email" id="email"  required>
            <label for="celular">Celular</label>
            <input type="number" name="celular" id="celular"  required min="10">
            <label for="observaciones">Observaciones</label>
            <input type="text" name="observaciones" id="observaciones" >
        </div>
       
        {{-- botones atras guardar y continuar --}}
        {{-- agregar la funcion on clik no me permite validar con required po eso esta comentado
            YA QUE EL CONTROLADOR RETORNA LA SIG VISTA NO ES NECESARIO ESTA ACCI??N
        --}}
        {{-- <button type="submit" class="guardar_continuar" onclick="location.href = `{{route('encuesta.seccion3')}}`" > --}}
        <button type="submit" class="guardar_continuar" >

            Guardar y Continuar
            <i class="fas fa-arrow-right"></i>
        </button>
    </form>
    <button class="atras" onclick="location.href = `{{route('encuesta.home')}}` " >
        <i class="fas fa-arrow-left"></i>
        Atras
    </button>

    <script>
        var errores = JSON.parse('{{!!$errors!!}}'.slice(1,-1));
        console.log(errores);
        document.querySelector('#form1').addEventListener('submit',(e)=>{
            if(errores.length >0){
                e.preventDefault();
            }
        });
    </script>
    

@endsection

@section('scripts')
    <script src="{{asset('js/tipoysubtipo.js')}}"></script>
    <script src="{{asset('js/selectDinamico.js')}}"></script>
    <script src="{{asset('/js/swal_map.js')}}"></script>
    {{-- <script src="{{asset('/js/botoncontinuar.js')}}"></script> --}}

    {{-- validacion de datos recuperados para editar --}}
    @if (isset($data_to_edit[0]))
        
        {{-- {{$data_to_edit[0]->pregunta1}} --}}
        <script >
            var data1 =  `{{!!$data_to_edit[0]->pregunta1!!}}`.slice(1,-1) ;
            var data3 =  `{{!!$data_to_edit[0]->pregunta3!!}}`.slice(1,-1) ;
            var data4 =  `{{!!$data_to_edit[0]->pregunta4!!}}`.slice(1,-1) ;
            var data5 =  `{{!!$data_to_edit[0]->pregunta5!!}}`.slice(1,-1) ;
            var data6 =  `{{!!$data_to_edit[0]->pregunta6!!}}`.slice(1,-1) ;
            var data7 =  `{{!!$data_to_edit[0]->pregunta7!!}}`.slice(1,-1) ;
            var id_to_edit = `{{!!$data_to_edit[0]->id!!}}`.slice(1,-1);
            console.log(' data retrieved successfull / proviene del gad controller edit');
            console.log(id_to_edit);
            console.log(data1);

            sessionStorage.setItem('data1__', data1 );
            sessionStorage.setItem('data3__', data3 );
            sessionStorage.setItem('data4__', data4 );
            sessionStorage.setItem('data5__', data5 );
            sessionStorage.setItem('data6__', data6 );
            sessionStorage.setItem('data7__', data7 );
            sessionStorage.setItem('id_to_edit', id_to_edit );
        </script>
        
    @else 
        <script> console.log(' data retrieved error');</script>

    @endif
    
    <script src="{{asset('js/pre_load_sec1y2.js')}}"></script>
    

@endsection