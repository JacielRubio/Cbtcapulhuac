<html>
<body>
    <h1>Alta de alumnos</h1>
    <br>
    <form action = "{{route('guardaalumno')}}" method = "POST" enctype='multipart/form-data'>
    {{csrf_field()}}
    
    @if($errors->first('Matricula')) 
    <i> {{ $errors->first('Matricula') }} </i> 
    @endif	<br>
    
    Matricula: <input type = 'text' name = 'Matricula' value="{{$mat}}" readonly ='readonly'>
    <br>

    @if($errors->first('Ap')) 
    <i> {{ $errors->first('Ap') }} </i> 
    @endif	<br>
    Apellido Paterno:<input type = 'text' name = 'Ap' value="{{old('Ap')}}">
    <br>

    @if($errors->first('Am')) 
    <i> {{ $errors->first('Am') }} </i> 
    @endif	<br>
    Apellido Materno:<input type = 'text' name = 'Am' value="{{old('Am')}}">
    <br>

    @if($errors->first('Nombre')) 
    <i> {{ $errors->first('Nombre') }} </i> 
    @endif	<br>
    Nombre:<input type = 'text' name = 'Nombre' value="{{old('Nombre')}}">
    <br>

    @if($errors->first('Edad')) 
    <i> {{ $errors->first('Edad') }} </i> 
    @endif	<br>
    Edad:<input type = 'text' name = 'Edad' value="{{old('Edad')}}">
    <br>

    Sexo<input type = 'radio' name = 'Sexo' value = 'F'>F
        <input type = 'radio' name = 'Sexo' value = 'M'>M
    <br>

    @if($errors->first('Telefono')) 
    <i> {{ $errors->first('Telefono') }} </i> 
    @endif	<br>
    Telefono:<input type = 'text' name = 'Telefono' value="{{old('Telefono')}}">
    <br>

    @if($errors->first('Correo')) 
    <i> {{ $errors->first('Correo') }} </i> 
    @endif	<br>
    Correo:<input type = 'text' name = 'Correo' value="{{old('Correo')}}">
    <br>

    @if($errors->first('Calle')) 
    <i> {{ $errors->first('Calle') }} </i> 
    @endif	<br>
    Calle:<input type = 'text' name = 'Calle' value="{{old('Calle')}}">
    <br>
    @if($errors->first('Cp')) 
    <i> {{ $errors->first('Cp') }} </i> 
    @endif	<br>
    Codigo Postal:<input type = 'text' name = 'Cp' value="{{old('Cp')}}">
    <br>
    @if($errors->first('Municipio')) 
    <i> {{ $errors->first('Municipio') }} </i> 
    @endif	<br>
    Municipio:<input type = 'text' name = 'Municipio' value="{{old('Municipio')}}">
    <br>
    @if($errors->first('Estado')) 
    <i> {{ $errors->first('Estado') }} </i> 
    @endif	<br>
    Estado:<input type = 'text' name = 'Estado' value="{{old('Estado')}}">
    <br>

    Selecciona Carrera<select name = 'id_carrera'>
            
                @foreach($carreras as $car)
                <option value = '{{$car->id_carrera}}'>{{$car->nom_carrera}}</option>
                @endforeach
                      </select>
    <br>
    <br>
    Selecciona Generacion:<select name = 'id_gen'>
            
        @foreach($generaciones as $gen)
        <option value = '{{$gen->id_gen}}'>{{$gen->ano_gen}}</option>
        @endforeach
              </select>
<br>

    @if($errors->first('archivo')) 
    <i> {{ $errors->first('archivo') }} </i> 
    @endif	<br>
    Seleccione archivo <input type ='file' name='archivo'>
    <br>
    <input type  ='submit' value = 'Guardar'>
    </form>
</body>
</html>