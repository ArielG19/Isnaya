<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rubro extends Model
{
    protected $table='rubros';

    protected $fillable=['id','descripcion','cantidad','costo','tipo','estado','id_usuario'];
} 
