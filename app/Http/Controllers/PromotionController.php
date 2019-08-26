<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Read\Promotion as DTPromotion;
use App\Model\Write\Promotionproduct as DTPromotionproduct;
use recaptchalib;
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
            return view("v2019.trangkhongtontai",$this->View);
        }
    }

    public function testcapcha(Request $request)
    {
        if($request->isMethod("post"))
        {
            if ($request->input("g-recaptcha-response")) {
                $secret = "6LdSobMUAAAAAHtN_9UnHbstPmdAHI5z3DoJ61eM";
                $response = null;
                $reCaptcha = new ReCaptcha($secret);
                $response = $reCaptcha->verifyResponse(
                    $_SERVER["REMOTE_ADDR"],
                    $request->input("g-recaptcha-response")
                );
                if ($response != null && $response->success) 
                {
                    header('Content-Type: text/html; charset=UTF-8');
                    echo '<pre style="color: #FF5722;font-weight: bold;font-size: 18px;font-style: italic;">';
                    print_r('stop');
                    echo '</pre>';
                    die();
                }
                else
                {
                    header('Content-Type: text/html; charset=UTF-8');
                    echo '<pre style="color: #FF5722;font-weight: bold;font-size: 18px;font-style: italic;">';
                    print_r('stop1');
                    echo '</pre>';
                    die();
                } 
            }
        }
        return redirect("v2019.captcha.index");
    }

    public function chuongtrinhdacbiet($tenchuongtrinh)
    {
        $this->View["tenchuongtrinh"] = $tenchuongtrinh;
        $file_name   = "buffer.blade.php";
        $pathIn      = PATH_PUBLIC.'/resources/views/v2019/';
        if(is_file($pathIn.$tenchuongtrinh.'/'.$file_name))
        {
            return view("v2019.".$tenchuongtrinh.".buffer",$this->View);
        }
        $this->View["danhsachsanpham"] = DTPromotion::getSanphamChuongTrinhDacBietNew($tenchuongtrinh);
        return view("v2019.".$tenchuongtrinh.".index",$this->View);
    }

    public function chuongtrinhgoc($tenchuongtrinh)
    {
        $this->View["tenchuongtrinh"] = $tenchuongtrinh;
        $this->View["danhsachsanpham"] = DTPromotion::getSanphamChuongTrinhDacBietNew($tenchuongtrinh);
        return view("v2019.".$tenchuongtrinh.".index",$this->View);
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

    public function danhsachkhachhang(Request $request,$tenchuongtrinh)
    {
        if(!empty($tenchuongtrinh))
        {
            $this->View['tenchuongtrinh'] = $tenchuongtrinh;
            $this->View['data_list'] = $data = DTPromotion::getDanhDachKhachHangDatMua($tenchuongtrinh);
        }
        return view("admin.promotion.danhsachkhachhang",$this->View); 
    }

    public function xuatdanhsachkhachhang(Request $request,$tenchuongtrinh)
    {
        if(!empty($tenchuongtrinh))
        {
            ob_clean();
            $data   = array();
            $khachhang = DTPromotion::getDanhDachKhachHangDatMua($tenchuongtrinh);
            foreach ($khachhang as $value) {
                $value = (array) $value;
                $_buffer = array();
                $_buffer['name']       =  $value['name']; 
                $_buffer['phone']      =  $value['phone']; 
                $_buffer['email']      =  $value['email']; 
                $_buffer['product']    =  $value['product']; 
                $_buffer['color']      =  $value['color']; 
                $_buffer['status']     =  $value['status']; 
                $data['danhsachsanpham'][] = $_buffer; 
            }
            $data['tenchuongtrinh']  = $tenchuongtrinh;
            $data['tieude']          = array("Tên","Số điện thoại","Email","Sản phẩm","Màu sắc","Tùy chọn"); 
            $url        = "https://dienmaycholon.vn/default/text/xuatexcel";
            
            $data       = json_encode($data);
            $options    = array(
                'http' => array(
                    'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                    'method'  => 'POST',
                    'content' => http_build_query($data)
                )
            );
            $context  = stream_context_create($options);
            $result   = file_get_contents($url, false, $context);
            header('Content-Type: text/html; charset=UTF-8');
            echo '<pre style="color: #FF5722;font-weight: bold;font-size: 18px;font-style: italic;">';
            print_r($result);
            echo '</pre>';
            die();

            
            $ch = curl_init(); 
            curl_setopt ($ch, CURLOPT_URL, $url); 
            curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, FALSE); 
            curl_setopt ($ch, CURLOPT_TIMEOUT, 60); 
            curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 0); 
            curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1); 
            curl_setopt ($ch, CURLOPT_REFERER, $url); 
            curl_setopt ($ch, CURLOPT_POSTFIELDS, http_build_query($data));
            curl_setopt ($ch, CURLOPT_POST, 1); 
            $result = curl_exec ($ch);
            curl_close($ch);
            header('Content-Type: text/html; charset=UTF-8');
            echo '<pre style="color: #FF5722;font-weight: bold;font-size: 18px;font-style: italic;">';
            print_r($result);
            echo '</pre>';
            die();

            // $data   = json_encode($data);
            // $ch     = curl_init($url);
            // curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            // curl_setopt($ch, CURLOPT_POST, 1); 
            // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            // curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            //   'Content-Type: application/json',
            //   'Content-Length: ' . strlen($data))
            // );
            // curl_setopt($ch, CURLOPT_TIMEOUT, 5);
            // curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
            // $result = curl_exec($ch);
            // curl_close($ch);
            // header('Content-Type: text/html; charset=UTF-8');
            // echo '<pre style="color: #FF5722;font-weight: bold;font-size: 18px;font-style: italic;">';
            // print_r($result);
            // echo '</pre>';
            // die();
        }
        return view("admin.promotion.xuatdanhsachkhachhang",$this->View); 
    }

    public function errorpage(Request $request)
    {
        return view("v2019.trangkhongtontai");
    }

    public function testapi(Request $request)
    {
        $message            = 'Bi kịch';
        $data['message']    = $message;
        echo json_encode($data, JSON_UNESCAPED_UNICODE | JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP);
        die();
    }
}
