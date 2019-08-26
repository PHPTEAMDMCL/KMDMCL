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
Route::get('/testcapcha', 'PromotionController@testcapcha');
Route::any('/admin/danhsachkhachhang/{tenchuongtrinh}', 'PromotionController@danhsachkhachhang');
Route::any('/admin/xuatdanhsachkhachhang/{tenchuongtrinh}', 'PromotionController@xuatdanhsachkhachhang');
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return redirect("http://khuyenmai.dienmaycholon.vn/chuongtrinhdacbiet/sale-hang-hieu-50");
});
Route::get('/', function () {
	return "Điện máy chợ lớn ";
	return redirect("https://dienmaycholon.vn");
    return view('welcome',['one'=>1,'two'=>'hello world']);
});
Route::get('/testapi', 'PromotionController@testapi');
Route::get('/trang-khong-ton-tai', 'PromotionController@errorpage');
Route::get('/chuongtrinh/{tenchuongtrinh}', 'PromotionController@index');
Route::get('/chuongtrinhdacbiet/{tenchuongtrinh}', 'PromotionController@chuongtrinhdacbiet');
Route::get('/chuongtrinhgoc/{tenchuongtrinh}', 'PromotionController@chuongtrinhgoc');
Route::any('/sendinforcustomer/{tenchuongtrinh}', 'PromotionController@sendinforcustomer');
Route::group(["prefix"=>"2019","namespace"=>"C2019"],function(){
	Route::get('/dat-hang-samsung-galaxy-s10','IndexController@ordergalaxy');
	Route::post('/post-order','IndexController@postorder');
	// Route::get('/dat-hang-samsung-a50',function(){
	// 	return view('v2019.m03.m50');
	// });
	Route::any('/dat-hang-toshiba','IndexController@toshiba');
	Route::any('/dat-hang-samsung-a50','IndexController@ordera50');
	Route::group(["prefix"=>"01"],function(){
		Route::get('/mung-dai-le-30-04', "IndexController@index");
	});
	Route::group(["prefix"=>"01"],function(){
		Route::get('/gio-to-hung-vuong',function(){
			return view("v2019.buffer.gio-to-hung-vuong");
		});
	});
	Route::group(["prefix"=>"03"],function(){
		Route::get('/happy-womans-day','IndexController@womenday');
		Route::any('/tv-4k-samsung','IndexController@tivisamsung');
		
	});

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
		Route::get('/tivi-tet','TiviController@index');
	});

});
Route::group(["namespace"=>"C2019"],function(){
		Route::get('/haloo', "IndexController@index");
		Route::post("/posttest","ProductController@posttest");
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
			Route::group(["prefix"=>"chuongtrinhkhuyenmai"],function(){
				Route::any("themmoi","ChuongtrinhkhuyenmaiController@themmoi");
				Route::any("danhsach","ChuongtrinhkhuyenmaiController@danhsach");
				Route::any("chinhsua/{id}","ChuongtrinhkhuyenmaiController@chinhsua");
				Route::any("xoa/{id}","ChuongtrinhkhuyenmaiController@xoa");
			});
			Route::group(["prefix"=>"samsungfour"],function(){
				Route::any("add","SamsungfourController@add");
				Route::any("lists","SamsungfourController@lists");
				Route::any("edit/{id}","SamsungfourController@edit");
				Route::any("removed/{id}","SamsungfourController@removed");
			});
			Route::group(["prefix"=>"uudaiacb"],function(){
				Route::any("add","UudaiacbController@add");
				Route::any("lists","UudaiacbController@lists");
				Route::any("edit/{id}","UudaiacbController@edit");
				Route::any("removed/{id}","UudaiacbController@removed");
				Route::any("taotrangdem","UudaiacbController@taotrangdem");
				Route::any("thaychuongtrinh","UudaiacbController@thaychuongtrinh");
				Route::any("changeoder","UudaiacbController@changeoder");
			});
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
				Route::any("index","PromotionController@index");
				Route::any("stepone","PromotionController@stepone");
				Route::any("taotrangdemtuychon","PromotionController@taotrangdemtuychon");
				Route::any("steptwo/{namelandingpage}","PromotionController@steptwo");
				Route::any("stepthree/{namelandingpage}","PromotionController@stepthree");
				Route::any("stepfinish/{namelandingpage}","PromotionController@stepfinish");
				Route::any("updateaction","PromotionController@updateaction");
				Route::any("updatedanhsachkhachhang","PromotionController@updatedanhsachkhachhang");
				Route::any("updatefile/{namelandingpage}","PromotionController@updatefile");
				Route::any("updateproduct/{namelandingpage}","PromotionController@updateproduct");
				Route::any("updatepromotion","PromotionController@updatepromotion");
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
			Route::group(["prefix"=>"tivi"],function(){
				Route::any("add","TiviController@add");
				Route::any("lists","TiviController@lists");
				Route::any("edit/{id}","TiviController@edit");
				Route::any("removed/{id}","TiviController@removed");
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
