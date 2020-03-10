@extends('admin.layout')

@section('header')
   <h1>
        Pedidos
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('inicio') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li><i class="fa fa-list active"></i> Pedidos</li>
      </ol>
@stop

@section('contenido')
<div class="row">
  <div class="col-md-3">
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Carpetas</h3>

        <div class="box-tools">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
          </button>
        </div>
      </div>
      <div class="box-body no-padding">
        @include('partials.seleccion-nav')
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /. box -->
  </div>
  <div class="col-md-9">
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Listado de pedidos</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        @include('pedidos.list')
      </div>
      <!-- /.box-body -->
    </div>
  </div>
</div>
@stop


@push('style')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('/adminlte/plugins/datatables/dataTables.bootstrap.css')}}">
  <link rel="stylesheet" href="{{ asset('/adminlte/plugins/datatables/extensions/Buttons/css/buttons.datatables.css')}}">
@endpush

@push('scripts')
<!-- DataTables -->
<script src="{{ asset('/adminlte/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('/adminlte/plugins/datatables/dataTables.bootstrap.min.js')}}"></script>
<script src="{{ asset('/adminlte/js/data-table-pages.js')}}"></script>
@endpush