<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bitacora extends Model
{
   protected $table='bitacoras';

   protected $fillable=['id','tabla','fecha','operacion','id_usuario','id_proforma'];
}
