<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class alumnos extends Model
{
    use SoftDeletes;
   protected $primaryKey = 'Matricula';
   
   protected $fillable=['Matricula','Ap','Am','Nombre',
                         'Edad','Sexo','Telefono','Correo',
                         'Calle','Cp','Municipio','Estado',
                         'id_carrera','id_gen','archivo'];
						 
  protected $date=['deleted_at'];	
}
