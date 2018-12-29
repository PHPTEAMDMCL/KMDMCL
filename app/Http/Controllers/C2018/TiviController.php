<?php

namespace App\Http\Controllers\C2018;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Write\Y2018\Tivi;
class TiviController extends AppController
{
    //
    public function index(){
    	

    	$this->View["samsung"]=Tivi::where("cid_series",16)->orderBy("id","DESC")->paginate(12);
    	$this->View["lg"]=Tivi::where("cid_series",15)->orderBy("id","DESC")->paginate(12);
    	$this->View["sony"]=Tivi::where("cid_series",24)->orderBy("id","DESC")->paginate(12);
    	$this->View["tcl"]=Tivi::where("cid_series",119)->orderBy("id","DESC")->paginate(12);
    	
    	return view("v2018.m12.tivi",$this->View);
    }
    public function loadapi(Request $request){


           
            $cate= $request->input("cate",16);
            $sort=['id','ASC'];
            if($o=$request->input("o")){
                if($o=='1'){
                    $sort=['discount','ASC'];
                }
                if($o=='2'){
                    $sort=['discount','DESC'];
                }
            }
            $this->View['data_list']=Tivi::where("cid_series",$cate)->orderBy($sort[0],$sort[1])->paginate(12);
        

        return view("v2018.m12.tiviload",$this->View);
    }
}
