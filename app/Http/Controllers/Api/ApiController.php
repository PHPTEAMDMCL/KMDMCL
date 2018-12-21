<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Read\Cate as DTCate;
use App\Model\Read\Product as DTProduct;
use App\Model\Write\Y2018\Samsung;
use App\Http\Resources\Write\Samsung as SamsungResource;
use App\Http\Resources\Read\Cate as CateResource;
use App\Http\Controllers\Api\BasicController;
use App\Model\Write\Y2018\SaleDecember as Sale;
use DB;

class ApiController extends BasicController
{
    
    public function getall(){
        
        $data['voucher300k'] = [
            "tivi300"=>Samsung::where("cid_cate",'=','8')->where('idvoucher','=','1')->orderBy("id","ASC")->get(),
            "tulanh300"=>Samsung::where("cid_cate",18)->where('idvoucher','=','1')->orderBy("id","ASC")->get(),
            "maygiat300"=>Samsung::where("cid_cate",3)->where('idvoucher','=','1')->orderBy("id","ASC")->get()
        ];
        
        $data['voucher500k'] = [
            "tivi500"   =>Samsung::where("cid_cate",8)->where('idvoucher','=','2')->orderBy("id","ASC")->get(),
            "tulanh500" =>Samsung::where("cid_cate",18)->where('idvoucher','=','2')->orderBy("id","ASC")->get(),
            "maygiat500"=>Samsung::where("cid_cate",3)->where('idvoucher','=','2')->orderBy("id","ASC")->get()

        ];
        $data['voucher1M'] = [
            "tivi1M"    =>Samsung::where("cid_cate",8)->where('idvoucher','=','3')->orderBy("id","ASC")->get(),
            "tulanh1M"  =>Samsung::where("cid_cate",18)->where('idvoucher','=','3')->orderBy("id","ASC")->get(),
            "maygiat1M" =>Samsung::where("cid_cate",3)->where('idvoucher','=','3')->orderBy("id","ASC")->get()
        ];
        $data['voucher15M'] = [
            "tivi15M"   =>Samsung::where("cid_cate",8)->where('idvoucher','=','4')->orderBy("id","ASC")->get(),
            "tulanh15M" =>Samsung::where("cid_cate",18)->where('idvoucher','=','4')->orderBy("id","ASC")->get(),
            "maygiat15M"=>Samsung::where("cid_cate",3)->where('idvoucher','=','4')->orderBy("id","ASC")->get()
        ];
        $data['voucher2M'] = [
            "tivi2M"    =>Samsung::where("cid_cate",8)->where('idvoucher','=','5')->orderBy("id","ASC")->get(),
            "tulanh2M"  =>Samsung::where("cid_cate",18)->where('idvoucher','=','5')->orderBy("id","ASC")->get(),
            "maygiat2M" =>Samsung::where("cid_cate",3)->where('idvoucher','=','5')->orderBy("id","ASC")->get()
        ];
            return $this->sendApi($data,'List Product ');
        
    }
    public function getcate(){
        $data = DTCate::get();

        return CateResource::collection($data)->response()->header('X-Value', 'True');
    }
    
    public function getproductcate($alias,Request $request){
        $cate = DTCate::where('alias',$alias)->first();
        if(isset($cate)){
            if($cate->cid_parent == '0'){
               
                $parent = DTCate::where('cid_parent',$cate['id'])->where('status','1')->get();
              
                $product =array();
                foreach ($parent as $cate) {

                    $product[$cate['id']] = DTProduct::getProductCateParent($cate['id']);    
                }
                return $this->sendApi($product,'List Product Cate parent');
                
            }else{
                $list = DTProduct::getProductCate($cate['id']);
                return $this->sendApi($list,'List Product Cate');
            }
        }else{
            return $this->sendError('Cate null');
        }
        
    }
    public function getsale(){

        $list["didong"]=Sale::where("cid_cate",13)->orderBy("id","ASC")->get();
        $list["tivi"]=Sale::where("cid_cate",8)->orderBy("id","ASC")->get();
        $list["tulanh"]=Sale::where("cid_cate",18)->orderBy("id","ASC")->get();
        $list["maygiat"]=Sale::where("cid_cate",3)->orderBy("id","ASC")->get();

        $list["giadung"]=Sale::where("cid_cate",9)->get(); 
        if(isset($list)){
            return $this->sendApi($list,'List Product ');
        }else{
           return $this->sendError('List Product null'); 
        }
       
    }
   
}
