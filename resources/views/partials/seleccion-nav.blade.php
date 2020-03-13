<ul class="nav nav-pills nav-stacked">
  <li class="{{setActiveRoute('pedidos.create')}}"><a href="{{ route('pedidos.create') }}"><i class="fa fa-inbox"></i> Hacer un pedido{{--
    <span class="label label-primary pull-right">12</span></a></li> --}}
  <li class="{{setActiveRoute('pedidos.index')}}">
  	<a href="{{ route('pedidos.index') }}"><i class="fa fa-envelope-o"></i> Listado
  		<span class="pull-right-container">
          <small class="label pull-right bg-yellow">{{$proceso}}</small>
          <small class="label pull-right bg-green">{{$terminados}}</small>
          <small class="label pull-right bg-red">{{$pendiente}}</small>
        </span>
  	</a>
  </li>
</ul>