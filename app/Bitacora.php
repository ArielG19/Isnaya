<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bitacora extends Model
{
   protected $table='bitacoras';

   protected $fillable=['id','tabla','id_tabla','operacion','id_usuario',];
}
