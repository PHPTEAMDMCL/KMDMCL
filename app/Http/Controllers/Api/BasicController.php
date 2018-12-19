<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Write\Y2018\Grab;
class BasicController extends Controller
{
    //
   public function sendResponse($tivi300,$tulanh300,$maygiat300,$tivi500,$tulanh500,$maygiat500,$tivi1M,$tulanh1M,$maygiat1M,$tivi15M,$tulanh15M,$maygiat15M,$tivi2M,$tulanh2M,$maygiat2M)
    {
        $data300 = [
            'Tivi'   => $tivi300,
            'Tulanh'   => $tulanh300,
            'Maygiat'   => $maygiat300 
        ];
        $data500 = [
            'Tivi'   => $tivi500,
            'Tulanh'   => $tulanh500,
            'Maygiat'   => $maygiat500 
        ];
        $data1M = [
            'Tivi'   => $tivi1M,
            'Tulanh'   => $tulanh1M,
            'Maygiat'   => $maygiat1M
        ];
        $data15M = [
            'Tivi'   => $tivi15M,
            'Tulanh'   => $tulanh15M,
            'Maygiat'   => $maygiat15M 
        ];
        $data2M = [
            'Tivi'   => $tivi2M,
            'Tulanh'   => $tulanh2M,
            'Maygiat'   => $maygiat2M 
        ];

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
    public function sendApi($data300,$data500,$data1M,$data15M,$data2M)
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
