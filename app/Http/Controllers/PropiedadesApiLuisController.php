<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Propiedad;

class PropiedadesApiLuisController extends Controller
{
    public function __construct(){
    	$this->middleware("api.token");
    }
  
    public function index(){
    	try{
    		$propiedades = Propiedad::get();
    		$cod = 200;
    	}catch(Exception $e){
    		$propiedades = [];
    		$cod = 403;
    	}
    	return response()->json(["propiedades"=>$propiedades,"cod"=>$cod]);
    }

    public function store(Request $r){
        try{
            $c = new Propiedad;
            $c->nombre = $r->nombre;
            $c->descripcion = $r->descripcion;
            $c->habitaciones = $r->habitaciones;
            $c->baños = $r->wc;
            $c->save();
            $cod = 200;
        }catch(Exception $e){
            $cod = 500;     
        }
        return response()->json(["cod"=>$cod]);
    }

    

    public function show(Request $r){

        $c = Propiedad::find($r->id);

        return response()->json($c);
        
    }

    public function update(Request $r){
        $c = Propiedad::find($r->id);
        try{
            $c->nombre = $r->nombre;
            $c->descripcion = $r->descripcion;
            $c->habitaciones = $r->habitaciones;
            $c->baños = $r->wc;
            $c->save();
            $cod = 200;
        }catch(Exception $e){
            $cod = 500;     
        }
        return response()->json(["cod"=>$cod]);
    }

    public function delete(Request $r){
        $c = Propiedad::find($r->id);
        try{
            $c->delete();
            $cod = 200;
        }catch(Exception $e){
            $cod = 500;     
        }
        return response()->json(["cod"=>$cod]);
    }
}
