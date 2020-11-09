<?php
	
	Route::prefix("api")->group(function(){
		Route::post('loginluis',"UserApiLuisController@login");
		Route::post('propiedades',"PropiedadesApiLuisController@index");
		Route::post('propiedades/store',"PropiedadesApiLuisController@store");
		Route::post('propiedades/update',"PropiedadesApiLuisController@update");
        Route::post('propiedades/delete',"PropiedadesApiLuisController@delete");

        Route::post('propiedad',"PropiedadesApiLuisController@show");
        
	});
	Route::get('prueba', function() {
	    return view("prueba");
	});