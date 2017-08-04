<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formato extends Model
{
    protected $table ='formatos';
    protected $fillable =['id','formato','estado'];


     public function proformas()
    {
      return $this->hasMany('App\Proforma');
      //return $this->hasMany(Proforma::class);
    }
}
