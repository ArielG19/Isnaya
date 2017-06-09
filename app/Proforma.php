<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proforma extends Model
{
    protected $table='proformas';

    protected $fillable=['id','num_pag','solicitante','caras','volumen','subtotal','gastos','costo_total',
    'utilidad_bruta','valor_venta','precio_venta','descuento','iva','fecha','tipo','estado','id_producto','id_formato','id_cliente','id_usuario'];


    //--------------------------------------------------------------------------------------------------
    //Relaciones de las tablas
    public function cliente()
    {
        return $this->belongsTo('App\Cliente','id_cliente');
    }

    public function user(){

      	return $this->belonsgTo(User::class);
    }
    public function formato()
    {

        return $this->belonsgTo(Formato::class);
    }

    public function producto()
    {
        return $this->belongsTo('App\producto','id_producto');
    }


    public function rubro()
    {
      return $this->belonsgTo(Rubro::class);
    }
}
