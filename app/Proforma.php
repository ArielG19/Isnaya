<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proforma extends Model
{
    protected $table='proformas';

    protected $fillable=['id','num_pag','solicitante','volumen','subtotal','gastos','costo_total',
    'utilidad_bruta','valor_venta','precio_venta','fecha','descuento','estado','caras','iva','id_producto','id_formato','id_cliente','id_usuario'];
}
