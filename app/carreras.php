<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class carreras extends Model
{
    protected $primaryKey = 'id_carrera';
   
    protected $fillable=['id_carrera','nom_carrera','activo'];
}
