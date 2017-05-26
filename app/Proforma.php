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
      public function user(){

      	return $this->belonsgTo(User::class);
      }

       public function clientes(){

      	return $this->belonsgTo(Cliente::class);
      }

      public function formatos(){

        return $this->belonsgTo(Formato::class);
      }

      public function productos(){

        return $this->belonsgTo(Producto::class);
      }

      public function rubros(){
        return $this->belonsgTo(Rubro::class);
      }
}
