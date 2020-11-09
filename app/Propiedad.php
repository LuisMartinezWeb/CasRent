<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Propiedad extends Model
{
    protected $table ='propiedades';
    public $timestamps = false;

    public function userpro(){
        return $this->belongsTo('App\User','casaid');

    }

    public function contactosss(){
        
        return $this->hasMany('App\Contacto','propiedad_id','id');
    }
    public function __toString(){
    	return $this->nombre;
    }

}
