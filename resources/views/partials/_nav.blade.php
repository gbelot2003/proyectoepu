<nav class="navbar navbar-inverse navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                Sistema EPU
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                <li><a href="{{ url('/home') }}">Inicio</a></li>
                <li><a href="{{ url('/recomendaciones') }}">Recomendaciones</a></li>

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}"><i class="fa fa-btn fa-lock"></i>Login</a></li>
                    <li><a href="{{ url('/register') }}"><i class="fa fa-btn fa-registered"></i> Registrarse</a></li>
                @else
                    <li class="dropdown">

                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <i class="fa fa-btn fa-cog"></i>{{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ route('admin.recomendaciones.index') }}"><i class="fa fa-btn fa-folder-open-o"></i>Recomendaciones</a></li>
                            <li><a href="{{ route('admin.recomendaciones.index') }}"><i class="fa fa-btn fa-folder-open-o"></i>Articulos</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="{{ route('admin.users.index') }}"><i class="fa fa-btn fa-user"></i>Usuarios</a></li>
                            <li><a href="{{ route('admin.organizaciones.index') }}"><i class="fa fa-btn fa-users"></i>Organizaciones</li>
                            <li><a href="{{ route('admin.organizaciones.index') }}"><i class="fa fa-btn fa-users"></i>Documentos</li>
                            <li role="separator" class="divider"></li>
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>