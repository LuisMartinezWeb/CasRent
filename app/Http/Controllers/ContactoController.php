<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contacto;
use App\Http\Requests\ContactoRequest;
class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth')->only(['destroy']);
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactoRequest $request)
    {
        $nuevocontacto = new Contacto;
        $nuevocontacto->propiedad_id = $request->idcasa;
        $nuevocontacto->nombre = $request->nombrecontacto;
        $nuevocontacto->correo = $request->correocontacto;
        $nuevocontacto->telefono = $request->numerocontacto;
        $nuevocontacto->mensaje = $request->mensajecontacto;
        
        $nuevocontacto->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //$propiedaditem = Propiedad::where('casaid',auth()->id())->where('id',$id)->first();
        //$contacto = Contacto::where('user_id',auth()->id())->where('id',$id)->first();
         $contacto = Contacto::findOrFail($id);
 
         if($contacto == ""){
             return redirect(route("propiedades.index"));
         }else{
       
          $contacto->delete();
         
          return redirect(route("propiedades.index"));
          //return $contacto;
         }
    }
}
