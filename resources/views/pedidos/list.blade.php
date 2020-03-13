 <table id="id-table" class="table table-bordered table-striped">
    <thead>
    <tr>
      <th>#</th>
      <th>Pedido</th>
      <th>Usuario</th>
      <th>Prioridad</th>
      <th>Piso - Sector</th>
      <th>Estado</th>
      <th>
          &nbsp;<a href="{{route('pedidos.create')}}" class="btn btn-primary btn-xs" title="Agregar"><i class="fa fa-plus"></i></a>
      </th>
    </tr>
    </thead>
    <tbody>
    	@foreach($pedidos as $pedido)
    	<tr>
    		<td>{{ $pedido->id }}</td>
        <td>{{ $pedido->pedido }}</td>
    		<td>{{ $pedido->user->name }}</td>
        <td>{{ $pedido->prioridad->nombre }}</td>
        <td>{{ $pedido->sector->pisos->nombre }} - {{$pedido->sector->nombre }}</td>
    		<td>{{ $pedido->estado }}</td>
    		<td>
          {{-- @can('view', $pedido) --}}
            <button type="button" class="btn btn-xs btn-default" data-toggle="modal" data-target="#modal-ver">
                <i class="fa fa-search"></i>
              </button>
          {{-- @endcan --}}
    			@can('update', $pedido)
            &nbsp;<a href="{{ route('pedidos.edit', $pedido) }}" class="btn btn-warning btn-xs" title="Editar"><i class="fa fa-edit"></i></a>
    			@endcan
    			@can('delete', $pedido)
	    			<form action="{{ route('pedidos.destroy', $pedido) }}" method="POST" style="display: inline;" >
	    				{{csrf_field()}} {{method_field('DELETE')}}
	    				<button title="Eliminar" class="btn btn-danger btn-xs" onclick="return confirm('Estas seguro de querer eliminar?')"><i class="fa fa-trash-o"></i></button>
	    			</form>
	    		@endcan
    		</td>
    	</tr>
    	@endforeach
    </tbody>
  </table>
