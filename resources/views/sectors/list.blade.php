 <table id="id-table" class="table table-bordered table-striped">
    <thead>
    <tr>
      <th>#</th>
      <th>Piso</th>
      <th>Nombre</th>
      <th>Descripcion</th>
      <th>
          &nbsp;<a href="{{route('sectors.create')}}" class="btn btn-primary btn-xs" title="Agregar"><i class="fa fa-plus"></i></a>
      </th>
    </tr>
    </thead>
    <tbody>
    	@foreach($sectors as $sector)
    	<tr>
    		<td>{{ $sector->id }}</td>
    		<td>{{ $sector->pisos->nombre }}</td>
        <td>{{ $sector->nombre }}</td>
    		<td>{{ $sector->descripcion }}</td>
    		<td>
    			@can('update', $sector)
            &nbsp;<a href="{{ route('sectors.edit', $sector) }}" class="btn btn-warning btn-xs" title="Editar"><i class="fa fa-edit"></i></a>
    			@endcan
    			@can('delete', $sector)
	    			<form action="{{ route('sectors.destroy', $sector) }}" method="POST" style="display: inline;" >
	    				{{csrf_field()}} {{method_field('DELETE')}}
	    				<button title="Eliminar" class="btn btn-danger btn-xs" onclick="return confirm('Estas seguro de querer eliminar?')"><i class="fa fa-trash-o"></i></button>
	    			</form>
	    		@endcan
    		</td>
    	</tr>
    	@endforeach
    </tbody>
  </table>