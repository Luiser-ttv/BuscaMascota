  @extends('layout.PlantillaLayout')

  @section('titulo', 'Adopta una nueva mascota')

  @section('barralateral')



  @endsection

  @section('contenido')

  <div class="container bg-light">

      <div class="col-md-12 text-center">
          <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

          <img src="{{ url('pregunta', ['Historia']) }}">
          <p>¿Cuál adoptarás?</p>
        
          <a href="{{ url('pregunta', ['Historia']) }}" class="btn btn-xs btn-info pull-right">Ant.</a>
          <a href="{{ url('pregunta', ['Ingles']) }}" class="btn btn-xs btn-info pull-right">Sig.</a>
          <div class="container bg-light">

              <div class="col-md-12 text-center">
                  <br>

                  <a href="{{ url('pregunta', ['Economia']) }}" class="btn btn-xs btn-info pull-right">Adoptar</a>

              </div>

          </div>


      </div>

  </div>



  @endsection