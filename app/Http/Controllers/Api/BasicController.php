<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Write\Y2018\Grab;
class BasicController extends Controller
{
    //
   public function sendResponse($data300,$data500,$data1M,$data15M,$data2M)
    {
        $result =[
            '300k'  => $data300,
            '500k'  => $data500,
            '1M'    => $data1M,
            '1.5M'  => $data15M,
            '2M'    => $data2M
            
            ];
        $response = [
            'data'    => $result

        ];


        return response()->json($response, 200);
    }
}
