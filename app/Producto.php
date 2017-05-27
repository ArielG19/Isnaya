<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table='productos';

    protected $fillable=['id','descripcion','estado'];

    public function proforma(){

        return $this->hasMany(Proforma::class);
    }
}
