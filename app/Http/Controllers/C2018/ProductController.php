<?php

namespace App\Http\Controllers\C2018;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Validator;
use App\Model\Read\Product;
use App\Model\Read\LiveChild;
use App\Model\Write\KmGift;
use App\Model\Write\KmLive;
use App\Model\Write\KmLiveChild;
use App\MrData;
class ProductController extends AppController
{
    //
 
    public function test(){
        
        
    	return view("v2018.m10.test",$this->View);
        
    }
    public function posttest(Request $request){
    		
    	$validater=Validator::make($request->all(),[
    		"name"=>"required"
    	],[
    		"name.required"=>"VUI LONG NHAP LIEU"
    	]);

    	if($validater->fails()){
    		return redirect()->back()->withErrors($validater)->withInput();
    	}else{
    			$request->session()->flash("success","THanh cong ");
    		return redirect()->back();
    	}
    }


    public function single(){
        $get = LiveChild::getJson('landingsingle2018');
        
        return view("v2018.m11.single",$this->View,["get"=>$get]);
    }


    public function testprogram(){

    }




}
