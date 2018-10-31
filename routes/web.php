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
    return view('welcome',['one'=>1,'two'=>'hello world']);
});
Route::group(["prefix"=>"2018","namespace"=>"C2018"],function(){
	Route::group(["prefix"=>"10"],function(){
		Route::get('/test', "ProductController@test");
		Route::any("/posttest","ProductController@posttest");
	});

});
Route::group(["namespace"=>"C2019"],function(){
	//Route::group(["prefix"=>"01"],function(){
		Route::get('/haloo', "IndexController@index");
		Route::post("/posttest","ProductController@posttest");
	//});

});
// FOR BACKEND 
Route::group(["prefix"=>"admin","namespace"=>"Admin"],function(){
	Route::group(["prefix"=>"index"],function(){
		Route::get('/test', "IndexController@index");
		
	});

});
