<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
	protected $table = 'pais';

    public function expresion(){

		return $this->hasMany(Expresion::class);
	}

	 public function images(){

		return $this->hasMany(Imagen::class);
	}
}
