<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Propiedad;
use App\Contacto;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       $propiedad = Propiedad::with("contactosss")->where('casaid',auth()->id())->get();
       
       //$contactos = Propiedad::with("contactosss")->first();
       
       return view('dashboard' , compact('propiedad' ,'contactos'));
     //  return array($propiedad ,$contactos);
    }
}
