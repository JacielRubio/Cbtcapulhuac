@extends('vistamain')


@section('contenido')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<body>
        <div class="card">
                <div class="card-header"><h1 class="display-4">Reporte Alumnos</h1> </div>
                <div class="card-body">

<table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Foto</th>
            <th scope="col">Matricula</th>
            <th scope="col">Apellido Paterno</th>
            <th scope="col">Apellido Materno</th>
            <th scope="col">Nombre</th>
            <th scope="col">Edad</th>
            <th scope="col">Sexo</th>
            <th scope="col">Telefono</th>
            <th scope="col">Correo</th>
            <th scope="col">Calle</th>
            <th scope="col">Municipio</th>
            <th scope="col">Generacion</th>
            <th scope="col">Operaciones</th>
          </tr>
        </thead>
        <tbody>
                @foreach($alumnos as $al)
          <tr>
            <th scope="row"><img src = "{{asset('archivos/'.$al->archivo)}}" height =50 width=50></th>
            <td>{{$al->Matricula}}</td>
            <td>{{$al->Ap}}</td>
            <td>{{$al->Am}}</td>
            <td>{{$al->Nombre}}</td>
            <td>{{$al->Edad}}</td>
            <td>{{$al->Sexo}}</td>
            <td>{{$al->Telefono}}</td>
            <td>{{$al->Correo}}</td>
            <td>{{$al->Calle}}</td>
            <td>{{$al->Municipio}}</td>
            <td>{{$al->id_gen}}</td>
            <td></td>
          </tr>
         
              @endforeach
          </tr>
        </tbody>
      </table>
      
      
        </tbody>
      </table>
    </div>
</div >  
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
@stop