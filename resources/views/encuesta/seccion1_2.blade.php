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
                <a href="{{ route('encuesta.guardar')}}" tpy>Guardar Datos</a>

              </div>
            
        </div>
        <div class="contenedor">
            <label for="nombre">Nombre del Atractivo turistico:</label>
            <input type="text" name="nombre" class="in-name"  value="{{old('nombre')}}"  required>
        
            <label for="categoria">Categoría:</label>
            <select name="categoria" id="categoria"  >
                <option default>Selcciona categoría</option>
                <option value="atracciones_naturales">Atracciones Naturales</option>
                <option value="manifestaciones_culturales">Manifestaciones Culturales</option>

            </select>
            <label for="tipo" >tipo:</label>
            <select name="tipo" id="tipo"  >
                <option default>Selecione Tipo</option>
            </select>
            <script>
                const category = document.querySelector('#categoria');
                const selectTipo = document.querySelector('#tipo');

                category.addEventListener('change',(event)=>{
                    var opciones =`<option default >Selecione Tipo</option>`;

                    if(event.target.value == 'atracciones_naturales'){
                        opciones += `
                        <option value='' > Montañas</option>
                        <option value='' >Desiertos</option>
                        <option value='' >Rios</option>
                        <option value='' >Bosques</option>
                        <option value='' >Aguas Subterraneas</option>
                        <option value='' >Fenómenos Espeleológicos</option>
                        <option value='' >Fenómenos Geológicos</option>
                        <option value='' >Costas o Litorales</option>
                        <option value='' > Ambientes Marinos</option>
                        <option value='' >Tierras Insulares</option>`;
                    }else{
                        opciones += `
                        <option value='arquitectura' >Arquitectura</option>
                        <option value='acervo' >Acervo cultural y Popular</option>
                        <option value='cientificas' >Realizaciones Técnicas y Científicas</option>
                        <option value='acontecimientos' >Acontecimientos Programados</option>`;
                    }
                    selectTipo.innerHTML = opciones;

                });
            </script>
            
        
            <label for="subtipo">Subtipo:</label>
            <select name="subtipo" id="subtipo"  >
                <option default>selcciona subtipo</option>
                <option value="pruebasubtipo">pruebasubtipo</option>
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
            <input type="text" name="barrio" class="barrio" value = "{{ old('barrio') }}"  required>
            <label for="c_principal">Calle principal</label>
            <input type="text" name="c_principal" class="inp-c_principal" value = "{{ old('c_principal') }}"  required>
            <label for="">Número</label>
            <input type="number" name="numero" class="inp-numero" value = "{{ old('numero') }}"  required>
            <label for="transversal">Transversal</label>
            <input type="text" name="transversal" class="inp-transversal" value = "{{ old('transversal') }}"  required>
            <label for="latitud">Latitud</label>
            <input type="double" name="latitud" class="inp-latitud" value = "{{ old('latitud') }}"  required>
            <label for="longitud">Longitud</label>
            <input type="double" name="longitud" class="inp-longitud" value = "{{ old('longitud') }}"  required>

            <button class="lat_long">
                Ver Latitud y Longuitud
            </button>
            

        </div>
        <h4>Informacion del administrador</h4>

        <div class="contenedor">
            
            <label for="administrador">Tipo de administrador</label>
            <input type="text" name="administrador"  class="@error('password') is-invalid @enderror" id="administrador" value="{{old('administrador')}}" autocomplete>
            <label for="nombre_admin">Nombre del administrador</label>
            <input type="text" name="nombre_admin" id="nombre_admin" value="{{ old('nombre_admin')}}" required>
            <label for="nombre_institucion">Nombre institucion</label>
            <input type="text" name="nombre_institucion" id="nombre_institucion" value="{{ old('nombre_institucion')}}" required>
            <label for="cargo">Cargo</label>
            <input type="text" name="cargo" id="cargo" value="{{ old('cargo')}}" required>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="{{ old('email')}}" required>
            <label for="celular">Celular</label>
            <input type="number" name="celular" id="celular" value="{{ old('celular')}}" required>
            <label for="observaciones">Observaciones</label>
            <input type="text" name="observaciones" id="observaciones" value="{{ old('observaciones')}}">
        </div>
       
        {{-- botones atras guardar y continuar --}}
        {{-- agregar la funcion on clik no me permite validar con required po eso esta comentado
            YA QUE EL CONTROLADOR RETORNA LA SIG VISTA NO ES NECESARIO ESTA ACCIÓN
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
    
    <script src="{{asset('js/selectDinamico.js')}}"></script>
    <script src="{{asset('/js/swal_map.js')}}"></script>
    <script src="{{asset('/js/botoncontinuar.js')}}"></script>
    <script src="{{asset('js/deshabilitarPreguntas.js')}}"></script>

@endsection