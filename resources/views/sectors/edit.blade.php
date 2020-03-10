@extends('admin.layout')

@section('header')
	 <h1>
        Sector
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('inicio') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li><a href="{{ route('sectors.index') }}"><i class="fa fa-list"></i> Sector</a></li>
        <li class="active">Editar</li>
      </ol>
@stop

@section('contenido')
<div class="row">
	@include('admin.partials.errors-messages')
	<form method="POST" action="{{ route('sectors.update', $sector) }}">
		{{csrf_field()}} {{method_field('PUT')}}
		<div class="col-md-12">
			<div class="box box-solid">
	            <div class="box-body">
	                <div class="row">
						<div class="col-md-2 col-sm-4">
			                <div class="box-header">
			                    <i class="fa fa-cogs"></i>
			                    <h3 class="box-title">Configuraciones</h3>
			                </div>
			                <!-- Navigation - folders-->
			                @include('admin.partials.navegationsfolders')
			            </div>
			            <div class="col-md-10 col-sm-8">
							<div class="box box-solid box-primary">
								<div class="box-header with-border">
									<h3 class="box-title">Editar sector</h3>
								</div>
								<div class="box-body">
									<div class="col-md-6">
										<div class="form-group {{ $errors->has('pisos') ? 'has-error' : '' }}">
											<label>Pisos:</label>
											<select name="piso_id" class="form-control select2">
												<option value="">Selecciona un piso</option>
												@foreach($pisos as $piso)
												<option value="{{$piso->id}}" {{old('piso', $sector->piso_id) == $piso->id ? 'selected' : ''}}>{{$piso->nombre}}</option>
												@endforeach
											</select>
										</div>
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
					</div>
				</form>
	                </div>
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