<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Read\Cate as DTCate;
use App\Model\Write\Y2018\Samsung;
use App\Http\Resources\Write\Samsung as SamsungResource;
use App\Http\Resources\Read\Cate as CateResource;
use App\Http\Controllers\Api\BasicController;


class ApiController extends BasicController
{
    
    public function getall(){
        //voucher 300k
        $tivi300=Samsung::where("cid_cate",8)->where('idvoucher','=','1')->orderBy("id","ASC")->get();
        $tulanh300=Samsung::where("cid_cate",18)->where('idvoucher','=','1')->orderBy("id","ASC")->get();
        $maygiat300=Samsung::where("cid_cate",3)->where('idvoucher','=','1')->orderBy("id","ASC")->get();

        //voucher 500k
        $tivi500=Samsung::where("cid_cate",8)->where('idvoucher','=','2')->orderBy("id","ASC")->get();
        $tulanh500=Samsung::where("cid_cate",18)->where('idvoucher','=','2')->orderBy("id","ASC")->get();
        $maygiat500=Samsung::where("cid_cate",3)->where('idvoucher','=','2')->orderBy("id","ASC")->get();

        //voucher 1M
        $tivi1M=Samsung::where("cid_cate",8)->where('idvoucher','=','3')->orderBy("id","ASC")->get();
        $tulanh1M=Samsung::where("cid_cate",18)->where('idvoucher','=','3')->orderBy("id","ASC")->get();
        $maygiat1M=Samsung::where("cid_cate",3)->where('idvoucher','=','3')->orderBy("id","ASC")->get();

        //voucher 1.5M
        $tivi15M=Samsung::where("cid_cate",8)->where('idvoucher','=','4')->orderBy("id","ASC")->get();
        $tulanh15M=Samsung::where("cid_cate",18)->where('idvoucher','=','4')->orderBy("id","ASC")->get();
        $maygiat15M=Samsung::where("cid_cate",3)->where('idvoucher','=','4')->orderBy("id","ASC")->get();

        //voucher 2M
        $tivi2M=Samsung::where("cid_cate",8)->where('idvoucher','=','5')->orderBy("id","ASC")->get();
        $tulanh2M=Samsung::where("cid_cate",18)->where('idvoucher','=','5')->orderBy("id","ASC")->get();
        $maygiat2M=Samsung::where("cid_cate",3)->where('idvoucher','=','5')->orderBy("id","ASC")->get();
        
        // Return a collection of $users with pagination
        // return SamsungResource::collection($data);
         return $this->sendResponse($tivi300->toArray(),$tulanh300->toArray(),$maygiat300->toArray(),$tivi500->toArray(),$tulanh500->toArray(),$maygiat500->toArray(),$tivi1M->toArray(),$tulanh1M->toArray(),$maygiat1M->toArray(),$tivi15M->toArray(),$tulanh15M->toArray(),$maygiat15M->toArray(),$tivi2M->toArray(),$tulanh2M->toArray(),$maygiat2M->toArray());
    }
    public function getcate(){
        $data = DTCate::get();

        return CateResource::collection($data)->response()->header('X-Value', 'True');
    }
   
}
