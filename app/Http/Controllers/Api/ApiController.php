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
    
    protected $View=[];
    public function getall(){
        $data300 = Samsung::where('idvoucher','=','1')->get();
        $data500 = Samsung::where('idvoucher','=','2')->get();
        $data1M = Samsung::where('idvoucher','=','3')->get();
        $data15M = Samsung::where('idvoucher','=','4')->get();
        $data2M = Samsung::where('idvoucher','=','5')->get();
        
        // Return a collection of $users with pagination
        // return SamsungResource::collection($data);
         return $this->sendResponse($data300->toArray(),$data500->toArray(),$data1M->toArray(),$data15M->toArray(),$data2M->toArray());
    }
    public function getcate(){
        $data = DTCate::get();

        return CateResource::collection($data)->response()->header('X-Value', 'True');
    }
   
}
