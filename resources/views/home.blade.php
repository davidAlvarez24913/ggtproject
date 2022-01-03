@extends('layouts.plantilla')

@section('head')
    <link rel="stylesheet" href="{{asset('/css/home.css')}}">
    
@endsection
@section('content')
<div class="container">
    
    <div class="card_body">

        @if (session('status'))
            <span class="alert" role="alert">
                {{ session('status') }}
            </span>
        @endif
            <h2>
                {{ __('¡Has iniciado sesión!') }}
            </h2>
        
    </div>
</div>
@endsection
