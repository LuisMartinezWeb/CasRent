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

<div class="row pt-5 justify-content-center" style="background-color: #CAD9DA">
  <h1 class="mb-3 pt-2 text-center">Propiedades</h1>
    <div class="col-lg-12 d-flex flex-wrap justify-content-around">

      {{-- <h1 class="mb-3 pt-2 text-center">Propiedades</h1> --}}
        @if (count($propiedad) > 0)
        
        @foreach ($propiedad as $propiedaditem)
            
        
      <div class="card">
        <div class="card-body text-center " style="max-width: 30rem;">
        <h5 class="card-title  float-none text-capitalize ">{{ $propiedaditem->nombre }}</h5>
        <br>
        <img src="{{ Storage::url("imgpropiedades/$propiedaditem->imagen")}}" class="rounded img-fluid mb-3" alt="Cinque Terre" width="450" height="300">
        <br>
          <p class="card-text text-justify ">
            {{ \Illuminate\Support\Str::limit($propiedaditem->descripcion, 500, $end='...') }}
            
          </p>
         

          <a href="{{ route('propiedades.show', $propiedaditem) }}" class="card-link">Ver Propiedad</a>
          
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

    <!-- /.col-md-6 -->
  </div>
  <!-- /.row -->

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