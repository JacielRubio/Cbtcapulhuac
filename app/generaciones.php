<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class generaciones extends Model
{
    protected $primaryKey = 'id_gen';
   
    protected $fillable=['id_gen','ano_gen'];
}
