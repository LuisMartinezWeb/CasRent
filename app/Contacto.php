<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    protected $table ='contacto';
    public $timestamps = false;

    public function contacpropiedad(){
        return $this->belongsTo('App\Propiedad','propiedad_id');

    }
}
