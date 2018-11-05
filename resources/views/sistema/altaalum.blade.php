
@extends('vistamain')


@section('contenido')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<body>
        <div class="card">
                <div class="card-header"><h1 class="display-4">Alta Alumnos</h1> </div>
                <div class="card-body">
                        <form action = "{{route('guardaalumno')}}" method = "POST" enctype='multipart/form-data'>
                            {{csrf_field()}}
                           
                                
                            
                                <div class="form-group">
                                <label for = "Matricula"> Matricula:</label>
                                <input type="text"   class="form-control form-control-lg" name = 'Matricula' value="{{$mat}}" readonly ='readonly' placeholder="Colocar Matricula"> 
                                </div>
                                
                                <div class="form-group">
                                        @if($errors->first('Ap')) 
                                        <i> {{ $errors->first('Ap') }} </i> 
                                        @endif	
                                        <label for = "Ap"> Apellido Paterno:</label>
                                        <input type="text" class="form-control form-control-lg"  name = 'Ap' placeholder="Apellido Paterno" value="{{old('Ap')}}" > 
                                </div>
                                 

                                <div class="form-group">
                                        @if($errors->first('Am')) 
                                        <i> {{ $errors->first('Am') }} </i> 
                                        @endif	
                                        <label for = "Am"> Apellido Materno:</label>
                                        <input type="text" class="form-control form-control-lg" name = 'Am' placeholder="Apellido Materno" value="{{old('Am')}}" > 
                                </div>

                                <div class="form-group">
                                        @if($errors->first('Nombre')) 
                                        <i> {{ $errors->first('Nombre') }} </i> 
                                        @endif	
                                        <label for = "Nombre"> Nombre:</label>
                                        <input type="text" class="form-control form-control-lg" name = 'Nombre' placeholder="Nombre" value="{{old('Nombre')}}" > 
                                </div>

                                <div class="form-group">
                                        @if($errors->first('Edad')) 
                                        <i> {{ $errors->first('Edad') }} </i> 
                                        @endif	
                                        <label for = "Edad"> Edad:</label>
                                        <input type="text" class="form-control form-control-lg" name = 'Edad' placeholder="Edad" value="{{old('Edad')}}" > 
                                </div>
                                   
                                <div class="form-check">
                                        Sexo: <input  type = 'radio' name = 'Sexo' value = 'F'>F
                                              <input  type = 'radio' name = 'Sexo' value = 'M'>M
                                 </div>

                                 <br>
                                 <div class="form-group">
                                        @if($errors->first('Telefono')) 
                                        <i> {{ $errors->first('Telefono') }} </i> 
                                        @endif	
                                        <label for = "Telefono"> Telefono:</label>
                                        <input type="text" class="form-control form-control-lg" name = 'Telefono' placeholder="Telefono" value="{{old('Telefono')}}" > 
                                </div>

                                <div class="form-group">
                                        @if($errors->first('Correo')) 
                                        <i> {{ $errors->first('Correo') }} </i> 
                                        @endif	
                                        <label for = "Correo"> Correo Electronico:</label>
                                        <input type="email" class="form-control form-control-lg" name = 'Correo' placeholder="example@hotmail.com" value="{{old('Correo')}}" > 
                                </div>

                                <div class="form-group">
                                        @if($errors->first('Calle')) 
                                        <i> {{ $errors->first('Calle') }} </i> 
                                        @endif	
                                        <label for = "Calle"> Calle:</label>
                                        <input type="text" class="form-control form-control-lg" name = 'Calle' placeholder="Calle" value="{{old('Calle')}}" > 
                                </div>

                                <div class="form-group">
                                        @if($errors->first('Cp')) 
                                        <i> {{ $errors->first('Cp') }} </i> 
                                        @endif	
                                        <label for = "Cp"> Codigo Postal:</label>
                                        <input type="text" class="form-control form-control-lg" name = 'Cp' placeholder="Codigo Postal" value="{{old('Cp')}}" > 
                                </div>

                                <div class="form-group">
                                        @if($errors->first('Municipio')) 
                                        <i> {{ $errors->first('Municipio') }} </i> 
                                        @endif	
                                        <label for = "Municipio"> Municipio:</label>
                                        <input type="text" class="form-control form-control-lg" name = 'Municipio' placeholder="Municipio" value="{{old('Municipio')}}" > 
                                </div>

                                <div class="form-group">
                                        @if($errors->first('Estado')) 
                                        <i> {{ $errors->first('Estado') }} </i> 
                                        @endif	
                                        <label for = "Estado"> Estado:</label>
                                        <input type="text" class="form-control form-control-lg" name = 'Estado' placeholder="Estado" value="{{old('Estado')}}" > 
                                </div>

                                <div>
                                       <select class="custom-select custom-select-lg mb-3" name = 'id_carrera'> 
                                            @foreach($carreras as $car)
                                            <option value = '{{$car->id_carrera}}'>{{$car->nom_carrera}}</option>
                                            @endforeach
                                        </select>
                                </div> 
                                
                                <div>
                                        <select class="custom-select custom-select-lg mb-3" name = 'id_gen'> 
                                                @foreach($generaciones as $gen)
                                                <option value = '{{$gen->id_gen}}'>{{$gen->ano_gen}}</option>
                                                @endforeach
                                         </select>
                                 </div> 
                
                                 <div class="custom-file">
                                        @if($errors->first('archivo')) 
                                        <i> {{ $errors->first('archivo') }} </i> 
                                        @endif	
                                        <input type="file" class="custom-file-input" id="customFileLang" lang="es"  name='archivo' >
                                        <label class="custom-file-label" for="File">Seleccionar Archivo</label>
                                 </div>

                                <br> <br>
                        
                                <button type="submit" class="btn btn-primary btn-lg btn-block"  value = 'Guardar'>Guardar</button>
                                
                         </form>
                </div>
         </div >           

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
@stop

