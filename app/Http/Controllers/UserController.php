<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Image;
use App\User;

class UserController extends Controller
{

	//Editar Perfil Usuario
	public function profile(){
		if(Auth::user()){
			$user = User::find(Auth::user()->id);

			if($user){
					return view('profile')->withUser($user);		
			}else{
					return redirect()->back();
				}
					}else{
					return redirect()->back();
		}		
	}
	public function update(Request $request){
		$user = User::find(Auth::user()->id);

		if($user){
			$validate = null;
				if(Auth::user()->email === $request['email']){
					$validate = $request->validate([
					
					'name' => 'required|regex:/^[\pL\s\-]+$/u|min:2',
					'email' => 'required|email',
					'phone' => 'numeric|required|min:9',
					'password' => 'required|min:8|confirmed',
				]);
				}else{
					$validate = $request->validate([
				
						'name' => 'required|regex:/^[\pL\s\-]+$/u|min:2',
						'email' => 'required|email|unique:users',
						'phone' => 'numeric|required|min:9',
						'password' => 'required|min:8|confirmed'
					]);
				}

			if($validate){
				$user->name = $request['name'];
				$user->email = $request['email'];
				$user->phone = $request['phone'];
				$user->password = bcrypt(request('password'));
				$user->save();
				$request->session()->flash('success','Datos Actualizados Correctamente');
				return redirect()->back();
				
		    }else{
				return redirect()->back();
			}

		}else{
			return redirect()->back();
		}

	}

	//Actualizar Avatar
    public function perfil(){
        return view('perfil', array('user'=>Auth::user()));
    }

    public function update_avatar(Request $request){

    	// Handle the user upload of avatar
    	if($request->hasFile('avatar')){
    		$avatar = $request->file('avatar');
    		$filename = time() . '.' . $avatar->getClientOriginalExtension();
    		Image::make($avatar)->resize(300, 300)->save( public_path('/dist/img/' . $filename ) );

    		$user = Auth::user();
    		$user->avatar = $filename;
    		$user->save();
        }
        return view('perfil', array('user'=>Auth::user()));
	}




	//rutas del contacto
	public function contacto(){
		return view('contacto');
	}
}


