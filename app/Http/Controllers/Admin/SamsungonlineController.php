<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Read\Product as DTProduct;
use App\Model\Read\Cate as DTCate;

use App\Model\Write\Y2018\Samsung ;
use App\Http\Requests;
use Validator;
use Image;
use App;

class SamsungonlineController extends Controller
{
    //
    protected $View=[];
    public function add(Request $request){
    		if($request->isMethod("post")){
    			$validater=Validator::make($request->all(),[
    				"cid_cate"=>"required",
    				"cid_product"=>"required",
                    "idvoucher"=>"required"
                   
    			],[
    				'cid_product.required'=>"Vui lòng nhập sản phẩm ",
                    'idvoucher.required'=>" Vui lòng chọn Voucher"
                    
                    
    			
    			]);
    			if($validater->fails()){
    				return redirect()->back()->withErrors($validater)->withInput();
    			}else{

    				$check_product= DTProduct::where("sap_code","LIKE",$request->input("cid_product"))->first();
                 
    				if(empty($check_product['id'])){
    					$validater->errors()->add("cid_product","Sản phẩm này không tồn tại, Vui lòng kiểm tra lại sản phẩm  trên website");
    					return redirect()->back()->withErrors($validater)->withInput();
    				}
                    $check_survice = Samsung::where('cid_product','=',$check_product['id'])->first();
                    if(!empty($check_survice['cid_product'])){
                       $validater->errors()->add("cid_product","SAP tồn tại trong chương trình, Vui lòng kiểm tra lại.");
                        return redirect()->back()->withErrors($validater)->withInput(); 
                    }
                   
                    $check_cate =  DTCate::where('id',$check_product['cid_cate'])->first();
                  
    				$TNews= new Samsung();
    				$TNews->cid_cate= $request->input("cid_cate");
                    $TNews->idvoucher = $request->input("idvoucher");
    				$TNews->cid_product=$check_product->id;
                    $TNews->name_product = $check_product->name;
                    $TNews->alias_product = $check_product->alias;
                    $TNews->name_cate = $check_cate->name;
                    $TNews->cate_alias=$check_cate->alias;
                    $TNews->saleprice=$check_product->getPrice()['saleprice'];
                    $TNews->discount=$check_product->getPrice()['discount'];
                   	//upload image
                    $picture = $request->file('picture');
                    $name_picture="image".time().".".$picture->getClientOriginalExtension();
                    Image::make($picture)->resize(275,95)->save(public_path("/upload/samsung/".$name_picture));

                    $TNews->image= $name_picture;
    				$TNews->save();
    				$request->session()->flash("success","Thêm thành công sản phẩm:" . $check_product->name );
    				return redirect()->back();
    			}

    		}
    		$this->View['cid_cate']=DTCate::whereRaw("alias IN ('tivi-led','tu-lanh','may-giat') ")->pluck("name",'id');
            $this->View['idvoucher']=array(
                ""=>"Option",
                "1"=>"Voucher 300k ",
                "2"=>"Voucher 500k",
                "3"=>"Voucher 1 triệu",
                "4"=>"Voucher 1.5 triệu",
                "5"=>"Voucher 2 triệu"
        );
    		
    		return view("admin.samsung.add",$this->View);	
    }
    public function edit($id,Request $request){
    		if($request->isMethod("post")){
    			$validater=Validator::make($request->all(),[
    				"cid_cate"=>"required",
    				"cid_product"=>"required",
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
                    $check_cate =  DTCate::where('id',$check_product['cid_cate'])->first();
                    $picture = $request->file('picture');
    				$TUpdate = Samsung::find($id);
                    $TUpdate->idvoucher = $request->input('idvoucher');
    				$TUpdate->cid_cate= $request->input("cid_cate");
    				$TUpdate->cid_product=$check_product->id;
                    $TUpdate->name_product = $check_product->name;
                    $TUpdate->alias_product = $check_product->alias;
                    $TUpdate->name_cate = $check_cate->name;
                    $TUpdate->cate_alias=$check_cate->alias;
                    $TUpdate->saleprice=$check_product->getPrice()['saleprice'];
                    $TUpdate->discount=$check_product->getPrice()['discount'];
                   	
                   
                    if($picture){
                        $name_picture="image".time().".".$picture->getClientOriginalExtension();
                        Image::make($picture)->resize(275,95)->save(public_path("/upload/samsung/".$name_picture));

                        $TUpdate->image= $name_picture;
                        $TUpdate->save();
                    }

    				$TUpdate->save();
    				$request->session()->flash("success","Chỉnh sản phẩm  thành công sản phẩm:" . $check_product->name );
    				return redirect()->back();
    			}

    		}
    		$this->View['cid_cate']=DTCate::whereRaw("alias IN ('tivi-led','tu-lanh','may-giat') ")->pluck("name",'id');

    		$this->View['data']= Samsung::find($id);
    		
    		return view("admin.samsung.edit",$this->View);
    }
    public function lists(Request $request){
    	if($search_id=$request->input("search_id")){
          
            $this->View['data_list']=Samsung::where("cid_product",$search_id)->orderBy("cid_cate","ASC")->get();
        }else{
            $this->View['data_list']=Samsung::orderBy("id","DESC")->get();
        }
        
        if($request->input("change_value")){
            $nhom=$request->input("nhom",1);

            
            if((int)$nhom==1){
                $data=Samsung::whereRaw("cid_cate IN (8,3,13)")->get();
            }
                
                foreach($data as $d){
                    $myproduct=DTProduct::find($d->cid_product);

                    if(!empty($myproduct['id']) ){

                        $gift=$myproduct->Gift();
                        $TUpdate = Samsung::find($d->id);
                        $TUpdate->saleprice=$myproduct->getPrice()['saleprice'];
                        $TUpdate->discount=$myproduct->getPrice()['discount'];
                        
                      
                        $TUpdate->save();
                    }
                }
              //  dd('s');

        }
        return view("admin.samsung.lists",$this->View);  
    }
    public function removed($id){
    	$remove=Samsung::find($id);
        @unlink(public_path("/upload/samsung/".$remove['image']));
    	$remove->delete();
    }
    
}
