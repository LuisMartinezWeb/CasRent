<!DOCTYPE html>
<html lang="en">
<title>Inicio</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

<body class="w3-light-grey">

    <!-- Header -->
    <header class="w3-display-container w3-content w3-center" style="max-width:1100px">
      <img class="w3-image" src="dist/img/1pochutla.jpg" alt="Me" width="1000" height="333">
    </header>


    <!-- Navbar -->
    <div class="w3-top" id="ini">
      <div class="w3-bar w3-light-gray w3-card w3-left-align w3-large">
        <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-light-gray" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
        <a href="#Inicio" class="w3-bar-item w3-button w3-padding-large w3-white">Inicio</a>
        <a href="#Nosotros" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Nosotros</a>
        <a href="#Departamentos" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Departamentos</a>

        @if (Route::has('login'))
                
                    @auth
                        <a class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" href="{{ url('/dashboard') }}">Mi perfil</a>
                    @else          


                        <a class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" href="{{ route('login') }}">Iniciar session</a>

                        {{-- @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif --}}
                    @endauth
                    @endif
        
      </div>
    

      <!-- Navbar on small screens -->
      <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
        <a href="#Nosotros" class="w3-bar-item w3-button w3-padding-large">Nosotros</a>
        <a href="#Departamentos" class="w3-bar-item w3-button w3-padding-large">Departamentos</a>
        
      </div>
    </div>
         

    <!-- Container (Nosotros Section) -->
    <div class="w3-content w3-container" id="Nosotros">
      <h3 class="w3-center w3-xxxlarge">Nosotros</h3>
      <p class=" w3-justify w3-large">Somos una empresa mexicana constituida en 1996 dedicada a la renta de Alquiler 
        con la finalidad de que las personas encuentren un lugar donde vivir, con tan solo
         buscarnos en la red. Convencidos de que los usuarios requieren de un sitio como el
          nuestro, para que con mas facilidad puedan localizar departamentos en renta.</p>
          </div>
          <br>
          <br>


          <!-- Page content -->
          <div class="w3-content" style="max-width:1532px;">

            <div class="w3-content w3-container" id="Departamentos">
              <h3 class="w3-center w3-xxxlarge">Departamentos</h3>
              <p class=" w3-justify w3-large">Siéntase como en casa es nuestro lema. Ofrecemos los mejores cuartos y 
              departamentos en San Pedro Pochutla. Duerme bien y descansa bien.</p>
            </div>
            <br>
            <br>
            
            <div class="w3-row-padding">
              <div class="w3-col m4">
                <label><i class="fa fa-map-marker"></i> Direccion</label>
                <input class="w3-input w3-border" type="text" placeholder="">
              </div>
              <div class="w3-col m2">
                <label><i class="fa fa-usd"></i> Precio</label>
                <input class="w3-input w3-border" type="number" required placeholder="$">
              </div>
              <div class="w3-col m2">
                <label><i class="fa fa-child"></i> Personas</label>
                <input class="w3-input w3-border" type="number" required placeholder="0">
              </div>
              <div class="w3-col m2">
                <label><i class="fa fa-bath"></i> Baños</label>
                <input class="w3-input w3-border" type="number" placeholder="0">
              </div>
              <div class="w3-col m2">
                <label><i class="fa fa-search"></i></label>
                <button class="w3-button w3-block w3-black">Busqueda</button>
              </div>
            </div>
            <br>


            <div class="w3-row-padding w3-padding-16">
             
              <div class="w3-third w3-margin-bottom">
                <img src="{{asset('imagenes/room_single.jpg')}}" style="width:100%">
                <div class="w3-container w3-white">
                  <h3>Casa en Renta</h3>
                  <p class="w3-opacity">Mensual $1000 </p
                    <p class= "w3-justify">Calle Libra #481, Lomas Del Valle, Zapopan</p>
                    <p> Baños: 2</p>
                    <p> Camas: 1</p>
                    <p class=" w3-justify"> Increíble residencia con amplios y acogedores espacios, 
                    estilo mexicano en un nivel. 
                    Cuenta con sala comedor con techo y pisos de madera, columnas de cantera, grandes 
                    ventanales con vista hacia la alberca y jardín, chimenea, cocina integral con isla, 
                    acabados de granito en barra, La recamara principal es muy amplia y tiene un amplio 
                    walking closet con isla con acceso al baño, mismo que cuenta con jacuzzi..</p>
                  <button class="w3-button  w3-black w3-margin-bottom">Visualizar</button>
                </div>
              </div>

              <!-- End page content -->
            </div>

  






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
                              <a class="w3-button w3-theme" href="ini"><span class="w3-xlarge">
                              <i class="fa fa-chevron-circle-up"></i></span></a>
                          </div>
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