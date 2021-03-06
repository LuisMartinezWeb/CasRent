<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Panel de Administrador</title> 

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/dist/css/adminlte.min.css">

 
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      
      
    </ul>

    <!-- SEARCH FORM -->
    
    @yield('buscadorr')
    
  </nav>
  <!-- /.navbar -->


  
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('inicio') }}" class="brand-link">
        
      <img src="{{asset('imagenes/logo.png')}}" alt="AdminLTE Logo" class="brand-image "
           style="opacity: .8">
      <span class="brand-text font-weight-light">Inicio</span>

      <a href="{{ route('dashboard') }}" class="brand-link">
        
        <img src="/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8 ">
        <span class="brand-text font-weight-light">Panel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image" >
          <a href="{{URL::to('/perfil')}}"><img src="/dist/img/{{ Auth::user()->avatar }}"  style="width: 3rem;">
       
        </div>
        <div class="info d-sm-flex">
            @auth
                <a href="{{ url('/profile') }}" class="d-block mr-1">{{\Illuminate\Support\Str::limit( auth()->user()->name, 15, $end='...') }}</a>

                <a href="#" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"><i class="fas fa-power-off text-red"></i></a>
            @endauth
        </div>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>

     
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link active">
              <i class="fas fa-home nav-icon"></i>
              <p>
                Mis Propiedades
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('propiedades.index') }}" class="nav-link  ">
                  <i class="fas fa-hand-point-right nav-icon"></i>
                  <p>Ver todas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('propiedades.create') }}"class="nav-link ">
                  <i class="fas fa-hand-point-right nav-icon"></i>
                  <p>Crear Nueva</p>
                </a>
              </li>
            </ul>
          </li>
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->

      <!-- Sidebar Menu -->

      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    

    <!-- Main content -->
    <div class="content mt-5">
      <div class="container-fluid">
        
       @yield('content')
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
     
    </div>
    <!-- Default to the left -->
 
    <strong>Copyright &copy; 2020 <a href="http://ingeniers.com">Ingeniers</a>.</strong> Todos los Derechos Reservados.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/dist/js/adminlte.min.js"></script>


</body>
</html>
