@extends('admin.layout')

@section('header')
	 <h1>
        Pedidos
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('inicio') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li><a href="{{ route('prioridads.index') }}"><i class="fa fa-list"></i> Pedidos</a></li>
        <li class="active">Crear</li>
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
        <h3 class="box-title">Nuevo Pedido</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <div class="form-group">
          <input class="form-control" placeholder="To:">
        </div>
        <div class="form-group">
          <input class="form-control" placeholder="Subject:">
        </div>
        <div class="form-group">
          <textarea class="form-control" placeholder="Problema..."></textarea>
        </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <div class="pull-right">
          <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Enviar</button>
        </div>
        <button type="reset" class="btn btn-default"><i class="fa fa-times"></i> Cancelar</button>
      </div>
      <!-- /.box-footer -->
    </div>
  </div>
</div>
@stop

@push('style')

@endpush

@push('scripts')

@endpush