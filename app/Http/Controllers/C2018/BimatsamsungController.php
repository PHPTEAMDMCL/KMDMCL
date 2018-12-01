<?php

namespace App\Http\Controllers\C2018;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Write\Y2018\Bimatss as Samsung;
class BimatsamsungController extends AppController
{
    //
    public function index(){
    	
    	$this->View["tulanh"]=Samsung::where("cid_cate",18)->orderBy("id","DESC")->get();
    	$this->View["maygiat"]=Samsung::where("cid_cate",3)->orderBy("id","DESC")->get();
    
    	/*foreach ($t as $key => $value) {
    		# code...
    		if(!empty($value->Product()->getPrice())){
    			dd($value->Product()->getPrice());
    		}
    		
    	}*/
    	return view("v2018.m12.bimat",$this->View);
    }
    
}
