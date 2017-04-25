<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proforma_Rubro extends Model
{
    protected $table='proforma__rubros';

    protected $fillable=['id','costo','volumen','numero','pag_unit','id_rubro','id_proforma'];
}
