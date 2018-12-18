<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Read\Product as DTProduct;
use App\Model\Read\Cate as DTCate;
use App\Model\Read\Attribute;

use App\Model\Write\Y2018\Promotion;
use App\Model\Write\Y2018\Grab;
use App\Http\Requests;
use Validator;
use Image;
use App;

class QuatetController extends Controller
{
    //
    protected $View=[];
    public function add(Request $request){
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
                    // $check_survice = Grab::where('cid_product','=',$check_product['id'])->first();
                    // if(!empty($check_survice['cid_product'])){
                    //    $validater->errors()->add("cid_product","SAP tồn tại trong chương trình, Vui lòng kiểm tra lại.");
                    //     return redirect()->back()->withErrors($validater)->withInput(); 
                    // }
                    $checkattri = Attribute::where('cid_product','=',$check_product['id'])->where(function ($query) {
			                $query->where('val', 'like', '%kg%')
			                      ->orWhere('val', 'like', '%lit%')
			                      ->orWhere('val','like','%inch%');
			            })->first();
                   	
    				$TNews= new Grab();

    				$TNews->cid_cate= $request->input("cid_cate");
                    $TNews->cid_promotion = $request->input("cid_promotion");
    				$TNews->cid_product=$check_product->id;
                    $TNews->saleprice=$check_product->getPrice()['saleprice'];
                    $TNews->discount=$check_product->getPrice()['discount'];
                    if($checkattri){
                    	$TNews->extension=$checkattri['val'];	
                    }else{
                    	$TNews->extension='0';
                    }
                    
                    $TNews->title = 'quatet';
                   
    				$TNews->save();

    				$request->session()->flash("success","Thêm thành công sản phẩm:" . $check_product->name );
    				return redirect()->back();
    			}

    		}
    		$this->View['cid_promotion']=Promotion::pluck("name",'id');
            $this->View['cid_cate']=DTCate::whereRaw("alias IN ('tivi-led','tu-lanh','may-giat') ")->pluck("name",'id');
    		
    		return view("admin.quatet.add",$this->View);	
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
    				 $checkattri = Attribute::where('cid_product','=',$check_product['id'])->where(function ($query) {
			                $query->where('val', 'like', '%kg%')
			                      ->orWhere('val', 'like', '%lit%')
			                      ->orWhere('val','like','%inch%');
			            })->first();
                   
    				$TUpdate = Grab::find($id);
                    $TUpdate->cid_promotion = $request->input('cid_promotion');
    				$TUpdate->cid_cate= $request->input("cid_cate");
    				$TUpdate->cid_product=$check_product->id;
                    $TUpdate->saleprice=$check_product->getPrice()['saleprice'];
                    $TUpdate->discount=$check_product->getPrice()['discount'];
                   	if($checkattri){
                    	$TUpdate->extension=$checkattri['val'];	
                    }else{
                    	$TUpdate->extension='0';
                    }
                    $TUpdate->title = 'quatet';
                    

    				$TUpdate->save();
    				$request->session()->flash("success","Chỉnh sản phẩm  thành công sản phẩm:" . $check_product->name );
    				return redirect()->back();
    			}

    		}
    		$this->View['cid_cate']=DTCate::whereRaw("alias IN ('tivi-led','tu-lanh','may-giat') ")->pluck("name",'id');
    		$this->View['cid_promotion']=Promotion::pluck("name",'id');
    		$this->View['data']= Grab::find($id);
    		
    		return view("admin.quatet.edit",$this->View);
    }
    public function lists(Request $request){
    
            $this->View['data_list']=Grab::where('title','like','quatet')->orderBy("id","DESC")->get();
        
        
        if($request->input("change_value")){
            $nhom=$request->input("nhom",1);

            
            if((int)$nhom==1){
                $data=Grab::whereRaw("cid_cate IN (8,3,13)")->get();
            }
                
                foreach($data as $d){
                    $myproduct=DTProduct::find($d->cid_product);

                    if(!empty($myproduct['id']) ){

                        $gift=$myproduct->Gift();
                        $TUpdate = Grab::find($d->id);
                        $TUpdate->saleprice=$myproduct->getPrice()['saleprice'];
                        $TUpdate->discount=$myproduct->getPrice()['discount'];
                        
                      
                        $TUpdate->save();
                    }
                }
              //  dd('s');

        }
        return view("admin.quatet.lists",$this->View);  
    }
    public function removed($id){
    	$remove=Grab::find($id);
    	$remove->delete();
    }
    
}
