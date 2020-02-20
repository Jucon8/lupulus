<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    public $table = 'provincia';
    public $timestamps = false;
    public $guarded = [];

     public function provincias() {
		// Un continente tiene muchos (hasMany) paises
		// return $this->hasMany('App\elModelo', 'columnaClaveForanea');
        return $this->hasMany('App\Ciudad', 'provincia_id');
    }
}
