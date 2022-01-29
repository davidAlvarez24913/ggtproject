@extends('layouts.plantilla')

@section('head')
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    {{-- Sweet Alert CDN --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- JQuery CDN --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

@endsection

@section('content')

<div class="contenedor_login">
    <div class ='card_head' >{{ __('Iniciar Sesión') }}</div>
    <div >
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="contenedor_login_2" >
                <div class="col">
                    <label for="email" >{{ __('Correo') }} </label>
                    <i class="fas fa-envelope">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            {{-- <span class="" role="alert">
                                <strong>{{ $message }}</strong>
                            </span> --}}
                            <script>
                                const Toast = Swal.mixin({
                                    toast: true,
                                    position: 'center-end',
                                    showConfirmButton: false,
                                    timer: 2000,
                                    timerProgressBar: true,
                                    didOpen: (toast) => {
                                        toast.addEventListener('mouseenter', Swal.stopTimer)
                                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                                    }
                                });

                                Toast.fire({
                                    icon: 'error',
                                    title: '{{ $message }}'
                                });
                            </script>
                        @enderror
                    </i> 
                </div>
                
                
               
                <div class="col">
                    <label for="password" >{{ __('Contraseña') }} </label>
                    <i class="fas fa-key">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                            {{-- <span class="" role="alert">
                                <strong>{{ $message }}</strong>
                            </span> --}}
                            <script>
                                const Toast = Swal.mixin({
                                    toast: true,
                                    position: 'center-end',
                                    showConfirmButton: false,
                                    timer: 2000,
                                    timerProgressBar: true,
                                    didOpen: (toast) => {
                                        toast.addEventListener('mouseenter', Swal.stopTimer)
                                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                                    }
                                });

                                Toast.fire({
                                    icon: 'error',
                                    title: '{{ $message }}'
                                });
                            </script>
                        @enderror
                    </i>
    
                    
                </div>
 
                <div class="form-check">
                    <label class="form-check-label" for="remember">
                        {{ __('Recordar contraseña.') }}
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    </label>
                </div>
            </div>
           
            
            <div>
                <button type="submit" class="btn-login">
                    {{ __('Iniciar Sesión') }}
                </button>
                <br>
                @if (Route::has('password.request'))
                    <a class="olvidar" href="{{ route('password.request') }}">
                        {{ __('Olvidaste tu contraseña?') }}
                    </a>
                @endif
            </div>
            
        </form>
    </div>
    
</div>
@endsection
@section('scripts')
    <script>
        const log = location.href ;
        console.log(log);
    </script>
    
@endsection