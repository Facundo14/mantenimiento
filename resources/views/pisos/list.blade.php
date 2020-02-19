 <table id="id-table" class="table table-bordered table-striped">
    <thead>
    <tr>
      <th>#</th>
      <th>Nombre</th>
      <th>Descripcion</th>
      <th>
          &nbsp;<a href="{{route('pisos.create')}}" class="btn btn-primary btn-xs" title="Agregar"><i class="fa fa-plus"></i></a>
      </th>
    </tr>
    </thead>
    <tbody>
    	@foreach($pisos as $piso)
    	<tr>
    		<td>{{ $piso->id }}</td>
    		<td>{{ $piso->nombre }}</td>
    		<td>{{ $piso->descripcion }}</td>
    		<td>
    			@can('update', $piso)
            &nbsp;<a href="{{ route('pisos.edit', $piso) }}" class="btn btn-warning btn-xs" title="Editar"><i class="fa fa-edit"></i></a>
    			@endcan
    			@can('delete', $piso)
	    			<form action="{{ route('pisos.destroy', $piso) }}" method="POST" style="display: inline;" >
	    				{{csrf_field()}} {{method_field('DELETE')}}
	    				<button title="Eliminar" class="btn btn-danger btn-xs" onclick="return confirm('Estas seguro de querer eliminar?')"><i class="fa fa-trash-o"></i></button>
	    			</form>
	    		@endcan
    		</td>
    	</tr>
    	@endforeach
    </tbody>
  </table>