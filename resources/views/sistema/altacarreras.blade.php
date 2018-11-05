
@extends('vistamain')


@section('contenido')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<body>
<h1>Alta</h1>
<br>
<form action = "{{route('guardacarreras')}}" method = "POST" enctype='multipart/form-data'>
{{csrf_field()}}

@if($errors->first('id_carrera')) 
<i> {{ $errors->first('id_carrera') }} </i> 
@endif	<br>

Id<input type = 'text' name = 'id_carrera' value="{{$carr}}" readonly ='readonly'>
<br>
@if($errors->first('nom_carrera')) 
<i> {{ $errors->first('nom_carrera') }} </i> 
@endif	<br>
Nombre de carrera<input type = 'text' name = 'nom_carrera' value="{{old('nom_carrera')}}">
<br>

<input type  ='submit' value = 'Guardar'>
</form>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
@stop
