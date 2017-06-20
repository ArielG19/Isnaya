<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table='productos';

    protected $fillable=['id','descripcion','estado'];

    //------------------------------------------------------------------------
    public function proformas()
    {
      return $this->hasMany('App\Proforma');
      //return $this->hasMany(Proforma::class);
    }

        
    //------------------------------------------------------------------------
    public function scopeSearch($query,$descripcion)
    {
        //return $query->where('descripcion','LIKE',"%$descripcion%");
        //if($descripcion != ""){
        	//$query->where('descripcion',$descripcion);
         return $query->where('descripcion', 'LIKE', '%'.$descripcion.'%' );
        //}
    }
}
