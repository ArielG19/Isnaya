<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table='clientes';

    protected $fillable=['id','nombre','apellido','telefono','email','fax'];

    
   //--------------------------------------------------------------------------------------------------
   //Relaciones de las tablas
    public function proformas(){
      return $this->hasMany(Proforma::class);
    }

}
