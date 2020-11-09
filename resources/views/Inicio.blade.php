
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>Alquiler de habitaciones</title>
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1LW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndoJK28anvf" crossorigin="anonymous">
       <link rel="stylesheet" href="inicio.css">
      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/iconos.css')}}">


    </head>
    <body>
      <header class="header">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark scrolling-navbar fixed-top">
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
            </button>
                  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                  <a class="navbar-brand" href="#Inicio">Inicio</a>
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                        <a class="nav-link" href="#Nosotros">Nosotros</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#Departamentos">Departamentos</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#Contacto">Contacto</a>
                        </li>

                        
                        </ul>
                  </div>
                  <form class="form-inline my-2 my-lg-0">
                  <input class="form-control mr-sm-2" type="Buscar" placeholder="Buscar" aria-label="Buscar">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                  </button>
                  </form>
                  </div>
                  
            </nav> 
            <br>
            <br>
            <div class="container-fluid">
                  <div class="mt-4 py-2 px-1 caja-titulo">
                        <h2>Departamentos en Renta $</h2>
                  </div>
            </div>
      </header>
      
      <main class="contenido-principal">
            <div class="container-fluid">
                  <div class="row">
                        <div class="col-12" class="container" id="Nosotros">
                              <br>
                              <br>
                              <h2 class="text-center mt-4">NOSOTROS</h2>
                              <hr>
                              <p class="text-center">¿Quienes Somos?</p>
                              <p class="text-center">Somos una empresa mexicana constituida en 1996 dedicada a la renta de Alquiler con la finalidad de que las personas encuentren un lugar donde vivir, con tan solo buscarnos en la red. Convencidos de que los usuarios requieren de un sitio como el nuestro, para que con mas facilidad puedan localizar departamentos en renta</p>
                        </div>
                  </div>
            </div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

            <div class="col-12" class="container" id="Departamentos">
                  <br>
                  <br>
                  <br>
                  
                  <h2 class="text-center mt-4">DEPARTAMENTOS</h2>
            </div>
            <hr>
            <div class="container-fluid ">
                <div class="row">
                    <div class="col-sm-3">
                       <!-- aqui va el menu lateral-->
                        <!-- aqui va termina el menu lateral-->
                    </div>
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-sm-12 d-sm-flex">
                                <div class="col-sm-4">
                                    <img src="{{asset('imagenes/dep1.jpg')}}" class="img-fluid">
                                    <p class="card-text"><small class="text-muted">mensuales $2000</small></p>
                                </div>
                                <div class="col-sm-8">
                                    <h5 class="card-title">Departamento en centro de pochutla</h5>
                                    <p class="card-text"> 2 unidades, 2 recamaras, cuenta con internet,agua,luz,cablevision,semi amueblado.</p>
                                    <div class="posting-description go-to-posting">
                                        Increíble residencia con amplios y acogedores espacios, estilo mexicano en un nivel. Cuenta con sala comedor con techo y pisos de madera, columnas de cantera, grandes ventanales con vista hacia la alberca y jardín, chimenea, cocina integral con isla,
                                        acabados de granito en barra, La recamara principal es muy amplia y tiene un amplio walking closet con isla con acceso al baño, mismo que cuenta con jacuzzi. </div>
                                </div>
                            </div>
                        </div>
            <br>
                        <div class="row">
                            <div class="col-sm-12 d-sm-flex">
                                <div class="col-sm-4">
                                    <img src="{{asset('imagenes/dep2.jpg')}}" class="img-fluid">
                                    <p class="card-text"><small class="text-muted">mensuales $2000</small></p>
                                </div>
                                <div class="col-sm-8">
                                    <h5 class="card-title">Departamento en centro de pochutla</h5>
                                    <p class="card-text"> 2 unidades, 2 recamaras, cuenta con internet,agua,luz,cablevision,semi amueblado.</p>
                                    <div class="posting-description go-to-posting">
                                        Increíble residencia con amplios y acogedores espacios, estilo mexicano en un nivel. Cuenta con sala comedor con techo y pisos de madera, columnas de cantera, grandes ventanales con vista hacia la alberca y jardín, chimenea, cocina integral con isla,
                                        acabados de granito en barra, La recamara principal es muy amplia y tiene un amplio walking closet con isla con acceso al baño, mismo que cuenta con jacuzzi. </div>
                                </div>
                            </div>
                        </div>
            
                    </div>
                </div>
            
            </div>
            <section class="container" id="Contacto">
            </section>
                  <section class="container-fluid">
                        <div class="row justify-content-center" style="height: 600px; background-color:#FFFFFF">
                              <div class="col-5 text-center mt-4">
                                    <br>
                                    <br>
                                    <h2 class="text-center">Contacto</h2>
                                    <hr>
                              </div>
                              <div class="col-8">
                              <form>
                                    <div class="form-group">
                                          <label for="Name">Nombre</label>
                                          <input type="text" name="name" class="form-control" id="Name" placeholder="Igresa tu nombre">
                                    </div>
                                    <div class="form-group">
                                      <label for="Email">Correo Electronico</label>
                                      <input type="email" name="email"  class="form-control" id="Email" placeholder=" Ingresa tu Correo">
                                    </div>
                                    <div class="form-group">
                                      <label for="Telefono">Telefono</label>
                                      <input type="telefono" class="form-control" id="Telefono" placeholder="Ingresa tu numero de telefono">
                                    </div>
                                    <div class="form-group">
                                          <label for="msg">Mensaje</label>
                                          <textarea class="form-control" name="msg" id="msg" rows="2" placeholder="Escribe un mensaje"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Enviar</button>
                                  </form>
                              </div>
                        </div>
                        </section>
                        <footer>
                              
                              <div class="container-footer-all">
                               
                                   <div class="container-body">
                       
                                       <div class="colum1">
                                           <h1>Mas informacion de la compañia</h1>
                       
                                           <p>Esta compañia se dedica a la renta de departamentos, donde pueden encontrar 
                                                 los mejores departamentos, con tan solo buscarnos en la red.</p>
                       
                                       </div>
                       
                                       <div class="colum2">
                       
                                           <h1>Redes Sociales</h1>
                       
                                           <div class="row1">
                                               <img src="imagenes/fa.jpg">
                                               <label>Siguenos en Facebook</label>
                                           </div>
                                           <div class="row1">
                                               <img src="imagenes/tw.jpg">
                                               <label>Siguenos en Twitter</label>
                                           </div>
                                           <div class="row1">
                                               <img src="imagenes/ins.jpg">
                                               <label>Siguenos en Instagram</label>
                                           </div>
                                           <div class="row1">
                                               <img src="imagenes/gpl.png">
                                               <label>Siguenos en Google</label>
                                           </div>
                                           
                       
                       
                                       </div>
                       
                                       <div class="colum3">
                       
                                           <h1>Informacion Contactos</h1>
                       
                                           <div class="row2">
                                               <img src="imagenes/casit.png">
                                               <label>San Pedro Pochutla</label>
                                           </div>
                       
                                           <div class="row2">
                                               <img src="imagenes/tele.png">
                                               <label>958-117-4679</label>
                                           </div>
                       
                                           <div class="row2">
                                               <img src="imagenes/email.png">
                                                <label>sanchezrmz410@gmail.com</label>
                                           </div>
                       
                                       </div>
                       
                                   </div>
                               
                               </div>
                               
                               <div class="container-footer">
                                      <div class="footer">
                                           <div class="copyright">
                                               © 2020 Todos los Derechos Reservados | <a href="">Ingenier.com</a>
                                           </div>
                       
                                           <div class="information">
                                               <a href="">Informacion Compañia</a> | <a href="">Privacion y Politica</a> | <a href="">Terminos y Condiciones</a>
                                           </div>
                                       </div>
                       
                                   </div>
                               
                           </footer>
      </main>       
     </body>
</html>