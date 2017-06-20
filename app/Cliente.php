<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table='clientes';
    protected $fillable=['nombre','apellido','telefono','email','fax'];


    
   //--------------------------------------------------------------------------------------------------
   //Relaciones de las tablas
    public function proformas()
    {
      return $this->hasMany('App\Proforma');
    }

    //--------------------------------------------------------------------------------------------------
      public function scopeSearch($query,$nombre)
    {
        return $query->where('nombre','LIKE',"%$nombre%");
    }

}
