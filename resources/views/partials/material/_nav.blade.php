
<ul id="dropdown1" class="dropdown-content">
    <li><a href="{{ url('/') }}">Inicio</a></li>
    <li><a href="{{ url('/instituciones') }}">Instituciones</a></li>
    <li><a href="{{ url('/organizaciones') }}">ONG's Aliadas</a></li>
    <li><a href="{{ url('/recomendaciones') }}">Recomendaciones</a></li>
    @if (!Auth::guest())
        @if(Auth::user()->hasRole(['super', 'admin', 'editor']))
            <li role="separator" class="divider"></li>
            <li><a href="{{ route('admin.recomendaciones.index') }}">Articulos</a></li>
            <li><a href="{{ route('admin.organizaciones.index') }}"> Organizaciones</a></li>
            <li><a href="{{ route('admin.instituciones.index') }}"> Instituciones</a></li>
            <li><a href="{{ route('admin.organizaciones.index') }}"> Documentos</a></li>
            <li role="separator" class="divider"></li>

        @endif

        @if(Auth::user()->hasRole(['super', 'admin']))
            <li><a href="{{ route('admin.recomendaciones.index') }}">Recomendaciones</a></li>
            <li><a href="{{ route('admin.users.index') }}">Usuarios</a></li>
        @endif

    @endif
        <li role="separator" class="divider"></li>

    <li><a href="{{ url('/logout') }}">Logout</a></li>
</ul>

@if (Auth::guest())
    <ul id="slide-out" class="side-nav">
        <li><a href="{{ url('/') }}">Inicio</a></li>
        <li><a href="{{ url('/instituciones') }}">Instituciones</a></li>
        <li><a href="{{ url('/organizaciones') }}">ONG's Aliadas</a></li>
        <li><a href="{{ url('/recomendaciones') }}">Recomendaciones</a></li>
        <li role="separator" class="divider"></li>
        <li>
            <div>
                <a href="{{ url('/login') }}">Login</a>
                <a href="{{ url('/register') }}">Registrarse</a>
            </div>
        </li>
    </ul>

@else
<ul id="slide-out" class="side-nav">
    <li><a href="{{ url('/') }}">Inicio</a></li>
    <li><a href="{{ url('/instituciones') }}">Instituciones</a></li>
    <li><a href="{{ url('/organizaciones') }}">ONG's Aliadas</a></li>
    <li><a href="{{ url('/recomendaciones') }}">Recomendaciones</a></li>
    @if (!Auth::guest())
        @if(Auth::user()->hasRole(['super', 'admin', 'editor']))
            <li role="separator" class="divider"></li>
            <li><a href="{{ route('admin.recomendaciones.index') }}">Articulos</a></li>
            <li><a href="{{ route('admin.organizaciones.index') }}"> Organizaciones</a></li>
            <li><a href="{{ route('admin.instituciones.index') }}"> Instituciones</a></li>
            <li><a href="{{ route('admin.organizaciones.index') }}"> Documentos</a></li>
            <li role="separator" class="divider"></li>

        @endif

        @if(Auth::user()->hasRole(['super', 'admin']))
            <li><a href="{{ route('admin.recomendaciones.index') }}">Recomendaciones</a></li>
            <li><a href="{{ route('admin.users.index') }}">Usuarios</a></li>
        @endif

    @endif
    <li role="separator" class="divider"></li>
    <li><a href="{{ url('/logout') }}">Logout</a></li>
</ul>
@endif

<div class="navbar-fixed">
    <nav>
        <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
        <div class="nav-wrapper">
            <div class="container">
                <a href="{{ url('/') }}" class="brand-logo">Sistema EPU</a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="{{ url('/') }}">Inicio</a></li>
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
</div>