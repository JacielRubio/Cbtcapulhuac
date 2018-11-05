<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class empresas extends Model
{
//  use SoftDeletes;
 protected $primaryKey = 'id_em';

 protected $fillable=['id_em, rfc, nom_emp, dir, 
                    tel, municipio, cp, Estado, Correo
                    Pag_web, Giro, archivo'];

// protected $date=['deleted_at'];
}
