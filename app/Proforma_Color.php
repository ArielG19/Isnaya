<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proforma_Color extends Model
{
    protected $table='proforma__colores';

    protected $fillable=['id','cantidad','numero','id_proforma','id_color'];

    public function proforma(){
        return $this->hasMany(Proforma::class);
    }
}
