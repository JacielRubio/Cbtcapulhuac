@extends('vistamain')


@section('contenido')
<body>
<h1>Reporte de Carreras</h1>
<br>
<table border= 1>
<tr>
	<td>ID</td><td>Nombre Carrera</td>Operaciones</td>
</tr>
@foreach($carreras as $ca)
<tr>
	<td>{{$ca->id_carrera}}</td>
	<td>{{$ca->nom_carrera}}</td>
	
	</td>
</tr>
@endforeach

</table>
</body>
@stop