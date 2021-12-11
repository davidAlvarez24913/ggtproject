@extends('layouts.plantilla')

@section('head')
<link rel="stylesheet" href="{{asset('css/login.css')}}">
@endsection

@section('content')

<div class="contenedor_login">
    <div class ='card_head' >{{ __('Login') }}</div>
    <div >
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="contenedor_login_2" >
                <label for="email" > {{ __('E-Mail Address') }}</label>
    
                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
    
                    @error('email')
                        <span class="" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            
                <label for="password" >{{ __('Password') }}</label>
    
                <div class="">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
    
                    @error('password')
                        <span class="" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                
               
            </div>
           
            <div class="form-check">
                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                </label>
            </div>
            <div>
                <button type="submit" class="btn-login">
                    {{ __('Login') }}
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
