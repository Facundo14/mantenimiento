<ul class="nav nav-pills nav-stacked">
  <li class="{{setActiveRoute('pedidos.create')}}"><a href="{{ route('pedidos.create') }}"><i class="fa fa-inbox"></i> Hacer un pedido{{--
    <span class="label label-primary pull-right">12</span></a></li> --}}
  <li class="{{setActiveRoute('pedidos.index')}}">
  	<a href="{{ route('pedidos.index') }}"><i class="fa fa-envelope-o"></i> Listado
  		<span class="pull-right-container">
          <small class="label pull-right bg-yellow" data-toggle="tooltip" data-placement="top" title="En proceso">{{$proceso}}</small>
          <small class="label pull-right bg-green" data-toggle="tooltip" data-placement="top" title="Terminados">{{$terminados}}</small>
          <small class="label pull-right bg-red" data-toggle="tooltip" data-placement="top" title="Pendientes">{{$pendiente}}</small>
        </span>
  	</a>
  </li>
</ul>