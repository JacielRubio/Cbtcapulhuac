<html>
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
</html>