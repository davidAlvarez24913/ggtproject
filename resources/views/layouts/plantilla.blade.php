<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    
    <!-- Latest compiled Font Awesome -->
    <script src="https://kit.fontawesome.com/8b6b495fb3.js" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    
    @yield('head')
    
</head>
<body>
    {{-- navbar --}}
    {{-- <img class='img_fondo' src="{{asset('images/navbar.jpg')}}" alt="logo"> --}}
    <header>
        
        <nav >
            
            <ul class='nav__links'>
                
                <li ><a class='anchor'  href="{{route('encuesta.home')}}">Inicio</a> </li>
                <li ><a  class='anchor' href="{{route('encuesta.seccion1_2')}}">Encuesta</a> </li>
                <li ><a  class='anchor' href="{{route('visualizador')}}">Visualizador Geografico</a> </li>
                
                
                {{-- autentificacion --}}

                @guest
                    @if (Route::has('login'))
                        <li>
                            <a class='anchor' href="{{ route('login') }}">{{ __('Iniciar sesión') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li>
                            <a  class='anchor' href="{{ route('register') }}">{{ __('Registrar') }}</a>
                        </li>
                    @endif
                @else
                    <li class="desplegable">
                        <a class='menu anchor' href="#" >
                            {{ Auth::user()->name }}
                            <i class="fas fa-caret-down"></i>
                        </a>
                        <ul class="menu_vertical">
                            <li class="auxiliar_li"><a href="#">Configuracion</a></li>
                            <li class="auxiliar_li">
                                <a  href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                {{ __('Salir.') }}
                                </a>
                            </li>
                            
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </ul>
                        {{-- <div class="menu_vertical" id="" >
                            <a class="anchor" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                {{ __('Salir.') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div> --}}
                    </li>
                @endguest

            </ul>
            
        </nav>
    </header>
    


    {{-- contenido --}}
    <main>
        @yield('content')
    </main>
    

    <div style='padding: 3em;'> </div>
    {{-- footer --}}
    <footer>
        <div class='col_footer'>
            <strong>Direccion y Contactos</strong>
            <ul class='col_footer_1'>
                <li>Calle Briceño E1-24 y Guayaquil</li>
                <li>Código Postal: 1704/ Quito-Ecuador</li>
                <li>Teléfonos 3-999-333</li>
                <li>Contactenos</li>
                
            </ul>
         </div>
        <div class='col_footer'>
            <strong>ARTÍCULOS RECIENTES</strong>
            <ul class='col_footer_2'>
                <li>Entradas y Salidas Internacionales</li>
                <li>Conectividad Maritima</li>
                <li>Examén Guías de Turismo</li>
            </ul>
        </div>
        <div class="col_footer?3">
            <strong>UTPL</strong> 
            <br>
            <strong>Levantamiento de datos Turisticos</strong>
            
        </div>
    </footer>
</body>
</html>