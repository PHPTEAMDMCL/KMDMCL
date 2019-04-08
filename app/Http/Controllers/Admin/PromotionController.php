<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Read\Product as DTProduct;
use App\Model\Read\Cate as DTCate;
use Illuminate\Support\Facades\Storage;

use App\Model\Write\Y2018\Promotion;
use App\Http\Requests;
use App\Model\Read\Promotion as DTPromotion;
use Validator;
use Image;
use App;
use App\MrData as MrData;
class PromotionController extends Controller
{
    //
    protected $View=[];
    public function add(Request $request){
            if($request->isMethod("post")){
                $validater=Validator::make($request->all(),[
                    "name"=>"required",
                    
                   
                ],[
                    'name.required'=>"Vui lòng nhập tên khuyến mãi ",
                
                ]);
                if($validater->fails()){
                    return redirect()->back()->withErrors($validater)->withInput();
                }else{
                   
                    
                    $TNews= new Promotion;
                    $TNews->name= $request->input("name");
                     
                    //upload image
                    $picture = $request->file('picture');
                    $name_picture="image-".time().".".$picture->getClientOriginalExtension();
                    Image::make($picture)->resize(275,95)->save(public_path("/upload/promotion/".$name_picture));

                    $TNews->image= $name_picture;
                    $TNews->save();
                    $request->session()->flash("success","Thêm thành công khuyến mãi");
                    return redirect()->back();
                }

            }
            
            
            return view("admin.promotion.add",$this->View); 
    }
    public function edit($id,Request $request){
            if($request->isMethod("post")){
                $validater=Validator::make($request->all(),[
                    "name"=>"required",
                ],[
                    'name.required'=>"Vui lòng nhập khuyến mãi",
                
                ]);
                if($validater->fails()){
                    return redirect()->back()->withErrors($validater)->withInput();
                }else{
                    $picture = $request->file('picture');
                    $TUpdate = Promotion::find($id);
                    $TUpdate->name= $request->input("name");
                       if($picture){
                            $name_picture="image-".time().".".$picture->getClientOriginalExtension();
                            Image::make($picture)->resize(275,95)->save(public_path("/upload/promotion/".$name_picture));

                            $TUpdate->image= $name_picture;
                        }

                    $TUpdate->save();
                    $request->session()->flash("success","Chỉnh khuyến mãi thành công");
                    return redirect()->back();
                }

            }
        

            $this->View['data']= Promotion::find($id);
            
            return view("admin.promotion.edit",$this->View);
    }
    public function lists(Request $request){
        
          
       
        $this->View['data_list']=Promotion::orderBy("id","DESC")->get();
        
        
        
        return view("admin.promotion.lists",$this->View);  
    }
    public function removed($id){
        $remove=Promotion::find($id);
        @unlink(public_path("/upload/promotion/".$remove['image']));
        $remove->delete();
    }

    public function index3(Request $request){
        if($request->isMethod("post")){
            $tenchuongtrinh = $request->input("namelandingpage");
            $date_time      = $request->input("date_time");
            DTPromotion::themChuongTrinhKhuyenMai($tenchuongtrinh,$date_time);
            $_file = (!empty($_FILES['fuFileAttach'])) ? $_FILES['fuFileAttach'] : "";
            $pathIn = PATH_PUBLIC.'/y2019/';
            $dir = $pathIn.$tenchuongtrinh;
            if(!file_exists($dir)){
                mkdir($dir, 0777,true);
            }
            chmod($dir, 0777);
            if(count($_FILES['fuFileCss']['tmp_name'])>0)
            {
                $dir = $pathIn.$tenchuongtrinh.'/css/';
                if(!file_exists($dir)){
                    mkdir($dir, 0777,true);
                }
                chmod($dir, 0777);
                for($i=0;$i<count($_FILES['fuFileCss']['tmp_name']);$i++)
                {
                    $tempFile = $_FILES['fuFileCss']['tmp_name'][$i];
                    if (!empty($tempFile))
                    {
                        $cv_name        = $_FILES['fuFileCss']['name'][$i];
                        // $cv_name     = $id_candidate.$this->filter->injectSql($_file['name']);
                        move_uploaded_file($tempFile,$dir.$cv_name);
                    }
                }
            }
            if(count($_FILES['fuFileJs']['tmp_name'])>0)
            {
                $dir = $pathIn.$tenchuongtrinh.'/js/';
                if(!file_exists($dir)){
                    mkdir($dir, 0777,true);
                }
                chmod($dir, 0777);
                for($i=0;$i<count($_FILES['fuFileJs']['tmp_name']);$i++)
                {
                    $tempFile = $_FILES['fuFileJs']['tmp_name'][$i];
                    if (!empty($tempFile))
                    {
                        $cv_name        = $_FILES['fuFileJs']['name'][$i];
                        // $cv_name     = $id_candidate.$this->filter->injectSql($_file['name']);
                        move_uploaded_file($tempFile,$dir.$cv_name);
                    }
                }
            }
            if(count($_FILES['fuFileImage']['tmp_name'])>0)
            {
                $dir = $pathIn.$tenchuongtrinh.'/img/';
                if(!file_exists($dir)){
                    mkdir($dir, 0777,true);
                }
                chmod($dir, 0777);
                for($i=0;$i<count($_FILES['fuFileImage']['tmp_name']);$i++)
                {
                    $tempFile = $_FILES['fuFileImage']['tmp_name'][$i];
                    if (!empty($tempFile))
                    {
                        $cv_name        = $_FILES['fuFileImage']['name'][$i];
                        // $cv_name     = $id_candidate.$this->filter->injectSql($_file['name']);
                        move_uploaded_file($tempFile,$dir.$cv_name);
                    }
                }
            }
            if (!empty($_file) and !empty($_file['tmp_name'])) {
                $pathIn         = PATH_PUBLIC.'/resources/views/v2019/';
                $tempFile       = $_file['tmp_name'];
                $tenchuongtrinh = $request->input("namelandingpage");
                $dir            = $pathIn.$tenchuongtrinh;
                if(!file_exists($dir)){
                    mkdir($dir, 0777,true);
                }
                chmod($dir, 0777);
                $cv_name        = "index.pug.blade.php";
                // $cv_name     = $id_candidate.$this->filter->injectSql($_file['name']);
                move_uploaded_file($tempFile,$pathIn.$tenchuongtrinh."/".$cv_name);
                $_string = file_get_contents($pathIn.$tenchuongtrinh."/".$cv_name);
                $cate1          = $request->input("cate1");
                $productcate1   = $request->input("productcate1");
                $listproduct    = $request->input("listproduct");
                $_string = str_replace("#KMDANHMUCSANPHAM1",$cate1,$_string);
                $_array_product = explode(",",$productcate1);
                $_list_product = "";
                foreach ($_array_product as $product) {
                    $product_info = DTPromotion::layThongTinSanPham($product)[0];
                    $name_pro     = $product_info->name;
                    $price_pro    = $product_info->discount;
                    $img_pro      = "https://static.dienmaycholon.vn/tmp/product_".$product_info->myid."_220_220.jpg";
                    $link_pro     = "https://dienmaycholon.vn/".MrData::toAlias2($product_info->namecate).'/'.MrData::toAlias2($product_info->name);
                    $_row_product = $listproduct;
                    $_row_product = str_replace("#KMDMCLLINKSANPHAM",$link_pro,$_row_product);
                    $_row_product = str_replace("#KMDMCLTENSANPHAM",$name_pro,$_row_product);
                    $_row_product = str_replace("#KMDMCLGIASANPHAM",$price_pro,$_row_product);
                    $_row_product = str_replace("#KMDMCLHINHSANPHAM",$img_pro,$_row_product);
                    $_list_product .= $_row_product . " \n";
                }
                $_string = str_replace("#KMLISTSANPHAM1",$_list_product,$_string);
                $_string = str_replace("#kmxuonghang","",$_string);
                $_string = str_replace("\"css/","\"".BASE_URL."y2019/".$tenchuongtrinh."/css/",$_string);
                $_string = str_replace("\"js/","\"".BASE_URL."y2019/".$tenchuongtrinh."/js/",$_string);
                $_string = str_replace("\"img/","\"".BASE_URL."y2019/".$tenchuongtrinh."/img/",$_string);
                $_string = str_replace("'css/","'".BASE_URL."y2019/".$tenchuongtrinh."/css/",$_string);
                $_string = str_replace("'js/","'".BASE_URL."y2019/".$tenchuongtrinh."/js/",$_string);
                $_string = str_replace("'img/","'".BASE_URL."y2019/".$tenchuongtrinh."/img/",$_string);
                $myfile = fopen($pathIn.$tenchuongtrinh."/".$cv_name, "w") or die("Unable to open file!");
                fwrite($myfile, $_string);
                fclose($myfile);
                print_r('stop');
                die();
            }
            header('Content-Type: text/html; charset=UTF-8');
            echo '<pre style="color: #FF5722;font-weight: bold;font-size: 18px;font-style: italic;">';
            print_r('stop');
            echo '</pre>';
            die();
        }
        return view("admin.promotion.index",$this->View);  
    }

    public function stepone(Request $request){
        if($request->isMethod("post"))
        {
            $tenchuongtrinh = $request->input("namelandingpage");
            $date_time      = date('Y-m-d', strtotime($request->input("date_time"))).' 00:00:00';
            $note           = $request->input("note");
            DTPromotion::themChuongTrinhKhuyenMai($tenchuongtrinh,$date_time,$note);
            $_file = (!empty($_FILES['fuFileAttach'])) ? $_FILES['fuFileAttach'] : "";
            $pathIn = PATH_PUBLIC.'/y2019/';
            $dir = $pathIn.$tenchuongtrinh;
            if(!file_exists($dir)){
                mkdir($dir, 0777,true);
            }
            chmod($dir, 0777);
            if(count($_FILES['fuFileCss']['tmp_name'])>0)
            {
                $dir = $pathIn.$tenchuongtrinh.'/css/';
                if(!file_exists($dir)){
                    mkdir($dir, 0777,true);
                }
                chmod($dir, 0777);
                for($i=0;$i<count($_FILES['fuFileCss']['tmp_name']);$i++)
                {
                    $tempFile = $_FILES['fuFileCss']['tmp_name'][$i];
                    if (!empty($tempFile))
                    {
                        $cv_name        = $_FILES['fuFileCss']['name'][$i];
                        move_uploaded_file($tempFile,$dir.$cv_name);
                    }
                }
            }
            if(count($_FILES['fuFileJs']['tmp_name'])>0)
            {
                $dir = $pathIn.$tenchuongtrinh.'/js/';
                if(!file_exists($dir)){
                    mkdir($dir, 0777,true);
                }
                chmod($dir, 0777);
                for($i=0;$i<count($_FILES['fuFileJs']['tmp_name']);$i++)
                {
                    $tempFile = $_FILES['fuFileJs']['tmp_name'][$i];
                    if (!empty($tempFile))
                    {
                        $cv_name        = $_FILES['fuFileJs']['name'][$i];
                        move_uploaded_file($tempFile,$dir.$cv_name);
                    }
                }
            }
            if(count($_FILES['fuFileImage']['tmp_name'])>0)
            {
                $dir = $pathIn.$tenchuongtrinh.'/img/';
                if(!file_exists($dir)){
                    mkdir($dir, 0777,true);
                }
                chmod($dir, 0777);
                for($i=0;$i<count($_FILES['fuFileImage']['tmp_name']);$i++)
                {
                    $tempFile = $_FILES['fuFileImage']['tmp_name'][$i];
                    if (!empty($tempFile))
                    {
                        $cv_name        = $_FILES['fuFileImage']['name'][$i];
                        move_uploaded_file($tempFile,$dir.$cv_name);
                    }
                }
            }
            if (!empty($_file) and !empty($_file['tmp_name'])) {
                $pathIn = PATH_PUBLIC.'/resources/views/v2019/';
                $tempFile       = $_file['tmp_name'];
                $tenchuongtrinh = $request->input("namelandingpage");
                $dir = $pathIn.$tenchuongtrinh;
                if(!file_exists($dir)){
                    mkdir($dir, 0777,true);
                }
                chmod($dir, 0777);
                $cv_name        = "buffer.pug.blade.php";
                move_uploaded_file($tempFile,$pathIn.$tenchuongtrinh."/".$cv_name);
                $_string = file_get_contents($pathIn.$tenchuongtrinh."/".$cv_name);
                $_string = str_replace("\"css/","\"".BASE_URL."y2019/".$tenchuongtrinh."/css/",$_string);
                $_string = str_replace("\"js/","\"".BASE_URL."y2019/".$tenchuongtrinh."/js/",$_string);
                $_string = str_replace("\"img/","\"".BASE_URL."y2019/".$tenchuongtrinh."/img/",$_string);
                $_string = str_replace("'css/","'".BASE_URL."y2019/".$tenchuongtrinh."/css/",$_string);
                $_string = str_replace("'js/","'".BASE_URL."y2019/".$tenchuongtrinh."/js/",$_string);
                $_string = str_replace("'img/","'".BASE_URL."y2019/".$tenchuongtrinh."/img/",$_string);
            }
            return redirect('/admin/promotion/steptwo/'.$tenchuongtrinh);
        }
        return view("admin.promotion.stepone",$this->View);  
    }

    public function steptwo(Request $request,$namelandingpage)
    {
        $this->View['tenchuongtrinh'] = $tenchuongtrinh = $namelandingpage;
        $pathIn = PATH_PUBLIC.'/resources/views/v2019/';
        $cv_name  = "buffer.pug.blade.php";
        $_string = file_get_contents($pathIn.$tenchuongtrinh."/".$cv_name);
        $data = array();
        $data['number_cate'] = $sodanhmuccha = substr_count($_string, "#KMDANHMUCSANPHAM");
        if($request->isMethod("post"))
        {
            DTPromotion::xoaBuocHai($tenchuongtrinh);
            $menu               = $request->input("templatetagdanhmuc");
            if(!empty($menu))
            {
                DTPromotion::updateMenuPromotion($tenchuongtrinh,$menu);
            }
            for ($i=1; $i <= $sodanhmuccha ; $i++) 
            { 
                $tendanhmuc                 = $request->input("tendanhmuc".$i);
                $cid_cate                   = $request->input("cid_cate".$i);
                $templatedanhmucrieng       = (!empty($request->input("templatedanhmucrieng".$i)))?$request->input("templatedanhmucrieng".$i):$request->input("templatechungdanhmuccha");
                $templatechungdanhmuccon    = $request->input("templatechungdanhmuccon".$i);
                $codedanhmuc                = MrData::toAlias2($tendanhmuc);
                DTPromotion::themDanhMucChuongTrinh($tenchuongtrinh,$tendanhmuc,$templatedanhmucrieng,$cid_cate,$codedanhmuc);
                $sodanhmuccon   = $request->input("Tong_danhmuccon".$i);
                for ($j=1; $j <= $sodanhmuccon; $j++) { 
                    $tendanhmuccon  = $request->input("tendanhmuccon".$i.$j);
                    $madanhmuccon   = $request->input("madanhmuccon".$i.$j);
                    $codedanhmuccon = MrData::toAlias2($tendanhmuccon);
                    $templatedanhmuccon       = (!empty($request->input("templatedanhmucrieng".$i.$j)))?$request->input("templateriengdanhmuccon".$i.$j):$request->input("templatechungdanhmuccon".$i);
                    DTPromotion::themDanhMucCon($codedanhmuccon,$tenchuongtrinh,$madanhmuccon,$codedanhmuc,$tendanhmuccon,$templatedanhmuccon);
                    $sosanpham   = $request->input("Tong_sanpham".$i.$j);
                    for ($k=1; $k <= $sosanpham; $k++) 
                    { 
                        $tensanpham             = $request->input("tensanpham".$i.$j.$k);
                        $masanpham              = $request->input("masanpham".$i.$j.$k);
                        $giakhuyenmaisanpham    = $request->input("giakhuyenmaisanpham".$i.$j.$k);
                        $ghichusanpham          = $request->input("ghichusanpham".$i.$j.$k);
                        $templateriengsanpham       = (!empty($request->input("templatedanhmucrieng".$i.$j.$k)))?$request->input("templateriengsanpham".$i.$j.$k):$request->input("templatechungsanpham".$i.$j);
                        DTPromotion::themChiTietSanPham($tenchuongtrinh,$masanpham,$codedanhmuccon,$tensanpham,$ghichusanpham,$giakhuyenmaisanpham,$templateriengsanpham);
                    }
                }
            }
            return redirect('/admin/promotion/stepthree/'.$tenchuongtrinh);
        }
        $this->View['data'] = $data;
        return view("admin.promotion.steptwo",$this->View);  
    }

    public function stepthree(Request $request,$namelandingpage)
    {
        $this->View['tenchuongtrinh'] = $tenchuongtrinh = $namelandingpage;
        if($request->isMethod("post"))
        {
            //DTPromotion::xoaBuocBa($tenchuongtrinh);
            $_products  = $request->input("id");
            $_name      = $request->input("name");
            $_discount  = $request->input("discount");
            $_price     = $request->input("price");
            $_image     = $request->input("image");
            $_link_pro  = $request->input("link_pro");
            $_attribute = $request->input("attribute");
            $_phantram = $request->input("phantram");
            $number     = 0;
            if(!empty($_products))
            {
                if(count($_products)>0)
                {
                    foreach ($_products as $data) {
                        $id           = $data;
                        $name         = $_name[$number];
                        $discount     = $_discount[$number];
                        $price        = $_price[$number];
                        $image        = $_image[$number];
                        $link_pro     = $_link_pro[$number];
                        $phantram     = $_phantram[$number];
                        $attribute    = $_attribute[$number];
                        DTPromotion::capNhatChiTietSanPham($tenchuongtrinh,$id,$name,$discount,$price,$image,$link_pro,$phantram,$attribute);
                        $number++;
                    }
                }
            }
            return redirect('/admin/promotion/stepfinish/'.$tenchuongtrinh);
        }
        $list_product       = DTPromotion::getSanPhamChuongTrinh($tenchuongtrinh);
        $data               = array();
        if(count($list_product)>0)
        {
            $number_pro   = 1;
            foreach ($list_product  as $value) 
            {
                $id             = $value->id;
                $idproduct      = $value->sap_code;
                $giachuongtrinh = $value->price;
                if($giachuongtrinh)
                {
                    $giachuongtrinh     = number_format($giachuongtrinh,0,".",".")." Đ";
                }
                $note         = (!empty($product[2]))?$product[2]:'';
                $product_info = DTPromotion::layThongTinSanPham($idproduct)[0];
                //lay attribute 
                $attribute    = DTPromotion::getAttributeProduct($product_info->myid);
                $_attribute    = '';
                if(count($attribute)>0)
                {
                    foreach ($attribute as $valuea) 
                    {
                        $_attribute .= $valuea->val . '--';
                    }
                    $_attribute = substr($_attribute, 0, -2);
                }
                $attribute    = $attribute[0]->val;
                $name_pro     = $product_info->name;
                $price_pro    = $product_info->discount;
                $price_pro    = number_format($price_pro,0,".",".")." Đ";
                $img_pro      = "https://static.dienmaycholon.vn/tmp/product_".$product_info->myid."_220_220.jpg";
                $link_pro     = "https://dienmaycholon.vn/".MrData::toAlias2($product_info->namecate).'/'.MrData::toAlias2($product_info->name);
                $_data['id']                    = $id;
                $_data['attribute']             = $attribute;
                $_data['name']                  = $name_pro;
                $_data['discount']              = $price_pro;
                $_data['image']                 = $img_pro;
                $_data['link_pro']              = $link_pro;
                $_data['price']                 = $giachuongtrinh;
                $_data['attribute']             = $_attribute;
                $_giahientai                    = (!empty($value->price))?$value->price:$product_info->discount;
                $_data['phantram']              = round($product_info->saleprice - $_giahientai/$product_info->saleprice*100);
                $data[$value->cid_catechild][]  = $_data;
            }
        }
        $this->View['data'] = $data;
        return view("admin.promotion.stepthree",$this->View);  
    }
    public function stepfinish(Request $request,$namelandingpage)
    {
        $this->View['tenchuongtrinh'] = $tenchuongtrinh = $namelandingpage;
        if($request->isMethod("post"))
        {
            $this->taoChuongTrinh($tenchuongtrinh);
            DTPromotion::updateActionStepThree($tenchuongtrinh);
            return redirect('/admin/promotion/index');
        }
        return view("admin.promotion.stepfinish",$this->View);  
    }

    public function index(Request $request){
       $this->View['datas'] = DTPromotion::getDanhSachChuongTrinh(); 
       return view("admin.promotion.index",$this->View);  
    }

    public function updateaction(Request $request)
    {
        if($request->isMethod("post"))
        {
            $tenchuongtrinh = $request->input("namelandingpage");
            $chuongtrinh    = DTPromotion::getPromotion($tenchuongtrinh);
            $_html          = '';
            if($chuongtrinh[0]->action == 0)
            {
                $_label_action = 'success';
                $_text_action  = 'kích hoạt';
                DTPromotion::updateActionStepThree($tenchuongtrinh);
                $_html = '<span style="width: 104px;" onclick="changeaction(this,&#39;'.$tenchuongtrinh.'&#39;)" class="label label-'.$_label_action.'">'.$_text_action.'</span>';
            }
            else
            {
                $_label_action = 'important';
                $_text_action  = 'không kích hoạt';
                DTPromotion::updateUnactionStepThree($tenchuongtrinh);
                $_html = '<span style="width: 104px;" onclick="changeaction(this,&#39;'.$tenchuongtrinh.'&#39;)" class="label label-'.$_label_action.'">'.$_text_action.'</span>';
            }
            echo $_html;
            die();
        }
    }

    public function updatefile(Request $request,$namelandingpage){
        $this->View['tenchuongtrinh'] = $tenchuongtrinh = $namelandingpage;
        if($request->isMethod("post"))
        {
            $date_time      = date('Y-m-d', strtotime($request->input("date_time"))).' 00:00:00';
            $note           = $request->input("note");
            DTPromotion::themChuongTrinhKhuyenMai($tenchuongtrinh,$date_time,$note);
            $_file = (!empty($_FILES['fuFileAttach'])) ? $_FILES['fuFileAttach'] : "";
            $pathIn = PATH_PUBLIC.'/y2019/';
            $dir = $pathIn.$tenchuongtrinh;
            if(!file_exists($dir)){
                mkdir($dir, 0777,true);
            }
            chmod($dir, 0777);
            if(count($_FILES['fuFileCss']['tmp_name'])>0)
            {
                $dir = $pathIn.$tenchuongtrinh.'/css/';
                if(!file_exists($dir)){
                    mkdir($dir, 0777,true);
                }
                chmod($dir, 0777);
                for($i=0;$i<count($_FILES['fuFileCss']['tmp_name']);$i++)
                {
                    $tempFile = $_FILES['fuFileCss']['tmp_name'][$i];
                    if (!empty($tempFile))
                    {
                        $cv_name        = $_FILES['fuFileCss']['name'][$i];
                        move_uploaded_file($tempFile,$dir.$cv_name);
                    }
                }
            }
            if(count($_FILES['fuFileJs']['tmp_name'])>0)
            {
                $dir = $pathIn.$tenchuongtrinh.'/js/';
                if(!file_exists($dir)){
                    mkdir($dir, 0777,true);
                }
                chmod($dir, 0777);
                for($i=0;$i<count($_FILES['fuFileJs']['tmp_name']);$i++)
                {
                    $tempFile = $_FILES['fuFileJs']['tmp_name'][$i];
                    if (!empty($tempFile))
                    {
                        $cv_name        = $_FILES['fuFileJs']['name'][$i];
                        move_uploaded_file($tempFile,$dir.$cv_name);
                    }
                }
            }
            if(count($_FILES['fuFileImage']['tmp_name'])>0)
            {
                $dir = $pathIn.$tenchuongtrinh.'/img/';
                if(!file_exists($dir)){
                    mkdir($dir, 0777,true);
                }
                chmod($dir, 0777);
                for($i=0;$i<count($_FILES['fuFileImage']['tmp_name']);$i++)
                {
                    $tempFile = $_FILES['fuFileImage']['tmp_name'][$i];
                    if (!empty($tempFile))
                    {
                        $cv_name        = $_FILES['fuFileImage']['name'][$i];
                        move_uploaded_file($tempFile,$dir.$cv_name);
                    }
                }
            }
            if(count($_FILES['fuFileFonts']['tmp_name'])>0)
            {
                $dir = $pathIn.$tenchuongtrinh.'/fonts/';
                if(!file_exists($dir)){
                    mkdir($dir, 0777,true);
                }
                chmod($dir, 0777);
                for($i=0;$i<count($_FILES['fuFileFonts']['tmp_name']);$i++)
                {
                    $tempFile = $_FILES['fuFileFonts']['tmp_name'][$i];
                    if (!empty($tempFile))
                    {
                        $cv_name        = $_FILES['fuFileFonts']['name'][$i];
                        move_uploaded_file($tempFile,$dir.$cv_name);
                    }
                }
            }
            if (!empty($_file) and !empty($_file['tmp_name'])) {
                $pathIn = PATH_PUBLIC.'/resources/views/v2019/';
                $cv_name        = "buffer.pug.blade.php";
                $tempFile       = $_file['tmp_name'];
                $dir = $pathIn.$tenchuongtrinh;
                if(!file_exists($dir)){
                    mkdir($dir, 0777,true);
                }
                chmod($dir, 0777);
                move_uploaded_file($tempFile,$pathIn.$tenchuongtrinh."/".$cv_name);
                $_string = file_get_contents($pathIn.$tenchuongtrinh."/".$cv_name);
                $_string = str_replace("\"css/","\"".BASE_URL."y2019/".$tenchuongtrinh."/css/",$_string);
                $_string = str_replace("\"js/","\"".BASE_URL."y2019/".$tenchuongtrinh."/js/",$_string);
                $_string = str_replace("\"img/","\"".BASE_URL."y2019/".$tenchuongtrinh."/img/",$_string);
                $_string = str_replace("'css/","'".BASE_URL."y2019/".$tenchuongtrinh."/css/",$_string);
                $_string = str_replace("'js/","'".BASE_URL."y2019/".$tenchuongtrinh."/js/",$_string);
                $_string = str_replace("'img/","'".BASE_URL."y2019/".$tenchuongtrinh."/img/",$_string);
            }

            $this->taoChuongTrinh($tenchuongtrinh);
            return redirect('/admin/promotion/index/');
        }
        return view("admin.promotion.updatefile",$this->View);  
    }

    public function updateproduct(Request $request,$namelandingpage){
        $this->View['tenchuongtrinh'] = $tenchuongtrinh = $namelandingpage;
        $pathIn = PATH_PUBLIC.'/resources/views/v2019/';
        $cv_name  = "buffer.pug.blade.php";
        $_string = file_get_contents($pathIn.$tenchuongtrinh."/".$cv_name);
        $data = array();
        $data['list_cate']      = DTPromotion::getDanhMucChuongTrinh($tenchuongtrinh);
        $data['list_product']   = DTPromotion::getSanPhamChuongTrinh($tenchuongtrinh);
        $data['number_cate'] = substr_count($_string, "#KMDANHMUCSANPHAM");
        $data['number_listproduct'] = substr_count($_string, "#KMLISTSANPHAM");
        $data['promotion']   = DTPromotion::getPromotion($tenchuongtrinh);
        $this->View['data']     = $data;
        if($request->isMethod("post"))
        {
            DTPromotion::xoaBuocHai($tenchuongtrinh);
            for ($i=0; $i < $data['number_cate'] ; $i++) { 
                $tendanhmuc         = $request->input("tendanhmuc".$i);
                $templatedanhmuc    = (!empty($request->input("templatedanhmucrieng".$i)))?$request->input("templatedanhmucrieng".$i):$request->input("templatedanhmuc");
                $cid_cate           = $request->input("cid_cate".$i);
                $menu               = $request->input("templatetagdanhmuc");
                DTPromotion::themDanhMucChuongTrinh($tenchuongtrinh,$tendanhmuc,$templatedanhmuc,$cid_cate);
            }
            for ($i=0; $i < $data['number_listproduct'] ; $i++) { 
                $danhsachsanpham         = $request->input("danhsachsanpham".$i);
                $templatesanphamrieng    = (!empty($request->input("templatesanphamrieng".$i)))?$request->input("templatesanphamrieng".$i):$request->input("templatesanpham");
                DTPromotion::themSanPhamChuongTrinh($tenchuongtrinh,$danhsachsanpham,$templatesanphamrieng);
            }
            return redirect('/admin/promotion/stepthree/'.$tenchuongtrinh);
        }
        return view("admin.promotion.updateproduct",$this->View);  
    }

    public function updatepromotion(Request $request)
    {
        if($request->isMethod("post"))
        {
            $tenchuongtrinh = $request->input("namelandingpage");
            $this->taoChuongTrinh($tenchuongtrinh);
        }
    }

    public function taoChuongTrinh($tenchuongtrinh)
    {
        $pathIn             = PATH_PUBLIC.'/resources/views/v2019/';
        $cv_name            = "buffer.pug.blade.php";
        $list_cate          = DTPromotion::getDanhMucChuongTrinh($tenchuongtrinh);
        $_string            = file_get_contents($pathIn.$tenchuongtrinh."/".$cv_name);
        $number_cate        = 1;
        $promotion          = DTPromotion::getPromotion($tenchuongtrinh);
        $_menu_categories   = '';
        $_string_cateparent = '';
        if(count($list_cate)>0)
        {
            $menu_categories        = $promotion[0]->menu_categories; 
            $number_categories      = 1;
            foreach ($list_cate as $value) {
                $_string_cateparent .= $value->content;
                $list_catechild     = DTPromotion::getDanhMucCon($value->code);
                $string_catechild  = '';
                foreach ($list_catechild as $_catechild) {
                    $_string_catechild = $_catechild->layout;
                    $_string1           = $menu_categories;
                    $_string1           = str_replace("#KMTENDANHMUC",$_catechild->name,$_string1);
                    $_string1           = str_replace("#KMDMID",$_catechild->cid_child,$_string1);
                    $_menu_categories   .= $_string1 . " \n";
                    $_string_catechild = str_replace("#KMDMID",$_catechild->cid_child,$_string_catechild);
                    $list_product     = DTPromotion::getSanPhamDanhMuc($_catechild->code);
                    $_string_product  = '';
                    foreach ($list_product as $product) {
                        $_row_product   = $product->layout;
                        $link_pro       = $product->link;
                        $name_pro       = $product->name;
                        $price_pro      = $product->discount;
                        $img_pro        = $product->image;
                        $attribute      = $product->attribute;
                        $note           = $product->promo;
                        $giachuongtrinh = $product->price;
                        $phantram       = $product->phan_tram;
                        $_row_product   = str_replace("#KMLINKSANPHAM",$link_pro,$_row_product);
                        $_row_product   = str_replace("#KMTENSANPHAM",$name_pro,$_row_product);
                        $_row_product   = str_replace("#KMGIASANPHAM",$price_pro,$_row_product);
                        $_row_product   = str_replace("#KMGIAKHUYENMAI",$giachuongtrinh,$_row_product);
                        $_row_product   = str_replace("#KMHINHSANPHAM",$img_pro,$_row_product);
                        $_row_product   = str_replace("#KMTHUOCTINH",$attribute,$_row_product);
                        $_row_product   = str_replace("#KMNOTESANPHAM",$note,$_row_product);
                        $_row_product   = str_replace("#KMPHANTRAMGIAM",$phantram,$_row_product);
                        $_row_product   = str_replace("#KMDMCLGIAKHUYENMAI",$giachuongtrinh,$_row_product);
                        $_string_product .= $_row_product. " \n"; 
                    }
                    $_string_catechild = str_replace("#KMLISTSANPHAM",$_string_product,$_string_catechild);
                    $string_catechild .= $_string_catechild. " \n"; 
                }
                $_string_cateparent = str_replace("#KMLISTDANHMUCCON",$string_catechild,$_string_cateparent);
                $_string = str_replace("#KMDANHMUCCHA".$number_cate,$_string_cateparent,$_string);
                $number_cate++;
            }
            $_string = str_replace("#MENUCATEKMDMCL",$_menu_categories,$_string);
        }
        $_string = str_replace("#kmxuonghang","",$_string);
        $_string = str_replace("\"css/","\"".BASE_URL."y2019/".$tenchuongtrinh."/css/",$_string);
        $_string = str_replace("\"js/","\"".BASE_URL."y2019/".$tenchuongtrinh."/js/",$_string);
        $_string = str_replace("\"img/","\"".BASE_URL."y2019/".$tenchuongtrinh."/img/",$_string);
        $_string = str_replace("'css/","'".BASE_URL."y2019/".$tenchuongtrinh."/css/",$_string);
        $_string = str_replace("'js/","'".BASE_URL."y2019/".$tenchuongtrinh."/js/",$_string);
        $_string = str_replace("'img/","'".BASE_URL."y2019/".$tenchuongtrinh."/img/",$_string);
        $file_name        = "index.pug.blade.php";
        $myfile = fopen($pathIn.$tenchuongtrinh."/".$file_name, "wb") or die("Unable to open file!");
        fwrite($myfile, $_string);
        fclose($myfile);
        die();
    }

    // public function taoChuongTrinh($tenchuongtrinh)
    // {
    //     $pathIn             = PATH_PUBLIC.'/resources/views/v2019/';
    //     $cv_name            = "buffer.pug.blade.php";
    //     $list_cate          = DTPromotion::getDanhMucChuongTrinh($tenchuongtrinh);
    //     $list_product       = DTPromotion::getSanPhamChuongTrinh($tenchuongtrinh);
    //     $_string            = file_get_contents($pathIn.$tenchuongtrinh."/".$cv_name);
    //     $number_cate        = 1;
    //     $promotion          = DTPromotion::getPromotion($tenchuongtrinh);
    //     $_menu_categories   = '';
    //     if(count($list_cate)>0)
    //     {
    //         $menu_categories        = $promotion[0]->menu_categories; 
    //         foreach ($list_cate as $value) {
    //             $cate1              = $value->content;
    //             $_string            = str_replace("#KMDANHMUCSANPHAM".$number_cate,$cate1,$_string);
    //             $_string1           = $menu_categories;
    //             $_string1           = str_replace("#KMDMTENSANPHAM",$value->name,$_string1);
    //             $_menu_categories   .= $_string1 . " \n";
    //             $number_cate++;
    //         }
    //         $_string = str_replace("#MENUCATEKMDMCL",$_menu_categories,$_string);
    //     }
    //     if(count($list_product)>0)
    //     {
    //         $number_pro   = 1;
    //         foreach ($list_product  as $value) 
    //         {
    //             $_list_product        = "";
    //             $_array_product       = DTPromotion::getChiTietSanPhamChuongTrinh($value->id);
    //             foreach ($_array_product as $product) {
    //                 $_row_product   = $value->note;
    //                 $link_pro       = $product->link;
    //                 $name_pro       = $product->name;
    //                 $price_pro      = $product->discount;
    //                 $img_pro        = $product->image;
    //                 $attribute      = $product->attribute;
    //                 $note           = $product->promo;
    //                 $giachuongtrinh = $product->price;
    //                 $_row_product   = str_replace("#KMDMCLLINKSANPHAM",$link_pro,$_row_product);
    //                 $_row_product   = str_replace("#KMDMCLTENSANPHAM",$name_pro,$_row_product);
    //                 $_row_product   = str_replace("#KMDMCLGIASANPHAM",$price_pro,$_row_product);
    //                 $_row_product   = str_replace("#KMDMCLHINHSANPHAM",$img_pro,$_row_product);
    //                 $_row_product   = str_replace("#KMDMCLTHUOCTINH",$attribute,$_row_product);
    //                 $_row_product   = str_replace("#KMDMCLKHUYENMAI",$note,$_row_product);
    //                 $_row_product   = str_replace("#KMDMCLGIAKHUYENMAI",$giachuongtrinh,$_row_product);
    //                 $_list_product .= $_row_product . " \n";
    //             }
    //             $_string = str_replace("#KMLISTSANPHAM".$number_pro,$_list_product,$_string);
    //             $number_pro++;
    //         }
    //     }
    //     $_string = str_replace("#kmxuonghang","",$_string);
    //     $_string = str_replace("\"css/","\"".BASE_URL."y2019/".$tenchuongtrinh."/css/",$_string);
    //     $_string = str_replace("\"js/","\"".BASE_URL."y2019/".$tenchuongtrinh."/js/",$_string);
    //     $_string = str_replace("\"img/","\"".BASE_URL."y2019/".$tenchuongtrinh."/img/",$_string);
    //     $_string = str_replace("'css/","'".BASE_URL."y2019/".$tenchuongtrinh."/css/",$_string);
    //     $_string = str_replace("'js/","'".BASE_URL."y2019/".$tenchuongtrinh."/js/",$_string);
    //     $_string = str_replace("'img/","'".BASE_URL."y2019/".$tenchuongtrinh."/img/",$_string);
    //     $file_name        = "index.pug.blade.php";
    //     $myfile = fopen($pathIn.$tenchuongtrinh."/".$file_name, "wb") or die("Unable to open file!");
    //     fwrite($myfile, $_string);
    //     fclose($myfile);
    // }
}
