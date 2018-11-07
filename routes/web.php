<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return redirect('https://dienmaycholon.vn/');
});
Route::group(["prefix"=>"2018","namespace"=>"C2018"],function(){
	Route::group(["prefix"=>"10"],function(){
		Route::get('/test', "ProductController@test");
		Route::any("/posttest","ProductController@posttest");

		
	});
	Route::group(["prefix"=>"11"],function(){
		//landing page 11/11
		Route::get('/sale-11-11', "ProductController@single");

		//order note9
		Route::get('/note9', function(){
			return view("v2018.m11.note9");
		});
		Route::get('/listnote9',function(){
			return view("v2018.m11.listnote9");
		});
	});

});
Route::group(["namespace"=>"C2019"],function(){
	//Route::group(["prefix"=>"01"],function(){
		Route::get('/haloo', "IndexController@index");
		Route::post("/posttest","ProductController@posttest");
	//});

});
// FOR BACKEND


Route::group(["prefix"=>"admin","namespace"=>"Amin"],function(){
	// Route::group(["prefix"=>"index"],function(){
		Route::get("/login", "AdminController@index");
		Route::post("/postlogin","AdminController@postlogin");

		

	// });

});
