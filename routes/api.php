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
	});
});


//restful-api

Route::group(['namespace'=>'Api'],function(){
	Route::get('/get-data','ApiController@getall');
	Route::get('/get-cate','ApiController@getcate');
	Route::get('/get-product-cate/{alias}','ApiController@getproductcate');
	Route::get('/get-sale','ApiController@getsale');
});
