<nav class="navbar navbar-default navbar-static-top" style="padding-bottom: 20px">
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
            <a class="navbar-brand" href="/home">
                <img id="logo" alt="Isnaya-Print" src="img/logofooter.png" width="160px">
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
                        
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
            <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Acceder</a></li>
                @else
                    <li class="dropdown">
                        <a href="" class="dropdown-toggle drop" data-toggle="dropdown">
                            <span id="ico" class=""></span>Funciones<strong     class="caret"></strong></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="/colores">Colores</a>
                            </li>
                            <li>
                                <a href="/clientes">Clientes</a>
                            </li>
                            <li>
                                <a href="/productos">Productos</a>
                            </li>
                            <li>
                                <a href="/rubros">Rubros</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="" class="dropdown-toggle drop" data-toggle="dropdown">
                            <span id="ico" class=""></span>Proformas<strong     class="caret"></strong></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="">Mostrar</a>
                            </li>
                            <li>
                                <a href="/calculos">Agregar</a>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <img src="/img/users.png" class="img-circle" alt="User Image" width="35px"> 
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="#">Configuración</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="{{ url('/logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    Salir
                                </a>

                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
         </div>
    </div>
</nav>