<?php

namespace App\Http\Controllers\C2018;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Write\Y2018\SaleDecember as Sale;
class SaledecemberController extends AppController
{
    //
    public function index(){

    	$this->View["didong"]=Sale::where("cid_cate",13)->orderBy("id","ASC")->paginate(12);
    	$this->View["tivi"]=Sale::where("cid_cate",8)->orderBy("id","ASC")->paginate(12);
    	$this->View["tulanh"]=Sale::where("cid_cate",18)->orderBy("id","ASC")->paginate(12);
    	$this->View["maygiat"]=Sale::where("cid_cate",3)->orderBy("id","ASC")->paginate(12);

    	$this->View["giadung"]=Sale::where("cid_cate",9)->paginate(12);

    	/*foreach ($t as $key => $value) {
    		# code...
    		if(!empty($value->Product()->getPrice())){
    			dd($value->Product()->getPrice());
    		}
    		
    	}*/
    	return view("v2018.m12.sale12",$this->View);
    }
    public function loadapi(Request $request){

            $this->View['main']=2;
            $cate= $request->input("cate",18);
          
            $this->View['data_list']=Sale::where("cid_cate",$cate)->orderBy("id","ASC")->paginate(12);
        

        return view("v2018.m12.saleloadapi",$this->View);
    }
}
