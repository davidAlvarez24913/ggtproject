@extends('layouts.plantilla')

@section('title','Seccion1-2')
    
@section('head')
<meta name="csrf-token" content="{{ csrf_token()}}">
    
@endsection

@section('content')

    @include("encuesta.titulo")

    <h4>1. Datos Generales</h4>
    <form action="{{route('encuesta.store')}}" method="POST">
        @csrf
    
        <div class="contenedor">
            <label for="">Nombre del Atractivo turistico:</label>
            <input type="text" name="nombre" class="in-name" required>
        
            <label for="">Categoria:</label>
            <select name="categoria" id="categoria">
                <option value="">selcciona categoria</option>
            </select>
            <label for="">tipo:</label>
            <select name="tipo" id="tipo">
                <option value="">selcciona tipo</option>
            </select>
        
            <label for="">Subtipo:</label>
            <select name="subtipo" id="subtipo">
                <option value="">selcciona subtipo</option>
            </select>
            
        </div>
        
        <h4>2. Ubicacion del Atractivo</h4>
        <div class="contenedor">
            <label for="provincia">Provincia:</label>
            <select name="provincia" id="provincia">
            <option diasble>==Provincia==</option>

            @foreach ($provincias as $pro)
                <option value="{{$pro->id}}">{{$pro->provincia}}</option>
            @endforeach
            
            </select>
            <label for="">Canton:</label>
            <select name="canton" id="canton">
                <option diasble>== Canton ==</option>
            </select>
            <label for="">Parroquia:</label>
            <select name="parroquia" id="parroquia">
                <option diasble>==Parroquia==</option>
            </select>
            <label for="">Barrio, sector o comuna</label>
            <input type="text" name="barrio" class="barrio">
            <label for="">Calle principal</label>
            <input type="text" name="c_principal" class="inp-">
            <label for="">Numero</label>
            <input type="number" name="numero" class="inp-numero">
            <label for="">Transversal</label>
            <input type="text" name="transversal" class="inp-transversal">
            <label for="">latitud</label>
            <input type="number" name="latitud" class="inp-latitud">
            <label for="">longuitud</label>
            <input type="number" name="longuitud" class="inp-longuitud">
            <label for="">Altura</label>
            <input type="number" name="altura" class="inp-altura">
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
        {{-- botones atras guardar y continuar --}}
        <div>
            <button type="submit" class="atras" onclick="location.href = `{{route('encuesta.home')}}` " >
                <i class="fas fa-arrow-left"></i>
                Atras
            </button>
    
            {{-- <button type="submit" class="guardar_continuar" onclick="location.href = {{route('encuesta.seccion3')}} " >Guardar y Continuar</button> --}}
            {{-- <button type="submit" class="guardar_continuar" onclick="location.href = 'http://127.0.0.1:8000/encuesta/seccion3' " >Guardar y Continuar</button> --}}
            <button type="submit" class="guardar_continuar" onclick="location.href = `{{route('encuesta.seccion3')}}` " >
                Guardar y Continuar
                <i class="fas fa-arrow-right"></i>
                {{-- <input type="submit" hidden> --}}
            </button>
        </div>
    
    </form>
    <script src="{{asset('js/selectDinamico.js')}}"></script>
@endsection
