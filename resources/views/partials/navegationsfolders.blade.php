<div style="margin-top: 15px;">
    <ul class="nav nav-pills nav-stacked">
        <li class="header">Seleccionar</li>
        <li class="{{setActiveRoute('admin.instituciones.index')}}" >
        	<a href="{{ route('admin.instituciones.index') }}"> Institucion </a>
        </li>
        <li class="{{setActiveRoute('admin.sectors.index')}}">
        	<a href="{{ route('admin.sectors.index') }}"> Sector</a>
        </li>
        <li class="{{setActiveRoute('admin.puestos.index')}}">
        	<a href="{{ route('admin.puestos.index') }}"> Puesto</a>
        </li>
        <li class="{{setActiveRoute('admin.prioridad_problemas.index')}}">
        	<a href="{{ route('admin.prioridad_problemas.index') }}"> Prioridad Problema</a>
        </li>
        <li class="{{setActiveRoute('admin.prioridad_usuarios.index')}}">
        	<a href="{{ route('admin.prioridad_usuarios.index') }}"> Prioridad Usuario</a>
        </li>
        <li class="{{setActiveRoute('admin.estados.index')}}">
        	<a href="{{ route('admin.estados.index') }}"> Estado</a>
        </li>

        @can('view', new App\Pais)
            <li class="treeview {{ setActiveRoute('admin.paises.index') }}">
                <a href="{{ route('admin.paises.index') }}"><i class="fa fa-globe"></i> <span>Pais</span></a>
            </li>
        @endcan
    </ul>
</div>