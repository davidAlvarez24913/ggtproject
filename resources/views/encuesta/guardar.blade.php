@extends('layouts.plantilla')
 
@section('title','Guardar datos llenados')

@section('head')
    <meta name="csrf-token" content="{{ csrf_token()}}">

    <link rel="stylesheet" href="{{asset('/css/guardar.css')}}">
@endsection
@section('content')
    <h4> 
        Felicitaciones has llenado el 50% del formulario
    </h4>
    <div class="contenedor_guardar">
        <p> Se guardaran los datos de las 7 primeras secciones del formulario.</p>
        Se debe guardar en inputs para hacer un save
        <form id="form7" action="{{route('encuesta.store')}}" method="POST">
            @csrf
            <div >
                Seccion 7:
                @if (isset($data_7))
                    {{$data_7}}
                    <script>
                        var data7 = '{{!!$data_7!!}}'.slice(1,-1);
                        console.log(data7);
                        sessionStorage.setItem('data7__',data7);
                    </script>
                    
                @else
                        <script> console.error("Algo muy malo ocurrio!"); </script>
                @endif
                
            </div>
            <button type="submit">Guardar </button>
            
        </form>
    </div>
    

@endsection
@section('scripts')
    <script>
        var errores = JSON.parse('{{!!$errors!!}}'.slice(1,-1));
        console.log(errores);
        
        
        // https://developer.mozilla.org/en-US/docs/Web/API/Window/sessionStorage
    </script>
    
@endsection
    