<ul id="dropdown1" class="dropdown-content">
    @if (Auth::guest())
        <li><a href="{{ url('/') }}">Inicio</a></li>
    @else
        <li><a href="{{ url('/home') }}">Dashboard</a></li>
    @endif
    <li><a href="{{ url('/recomendaciones') }}">Recomendaciones</a></li>
    <li><a href="{{ url('/organizaciones') }}">ONG's Aliadas</a></li>
    <li><a href="{{ url('/instituciones') }}">Instituciones</a></li>
    @if (!Auth::guest())
        @if(Auth::user()->hasRole(['super', 'admin', 'editor']))
            <li role="separator" class="divider"></li>
            <li><a href="{{ route('admin.organizaciones.index') }}"> Organizaciones</a></li>
            <li><a href="{{ route('admin.instituciones.index') }}"> Instituciones</a></li>
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


<div id="header-warp">
    <header id="header">
        <div id="header-warper">
            <div class="container">
                <div class="row">

                    <div class="col s5 m6">
                        <div id="mainLogo-wrap">
                            <a href="/" id="mainLogo"><img src="/images/logo4.svg" alt="Coalición contra la Impunidad"></a>
                        </div>
                    </div>

                    <div class="col s6 m6 user-links right-align hide-on-med-and-down">
                        @if (Auth::guest())

                            <span class="login-link">
                                <a href="/login" class="waves-effect btn-flat small-btn dialog-trigger">Login</a>
                            </span>
                            <span class="login-link">
                                <a href="/register" class="waves-effect btn-flat small-btn">Registrarse</a>
                            </span>

                        @else

                            <span class="login-link">
                                <a class="dropdown-button" href="#!" data-activates="dropdown1">{{ Auth::user()->name }}<i class="material-icons right">arrow_drop_down</i></a>
                            </span>

                        @endif

                    </div>
                </div>
            </div>
        </div>
    </header>
</div>

<div class="col s12 hide-on-med-and-down">
    <nav id="nav" class="cyan darken-4">
        <div class="container">
            <ul class="left hide-on-med-and-down">
                <li><a href="{{ url('/') }}">Inicio</a></li>
                <li><a href="{{ url('/recomendaciones') }}">Recomendaciones</a></li>
                <li><a href="{{ url('/organizaciones') }}">ONG's Aliadas</a></li>
                {{--<li><a href="{{ url('#') }}">Estadisticas</a></li>--}}
            </ul>
        </div>
    </nav>
</div>
</div>