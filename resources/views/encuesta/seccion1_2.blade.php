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
@endsection

@section('content')

    @include("encuesta.titulo")
    <div class="botonera1">
        <button class="btn_secccion"> Seccion 1 y 2 </button>
        <button class="btn_secccion"> Seccion 3 </button>
        <button class="btn_secccion"> Seccion 4 </button>
        <button class="btn_secccion"> Seccion 5 </button>
        <button class="btn_secccion"> Seccion 7 </button>
        <button class="btn_secccion"> Seccion 8 </button>
    </div>
    <div class="menu_lateral">
        <label class="texto_menu"> Menu de secciones</label>
        <i class="fas fa-bars"></i>
    </div>

    <h4>1. Datos Generales</h4>
    <form action="{{route('encuesta.retrieve_1_2')}}" method="POST">
        @csrf
    
        <div class="contenedor">
            <label for="nombre">Nombre del Atractivo turistico:</label>
            <input type="text" name="nombre" class="in-name"  >
        
            <label for="categoria">Categoria:</label>
            <select name="categoria" id="categoria"  >
                <option default>selcciona categoria</option>
                <option value="categoriaprueba">categoriaprueba</option>
            </select>
            <label for="tipo" >tipo:</label>
            <select name="tipo" id="tipo"  >
                <option default>selcciona tipo</option>
                <option value="pruebatipo">prueba</option>
            </select>
        
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
            <input type="text" name="barrio" class="barrio">
            <label for="c_principal">Calle principal</label>
            <input type="text" name="c_principal" class="inp-c_principal">
            <label for="">Numero</label>
            <input type="number" name="numero" class="inp-numero">
            <label for="transversal">Transversal</label>
            <input type="text" name="transversal" class="inp-transversal">
            <label for="latitud">Latitud</label>
            <input type="number" name="latitud" class="inp-latitud">
            <label for="longitud">Longitud</label>
            <input type="number" name="longitud" class="inp-longitud">

            <button class="lat_long">
                Ver Latitud y Longuitud
            </button>
            

        </div>
        <h4>Informacion del administrador</h4>

        <div class="contenedor">
            
            <label for="">Tipo de administrador</label>
            <input type="text" name="administrador" id="administrador">
            <label for="">nombre del administrador</label>
            <input type="text" name="nombre_admin" id="nombre_admin">
            <label for="">nombre institucion</label>
            <input type="text" name="nombre_institucion" id="nombre_institucion">
            <label for="">cargo</label>
            <input type="text" name="cargo" id="cargo">
            <label for="">email</label>
            <input type="email" name="email" id="email">
            <label for="">celular</label>
            <input type="text" name="celular" id="celular">
            <label for="">observaciones</label>
            <input type="text" name="observaciones" id="observaciones">
        </div>
    </form>
    
    {{-- botones atras guardar y continuar --}}
    <div>
        <button type="submit" class="atras" onclick="location.href = `{{route('encuesta.home')}}`; " >
            <i class="fas fa-arrow-left"></i>
            Atras
        </button>


        <button type="submit" class="guardar_continuar" onclick="location.href = `{{route('encuesta.seccion3')}}`" >
            Guardar y Continuar
            <i class="fas fa-arrow-right"></i>
        </button>
        
    </div>
    
    <script src="{{asset('js/selectDinamico.js')}}"></script>
    <script src="{{asset('/js/swal_map.js')}}"></script>
    <script src="{{asset('/js/botoncontinuar.js')}}"></script>
    <script src="{{asset('js/deshabilitarPreguntas.js')}}"></script>

@endsection
