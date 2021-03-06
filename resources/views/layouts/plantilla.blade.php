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
        <div class="div_lgo">
            <img src="{{asset('/images/principal.png')}}" alt="logo" class="lgo">
        </div>

        <nav >

            <ul class='nav__links'>
                
                {{-- <li><a class='anchor'  href="{{route('encuesta.home')}}">Inicio</a> </li> --}}
                <li><a class='anchor'  href="{{route('inicio')}}" title="Inicio"><i class="fas fa-home"></i></a> </li>
                {{-- <li><a  class='anchor' href="{{route('encuesta.seccion1_2')}}">Encuesta</a> </li> --}}
                
                <li><a  class='anchor' href="{{route('encuesta.home')}}">Formularios</a> </li>
                
                <li><a  class='anchor' href="{{route('visualizador')}}">Visualizador Geográfico</a> </li>
                
                
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
                        {{-- Aqui debo validar rutas del nombre del usuario --}}
                        @if (Auth::user()->rol == 'admin')
                            <a class='menu anchor' href="{{route('admin.home')}}" >
                                {{ Auth::user()->name }}
                                <i class="fas fa-caret-down"></i>
                            </a>
                        @endif
                        @if (Auth::user()->rol == 'gad')
                            <a class='menu anchor' href="{{route('gad.home')}}" >
                                {{ Auth::user()->name }}
                                <i class="fas fa-caret-down"></i>
                            </a>
                        @endif
                        @if (Auth::user()->rol == 'normal')
                            <a class='menu anchor' href="{{route('encuesta.home')}}" >
                                {{ Auth::user()->name }}
                                <i class="fas fa-caret-down"></i>
                            </a>
                        @endif
                        
                        <ul class="menu_vertical">
                            <li class="auxiliar_li">
                                @if (Auth::user()->rol == 'admin')
                                    <a class='menu anchor' href="{{route('admin.configUser')}}" >
                                        <i class="fas fa-cog"></i>
                                        Configuracion
                                        
                                    </a>
                                @endif
                                @if (Auth::user()->rol == 'gad')
                                    <a class='menu anchor' href="{{route('gad.configUser')}}" >
                                        <i class="fas fa-cog"></i>
                                        Configuracion
                                        
                                    </a>
                                @endif
                                @if (Auth::user()->rol == 'normal')
                                    <a class='menu anchor' href="{{route('encuesta.configUser')}}" >
                                        <i class="fas fa-cog"></i>
                                        Configuracion
                                        
                                    </a>
                                @endif
                                {{-- <a href="#">
                                    <i class="fas fa-cog"></i>
                                    Configuracion
                                </a> --}}
                            </li>
                            <li class="auxiliar_li">
                                <a  href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit(); sessionStorage.clear();">
                                    <i class="fas fa-sign-out-alt"></i>
                                {{ __('Salir.') }}
                                </a>
                            </li>
                            
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </ul>
                        
                    </li>
                @endguest

            </ul>
            
        </nav>
    </header>
    


    {{-- contenido --}}
    <main>
        @yield('content')
    </main>
    @yield('scripts')
    
    <div style='padding: 2em 0;'> </div>
    {{-- footer --}}
    <footer>
        <div class="contenedor_footer">
            <div class='col_footer col_1'>
                <strong>Direccion y Contactos</strong>
                <ul>
                    <li>Calle Briceño E1-24 y Guayaquil</li>
                    <li>Código Postal: 1704/ Quito-Ecuador</li>
                    <li>Teléfonos 3-999-333</li>
                    <li>Contactenos</li>
                    
                </ul>
            </div>
            <div class='col_footer col_2'>
                <strong>ARTÍCULOS RECIENTES</strong>
                <ul>
                    <li>Entradas y Salidas Internacionales</li>
                    <li>Conectividad Maritima</li>
                    <li>Examén Guías de Turismo</li>
                </ul>
            </div>
            <div class="col_footer col_3">
                <h2 class="_title">UTPL</h2> 
                <hr class="separador">
                <strong>Observatorio Turístico<br>Región Sur del Ecuador</strong>
                
            </div>
        </div>
    </footer>
</body>
</html>