<!DOCTYPE html>
<html lang="en">
  <head>
<title>CasRent</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<style>
  body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}


  .parallax {
            background-image: url("https://www.ecestaticos.com/imagestatic/clipping/355/519/355519ce7b40084a9c84464265bfff96/los-25-destinos-turisticos-mas-populares-del-mundo.jpg?mtime=1427455462");
            background-size: cover;
            background-attachment: fixed;
            background-position: center center;
            height: 100vh;
        }

        .fondo-nav {
            background: white;
        }

        .men-inicio {
            color: white;
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
        }

        .menu-borde {
            border: none;
        }
        
        .dropdown-submenu {
            position: relative;
        }
        
        .dropdown-submenu>a:after {
            content: "\f0da";
            float: right;
            border: none;
            font-family: 'FontAwesome';
        }
        
        .dropdown-submenu>.dropdown-menu {
            top: 0;
            left: 100%;
            margin-top: 0px;
            margin-left: 0px;
        }
        
        .info-tama {
            font-family: 'Roboto', sans-serif;
            font-weight: bold;
        }
        
        .menuu li {
            display: block;
        }





</style>


</head>
<body class="w3-light-grey">

    <!-- Header -->
    <header id="inicio">
      <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top fondo-nav">

          <a class="navbar-brand" href="{{ route('inicio') }}"><img src="{{asset('imagenes/logo.png')}}" alt="img" class=" img-fluid" width="200px"></a>
          <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarResponsive">
                       <span class="navbar-toggler-icon"></span>
                  </button>


          <div id="navbarResponsive" class="collapse navbar-collapse">
              <ul class="navbar-nav ml-auto info-tama font-weight-bold">
                  <li class="nav-item">
                      <h4><a class="nav-link" href="#inicio">Inicio</a></h4>
                  </li>
                  <li class="nav-item">
                    <h4><a class="nav-link" href="#Nosotros">Nosotros</a></h4>
                </li>
                <li class="nav-item">
                  <h4><a class="nav-link" href="#Departamentos">Departamentos</a></h4>
              </li>
              

              @if (Route::has('login'))
                
                    @auth
                    <li class="nav-item">
                        <h4> <a class="nav-link" href="{{ url('/dashboard') }}">Mi perfil</a></h4>
                      </li>
                    @else          

                    <li class="nav-item">
                       <h4> <a class="nav-link" href="{{ route('login') }}">Iniciar sesion</a></h4>
                      </li>

                        {{-- @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif --}}
                    @endauth
                    @endif

              </ul>
          </div>
      </nav>
  </header>
  @yield('content')


  
  
  






                          <!-- Footer -->
                          <footer class="w3-container w3-padding-32 w3-black w3-center">
                            <h3>Siguenos en</h3>
                            <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Facebook"><i class="fa fa-facebook"></i></a>
                            <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Twitter"><i class="fa fa-twitter"></i></a>
                            <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-google-plus"></i></a>
                            <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-instagram"></i></a>
                            <a class="w3-button w3-large w3-teal w3-hide-small" href="javascript:void(0)" title="Linkedin"><i class="fa fa-linkedin"></i></a>
                            <p>© 2020 Todos los Derechos Reservados| <a href="#" target="_blank">Ingeniers</a></p>
                          
                            <div style="position:relative;bottom:100px;z-index:1;" class="w3-tooltip w3-right">
                              <span class="w3-text w3-padding w3-teal w3-hide-small">Volver al Inicio</span>   
                              <a class="w3-button w3-theme" href="#inicio"><span class="w3-xlarge">
                              <i class="fa fa-chevron-circle-up"></i></span></a>
                          </div>
                          </footer>

 

 

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


     
     </body>
     </html>