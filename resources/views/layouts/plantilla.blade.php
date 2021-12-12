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
                
                <li ><a href="{{route('encuesta.home')}}">Inicio</a> </li>
                <li ><a href="{{route('encuesta.seccion1_2')}}">Encuesta</a> </li>
                <li ><a href="{{route('visualizador')}}">Visualizador Geografico</a> </li>
                
                
                {{-- autentificacion --}}

                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
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
        <img class='logox' src="{{asset('images/logox.jpeg')}}" alt="LogoMinTur" width="35%" height="45%">
    </footer>
</body>
</html>