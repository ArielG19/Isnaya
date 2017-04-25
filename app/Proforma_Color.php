<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proforma_Color extends Model
{
    protected $table='proforma_colores';

    protected $fillable=['id','cantidad','tipo','numero','id_proforma','id_color'];
}
