<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    public $table = 'ciudad';
    public $timestamps = false;
    public $guarded = [];

    public function ciudades() {
        // Un pais pertenece (belongsTo) a un continente
        // return return $this->belongsTo('App\elModelo', 'columnaClaveForanea');
        return $this->belongsTo('App\Ciudad', 'provincia_id');
    }
}
