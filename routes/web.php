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
		Route::get('/sale-11-11',function(){
			return redirect("http://khuyenmai.dienmaycholon.vn");
		});
		Route::get('/note9', function(){
			return view("v2018.m11.note9");
		});
		Route::get('/listnote9',function(){
			return view("v2018.m11.listnote9");
		});
		Route::get('/ngay-ruc-lua',"ReddayController@index");

		
	});
	Route::group(["prefix"=>"12"],function(){
		Route::get('/qua-tet-samsung',"BimatsamsungController@index");
		Route::get('/sale-12-12','SaledecemberController@index');
		Route::get('/techcombank','TechcombankController@index');
		Route::get('/samsung-online','SamsungonlineController@index');
		Route::get('/san-voucher-grab-reward','GrabController@index');
		Route::get('/qua-tet-linh-dinh','GrabController@newyear');
		Route::get('/gian-hang-online','OnlineController@index');
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
Route::group(["prefix"=>"admin","namespace"=>"Admin","middleware"=>'auth'],function(){
			Route::group(["prefix"=>"redday"],function(){
				Route::any("add","ReddayController@add");
				Route::any("lists","ReddayController@lists");
				Route::any("edit/{id}","ReddayController@edit");
				Route::any("removed/{id}","ReddayController@removed");
			});
			Route::group(["prefix"=>"bimat"],function(){
				Route::any("add","BimatsamsungController@add");
				Route::any("lists","BimatsamsungController@lists");
				Route::any("edit/{id}","BimatsamsungController@edit");
				Route::any("removed/{id}","BimatsamsungController@removed");
			});
			Route::group(["prefix"=>"saledecember"],function(){
				Route::any("add","SaledecemberController@add");
				Route::any("lists","SaledecemberController@lists");
				Route::any("edit/{id}","SaledecemberController@edit");
				Route::any("removed/{id}","SaledecemberController@removed");
			});
			Route::group(["prefix"=>"techcombank"],function(){
				Route::any("add","TechcombankController@add");
				Route::any("lists","TechcombankController@lists");
				Route::any("edit/{id}","TechcombankController@edit");
				Route::any("removed/{id}","TechcombankController@removed");
			});
			Route::group(["prefix"=>"samsung"],function(){
				Route::any("add","SamsungonlineController@add");
				Route::any("lists","SamsungonlineController@lists");
				Route::any("edit/{id}","SamsungonlineController@edit");
				Route::any("removed/{id}","SamsungonlineController@removed");
			});
			Route::group(["prefix"=>"grab"],function(){
				Route::any("add","GrabController@add");
				Route::any("lists","GrabController@lists");
				Route::any("edit/{id}","GrabController@edit");
				Route::any("removed/{id}","GrabController@removed");
			});
			Route::group(["prefix"=>"promotion"],function(){
				Route::any("add","PromotionController@add");
				Route::any("lists","PromotionController@lists");
				Route::any("edit/{id}","PromotionController@edit");
				Route::any("removed/{id}","PromotionController@removed");
			});
			Route::group(["prefix"=>"quatet"],function(){
				Route::any("add","QuatetController@add");
				Route::any("lists","QuatetController@lists");
				Route::any("edit/{id}","QuatetController@edit");
				Route::any("removed/{id}","QuatetController@removed");
			});
			Route::group(["prefix"=>"online"],function(){
				Route::any("add","OnlineController@add");
				Route::any("lists","OnlineController@lists");
				Route::any("edit/{id}","OnlineController@edit");
				Route::any("removed/{id}","OnlineController@removed");
			});
 });
Route::group(["prefix"=>"admin","namespace"=>"Amin","middleware"=>'auth'],function(){
		Route::group(['prefix'=>'index'],function(){
			Route::get("/index",function(){
				return view("admin.dashboard.index");
			});
		});
		
		

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
