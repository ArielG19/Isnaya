<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formato extends Model
{
    protected $table ='formatos';
    protected $fillable =['formato','estado'];


    public function proforma(){

        return $this->hasMany(Proforma::class);
      }
}
