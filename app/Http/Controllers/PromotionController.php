<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Read\Promotion as DTPromotion;
class PromotionController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($tenchuongtrinh)
    {
        $this->View["tenchuongtrinh"] = $tenchuongtrinh;
        $check        = DTPromotion::checkChuongTrinh($tenchuongtrinh);
        if($check>0)
        {
            return view("v2019.".$tenchuongtrinh.".index",$this->View);
        }
        else
        {
            return view("v2019.chuongtrinhketthuc",$this->View);
        }
    }
    public function sendinforcustomer(Request $request,$tenchuongtrinh)
    {
        if($request->isMethod("post"))
        {
            $name          = (!empty($request->input("name")))?$request->input("name"):'';
            $email         = (!empty($request->input("email")))?$request->input("email"):'';
            $phone         = (!empty($request->input("phone")))?$request->input("phone"):'';
            $nameproduct   = (!empty($request->input("nameproduct")))?$request->input("nameproduct"):'';
            $productcolor  = (!empty($request->input("productcolor")))?$request->input("productcolor"):'';
            $resutl        = DTPromotion::themKhachHangDatMua($tenchuongtrinh,$name,$email,$phone,$nameproduct,$productcolor);
            $message       = 'Cảm ơn bạn đã tham gia chương trình , chúng tôi sẽ liên hệ bạn trong thời gian sớm nhất!.';
            $data               = array();
            $data['message']    = $message;
            $data['errorcode']  = 0;
            $data['success']    = $resutl;
            echo json_encode($data, JSON_UNESCAPED_UNICODE | JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP);
        }
    }
}
