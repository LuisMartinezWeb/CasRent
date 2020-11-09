@extends('layouts.vistainicio')

@section('content') 
    <div class="banner">
      <div class="container-fluid ">

          <div class="parallax row">
              <div class="container d-flex align-items-center">

                  <h1 class="men-inicio">
                      Buscas un lugar para vivir? <br> Busca aqui!!<br>
                     
                  </h1>
              </div>


          </div>

      </div>
  </div>

    <!-- Container (Nosotros Section) -->
    <div class="w3-content w3-container mt-5 mb-5" id="Nosotros">
      <h3 class="w3-center w3-xxxlarge">Nosotros</h3>
      <p class=" w3-justify w3-large">Somos una empresa mexicana constituida en 1996 dedicada a la renta de Alquiler 
        con la finalidad de que las personas encuentren un lugar donde vivir, con tan solo
         buscarnos en la red. Convencidos de que los usuarios requieren de un sitio como el
          nuestro, para que con mas facilidad puedan localizar departamentos en renta.</p>
          </div>
          <br>
          <br>


          <!-- Page content -->
     
            <div class="container-fluid mb-3"style="
            padding: 21px;
            /* border-radius: inherit; */
            border: 1px solid black;
            border-radius: 11px;" id="Departamentos">
            <div class="text-center">
              <h1 class=" text-center">Departamentos en renta</h1>
              <p>Busque entre nuestra gran variedad de casas que se ofrecen en este portal</p>
            </div>
            
            
                <div class="row justify-content-center">
                    <div class="col-md-3 bg-blue">
                      <div class="list-group sticky-top" style="
                      padding: 21px;
                      /* border-radius: inherit; */
                      border: 2px solid gray;
                      border-radius: 11px;
                      top:100px;">
                        <div class="input-group mb-3">
                          
                          <input type="text" class="form-control" id="buscar" placeholder="Buscar por colonia" aria-label="Recipient's username" aria-describedby="basic-addon2">
                          <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button">Button</button>
                          </div>
                        </div>

                        
                      
                      </div>
                    </div>
                    <div class="col-md-9 row justify-content-around ml-2" style="
                    padding: 21px;
                     
                    border-left: 1.5px solid black;
                    ">
                      @if (count($propiedad) > 0)
                      @foreach ($propiedad as $propiedaditem)

                      <div class="card mb-3" style="max-width: 30rem;">
                        <div class="view overlay zoom">
                          <img class="card-img-top" src="{{ Storage::url("imgpropiedades/$propiedaditem->imagen")}}"  style="max-height:300px" alt="Card image cap">
                        </div>
                        
                        <div class="card-body">
                          <h5 class="card-title">{{ $propiedaditem->nombre}}</h5>
                          <span class=" font-weight-bold">Precio de renta Mensual: ${{ $propiedaditem->precio}}</span>
                          
                          <p class="card-text text-justify">{{ \Illuminate\Support\Str::limit($propiedaditem->descripcion, 500, $end='...') }}</p>
                          <div class=" d-md-flex justify-content-between">
                            <a href="{{ route('casas.show', $propiedaditem) }}" class="btn btn-primary">Ver casa</a>
                            

                                          


                          </div>
                        </div>
                      </div>

                      @endforeach
                      @else

                        <br>
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <strong>No hay ninguna Propiedad</strong>
                        </div>
                    @endif
                                          

                  

                     

                    </div>
                 </div>
              </div>


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

                     // console.log(registro.childNodes[3].childNodes[1].textContent.replace(/\s/g, " ").search(expresion) != -1);
                      if(registro.childNodes[3].childNodes[1].textContent.replace(/\s/g, " ").search(expresion) != -1){
                        registro.style.display = 'flex';
                      }
                    })
                  }
              </script>
              @endsection
              
