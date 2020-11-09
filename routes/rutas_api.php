<?php
	
	Route::prefix("api")->group(function(){
		Route::post('login',"UserApiController@login");

		Route::post('usuarios',"AbeUserApiController@index");
		Route::post('user/store',"AbeUserApiController@store");
		Route::post('user/update',"AbeUserApiController@update");
		Route::post('user/delete',"AbeUserApiController@delete");
		Route::post('user',"AbeUserApiController@show");
	});