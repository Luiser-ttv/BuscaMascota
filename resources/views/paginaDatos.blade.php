  @extends('layout.PlantillaLayout')

  @section('titulo', 'Adopta una nueva mascota')
  

  @section('muestraMascota')
  <br>
  <div class="container">
      <br><br>
      <table class="table table-bordered table-secondary">
          <tbody>

              @foreach($mascotas as $datos_mascota)
              <tr>
                  <th scope="row">Nombre</th>
                  <td>{{$datos_mascota->nombre}}</td>
              </tr>
              <tr>
                  <th scope="row">Edad</th>
                  <td>{{$datos_mascota->edad}}</td>
              </tr>
              <tr>
                  <th scope="row">Tipo</th>
                  <td>{{$datos_mascota->tipo}}</td>
              </tr>
              <tr>
                  <th scope="row">Raza</th>
                  <td>{{$datos_mascota->raza}}</td>
              </tr>
              <tr>
                  <th scope="row">Vacunado</th>
                  <td>{{$datos_mascota->vacunas}}</td>
              </tr>
              <tr>
                  <th scope="row">Chip</th>
                  <td>{{$datos_mascota->chip}}</td>
              </tr>

              @endforeach
          </tbody>
      </table>
      <br>
  </div>
  <a href="{{ url('paginaDatos', ['1']) }}" class="btn btn-block btn-success">Adoptar</a>
  @endsection