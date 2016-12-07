
<ul id="dropdown1" class="dropdown-content">

    @if (!Auth::guest())
        @if(Auth::user()->hasRole(['super', 'admin', 'editor']))
             <li><a href="{{ route('admin.recomendaciones.index') }}">Articulos</a></li>
            <li><a href="{{ route('admin.organizaciones.index') }}"> Organizaciones</a></li>
            <li><a href="{{ route('admin.instituciones.index') }}"> Instituciones</a></li>
            <li><a href="{{ route('admin.organizaciones.index') }}"> Documentos</a></li>
       @endif
            <li role="separator" class="divider"></li>

        @if(Auth::user()->hasRole(['super', 'admin']))
            <li><a href="{{ route('admin.recomendaciones.index') }}">Recomendaciones</a></li>
            <li><a href="{{ route('admin.users.index') }}">Usuarios</a></li>
       @endif

    @endif


        <li role="separator" class="divider"></li>

    <li><a href="{{ url('/logout') }}">Logout</a></li>

</ul>

<nav>
    <div class="nav-wrapper">
        <div class="container">
            <a href="{{ url('/') }}" class="brand-logo">Sistema EPU</a>
            <ul class="right hide-on-med-and-down">
                <li><a href="{{ url('/home') }}">Inicio</a></li>
                <li><a href="#">Noticias</a></li>
                <li><a href="{{ url('/instituciones') }}">Instituciones</a></li>
                <li><a href="{{ url('/organizaciones') }}">ONG's Aliadas</a></li>
                <li><a href="{{ url('/recomendaciones') }}">Recomendaciones</a></li>

            @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Registrarse</a></li>
                @else
                    <!-- Dropdown Trigger -->
                    <li><a class="dropdown-button" href="#!" data-activates="dropdown1">{{ Auth::user()->name }}<i class="material-icons right">arrow_drop_down</i></a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>