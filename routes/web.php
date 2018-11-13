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
	return "Điện máy chợ lớn ";
	return redirect("https://dienmaycholon.vn");
    return view('welcome',['one'=>1,'two'=>'hello world']);
});
Route::group(["prefix"=>"2018","namespace"=>"C2018"],function(){
	Route::group(["prefix"=>"10"],function(){
		Route::get('/test', "ProductController@test");
		Route::any("/posttest","ProductController@posttest");

		
	});
	Route::group(["prefix"=>"11"],function(){
		//landing page 11/11
		Route::get('/sale-11-11', "ProductController@single");
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

Route::group(['namespace'=>"Auth"],function(){
	
	Route::get("/login",['as'=>'login','uses'=>"LoginController@login"]);
	Route::post("/postlogin",['as'=>'postlogin','uses'=>"LoginController@postlogin"]);
	Route::get('logout',function(){
				Auth::logout();
				return Redirect::to('/login');
			});
});

Route::group(["prefix"=>"admin","namespace"=>"Amin","middleware"=>'auth'],function(){
	
		Route::get("/dashboard",function(){
			return view("admin.dashboard.index");
		});
		
		Route::group(["prefix"=>"landing"],function(){

		
		// add landing page 
		Route::get('/add-live','LandingController@addlive');
		Route::post('/addlivepost','LandingController@addlivepost');
		Route::get('/add-live-child','LandingController@addlivechild');
		Route::post('/addlivechildpost','LandingController@addlivechildpost');
		//edit
		Route::any("/editlive/{id}","LandingController@editlive");
		Route::post('/editlivepost/{id}','LandingController@editlivepost');
		Route::get('/editlivechild/{id}','LandingController@editlivechild');
		Route::post('/editlivechildpost/{id}','LandingController@editlivechildpost');
		Route::get('/removelivechild/{id}','LandingController@removelivechild');
		Route::get('/removegift/{id}','LandingController@removegift');
		//list
		Route::get('/list-active','LandingController@listactive');
		Route::get('/list-unactive','LandingController@listunactive');


		});

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
