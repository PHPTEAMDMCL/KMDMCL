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
		Route::get('/bi-mat-samsung',"BimatsamsungController@loadapi");
	});

});