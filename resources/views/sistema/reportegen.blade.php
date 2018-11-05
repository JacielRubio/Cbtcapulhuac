@extends('vistamain')


@section('contenido')
<body>
<h1>Reporte de Generaciones</h1>
<br>
<table border= 3>
<tr>
	<td>ID GENERACION</td><td>IMAGEN</td><td>AÑO</td>
</tr>
@foreach($generaciones as $gen)
<tr>
	<td>{{$gen->id_gen}}</td>
    <td><img src = "{{asset('archivos/'.$gen->archivos)}}"
        height =50 width=50></td>
    <td>{{$gen->ano_gen}}</td>
    <td>
	
</tr>
@endforeach

</table>
</body>
@stop