<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proforma extends Model
{
  protected $table='proformas';

  protected $fillable=['id','num_pag','solicitante','telefono','fax','fecha','fechaFin','caras','volumen','subtotal','gastos','costo_total',
  'utilidad_bruta','valor_venta','precio_venta','descuento','iva','tipo','estado','id_producto','id_formato','id_cliente','id_usuario'];

  //--------------------------------------------------------------------------------------------------
  //Relaciones de las tablas
   public function cliente()
  {
    return $this->belongsTo('App\Cliente','id_cliente');
  }

   public function formato()
  {
    return $this->belongsTo('App\Formato','id_formato');
  }

  public function user(){
    return $this->belonsgTo(User::class);
  }

  public function producto()
  {
    return $this->belongsTo('App\producto','id_producto');
  }

  public function rubros()
  {
    return $this->belonsgTo(Rubro::class);
  }
  public function proforma_color()
  {
    return $this->belonsgTo(Proforma_Color::class);
  }
  public function proforma_rubro()
  {
    return $this->belonsgTo(Proforma_Rubro::class);
  }
}
