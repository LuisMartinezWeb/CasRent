@extends('layouts.admin')

@section('content') 
<div class="card text-center">
    <div class="card-header bg-gray">
      <h3 >Editar Imagen</h3>
    </div>
    <div class="card-body">
        <div class="container">
            <h2>Editar Imagen</h2>
            <p class=" text-capitalize">Actualice la imagen de su Propiedad</p>
            <form method="POST"  action="{{ route('imgpropiedades.update',$propiedad->id) }}" files="true" enctype="multipart/form-data">
                @csrf @method('PUT')
                <div class="form-group card-body">

              
                  <div class="row mt-4">
                      <div class="col-md-6 text-left">
                          <label for="" class="">Foto de la propiedad</label>
                          <p class=" text-blue">Agrege un foto para el publico conozca su propiedad</p>
                          
                          <input type="file" name="image"  class="form-control-file border" accept="image/x-png,image/jpeg"  onchange="readURL(this);" required>
                          
                          <img id="blah" src="{{ Storage::url("imgpropiedades/$propiedad->imagen")}}" alt="your image" width="200px">
                          @error('image')                           
                              <span class=" text-danger">{{ $message }} </span>                                 
                            @enderror
                      </div>
                    </div>
              
                  
                  
              
                  
              
              
              
              
                  <div class="row  justify-content-end mt-4 ">  
                                  
                  <input type="submit" value="Actualizar Datos" class="btn btn-primary mr-5">
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



