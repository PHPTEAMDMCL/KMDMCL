<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(["prefix"=>"2018","namespace"=>"C2018"],function(){
	Route::group(["prefix"=>"11"],function(){
		Route::get('/ngay-ruc-lua',"ReddayController@loadapi");
		
	});
	Route::group(["prefix"=>"12"],function(){
		Route::get('/sale-12-12',"SaledecemberController@loadapi");
		Route::get('/techcombank','TechcombankController@loadapi');
		Route::get('/grab-load','GrabController@loadapi');
		Route::get('/qua-tet-load','GrabController@quatetloadapi');
		Route::get('/get-data','GrabController@api');
		Route::get('/online-load',"OnlineController@loadapi");
		Route::get('/tivi-load','TiviController@loadapi');
	});
});
Route::group(["prefix"=>"2019","namespace"=>"C2019"],function(){
	Route::group(["prefix"=>"01"],function(){
		Route::get('/loadindex',"IndexController@loadindex");
		
	});
	Route::group(["prefix"=>"03"],function(){
		Route::get('/load-womens',"IndexController@loadwomens");
		
	});
	
});


Route::group(['prefix'=>'default','namespace'=>'Api'],function(){
	Route::group(['prefix'=>'webservice'],function(){
		Route::get('getdatasapcode','ServiceController@getdatasapcode');
		Route::get('getsapmobi','ServiceController@getsapmobi');
		Route::get('getsapnorm','ServiceController@getsapnorm');
		Route::post('updatestock','ServiceController@updatestock');
		
	});
});


//restful-api

Route::group(['namespace'=>'Api'],function(){
	Route::get('/get-data','ApiController@getall');
	Route::get('/get-cate','ApiController@getcate');
	Route::get('/get-product-cate/{alias}','ApiController@getproductcate');
	Route::get('/get-sale','ApiController@getsale');
	Route::get('/get-online','ApiController@getonline');
});
