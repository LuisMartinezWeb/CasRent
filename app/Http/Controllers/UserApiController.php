<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;
class UserApiController extends Controller
{
	public function login(Request $r){
    $correo = $r->input("correo");
    $contra = $r->input("contra");
    $token = "";
    if(Auth::attempt(["email"=>$correo,"password"=>$contra])) {
    $user = auth()->user();
    $user->remember_token = Hash::make($user->id);
    $user->save();
    return response()->json(["us" => $user,"cod" => 200]);
    }
    return response()->json(["cod" => 404,"mensaje"=>"Usuario no encontrado"]);
    }
}