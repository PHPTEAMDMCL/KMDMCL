<?php

namespace App\Http\Controllers\C2018;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Write\Y2018\Grab;
class GrabController extends AppController
{
    //
    public function index(){

    	$this->View["tivi"]=Grab::where("cid_cate",8)->where('title','like','voucher-grab')->orderBy("id","ASC")->paginate(12);
    	$this->View["tulanh"]=Grab::where("cid_cate",18)->where('title','like','voucher-grab')->orderBy("id","ASC")->paginate(12);
    	$this->View["maygiat"]=Grab::where("cid_cate",3)->where('title','like','voucher-grab')->orderBy("id","ASC")->paginate(12);


    	/*foreach ($t as $key => $value) {
    		# code...
    		if(!empty($value->Product()->getPrice())){
    			dd($value->Product()->getPrice());
    		}
    		
    	}*/
    	return view("v2018.m12.grab",$this->View);
    }
    public function loadapi(Request $request){

            $this->View['main']=2;
            $cate= $request->input("cate",18);
          
            $this->View['data_list']=Grab::where("cid_cate",$cate)->where('title','like','voucher-grab')->orderBy("id","ASC")->paginate(12);
        

        return view("v2018.m12.grabload",$this->View);
    }
     public function newyear(){

        $this->View["tivi"]=Grab::where("cid_cate",8)->where('title','like','quatet')->orderBy("id","ASC")->paginate(12);
        $this->View["tulanh"]=Grab::where("cid_cate",18)->where('title','like','quatet')->orderBy("id","ASC")->paginate(12);
        $this->View["maygiat"]=Grab::where("cid_cate",3)->where('title','like','quatet')->orderBy("id","ASC")->paginate(12);


        /*foreach ($t as $key => $value) {
            # code...
            if(!empty($value->Product()->getPrice())){
                dd($value->Product()->getPrice());
            }
            
        }*/
        return view("v2018.m12.quatet",$this->View);
    }
    public function quatetloadapi(Request $request){

            $this->View['main']=2;
            $cate= $request->input("cate",18);
          
            $this->View['data_list']=Grab::where("cid_cate",$cate)->where('title','like','quatet')->orderBy("id","ASC")->paginate(12);
        

        return view("v2018.m12.quatetload",$this->View);
    }
}
