 <table id="id-table" class="table table-bordered table-striped">
    <thead>
    <tr>
      <th>#</th>
      <th>Nombre</th>
      <th>Descripcion</th>
      <th>
          &nbsp;<a href="{{route('estados.create')}}" class="btn btn-primary btn-xs" title="Agregar"><i class="fa fa-plus"></i></a>
      </th>
    </tr>
    </thead>
    <tbody>
    	@foreach($estados as $estado)
    	<tr>
    		<td>{{ $estado->id }}</td>
    		<td>{{ $estado->nombre }}</td>
    		<td>{{ $estado->descripcion }}</td>
    		<td>
    			@can('update', $estado)
            &nbsp;<a href="{{ route('estados.edit', $estado) }}" class="btn btn-warning btn-xs" title="Editar"><i class="fa fa-edit"></i></a>
    			@endcan
    			@can('delete', $estado)
	    			<form action="{{ route('estados.destroy', $estado) }}" method="POST" style="display: inline;" >
	    				{{csrf_field()}} {{method_field('DELETE')}}
	    				<button title="Eliminar" class="btn btn-danger btn-xs" onclick="return confirm('Estas seguro de querer eliminar?')"><i class="fa fa-trash-o"></i></button>
	    			</form>
	    		@endcan
    		</td>
    	</tr>
    	@endforeach
    </tbody>
  </table>