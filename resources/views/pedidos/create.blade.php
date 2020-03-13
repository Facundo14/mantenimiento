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
          @include('admin.partials.errors-messages')
          <form method="POST" action="{{ route('pedidos.store') }}">
            {{csrf_field()}}
            <div class="col-md-6">
              <div class="form-group {{ $errors->has('prioridads') ? 'has-error' : '' }}">
                <label>Prioridad:</label>
                <select name="prioridad_id" class="form-control select2">
                  <option value="">Selecciona un prioridad</option>
                  @foreach($prioridads as $prioridad)
                  <option value="{{$prioridad->id}}" {{old('prioridad')}}>{{$prioridad->nombre}}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group {{ $errors->has('prioridads') ? 'has-error' : '' }}">
                <label>Sector:</label>
                <select name="sector_id" class="form-control select2">
                  <option value="">Selecciona un sector</option>
                  @foreach($sectors as $sector)
                  <option value="{{$sector->id}}" {{old('sector')}}>{{$sector->nombre}}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
              <label>Pedido:</label>
                <textarea name="pedido" style="text-transform: uppercase;" class="form-control" placeholder="Ingresa el pedido">{{ old('pedido') }}</textarea>
              </div>

              <div class="form-group">
                <label>Observaciones:</label>
                <textarea name="observaciones" style="text-transform: uppercase;" class="form-control" placeholder="Ingresa el observaciones">{{ old('observaciones') }}</textarea>
              </div>
            </div>
        </div>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <div class="pull-right">
          <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Enviar</button>
        </div>
        <button type="reset" class="btn btn-default"><i class="fa fa-times"></i> Cancelar</button>
      </div>
          </form>
      <!-- /.box-footer -->
    </div>
  </div>
</div>
@stop

@push('style')
   <!-- Select2 -->
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/select2/select2.min.css') }}">
@endpush

@push('scripts')

<!-- Select2 -->
<script src="{{ asset('adminlte/plugins/select2/select2.full.min.js') }}"></script>
<script>
  $(".select2").select2({
    language: {
    noResults: function (params) {
      return "Sin resultados";
    }
    }
   });
</script>
@endpush