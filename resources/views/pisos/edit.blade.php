@extends('admin.layout')

@section('header')
	 <h1>
        Piso
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('inicio') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li><a href="{{ route('pisos.index') }}"><i class="fa fa-list"></i> Piso</a></li>
        <li class="active">Editar</li>
      </ol>
@stop

@section('contenido')
<div class="row">
	@include('admin.partials.errors-messages')
	<form method="POST" action="{{ route('pisos.update', $piso) }}">
		{{csrf_field()}} {{method_field('PUT')}}
		<div class="col-md-12">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Datos</h3>
				</div>
				<div class="box-body">
					<div class="col-md-6">
						<div class="form-group">
							<label>Nombre:</label>
							<input name="nombre" style="text-transform: uppercase;" value="{{ old('nombre', $piso->nombre) }}" class="form-control" placeholder="Ingresa el nombre">
						</div>
						<div class="form-group">
							<label>Descripcion:</label>
							<input name="descripcion" style="text-transform: uppercase;" value="{{ old('descripcion', $piso->descripcion) }}" class="form-control" placeholder="Ingresa la descripcion">
						</div>
					</div>
				</div>
				<div class="box-footer">
					<div class="btn-group pull-right">
						<button class="btn btn-app"><i class="fa fa-save"></i> Guardar</button>
						<a type="button" href="{{ route('pisos.index') }}" class="btn btn-app"><i class="fa fa-reply"></i> Cancelar</a>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>
@stop

@push('style')
@endpush

@push('scripts')
@endpush
