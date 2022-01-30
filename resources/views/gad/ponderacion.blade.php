@extends('layouts.plantilla')

@section('title','Ponderación')
    
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
    {{-- @if (isset($ponderaciones))
    {{$ponderaciones}}
    @else   
    {{'no hay datos'}}
    @endif     --}}
    <div class="contenedor_datatable_ponderacion">
        <table id="table_id">
            <thead class="title_head">
                <tr>
                    <th>Nro. de Ficha</th>
                    <th>Accesibilidad al Atractivo</th>
                    <th>Planta Turística y Complementarios</th>
                    <th>Conservación e Integración Atractivo</th>
                    <th>Higiene y Seguridad Turítica</th>
                    <th>Total (Sec: 4-7)</th>

                </tr>
                <tr>
                    <th><i class="fas fa-sort-numeric-down"></i></th>
                    <th> Seccion 4</th>
                    <th> Seccion 5</th>
                    <th> Seccion 6</th>
                    <th> Seccion 7</th>
                    <th><i class="fas fa-calculator"></i></th>

                </tr>
            </thead>
            <tbody class="tbody_style">
                @foreach ($ponderaciones as $p)
                <tr>
                    <th>{{ $p['id_encuesta'] }}  </th>
                    <th>{{ $p['ponderacion4'] }} </th>
                    <th>{{ $p['ponderacion5'] }} </th>
                    <th>{{ $p['ponderacion6'] }} </th>
                    <th>{{ $p['ponderacion7'] }} </th>
                    <th>{{ $p['ponderacion4'] + $p['ponderacion5'] + $p['ponderacion6'] + $p['ponderacion7'] }} </th>

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