<?php

namespace App\Http\Controllers\C2018;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Write\Y2018\Online;
class OnlineController extends AppController
{
    //
    public function index(){

    	$this->View["tivi"]=Online::where("cid_cate",8)->orderBy("id","ACS")->paginate(12);
        $this->View["tulanh"]=Online::where("cid_cate",18)->orderBy("id","ACS")->paginate(12);
        $this->View["maygiat"]=Online::where("cid_cate",3)->orderBy("id","ACS")->paginate(12);
        $this->View["giadung"]=Online::where("cid_cate",9)->orderBy("id","ACS")->paginate(12);
        $this->View["loa"]=Online::where("cid_cate",28)->orderBy("id","ACS")->paginate(12);
        $this->View["maylanh"]=Online::where("cid_cate",32)->orderBy("id","ACS")->paginate(12);

    	return view("v2018.m12.online",$this->View);
    }
    public function loadapi(Request $request){

            $this->View['main']=2;
            $cate= $request->input("cate",13);
          
            $this->View['data_list']=Online::where("cid_cate",$cate)->orderBy("id","DESC")->paginate(12);
        

        return view("v2018.m12.onlineload",$this->View);
    }
    
}
