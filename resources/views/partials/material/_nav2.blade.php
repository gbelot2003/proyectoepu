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
<div class="header-warp">
    <header id="header" class="container">
        <div class="row no-margin">
            <div class="col s12 m12 l12">
                <div class="button-collapse-wrap">
                    <nav class="white">
                        <a href="#!" data-activates="slide-out" class="button-collapse waves-effect"><i class="material-icons blue">menu</i></a>
                    </nav>
                </div>
                <div id="mainLogo-wrap">
                    <a href="/" id="mainLogo"><img src="/images/logo3.svg" width="320" height="29" alt="Plataform EPU"></a>
                    <a href="/" id="mainLogo-small"><img src=/images/logo3.svg" width="103" height="29" alt="Plataforma EPU"></a>
                </div>
                <div class="user-links right hide-on-med-and-down">
                    @if (Auth::guest())

                        <span class="login-link">
                            <a href="login" class="waves-effect btn-flat small-btn dialog-trigger">Login</a>
                        </span>
                        <span class="login-link">
                            <a href="register" class="waves-effect btn-flat small-btn">Registrarse</a>
                        </span>
                    @else
                            <!-- Dropdown Trigger -->
                        <li><a class="dropdown-button" href="#!" data-activates="dropdown1">{{ Auth::user()->name }}<i class="material-icons right">arrow_drop_down</i></a></li>
                    @endif


                </div>

            </div>
        </div>
    </header>

    <div class="col s12 hide-on-med-and-down">
        <br>
        <nav id="nav" class="blue accent-2">
            <div class="container">
                <ul class="left hide-on-med-and-down">
                    <li><a href="{{ url('/') }}">Inicio</a></li>
                    <li><a href="#">Noticias</a></li>
                    <li><a href="{{ url('/instituciones') }}">Instituciones</a></li>
                    <li><a href="{{ url('/organizaciones') }}">ONG's Aliadas</a></li>
                    <li><a href="{{ url('/recomendaciones') }}">Recomendaciones</a></li>
                    <li><a href="{{ url('#') }}">Estadisticas</a></li>
                </ul>
            </div>
        </nav>
    </div>
</div>