@extends('admin.layout')

@section('header')
	 <h1>
        Sector
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('inicio') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li><a href="{{ route('sectors.index') }}"><i class="fa fa-list"></i> Sector</a></li>
        <li class="active">Crear</li>
      </ol>
@stop

@section('contenido')
<div class="row">
	@include('admin.partials.errors-messages')
	<form method="POST" action="{{ route('sectors.update', $sector) }}">
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
							<input name="nombre" style="text-transform: uppercase;" value="{{ old('nombre', $sector->nombre) }}" class="form-control" placeholder="Ingresa el nombre">
						</div>
						<div class="form-group">
							<label>Descripcion:</label>
							<input name="descripcion" style="text-transform: uppercase;" value="{{ old('descripcion', $sector->descripcion) }}" class="form-control" placeholder="Ingresa la descripcion">
						</div>
					</div>
				</div>
				<div class="box-footer">
					<div class="btn-group pull-right">
						<button class="btn btn-app"><i class="fa fa-save"></i> Guardar</button>
						<a type="button" href="{{ route('sectors.index') }}" class="btn btn-app"><i class="fa fa-reply"></i> Cancelar</a>
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
