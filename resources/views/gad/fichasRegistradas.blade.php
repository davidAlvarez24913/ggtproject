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
  {{-- Sweet Alert CDN --}}
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  {{-- JQuery CDN --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
  {{-- XLSX CDN--}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.5/xlsx.min.js" integrity="sha512-BMIFH0QGwPdinbGu7AraCzG9T4hKEkcsbbr+Uqv8IY3G5+JTzs7ycfGbz7Xh85ONQsnHYrxZSXgS1Pdo9r7B6w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  {{-- savAs JS --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.0/FileSaver.min.js" integrity="sha512-csNcFYJniKjJxRWRV1R7fvnXrycHP6qDR21mgz1ZP55xY5d+aHLfo9/FcGDQLfn2IfngbAHd8LdfsagcCqgTcQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection

@section('content')
<h4>Ver Fichas Registradas</h4>
<div class="div_boton">
  <button class="btn_nuevo_registro">
    <h2> <a href="{{route('encuesta.seccion1_2')}}">Nueva Ficha</a></h2>
  </button>
</div>

<div class="contenedor_datatable">
    <table id="table_id">
      <thead class="title_head">
        <tr>
          <th>Nro. de Ficha Técnica</th>
          <th>Usuario</th>
          <th>Nombre</th>
          <th>Categoría</th>
          <th>Provincia</th>
          <th>Fecha creación</th>
          <th>Acciones</th>

        </tr>
      </thead>
      <tbody class="tbody_style">
        
        @foreach ($arreglo as $item)
          <tr>
            <th>{{ $item[5] }}</th>
            <th>{{ $item[0] }}</th>
            <th>{{ $item[1] }} </th>
            <th>{{ $item[2] == 'atracciones_naturales'? 'Atracciones Naturales': 'Manifestaciones Culturales'}} </th>
            <th>{{ $item[3] }} </th>
            <th>{{ $item[4] }} </th>
            <th class="botones">
              <form action="{{ route('gad.editar')}}" id='form_editar' method="post">
                  @csrf
                  <input type="hidden" name='id_editar' value="{{$item[5]}}">
                  <button class="btn_editar" type="submit" >Editar <i class="fas fa-edit"></i> </button>
              </form>
              <form action="{{ route('gad.eliminar')}}" method="post" id='form_eliminar'>
                  @csrf
                  <script>sessionStorage.clear();</script>
                  <input type="hidden" name='id_eliminar' value="{{$item[5]}}">
                  <button class="btn_eliminar" title="Eliminar"><i class="fas fa-trash-alt"></i></button>
              </form>
            </th>

          </tr>
        @endforeach
        
      </tbody>
        
      </table>
</div>



    @if (isset($result))
        
      <script>
        sessionStorage.clear();
        const Toast = Swal.mixin({
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 2500,
          timerProgressBar: true,
          didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
          }
        });

        Toast.fire({
          icon: 'success',
          title: 'Registro Eliminado'
        })
      </script>
    @endif
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