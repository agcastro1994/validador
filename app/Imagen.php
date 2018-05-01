<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    protected $table = 'images';
    public function pais(){

		return $this->belongsto(Pais::class);
}
}
