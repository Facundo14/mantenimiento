<ul class="nav nav-pills nav-stacked">
  <li class="{{setActiveRoute('pedidos.create')}}"><a href="{{ route('pedidos.create') }}"><i class="fa fa-inbox"></i> Hacer un pedido{{--
    <span class="label label-primary pull-right">12</span></a></li> --}}
  <li class="{{setActiveRoute('pedidos.index')}}"><a href="{{ route('pedidos.index') }}"><i class="fa fa-envelope-o"></i> Listado <span class="label label-danger pull-right">65</span></a></li>
</ul>