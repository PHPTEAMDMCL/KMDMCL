<?php

namespace App\Http\Controllers\C2018;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Write\Y2018\Techcombank as Techcom;
class TechcombankController extends AppController
{
    //
    public function index(){

    	$this->View["didong"]=Techcom::where("cid_cate",13)->orderBy("id","ASC")->paginate(12);
    	$this->View["tivi"]=Techcom::where("cid_cate",8)->orderBy("id","ASC")->paginate(12);
    	

    	/*foreach ($t as $key => $value) {
    		# code...
    		if(!empty($value->Product()->getPrice())){
    			dd($value->Product()->getPrice());
    		}
    		
    	}*/
    	return view("v2018.m12.techcombank",$this->View);
    }
    public function loadapi(Request $request){

            $this->View['main']=2;
            $cate= $request->input("cate",13);
          
            $this->View['data_list']=Techcom::where("cid_cate",$cate)->orderBy("id","ASC")->paginate(12);
        

        return view("v2018.m12.techcomloadapi",$this->View);
    }
}
