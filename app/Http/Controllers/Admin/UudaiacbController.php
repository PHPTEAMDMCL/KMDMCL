<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Read\Product as DTProduct;
use App\Model\Read\Cate as DTCate;

use App\Model\Write\Promotionproduct as DTPromotionproduct;

use Validator;

class UudaiacbController extends Controller
{
    //
    protected $View=[];
    protected $tenchuongtrinh='uu-dai-acb';
    public function __construct()
    {
        session_start();
        $this->tenchuongtrinh = (!empty($_SESSION["tenchuongtrinh"]))?$_SESSION["tenchuongtrinh"]:'uu-dai-acb';
    }

    public function add(Request $request){
        if($request->isMethod("post")){
            $validater=Validator::make($request->all(),[
                "cid_product"=>"required"
            ],[
                'cid_product.required'=>"Vui lòng nhập sản phẩm ",
            ]);
            if($validater->fails()){
                return redirect()->back()->withErrors($validater)->withInput();
            }else{
                $sapcodes = explode(",",$request->input("cid_product"));
                $_flag = false;
                if(count($sapcodes) > 1)
                {
                    $_flag = true;
                }
                foreach ($sapcodes as $sapcode) 
                {
                    $check_product= DTProduct::where("sap_code","LIKE",$sapcode)->first();
                    if(empty($check_product['id'])){
                        $validater->errors()->add("cid_product","Sản phẩm này không tồn tại, Vui lòng kiểm tra lại sản phẩm  trên website");
                        if(!$_flag)
                        {
                            return redirect()->back()->withErrors($validater)->withInput();
                        }
                    }
                    else
                    {
                        $TNews= new DTPromotionproduct();
                        $TNews->name_promotion = $this->tenchuongtrinh;
                        $TNews->cid_cate = $tendanhmuc = $request->input("cid_cate");
                        $TNews->cid_product=$check_product->id;
                        $TNews->price=$request->input("price");
                        $TNews->percent=$request->input("percent");
                        $TNews->saleprice=$check_product->getPrice()['saleprice'];
                        $TNews->discount=$check_product->getPrice()['discount'];
                        $gift=$check_product->Gift();
                        if(!empty($gift['total'])){
                            $TNews->gift=$gift['total'];
                        }else{
                            $TNews->gift=0;
                        }
                        $TNews->note = $request->input("note");
                        $TNews->oder=(!empty($request->input("oder")))?$request->input("oder"):1;
                        $TNews->is_red_day=$request->input("is_red_day");
                        $TNews->save();
                    }
                }
                $request->session()->flash("success","Thêm thành công sản phẩm:" . $check_product->name );
                $request->session()->flash("tendanhmuc",$tendanhmuc);
                return redirect()->back();
            }
        }
        $this->View['tenchuongtrinh'] = $this->tenchuongtrinh;
        return view("admin.uudaiacb.add",$this->View);  
    }
    
    public function edit($id,Request $request){
            $_sapcode = $request->input("sapcode",0);
            if($request->isMethod("post")){
                $validater=Validator::make($request->all(),[
                    "cid_product"=>"required"
                ],[
                    'cid_product.required'=>"Vui lòng nhập sản phẩm ",
                
                ]);
                if($validater->fails()){
                    return redirect()->back()->withErrors($validater)->withInput();
                }else{
                    $check_product= DTProduct::where("sap_code","LIKE",$request->input("cid_product"))->first();
                    if(empty($check_product['id'])){
                        $validater->errors()->add("cid_product","Sản phẩm này không tồn tại, Vui lòng kiểm tra lại sản phẩm  trên website");
                        return redirect()->back()->withErrors($validater)->withInput();
                    }
                    // $TUpdate = DTPromotionproduct::find($id);
                    if(!empty($_sapcode))
                    {
                        $TUpdate= DTPromotionproduct::where("sap_code","LIKE",$_sapcode)->where(function ($query) {
                                    $query->where('name_promotion', 'like', $this->tenchuongtrinh);
                                })->first();
                    }
                    else
                    {
                        $TUpdate = DTPromotionproduct::find($id);
                    }
                    $TUpdate->cid_cate= $request->input("cid_cate");
                    $TUpdate->cid_product=$check_product->id;
                    $TUpdate->price=$request->input("price");
                    $TUpdate->percent=$request->input("percent");
                    $TUpdate->saleprice=$check_product->getPrice()['saleprice'];
                    $TUpdate->discount=$check_product->getPrice()['discount'];
                    $TUpdate->note=$request->input("note");
                    $TUpdate->oder=$request->input("oder");
                    $TUpdate->is_red_day=$request->input("is_red_day");
                    $gift=$check_product->Gift();

                    if(!empty($gift['total'])){
                        $TUpdate->gift=$gift['total'];
                    }else{
                        $TUpdate->gift=0;
                    }
                    $TUpdate->save();
                    $request->session()->flash("success","Chỉnh sản phẩm  thành công sản phẩm:" . $check_product->name );
                    return redirect()->back();
                }

            }
            
            if(!empty($_sapcode))
            {
                $_data = DTPromotionproduct::where("sap_code","LIKE",$_sapcode)->where(function ($query) {
                            $query->where('name_promotion', 'like', $this->tenchuongtrinh);
                        })->first();
                if(!empty($_data->id))
                {
                    return redirect('/admin/uudaiacb/edit/'. $_data->id);
                }
                else
                {
                    return redirect('/admin/uudaiacb/lists');
                }
            }
            else
            {
                $this->View['data'] = DTPromotionproduct::find($id);
            }
            return view("admin.uudaiacb.edit",$this->View);
    }

    public function lists(Request $request){
        //$this->View['data_list'] =DTPromotionproduct::where("name_promotion","LIKE",$this->tenchuongtrinh)->orderBy("id","DESC");
        $this->View['data_list'] = $data = DTPromotionproduct::getDanhDach($this->tenchuongtrinh);
        $this->View['tenchuongtrinh'] = $this->tenchuongtrinh;
        if($request->input("change_value")){
            $nhom=$request->input("nhom",0);
            if((int)$nhom==1)
            {
                foreach($data as $d)
                {
                    $myproduct=DTProduct::find($d->cid_product);
                    if(!empty($myproduct['id']) )
                    {
                        $gift=$myproduct->Gift();
                        $TUpdate = DTPromotionproduct::find($d->id);
                        $TUpdate->saleprice=$myproduct->getPrice()['saleprice'];
                        $TUpdate->discount=$myproduct->getPrice()['discount'];
                        $check_product= DTProduct::where("id","LIKE",$d->cid_product)->first();
                        if(!empty($check_product->sap_code))
                        {
                            $TUpdate->sap_code = $check_product->sap_code;
                        }
                        if(!empty($gift['total']))
                        {
                            $TUpdate->gift=$gift['total'];
                        }else{
                            $TUpdate->gift=0;
                        }
                        $TUpdate->save();
                    }
                }  
            }
        }
        return view("admin.uudaiacb.lists",$this->View);    
    }

    public function taotrangdem(Request $request){
        $html = file_get_contents('http://khuyenmai.dienmaycholon.vn/chuongtrinhgoc/'.$this->tenchuongtrinh);
        $file_name   = "buffer.blade.php";
        $pathIn      = PATH_PUBLIC.'/resources/views/v2019/';
        if(is_file($pathIn.$this->tenchuongtrinh."/".$file_name))
        {
            unlink($pathIn.$this->tenchuongtrinh."/".$file_name);
        }
        $myfile = fopen($pathIn.$this->tenchuongtrinh."/".$file_name, "wb");
        fwrite($myfile, $html);
        fclose($myfile);
        return redirect('/admin/uudaiacb/lists');
    }

    public function removed($id){
        $remove=DTPromotionproduct::find($id);
        $remove->delete();
        return redirect('/admin/uudaiacb/lists');
    }

    public function thaychuongtrinh(Request $request){
        if($request->isMethod("post")){
            $_SESSION["tenchuongtrinh"] = $request->input("tenchuongtrinh");
            return redirect('/admin/uudaiacb/lists');
        }
        return view("admin.uudaiacb.thaychuongtrinh",$this->View);  
    }

    public function changeoder(Request $request)
    {
        if($request->isMethod("post")){
            $oder = $request->input("oder");
            $id = $request->input("id");
            $TUpdate = DTPromotionproduct::find($id);
            $TUpdate->oder = $oder;
            $TUpdate->save();
            die();
        }
    }
}
