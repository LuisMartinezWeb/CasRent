<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Propiedad;
use DB;

class InicioController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {

        $propiedad = Propiedad::all();
       //$propiedad = DB::table('propiedades')->where('casaid',auth()->id())->get();


       //return $propiedad;
        return view('ini' , compact('propiedad'));
    }
}
