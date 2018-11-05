@extends('vistamain')


@section('contenido')
<body>
<h1>Alta de Generaciones</h1>
<br>
<form action = "{{route('guardageneracion')}}" method = "POST" enctype='multipart/form-data'>
{{csrf_field()}}

@if($errors->first('id_gen')) 
<i> {{ $errors->first('id_gen') }} </i> 
@endif	<br>
Id Generacion<input type = 'text' name = 'id_gen' value="{{$id_gene}}" readonly ='readonly'>
<br>

@if($errors->first('ano_gen')) 
<i> {{ $errors->first('ano_gen') }} </i> 
@endif	<br>
Año de Generacion<input type = 'text' name = 'ano_gen' value="{{old('ano_gen')}}">
<br>

Seleccione archivo <input type ='file' name='archivo'>
<br>
<input type  ='submit' value = 'Guardar'>
</form>
</body>
@stop