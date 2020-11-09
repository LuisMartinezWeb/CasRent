<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;
use Exception;

class AbeUserApiController extends Controller
{ 


public function index(){
try{
$usuarios = User::get();
$cod = 200;
}catch(Exception $e){
$usuarios = [];
$cod = 500;
}
return response()->json(["usuarios"=>$usuarios,"cod"=>$cod]);
}

public function store(Request $r){
try{
$c = new User;
$c->name = $r->name;
$c->email = $r->email;
$c->phone = $r->phone; 
$c->password = $r->password;
$c->save();
$cod = 200;
}catch(Exception $e){
$cod = 500;     
}
return response()->json(["cod"=>$cod]);
}
	
public function show( Request $r){
	$c = User::find($r->id);

	return response()->json($c);
}

public function update(Request $r){
$c = User::find($r->id);
try{
$c->name = $r->name;
			$c->phone = $r->phone;
			$c->email = $r->email;
			$c->password = $r->password;
			$c->save();
			$cod = 200;
		}catch(Exception $e){
			$cod = 500;     
		}
		return response()->json(["cod"=>$cod]);
	}

	public function delete(Request $r){
		$c = User::find($r->id);
		try{
			$c->delete();
			$cod = 200;
		}catch(Exception $e){
			$cod = 500;     
		}
		return response()->json(["cod"=>$cod]);
	}
}