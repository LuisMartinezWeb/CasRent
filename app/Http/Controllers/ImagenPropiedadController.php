<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Propiedad;
use App\Http\Requests\ImgPropiedadRequest;
class ImagenPropiedadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        
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
            return view('propiedades.editimg' , compact('propiedad'));
        }



      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ImgPropiedadRequest $request, $id)
    {

        $c = Propiedad::where('casaid',auth()->id())->where('id',$id)->first();
       // $propiedad = Propiedad::findOrFail($id);

        if($c == ""){
            return redirect(route("error404"));
        }else{
            if($request->hasFile('image')){
                $file = $request->file('image');
                $nombre = time().$file->getClientOriginalName();
                \Storage::disk('public')->put("imgpropiedades/$nombre", \File::get($file));

                $fileimg = public_path().'/storage/imgpropiedades/'.$c->imagen;
            \File::delete($fileimg);
            $c->imagen = $nombre;
            $c->save();

            return redirect(route("propiedades.show", $c));
                
            }

            
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
        //
    }
}
