@extends('layouts.admin')

@section('content') 
<div class="card text-center">
    <div class="card-header bg-gray">
      <h3 >Agregar Nueva Propiedad</h3>
    </div>
    <div class="card-body">
        <div class="container">
            <h2>Nueva Propiedad</h2>
            <p>Ingrese los datos requeridos para agregar una nueva propiedad</p>
            <form method="POST"  action="{{ route('propiedades.store') }}" files="true" enctype="multipart/form-data">
                @csrf
                <div class="form-group card-body">
                  <div class="row mt-4">
                      <div class="col-md-6 text-left">
                          <label for="" class="">Nombre de la Colonia</label>
                          <p class=" text-blue">Agrege la direccion de la casa o el nombre de la colonia </p>
                          
                          <input type="text" id="propiedad" name="propiedad" placeholder="Escriba el nombre de la Propiedad" class="form-control" value="{{ old('propiedad', $propiedad->nombre) }}" required>
              
                          @error('propiedad')                           
                              <span class=" text-danger">{{ $message }} </span>                                 
                            @enderror
                      </div>
                  </div>
              
                  <div class="row mt-4">
                      <div class="col-md-6 text-left">
                          <label for="" class="">Foto de la propiedad</label>
                          <p class=" text-blue">Agrege un foto para el publico conozca su propiedad</p>
                          
                          <input type="file" name="image"  class="form-control-file border" accept="image/x-png,image/jpeg"  onchange="readURL(this);" required>
                          
                          <img id="blah" src="http://placehold.it/180" alt="your image" width="200px">
                          @error('image')                           
                              <span class=" text-danger">{{ $message }} </span>                                 
                            @enderror
                      </div>
                    </div>
              
                  
                  
              
                  <div class="row mt-4">
                      <div class="col-md-6 text-left">
                          <label for="" class="">Descripcion de la Propiedad</label>
                          <p class=" text-blue">Agregue una pequeña descripcion de su propiedad</p>
                          
                          <textarea id="descripcion" name="descripcion" class="form-control" rows="5" id="comment" required>{{ old('descripcion', $propiedad->descripcion) }}</textarea>
              
                          @error('descripcion')                           
                          <span class=" text-danger">{{ $message }} </span>                                 
                        @enderror
                      </div>
                  </div>
              
                  
              
                  <div class="row mt-4">
                      <div class="col-md-6 text-left">
                          <label for="" class="">Precio de la Propiedad</label>
                          <p class=" text-blue">Agregue el precio de la propiedad</p>
                          
                          <input type="text" id="precio" name="precio" placeholder="Escriba el precio de la Propiedad" class="form-control" value="{{ old('precio', $propiedad->precio) }}" pattern="^[+-]?([0-9]*[.])?[0-9]+$" title="Ingrese solo numeros" required>
                          @error('precio')                           
                              <span class=" text-danger">{{ $message }} </span>                                 
                            @enderror
                      </div>
                  </div>
              
                  <div class="row mt-4">
              
                      <div class="col-md-12 mb-5">
                          <h4 class="  font-weight-bold ">Carateristicas de la propiedad</h4>
                          <span class=" text-info">Seleccione las caracteristicas de su propiedad</span>
                      </div>
              
                      <div class="col-md-4 text-left">
                          <label for="" class="">Numero de Habitaciones</label>
                          <select class="form-control" id="habitaciones" name="habitaciones">
                              <option {{ $propiedad->habitaciones == 0 ? 'selected' : '' }}>0</option>
                              <option {{ $propiedad->habitaciones == 1 ? 'selected' : '' }}>1</option>
                              <option {{ $propiedad->habitaciones == 2 ? 'selected' : '' }}>2</option>
                              <option {{ $propiedad->habitaciones == 3 ? 'selected' : '' }}>3</option>
                              <option {{ $propiedad->habitaciones == 4 ? 'selected' : '' }}>4</option>
                            </select>
                            @error('habitaciones')                           
                              <span class=" text-danger">{{ $message }} </span>                                 
                            @enderror
                      </div>
              
                      <div class="col-md-4 text-left">
                          <label for="" class="">Numero de Baños</label>
                          <select class="form-control" id="wc" name="wc">
                              <option {{ $propiedad->baños == 0 ? 'selected' : '' }}>0</option>
                              <option {{ $propiedad->baños == 1 ? 'selected' : '' }}>1</option>
                              <option {{ $propiedad->baños == 2 ? 'selected' : '' }}>2</option>
                              <option {{ $propiedad->baños == 3 ? 'selected' : '' }}>3</option>
                              <option {{ $propiedad->baños == 4 ? 'selected' : '' }}>4</option>
                            </select>
                            @error('wc')                           
                              <span class=" text-danger">{{ $message }} </span>                                 
                            @enderror
                      </div>
                      
                      <div class="col-md-4 text-left">
                          <label for="" class="">Numero de Estacionamientos</label>
                          <select class="form-control" id="estacionamiento" name="estacionamiento">
              
                              
                              <option {{ $propiedad->estacionamiento == 0 ? 'selected' : '' }}>0</option>
                              <option {{ $propiedad->estacionamiento == 1 ? 'selected' : '' }}>1</option>
                              <option {{ $propiedad->estacionamiento == 2 ? 'selected' : '' }}>2</option>
                              <option {{ $propiedad->estacionamiento == 3 ? 'selected' : '' }}>3</option>
                              <option {{ $propiedad->estacionamiento == 4 ? 'selected' : '' }}>4</option>
                            </select>
                            @error('estacionamiento')                           
                              <span class=" text-danger">{{ $message }} </span>                                 
                            @enderror
                      </div>
              
                      
                  </div>
              
                  <div class="row mt-4">
                      <div class="col-md-4 text-left">
                          <label for="" class="">Metros cuadrados de la propiedad </label>
                          
                          <input type="text" id="metros" name="metros" placeholder="123.23" class="form-control" value="{{ old('precio', $propiedad->metros) }}" pattern="^[+-]?([0-9]*[.])?[0-9]+$" title="Ingrese solo numeros" required>
              
                          @error('metros')                           
                              <span class=" text-danger">{{ $message }} </span>                                 
                            @enderror
                      </div>
                  </div>
              
              
              
              
                  <div class="row  justify-content-end mt-4 ">  
                                  
                  <input type="submit" value="Guardar datos" class="btn btn-primary mr-5">
                  </div>
              </div>
              
              
              <script>
                      function readURL(input) {
                          if (input.files && input.files[0]) {
                              var reader = new FileReader();
              
                              reader.onload = function (e) {
                                  $('#blah')
                                      .attr('src', e.target.result);
                              };
              
                              reader.readAsDataURL(input.files[0]);
                          }
                      }
              </script>
               
            </form>
          </div>
    </div>
    <div class="card-footer text-muted">
      
    </div>
  </div>
@endsection





