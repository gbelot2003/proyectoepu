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
                    <a href="/" id="mainLogo"><img src="https://static.artofwhere.net/img/logo.svg" width="320" height="29" alt="Art of Where"></a>
                    <a href="/" id="mainLogo-small"><img src="https://static.artofwhere.net/img/logo-small.svg" width="103" height="29" alt="Art of Where"></a>
                </div>
                <div class="user-links right">

                    <span class="login-link">
                        <a href="login" class="waves-effect btn-flat small-btn dialog-trigger">Login</a>
                    </span>
                    <span class="login-link">
                        <a href="register" class="waves-effect btn-flat small-btn">Sign up</a>
                    </span>
                </div>
            </div>
            <div class="col s12">
                <br>
                <nav id="nav" class="">
                            <ul class="left hide-on-med-and-down">
                                <li><a href="{{ url('/') }}">Inicio</a></li>
                                <li><a href="#">Noticias</a></li>
                                <li><a href="{{ url('/instituciones') }}">Instituciones</a></li>
                                <li><a href="{{ url('/organizaciones') }}">ONG's Aliadas</a></li>
                                <li><a href="{{ url('/recomendaciones') }}">Recomendaciones</a></li>
                            </ul>
                </nav>
            </div>
        </div>
    </header>
    <hr>
</div>