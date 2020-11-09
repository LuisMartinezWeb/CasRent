@extends('layouts.admin')
@section('buscadorr')
<form class="form-inline ml-3">
  <div class="input-group input-group-sm">
    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search" id="buscar">
    <div class="input-group-append">
      <button class="btn btn-navbar" type="submit">
        <i class="fas fa-search"></i>
      </button>
    </div>
  </div>
</form>
@endsection

@section('content') 

<div class="text-center">
  <h1 class="pt-3 text-center mb-2 ">Mis Propiedades</h1>
</div>

<div class="row " >

  
    <div class="col-md-12  d-md-flex  flex-wrap justify-content-around ">

      
        @if (count($propiedad) > 0)
        
        @foreach ($propiedad as $propiedaditem)
            
        
      <div class="card text-center col-md-5">
        <div class="card-body">
        <h3 class="card-title float-none text-capitalize  ">{{ $propiedaditem->nombre}}</h3>
        <br>
        <img src="{{ Storage::url("imgpropiedades/$propiedaditem->imagen")}}" class="rounded img-fluid mb-2" alt="Cinque Terre" width="450" height="300">
        <br>
          <p class="card-text text-justify">
            {{ \Illuminate\Support\Str::limit($propiedaditem->descripcion, 500, $end='...') }}
           
          </p>
         
          <div class="d-flex justify-content-between">
          <a href="{{ route('propiedades.show', $propiedaditem) }}" class="card-link">Ver Propiedad</a>
            <a  class="btn btn-danger btn-sm" onclick="eliminar('{{route('propiedades.destroy', $propiedaditem->id)}}')">Eliminar</a>

          </div>
          
          
        </div>
      </div>
      @endforeach
      @else

    <br>
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>Aun no tiene ninguna Propiedad</strong>
    </div>
@endif

      
    </div>

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
var r = confirm("Desea eliminar el registro?");
if(r){
    $("#form-delete").attr("action",ruta);
    $("#form-delete").submit();
}
}
</script>

<script>

  const inputBuscador = document.querySelector('#buscar');
  eventListener();

    function eventListener(){
      inputBuscador.addEventListener('input',buscarCasa);
    }


    function buscarCasa(e){
      const expresion = new RegExp(e.target.value),
      registros = document.querySelectorAll('div.card');

      registros.forEach(registro =>{
        registro.style.display = 'none';

        //console.log(registro.childNodes[1].childNodes[1].textContent);
        if(registro.childNodes[1].childNodes[1].textContent.replace(/\s/g, " ").search(expresion) != -1){
          registro.style.display = 'flex';
        }
      })
    }
</script>
@endsection