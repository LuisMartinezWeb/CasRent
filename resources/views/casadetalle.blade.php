<!DOCTYPE html>
<html lang="en">
  <head>
<title>Inicio</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
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
      <nav class="navbar navbar-expand-md bg-dark navbar-dark  fondo-nav">

          <a class="navbar-brand" href="{{ route('inicio') }}"><img src="{{asset('imagenes/logo.png')}}" alt="img" class=" img-fluid" width="200px" ></a>
          <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarResponsive">
                       <span class="navbar-toggler-icon"></span>
                  </button>


          <div id="navbarResponsive" class="collapse navbar-collapse">
              <ul class="navbar-nav ml-auto info-tama font-weight-bold">
                  
              

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
  <div class=" container-fluid">
    <div class="row">

        
        <div class="col-md-12  d-md-flex  flex-wrap justify-content-around  p-md-5">
            
          
    
                
            
          <div class="card text-center col-md-12">
            <div class="card-body row">
     
                <div class="col-md-5">
                    <img src="{{ Storage::url("imgpropiedades/$propiedad->imagen")}}" class="rounded img-fluid" alt="Cinque Terre"style="max-height:500px">
                 <br>
                
                  
                     
          
                  
                </div>
    
                <div class="col-md-7">
    
                    <h2 class=" text-left text-capitalize">{{ $propiedad->nombre}}</h2>
                    <p class="card-text text-justify">
                        {{ $propiedad->descripcion}}
                        <br>
                        <span class=" font-weight-bold"> Precio de Renta Mensual: ${{ $propiedad->precio}} MXN</span>
                      </p>
    
                      <ul class=" list-unstyled d-md-flex justify-content-between">
    
                        <li>
                            <ul class="list-unstyled">
                                 <li>
                                     <i class="fas fa-house-user text-blue"></i> Habitaciones
                                 </li>
                                <li>
                                    {{ $propiedad->habitaciones}}
                                </li>
                            </ul>
                         </li>
    
                         <li>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-toilet text-blue"></i> Baños</li>
                                <li>
                                    {{ $propiedad->baños}}
                                </li>
                            </ul>
                         </li>
    
                         <li>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-warehouse text-blue"></i>  Estacionamientos</li>
                                <li>
                                    {{ $propiedad->estacionamiento}}
                                </li>
                            </ul>
                         </li>
    
                         <li>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-map text-blue"></i> Metros Cuadrados</li>
                                <li>
                                    {{ $propiedad->metros}} m²
                                </li>
                            </ul>
                         </li>
                        
                        
                        
    
                      </ul>
                     
                      <div class=" d-md-flex justify-content-between">
    
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">
                            Contactar al Anunciante
                          </button>
                      </div>
                      
                      <!-- The Modal -->
              <div class="modal fade" id="myModal">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content bg-blue">
                    
                    <!-- Modal Header -->
                    <div class="modal-header">
                      <h4 class="modal-title">Contacta al anunciante</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    
                    <!-- Modal body -->
                    <div class="modal-body text-left">
                      <form method="POST"  action="{{ route('contacto.store') }}">
                        @csrf
                        <div class="form-group ">
                            <label for="email">Correo Electronico:</label>
                            <input type="email" class="form-control" placeholder="Ingrese su correo" id="correocontacto" name="correocontacto" value="{{ old('correocontacto') }}" required>
                            @error('correocontacto')                           
                              <span class=" text-danger">{{ $message }} </span>                                 
                            @enderror
                          </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="numero">Nombre:</label>
                                    <input type="text" class="form-control" id="nombrecontacto" placeholder="Ingrese su Nombre" name="nombrecontacto" value="{{ old('nombrecontacto') }}" required>
                                    @error('nombrecontacto')                           
                              <span class=" text-danger">{{ $message }} </span>                                 
                            @enderror
                                  </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="numero">Numero Telefonico:</label>
                                    <input type="tel" class="form-control" id="nombrecontacto" placeholder="Ingrese su telefono" name="numerocontacto" value="{{ old('numerocontacto') }}" required>
                                    @error('numerocontacto')                           
                              <span class=" text-danger">{{ $message }} </span>                                 
                            @enderror
                                  </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="numero">Mensaje:</label>
                            <textarea class="form-control" rows="5" id="comment" name="mensajecontacto" required>Hola, me interesa este inmueble que vi en CASRENT y quiero que me contacten. Gracias.</textarea>
                            @error('mensajecontacto')                           
                              <span class=" text-danger">{{ $message }} </span>                                 
                            @enderror
                          </div>

                        <input type="hidden" name="idcasa" value="{{ $propiedad->id}}" required>
                        
                        
                        <button type="submit" class="btn btn-primary">Enviar</button>
                        
                      </form>
                    </div>
                    
                    
                    
                  </div>
                </div>
              </div>
                </div>
            
              
              
              
            </div>
          </div>
    
    
          
        </div>
    
      </div>
  </div>

  






                          <!-- Footer -->
                          <footer class="w3-container w3-padding-32 w3-black w3-center ">
                            <h3>Siguenos en</h3>
                            <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Facebook"><i class="fa fa-facebook"></i></a>
                            <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Twitter"><i class="fa fa-twitter"></i></a>
                            <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-google-plus"></i></a>
                            <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-instagram"></i></a>
                            <a class="w3-button w3-large w3-teal w3-hide-small" href="javascript:void(0)" title="Linkedin"><i class="fa fa-linkedin"></i></a>
                            <p>© 2020 Todos los Derechos Reservados| <a href="#" target="_blank">Ingeniers</a></p>
                          
                            
                          </footer>

     
     <script>
     // Used to toggle the menu on small screens when clicking on the menu button
     function myFunction() {
       var x = document.getElementById("navDemo");
       if (x.className.indexOf("w3-show") == -1) {
         x.className += " w3-show";
       } else { 
         x.className = x.className.replace(" w3-show", "");
       }
     }
     </script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


     
     </body>
     </html>


