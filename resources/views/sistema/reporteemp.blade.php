@extends('vistamain')


@section('contenido')
<body>
<h1>Reporte de empresas</h1>
<br>
<table border= 3>
<tr>
	<td>ID EMPRESA</td><td>LOGO</td><td>RFC</td><td>Nombre</td>
	<td>DIRECCION</td><td>TELEFONO</td><td>MUNICIPIO</td>
    <td>CP</td><td>ESTADO</td><td>CORREO</td>
	<td>PAGINA WEB</td><td>GIRO</td>
</tr>
@foreach($empresas as $emp)
<tr>
	<td>{{$emp->id_em}}</td>
    <td><img src = "{{asset('archivos/'.$emp->archivos)}}"
        height =50 width=50></td>
    <td>{{$emp->rfc}}</td>
    <td>{{$emp->nom_emp}}</td>
    <td>{{$emp->dir}}</td>
    <td>{{$emp->tel}}</td>
    <td>{{$emp->municipio}}</td>
    <td>{{$emp->cp}}</td>
    <td>{{$emp->Estado}}</td>
    <td>{{$emp->Correo}}</td>
    <td>{{$emp->Pag_web}}</td>
    <td>{{$emp->Giro}}</td>
    
    <td>
	
</tr>
@endforeach

</table>
</body>
@stop