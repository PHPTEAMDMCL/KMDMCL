<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Write\Y2018\Grab;
class BasicController extends Controller
{
    //

    public function __construct()
    {
        $this->apiToken = uniqid(base64_encode(str_random(60)));
    }
    public function sendApi($data,$message)
    {
        $response = [
            'success' => true,  
            'message' => $message,
            'data'    => $data,
            'token'   => $this->apiToken
        ];
        return response()->json($response, 200);
    }
    public function sendError($error, $errorMessages = [], $code = 404)
    {
        $response = [
            'success' => false,
            'message' => $error,
        ];
        if(!empty($errorMessages)){
            $response['data'] = $errorMessages;
        }
        return response()->json($response, $code);
    }
}
