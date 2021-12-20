@extends('layouts.plantilla')

@section('head')
<link rel="stylesheet" href="{{asset('css/login.css')}}">
@endsection

@section('content')

<div class="contenedor_login">
    <div class ='card_head' >{{ __('Iniciar Sesión') }}</div>
    <div >
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="contenedor_login_2" >
                <label for="email" > {{ __('Correo') }} </label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
               
            
                <label for="password" >{{ __('Contraseña') }} </label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
    
                    @error('password')
                        <span class="" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                
  
            </div>
           
            <div class="form-check">
                <label class="form-check-label" for="remember">
                    {{ __('Recordar contraseña.') }}
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                </label>
            </div>
            <div>
                <button type="submit" class="btn-login">
                    {{ __('Ingresar') }}
                </button>
                <br>
                @if (Route::has('password.request'))
                    <a class="olvidar" href="{{ route('password.request') }}">
                        {{ __('Olvidates tu contraseña?') }}
                    </a>
                @endif
            </div>
            
        </form>
    </div>
    
</div>
@endsection
