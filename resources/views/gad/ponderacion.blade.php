@extends('layouts.plantilla')

@section('title','Pondercion')
    
@section('head')
    <meta name="csrf-token" content="{{ csrf_token()}}">
    
    {{-- CSS --}}
    <link rel="stylesheet" href="{{asset('/css/ponderacion.css')}}">
    
    {{-- CDN DATATABLE --}}
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
    {{-- CDN JQUERY --}}
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    
    {{-- JQuery CDN --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
@endsection

@section('content')

    <h4>Ponderacion Y Jerarquizacion</h4>
    @if (isset($ponderaciones))
    {{$ponderaciones}}
    @else   
    {{'no hay datos'}}
    @endif    
    <div class="contenedor_datatable_ponderacion">
        <table id="table_id">
        <thead class="title_head">
            <tr>
                <th># registro Encuesta</th>
                <th>Seccion 4</th>
                <th>Seccion 5</th>
                <th>Seccion 6</th>
                <th>Seccion 7</th>
            </tr>
        </thead>
        <tbody class="tbody_style">
            @foreach ($ponderaciones as $p)
            <tr>
                <th>{{ $p[0] }}</th>
                <th>{{ $p[1] }} </th>
                <th>{{ $p[3] }} </th>
                <th>{{ $p[4] }} </th>
                <th>{{ $p[5] }} </th>


            </tr>
            @endforeach
            
        </tbody>
            
        </table>
</div>

@endsection

@section('scripts')
    
<script src="//cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
	<script>
    $(document).ready( function () {
        $('#table_id').DataTable({
          "language": {
            "lengthMenu": "Mostrar _MENU_ registros por página",
            "search": "Buscar:",
            "zeroRecords": "Nada que mostrar, losiento!",
            "info": "Mostrando página _PAGE_ de _PAGES_",
            "infoEmpty": "No hay registros disponibles.",
            "infoFiltered": "(filtered from _MAX_ total records)",
            "paginate": {
              "first": "Primero",
              "last": "Ultimo",
              "next": "Siguiente",
              "previous": "Anterior"
            }
          }
        });
        
    } );
</script>


@endsection