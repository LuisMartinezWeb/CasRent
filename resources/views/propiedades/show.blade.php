@extends('layouts.admin')

@section('content') 

<div class="text-center">

</div>

<div class="row">

  
    <div class="col-md-12  d-md-flex  flex-wrap justify-content-around ">

      

            
        
      <div class="card text-center col-md-12">
        <div class="card-body row">
 
            <div class="col-md-6">
                <img src="{{ Storage::url("imgpropiedades/$propiedad->imagen")}}" class="rounded img-fluid" alt="Cinque Terre" width="450" height="300">
             <br>
            
                <a href="{{ route('imgpropiedades.edit', $propiedad) }}" class="card-link">Editar imagen</a>
                 
      
              
            </div>

            <div class="col-md-6">

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
                 
                  <div class="d-flex justify-content-between">
                  <a href="{{ route('propiedades.edit', $propiedad) }}" class="card-link">Editar Propiedad</a>
                    <a  class="btn btn-danger text-white" onclick="eliminar('{{route('propiedades.destroy', $propiedad->id)}}')">Eliminar Propiedad</a>
        
                  </div>

            </div>
        
          
          
          
        </div>
      </div>
      <h2 class="m-3">Mensajes de Contacto</h2>
      @if (count($propiedad->contactosss) > 0)
      @foreach ($propiedad->contactosss as $contactoitem)
      
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header bg-blue">
              <h5 class="m-0">Nuevo Mensaje de: {{$contactoitem->nombre}}</h5>
            </div>
            <div class="card-body">
              <h6 class="card-title">Mensaje: {{$contactoitem->mensaje}}</h6> 
              <br>
              <br>

    
              <p class="card-text">Correo Electronico: {{$contactoitem->correo}}</p>
              <p class="card-text">Numero de Telefono : {{$contactoitem->telefono}}</p>
              <a  class="btn btn-danger text-white" onclick="eliminarcontacto('{{route('contacto.destroy', $contactoitem->id)}}')">Eliminar Mensaje</a>
            </div>
          </div>
    </div>
    @endforeach
    @else

    <br>
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>Aun no tiene ninguna mensaje para esta propiedad</strong>
    </div>
@endif
  </div>
  <!-- /.row -->

  <main class="container">
    <br>
    @yield('content')

    <form method="post" action="post" id="form-delete">
        @csrf
        @method('DELETE')
    </form>

</main>
</div>
<script>
function eliminar(ruta){
var r = confirm("Desea eliminar la propiedad?");
if(r){
    $("#form-delete").attr("action",ruta);
    $("#form-delete").submit();
}
}

function eliminarcontacto(ruta){
var r = confirm("Desea eliminar el mensaje?");
if(r){
    $("#form-delete").attr("action",ruta);
    $("#form-delete").submit();
}
}
</script>
@endsection