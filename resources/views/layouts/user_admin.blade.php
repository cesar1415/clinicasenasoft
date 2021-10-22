<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
    @yield('title')
  </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  {!! Html::style('adminlte/plugins/fontawesome-free/css/all.min.css') !!}
  @yield('style')
  <!-- Theme style -->
  {!! Html::style('adminlte/dist/css/adminlte.min.css') !!}
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="{{route('patient.index')}}" class="navbar-brand">
        <img src="{!!asset('adminlte/dist/img/AdminLTELogo.png')!!}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">MediFix</span>
      </a>

      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="{{route('welcome')}}" class="nav-link">Inicio</a>
          </li>
        </ul>
      </div>

      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        @include('layouts._user_menu')
      </ul>
    </div>
  </nav>
  @yield('content')

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Contáctanos
    </div>
    <!-- Default to the left -->
    <strong>MediFix &copy;
        <script type="text/javascript">
            document.write(new Date().getFullYear());
          </script>
        <a href="#">sistema clinico</a>.</strong> Todos los derechos reservados
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
{!! Html::script('adminlte/plugins/jquery/jquery.min.js') !!}
<!-- Bootstrap 4 -->
{!! Html::script('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') !!}
@yield('script')
<!-- AdminLTE App -->
{!! Html::script('adminlte/dist/js/adminlte.min.js') !!}
<!-- AdminLTE for demo purposes -->
{!! Html::script('adminlte/dist/js/demo.js') !!}
</body>
</html>
