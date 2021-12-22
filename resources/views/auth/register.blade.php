@extends('layouts.plantilla')

@section('head')
<link rel="stylesheet" href="{{asset('css/login.css')}}">
@endsection


@section('content')

    <div class="contenedor_registrar">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="card-header">{{ __('Regitrarse') }}</div>
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

            <div class="col-md-6">
                <i class="fas fa-address-card"></i>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

            <div class="col-md-6">
                <i class="fas fa-envelope"></i>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <label for="select">Tipo de Rol</label>
            <div class="col-md-6">
                <i class="fas fa-user-tag"></i>
                <select name="rol" id="select">
                    <option difault>Seleccionar rol de Usuario</option>
                    <option value="admin">Admin</option>
                    <option value="normal">Normal</option>
                    <option value="gad">Gad</option>
                </select>
            </div>

            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

            <div class="col-md-6">
                <i class="fas fa-key"></i>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

            <div class="col-md-6">
                <i class="fab fa-keycdn"></i>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>

            <button type="submit" class="btn-registrar">
                {{ __('Registrar') }}
            </button>
        </form>
    </div>
@endsection
