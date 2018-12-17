<?php

namespace App\Http\Controllers\C2018;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Write\Y2018\Redday as DTRedday;
class ReddayController extends AppController
{
    //
    public function index(){
    	$this->View['product_main']=DTRedday::where("price","<>",'')->orderBy("id","DESC")->paginate(12);

    	$this->View["noithat"]=DTRedday::where("cid_cate",21)->orderBy("id","DESC")->paginate(12);
    	$this->View["tivi"]=DTRedday::where("cid_cate",8)->orderBy("id","DESC")->paginate(12);
    	$this->View["tulanh"]=DTRedday::where("cid_cate",18)->orderBy("id","DESC")->paginate(12);
    	$this->View["maygiat"]=DTRedday::where("cid_cate",3)->orderBy("id","DESC")->paginate(12);
    	$this->View["dienthoai"]=DTRedday::where("cid_cate",13)->orderBy("id","DESC")->paginate(12);

    	$this->View["giadung"]=DTRedday::where("cid_cate",9)->paginate(12);

        $this->View["noicomdien"]=DTRedday::where("cid_cate",10)->paginate(12);
    	/*foreach ($t as $key => $value) {
    		# code...
    		if(!empty($value->Product()->getPrice())){
    			dd($value->Product()->getPrice());
    		}
    		
    	}*/
    	return view("v2018.m11.redday",$this->View);
    }
    public function loadapi(Request $request){

      
            $this->View['main']=2;
            $cate= $request->input("cate",21);
            $sort=['id','DESC'];
            if($o=$request->input("o")){
                if($o=='1'){
                    $sort=['discount','ASC'];
                }
                if($o=='2'){
                    $sort=['discount','DESC'];
                }
            }
            $this->View['data_list']=DTRedday::where("cid_cate",$cate)->orderBy($sort[0],$sort[1])->paginate(12);
        

        return view("v2018.m11.reddayloadapi",$this->View);
    }
}
