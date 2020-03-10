
<div style="margin-top: 15px;">
    <ul class="nav nav-pills nav-stacked">
        <li class="header ">Seleccionar</li>
        <li class="{{setActiveRoute(['pisos.index', 'pisos.create', 'pisos.edit'])}}">
            <a href="{{ route('pisos.index') }}"> Piso</a>
        </li>
       <li class="{{setActiveRoute(['sectors.index', 'sectors.create', 'sectors.edit'])}}">
        	<a href="{{ route('sectors.index') }}"> Sector</a>
        </li>
        <li class="{{setActiveRoute(['prioridads.index', 'prioridads.create', 'prioridads.edit'])}}">
            <a href="{{ route('prioridads.index') }}"> Prioridades</a>
        </li> {{--
        <li class="{{setActiveRoute('admin.localidades.index')}}">
        	<a href="{{ route('admin.localidades.index') }}"> Localidad</a>
        </li> --}}
    </ul>
</div>