@extends('layouts.plantilla')

@section('title','Fichas Registradas')
@section('head')
 <link rel="stylesheet" href="{{ asset('/css/verFichas.css') }}">
{{-- ESTILOS DATATABLE --}}
{{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css"> --}}
{{-- CDN DATATABLE --}}
<link rel="stylesheet" href="//cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
{{-- CDN JQUERY --}}
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  
@endsection

@section('content')
<h4>Ver Fichas Registradas</h4>

<div class="contenedor_datatable">
    <table id="table_id">
      <thead class="title_head">
        <tr>
          <th>#</th>
          <th>Company</th>
          <th>Contact</th>
          <th>Country</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Alfreds Futterkiste</td>
          <td>Maria Anders</td>
          <td>Germany</td>
        </tr>
        <tr>
          <td>2</td>
          <td>Centro comercial Moctezuma</td>
          <td>Francisco Chang</td>
          <td>Mexico</td>
        </tr>
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