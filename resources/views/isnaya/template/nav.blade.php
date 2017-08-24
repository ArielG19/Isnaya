<nav class="navbar navbar-default navbar-static-top">
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
                <img id="logo" alt="Isnaya-Print" src="../../img/logofooter.png" width="160px">
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
                                <a id="funciones" href="/productos">Productos</a>
                            </li>
                            <li>
                                <a id="funciones" href="/rubros">Rubros</a>
                            </li>
                            <li>
                                <a id="funciones" href="/clientes">Clientes</a>
                            </li>
                            <li>
                                <a id="funciones" href="/colores">Colores</a>
                            </li>
                            <li>
                                <a id="funciones" href="/formatos">Formatos</a>
                            </li>  
                            @if(Auth::user()->type=='admin')
                                <li>
                                    <a id="funciones" href="/bitacora">Bitacora</a>
                                </li>
                                <li>
                                    <a id="funciones" href="/usuarios">Usuarios</a>
                                </li>  
                            @endif                         
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="" class="dropdown-toggle drop" data-toggle="dropdown">
                            <span id="ico" class=""></span>Proformas<strong class="caret"></strong>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a id="proformas" href="{{url('proformas')}}">Mostrar</a>
                            </li>
                            <li>
                                <a id="proformas" href="/calculos">Agregar</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <img src="../../imagenes/perfil/{{Auth::user()->imagen}}"
                                 style="width: 45px; height: 45px; float: left;border-radius: 50%; margin-right: 10px; margin-top:-13px;"> {{ Auth::user()->name }}<span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a id="usuario" href="{{ url('/perfil') }}">Configuración</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a id="usuario" href="{{ url('/logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    Salir <span class="fa fa-sign-out"></span>
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