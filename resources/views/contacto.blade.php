<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Contacto</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
  <br>
  <br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('') }}</div>
                    <div class="card-body">
                        <form method="POST">
                            @csrf
                            
                            <h1>Contacta al anunciante</h2>
                            <br>
                            <br>
                            <div class="form-group">
                                    <label for="name">Nombre</label>
                                    <input class="form-control bg-light" 
                                    type="text"
                                    name="name" 
                                    placeholder="Ingresa tu Nombre" required>
                            </div>
                      
                              <div class="form-group">
                                  <label for="email">Email</label>
                              <input class="form-control bg-light"
                              name="email" 
                              type="email"
                              placeholder="Ingresa tu Email" required>
                              </div>

                              <div class="form-group">
                                <label>Telefono</label>
                            <input class="form-control bg-light"

                            name="telefono" 
                            type="phone"
                            placeholder="Ingresa tu Telefono" required>
                            </div>
                      
                            <div class="form-group">
                              <label for="content">Contenido:</label>
                          <textarea class="form-control bg-light"
                          type="text"
                          name="content"
                          placeholder="Escribe el contenido de tu Mensaje:" required></textarea>
                      
                          </div>

                            <button class="btn btn-primary  btn-lg" >Enviar</button>
                            <a href="{{ url('/') }}" class="btn btn-primary" role="button" aria-pressed="true">Cerrar</a>
                        </form>
                    </div>
                </div>
            </div>   
        </div>
      </div>   
    </div>
</body>
</html>
          