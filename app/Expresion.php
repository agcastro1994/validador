<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expresion extends Model
{
   protected $table = 'expresion';
    public function pais(){

		return $this->belongsto(Pais::class);
}
}