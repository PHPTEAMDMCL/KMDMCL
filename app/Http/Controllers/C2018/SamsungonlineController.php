<?php

namespace App\Http\Controllers\C2018;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Write\Y2018\Samsung;
class SamsungonlineController extends AppController
{
    //
    public function index(){
        //voucher 300k
    	$this->View["tivi300"]=Samsung::where("cid_cate",'=','8')->where('idvoucher','=','1')->orderBy("id","ASC")->get();
    	$this->View["tulanh300"]=Samsung::where("cid_cate",18)->where('idvoucher','=','1')->orderBy("id","ASC")->get();
    	$this->View["maygiat300"]=Samsung::where("cid_cate",3)->where('idvoucher','=','1')->orderBy("id","ASC")->get();

        //voucher 500k
        $this->View["tivi500"]=Samsung::where("cid_cate",8)->where('idvoucher','=','2')->orderBy("id","ASC")->get();
        $this->View["tulanh500"]=Samsung::where("cid_cate",18)->where('idvoucher','=','2')->orderBy("id","ASC")->get();
        $this->View["maygiat500"]=Samsung::where("cid_cate",3)->where('idvoucher','=','2')->orderBy("id","ASC")->get();

        //voucher 1M
        $this->View["tivi1M"]=Samsung::where("cid_cate",8)->where('idvoucher','=','3')->orderBy("id","ASC")->get();
        $this->View["tulanh1M"]=Samsung::where("cid_cate",18)->where('idvoucher','=','3')->orderBy("id","ASC")->get();
        $this->View["maygiat1M"]=Samsung::where("cid_cate",3)->where('idvoucher','=','3')->orderBy("id","ASC")->get();

        //voucher 1.5M
        $this->View["tivi15M"]=Samsung::where("cid_cate",8)->where('idvoucher','=','4')->orderBy("id","ASC")->get();
        $this->View["tulanh15M"]=Samsung::where("cid_cate",18)->where('idvoucher','=','4')->orderBy("id","ASC")->get();
        $this->View["maygiat15M"]=Samsung::where("cid_cate",3)->where('idvoucher','=','4')->orderBy("id","ASC")->get();

        //voucher 2M
        $this->View["tivi2M"]=Samsung::where("cid_cate",8)->where('idvoucher','=','5')->orderBy("id","ASC")->get();
        $this->View["tulanh2M"]=Samsung::where("cid_cate",18)->where('idvoucher','=','5')->orderBy("id","ASC")->get();
        $this->View["maygiat2M"]=Samsung::where("cid_cate",3)->where('idvoucher','=','5')->orderBy("id","ASC")->get();

       
    	
    	return view("v2018.m12.samsung",$this->View);
    }
    public function loadapi(Request $request){

            $this->View['main']=2;
            $cate= $request->input("cate",18);
          
            $this->View['data_list']=Sale::where("cid_cate",$cate)->orderBy("id","ASC")->get();
        

        return view("v2018.m12.saleloadapi",$this->View);
    }
}
