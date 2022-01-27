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
            <a href="{{route('encuesta.seccion4')}}">Seccion 4</a>
            <a href="{{route('encuesta.seccion5')}}">Seccion 5</a>
            <a href="{{route('encuesta.seccion6')}}">Seccion 6</a>
            <a href="{{route('encuesta.seccion7')}}">Seccion 7</a>
          </div>
        
    </div>
    <div class="amigable">
        <div class="barra">
            <p> Datos Generales y Ubicación del Atractivo</p>
            <li>
                <span class="bar">
                    <span class="generico sec1"></span>
                </span>
            </li>
        </div>
        <div class="barra">
            <p> ACCESIBILIDAD Y CONECTIVIDAD AL ATRACTIVO</p>
            <li>
                <span class="bar">
                    <span class="generico sec3"></span>
                </span>
            </li>
        </div>
        <div class="barra">
            <p>  PLANTA TURÍSTICA / COMPLEMENTARIOS</p>
            <li>
                <span class="bar">
                    <span class="generico sec4"></span>
                </span>
            </li>
        </div>
        <div class="barra">
            <p>ESTADO DE CONSERVACIÓN E INTEGRACIÓN ATRACTIVO / ENTORNO</p>
            <li>
                <span class="bar">
                    <span class="generico sec5"></span>
                </span>
            </li>
        </div>
        <div class="barra">
            <p>HIGIENE Y SEGURIDAD TURÍSTICA</p>
            <li>
                <span class="bar">
                    <span class="generico sec6"></span>
                </span>
            </li>
        </div>
        
        
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
            <button type="submit" class="guardar" >Guardar Ficha Técnica</button>
            
        </form>
        <button  class="atras" onclick="location.href = `{{route('encuesta.seccion7')}}` " >
            <i class="fas fa-arrow-left"></i>
            Atras
        </button>

    </div>
    

@endsection
@section('scripts')
    <script>
        document.querySelector('.sec1').style.width = "80%";
        document.querySelector('.sec3').style.width = "70%";
        document.querySelector('.sec4').style.width = "60%";
        document.querySelector('.sec5').style.width = "50%";
        document.querySelector('.sec6').style.width = "40%";
        document.querySelector('.sec7').style.width = "30%";

    </script>
    <script>
        document.querySelector('.data1__').value = sessionStorage.data1__
        document.querySelector('.data3__').value = sessionStorage.data3__
        document.querySelector('.data4__').value = sessionStorage.data4__
        document.querySelector('.data5__').value = sessionStorage.data5__
        document.querySelector('.data6__').value = sessionStorage.data6__
        document.querySelector('.data7__').value = sessionStorage.data7__        
        // https://developer.mozilla.org/en-US/docs/Web/API/Window/sessionStorage
        document.querySelector('.guardar').addEventListener('click',()=>{
            sessionStorage.clear();
        });
    </script>
    
@endsection
    