<!DOCTYPE html>
<html lang="es">


<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>@yield('title')</title>

    <!-- Favicon  -->
    <link rel="icon" href="medical/img/core-img/favicon.ico">

    <!-- Style CSS -->
    <link rel="stylesheet" href="medical/style.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="medilife-load"></div>
    </div>

    <!-- ***** Header Area Start ***** -->
    <header class="header-area">
        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <div class="h-100 d-md-flex justify-content-between align-items-center">
                            <p><span>MediFix</span></p>
                            <p>Horario de apertura: de lunes a domingo de 8 a.m. a 8 p.m.
                                Contacto:<span>+12-823-611-8721</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Header Area -->
        <div class="main-header-area" id="stickyHeader">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 h-100">
                        <div class="main-menu h-100">
                            <nav class="navbar h-100 navbar-expand-lg">
                                <!-- Logo Area  -->
                                <a class="navbar-brand" href=""><img src="medical/img/core-img/logo.png"
                                        alt="Logo"></a>

                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#medilifeMenu" aria-controls="medilifeMenu" aria-expanded="false"
                                    aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

                                <div class="collapse navbar-collapse" id="medilifeMenu">
                                    <!-- Menu Area -->
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="#">Inicio <span
                                                    class="sr-only">(current)</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Nosotros</a>
                                        </li>


                                        @guest
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">Iniciar sesión</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link btn btn-primary"
                                                href="{{ route('register') }}">Regístrate</a>
                                        </li>
                                        @else
                                        <li class="nav-item dropdown">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"
                                                role="button" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false" v-pre>
                                                {{ Auth::user()->name }}
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="navbarDropdown">
                                                @if (Auth::user()->hasRole('Patient'))
                                                <a class="dropdown-item" href="{{route('patient.index')}}">
                                                    <i class="fa fa-user mr-2"></i><span>Perfil</span>
                                                </a>
                                                <a class="dropdown-item" href="{{route('patient.edit_profile')}}">
                                                    <i class="fa fa-cog mr-2"></i><span>Ajustes</span>
                                                </a>
                                                <a class="dropdown-item" href="{{route('patient.appointments')}}">
                                                    <i class="fa fa-calendar mr-2"></i><span>Mis citas</span>
                                                </a>
                                                @else
                                                <a class="dropdown-item" href="{{route('users.show', Auth::user())}}">
                                                    <i class="fa fa-user mr-2"></i><span>Perfil</span>
                                                </a>
                                                @endif
                                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                                    <i class="fa fa-sign-out mr-2"></i><span>Cerrar sesión</span>
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                    class="d-none">
                                                    @csrf
                                                </form>
                                            </div>
                                        </li>
                                        @endguest
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
    @yield('content')
    <!-- ***** Footer Area Start ***** -->

    <!-- ***** Footer Area End ***** -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="medical/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="medical/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="medical/js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="medical/js/plugins.js"></script>
    <!-- Active js -->
    <script src="medical/js/active.js"></script>

</body>


</html>
