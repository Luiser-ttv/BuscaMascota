  @extends('layout.PlantillaLayout')

  @section('titulo', 'Adopta una nueva mascota')


  @section('contenido')

  <div class="container">
      <div class="row">

          <div class="col-md-4">

              <div class="card">
                  <img src="{{asset('img/1.jpg')}}" height="300" width="338">
                  <a href="{{ url('paginaDatos', ['1']) }}" class="btn btn-xs btn-info">Ver más</a>
              </div>

          </div>

          <div class="col-md-4">

              <div class="card">
                  <img src="{{asset('img/2.jpg')}}" height="300" width="338">
                  <a href="{{ url('pregunta', ['2']) }}" class="btn btn-xs btn-info">Ver más</a>
              </div>

          </div>

          <div class="col-md-4">

              <div class="card">
                  <img src="{{asset('img/3.jpg')}}" height="300" width="338">
                  <a href="{{ url('pregunta', ['Ingles']) }}" class="btn btn-xs btn-info pull-right">Ver más</a>
              </div>

          </div>

          

      </div>

  </div>
<br>

  <div class="container">
      <div class="row">

          <div class="col-md-4">

              <div class="card">
                  <img src="{{asset('img/4.jpg')}}" height="300" width="338">
                  <a href="{{ url('pregunta', ['Ingles']) }}" class="btn btn-xs btn-info">Ver más</a>
              </div>

          </div>

          <div class="col-md-4">

              <div class="card">
                  <img src="{{asset('img/5.png')}}" height="300" width="338">
                  <a href="{{ url('pregunta', ['Ingles']) }}" class="btn btn-xs btn-info">Ver más</a>
              </div>

          </div>

          <div class="col-md-4">

              <div class="card">
                  <img src="{{asset('img/6.jpg')}}" height="300" width="338">
                  <a href="{{ url('pregunta', ['Ingles']) }}" class="btn btn-xs btn-info">Ver más</a>
              </div>

          </div>

          

      </div>



  </div>
  <br>

<div class="container">
    <div class="row">

        <div class="col-md-4">

            <div class="card">
                <img src="{{asset('img/7.jpg')}}" height="300" width="338">
                <a href="{{ url('pregunta', ['Ingles']) }}" class="btn btn-xs btn-info">Ver más</a>
            </div>

        </div>

        <div class="col-md-4">

            <div class="card">
                <img src="{{asset('img/8.jpg')}}" height="300" width="338">
                <a href="{{ url('pregunta', ['Ingles']) }}" class="btn btn-xs btn-info">Ver más</a>
            </div>

        </div>

        <div class="col-md-4">

            <div class="card">
                <img src="{{asset('img/9.jpg')}}" height="300" width="338">
                <a href="{{ url('pregunta', ['Ingles']) }}" class="btn btn-xs btn-info">Ver más</a>
            </div>

        </div>

        

    </div>



</div>


  @endsection