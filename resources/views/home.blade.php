@extends('layouts.plantilla')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <h1 style="color: black;">estoy ahqui</h1>
                <a href="">Ficha tecnica</a>
                <a href="">Encuesta de Accesibilidad</a>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <h2>
                            {{ __('¡Has iniciado sesión!') }}
                        </h2>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
