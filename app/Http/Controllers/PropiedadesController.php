<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Propiedad;
use DB;
use App\Http\Requests\PopiedadRequest;
class PropiedadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
     
    public function index()
    {
        $propiedad = Propiedad::where('casaid',auth()->id())->get();


 
        return view('propiedades.index' , compact('propiedad'));
        // $propiedades = Propiedad::get()->toArray();
        // return $propiedades;
         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $propiedad = new Propiedad;

        return view("propiedades.create", compact('propiedad'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PopiedadRequest $request)
    {


            
        if($request->hasFile('image')){
            $file = $request->file('image');
            $nombre = time().$file->getClientOriginalName();
            \Storage::disk('public')->put("imgpropiedades/$nombre", \File::get($file));
            
        }

        $propiedad = new Propiedad;
        $propiedad->casaid = auth()->id();
        $propiedad->nombre = $request->propiedad;
        $propiedad->imagen = $nombre;
        $propiedad->descripcion = $request->descripcion;
        $propiedad->precio = $request->precio;
        $propiedad->habitaciones = $request->habitaciones;
        $propiedad->baños = $request->wc;
        $propiedad->estacionamiento = $request->estacionamiento;
        $propiedad->metros = $request->metros;
        $propiedad->save();

        return redirect(route("propiedades.index"));

        //return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        

       // $propiedad = Propiedad::where('casaid',auth()->id())->where('id',$id)->first();
        $propiedad = Propiedad::with("contactosss")->where('casaid',auth()->id())->where('id',$id)->first();
       // $propiedad = Propiedad::findOrFail($id);

        if($propiedad == ""){
            return redirect(route("error404"));
        }else{
            //return $propiedad;
            return view('propiedades.show' , compact('propiedad'));
        }


            //return view('propiedades.show' , compact('propiedad'));

        
  

        //$propiedad = Propiedad::join('users','casaid', '=', 'users.id')->select('Productos.id','Productos.nombre','Categorias.nombre as NombreCategoria')->where('propiedad.id',$id)->get();
       

        
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $propiedad = Propiedad::where('casaid',auth()->id())->where('id',$id)->first();
       // $propiedad = Propiedad::findOrFail($id);

        if($propiedad == ""){
            return redirect(route("error404"));
        }else{
            //return $propiedad;
            return view('propiedades.edit' , compact('propiedad'));
        }
        
        //$propiedad = Propiedad::find($id);

        //return view('propiedades.edit' , compact('propiedad'));
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

        $c = Propiedad::where('casaid',auth()->id())->where('id',$id)->first();
       // $propiedad = Propiedad::findOrFail($id);

        if($c == ""){
            return redirect(route("error404"));
        }else{
            //return $propiedad;
            $c->nombre = $request->propiedad;
            $c->descripcion = $request->descripcion;
            $c->precio = $request->precio;
            $c->habitaciones = $request->habitaciones;
            $c->baños = $request->wc;
            $c->estacionamiento = $request->estacionamiento;
            $c->metros = $request->metros;
            $c->save();

            return redirect(route("propiedades.show", $c));
            
        }

       
           
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $propiedaditem = Propiedad::where('casaid',auth()->id())->where('id',$id)->first();
       // $propiedad = Propiedad::findOrFail($id);

        if($propiedaditem == ""){
            return redirect(route("propiedades.index"));
        }else{
            
        $file = public_path().'/storage/imgpropiedades/'.$propiedaditem->imagen;
         \File::delete($file);

         
         $propiedaditem->delete();
        
         return redirect(route("propiedades.index"));
        }



        

        
        
    }
}
