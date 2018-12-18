<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Read\Cate as DTCate;
use App\Model\Write\Y2018\Samsung;
use App\Http\Resources\Write\Samsung as SamsungResource;
use App\Http\Resources\Read\Cate as CateResource;
class ApiController extends Controller
{
    
    protected $View=[];
    public function getall(){
        $data = Samsung::get();
 
        // Return a collection of $users with pagination
        return SamsungResource::collection($data)->response()->header('X-Value', 'True');
    }
    public function getcate(){
        $data = DTCate::get();
        return CateResource::collection($data)->response()->header('X-Value', 'True');
    }
   
}
