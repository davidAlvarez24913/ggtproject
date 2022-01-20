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
    <div class="menu_lateral ">
        <i class="fas fa-bars _menu"></i>
        <div class="contenido">
            <label for="">Menu Secciones</label>
            <hr>
            <a href="{{route('encuesta.seccion1_2')}}">Seccion 1 y 2</a>
            <a href="{{route('encuesta.seccion3')}}">Seccion 3</a>
            <a href="{{route('encuesta.seccion5')}}">Seccion 5</a>
            <a href="{{route('encuesta.seccion6')}}">Seccion 6</a>
            <a href="{{route('encuesta.seccion7')}}">Seccion 7</a>
            <a href="{{ route('encuesta.guardar')}}">Guardar Datos</a>
          </div>
        
    </div>
    <div>
        <p> Seccion 1 y 2:</p>
        <p>Seccion 3: </p>
        <p>Seccion 4: </p>
        <p>Seccion 5: </p>
        <p>Seccion 6: </p>
        <p>Seccion 7: </p>
    </div>
    <div class="contenedor_guardar">
        <form id="form7" action="{{route('encuesta.store')}}" method="POST">
            @csrf
            <div >
                <input type="hidden" name="data1__"  class="data1__">
                <input type="hidden" name="data3__"  class="data3__">
                <input type="hidden" name="data4__"  class="data4__">
                <input type="hidden" name="data5__"  class="data5__">
                <input type="hidden" name="data6__"  class="data6__">
                <input type="hidden" name="data7__"  class="data7__">

                @if (isset($data_7))
                    <script>
                        var data7 = '{{!!$data_7!!}}'.slice(1,-1);
                        console.log(data7);
                        sessionStorage.setItem('data7__',data7);
                    </script>
                    
                @else
                        <script> console.error("Algo muy malo ocurrio!"); </script>
                @endif
                
            </div>
            <button type="submit" class="atras" >Guardar Ficha</button>
            
        </form>
        <button type="submit" class="atras" >Editar Ficha</button>

    </div>
    

@endsection
@section('scripts')
    <script>
        document.querySelector('.data1__').value = sessionStorage.data1__
        document.querySelector('.data3__').value = sessionStorage.data3__
        document.querySelector('.data4__').value = sessionStorage.data4__
        document.querySelector('.data5__').value = sessionStorage.data5__
        document.querySelector('.data6__').value = sessionStorage.data6__
        document.querySelector('.data7__').value = sessionStorage.data7__        
        // https://developer.mozilla.org/en-US/docs/Web/API/Window/sessionStorage
    </script>
    
@endsection
    