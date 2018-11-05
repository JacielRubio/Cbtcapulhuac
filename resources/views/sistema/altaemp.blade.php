
@extends('vistamain')


@section('contenido')
<body>
<h1>Alta de Empresas</h1>
<br>
<form action = "{{route('guardaempresa')}}" method = "POST" enctype='multipart/form-data'>
{{csrf_field()}}

@if($errors->first('id_em')) 
<i> {{ $errors->first('id_em') }} </i> 
@endif	<br>
Id Empresa<input type = 'text' name = 'id_em' value="{{$id_emp}}" readonly ='readonly'>
<br>

@if($errors->first('rfc')) 
<i> {{ $errors->first('rfc') }} </i> 
@endif	<br>
RFC<input type = 'text' name = 'rfc' value="{{old('rfc')}}">
<br>

@if($errors->first('nom_emp')) 
<i> {{ $errors->first('nom_emp') }} </i> 
@endif	<br>
Nombre de Empresa<input type = 'text' name = 'nom_emp' value="{{old('nom_emp')}}">
<br>

@if($errors->first('dir')) 
<i> {{ $errors->first('dir') }} </i> 
@endif	<br>
Direccion<input type = 'text' name = 'dir' value="{{old('dir')}}">
<br>

@if($errors->first('tel')) 
<i> {{ $errors->first('tel') }} </i> 
@endif	<br>
Telefono<input type = 'text' name = 'tel' value="{{old('tel')}}">
<br>

@if($errors->first('municipio')) 
<i> {{ $errors->first('municipio') }} </i> 
@endif	<br>
Municipio<input type = 'text' name = 'municipio' value="{{old('municipio')}}">
<br>

@if($errors->first('cp')) 
<i> {{ $errors->first('cp') }} </i> 
@endif	<br>
Codigo Postal<input type = 'text' name = 'cp' value="{{old('cp')}}">
<br>

@if($errors->first('Estado')) 
<i> {{ $errors->first('Estado') }} </i> 
@endif	<br>
Estado<input type = 'text' name = 'Estado' value="{{old('Estado')}}">
<br>

@if($errors->first('Correo')) 
<i> {{ $errors->first('Correo') }} </i> 
@endif	<br>
Correo<input type = 'text' name = 'Correo' value="{{old('Correo')}}">
<br>

@if($errors->first('Pag_web')) 
<i> {{ $errors->first('Pag_web') }} </i> 
@endif	<br>
Pagina Web<input type = 'text' name = 'Pag_web' value="{{old('Pag_web')}}">
<br>

@if($errors->first('Giro')) 
<i> {{ $errors->first('Giro') }} </i> 
@endif	<br>
Giro<input type = 'text' name = 'Giro' value="{{old('Giro')}}">
<br>

Seleccione archivo <input type ='file' name='archivo'>
<br>
<input type  ='submit' value = 'Guardar'>
</form>
</body>

@stop



















