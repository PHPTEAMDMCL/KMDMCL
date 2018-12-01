<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Read\Product as DTProduct;
use App\Model\Read\Cate as DTCate;

use App\Model\Write\Y2018\Bimatss as Samsung;

use Validator;

class BimatsamsungController extends Controller
{
    //
    protected $View=[];
    public function add(Request $request){
    		if($request->isMethod("post")){
    			$validater=Validator::make($request->all(),[
    				"cid_cate"=>"required",
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
    				$TNews= new Samsung();
    				$TNews->cid_cate= $request->input("cid_cate");
    				$TNews->cid_product=$check_product->id;
                    $TNews->saleprice=$check_product->getPrice()['saleprice'];
                    $TNews->discount=$check_product->getPrice()['discount'];

                      $gift=$check_product->Gift();

                    if(!empty($gift['total'])){
                              $TNews->gift=$gift['total'];
                        }else{
                              $TNews->gift=0;
                        }

                   
    				$TNews->save();
    				$request->session()->flash("success","Thêm thành công sản phẩm:" . $check_product->name );
    				return redirect()->back();
    			}

    		}
    		$this->View['cid_cate']=DTCate::whereRaw("alias IN ('tu-lanh','may-giat') ")->pluck("name",'id');
    		
    		return view("admin.bimat.add",$this->View);	
    }
    public function edit($id,Request $request){
    		if($request->isMethod("post")){
    			$validater=Validator::make($request->all(),[
    				"cid_cate"=>"required",
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
    				$TUpdate = Samsung::find($id);
    				$TUpdate->cid_cate= $request->input("cid_cate");
    				$TUpdate->cid_product=$check_product->id;
    				$TUpdate->price=$request->input("price");
                    $TUpdate->percent=$request->input("percent");
                    $TUpdate->saleprice=$check_product->getPrice()['saleprice'];
                    $TUpdate->discount=$check_product->getPrice()['discount'];
                   

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
    		$this->View['cid_cate']=DTCate::whereRaw("alias IN ('tu-lanh','may-giat') ")->pluck("name",'id');

    		$this->View['data']= Samsung::find($id);
    		
    		return view("admin.bimat.edit",$this->View);
    }
    public function lists(Request $request){
    	if($search_id=$request->input("search_id")){
          
            $this->View['data_list']=Samsung::where("cid_product",$search_id)->orderBy("cid_cate","ASC")->get();
        }else{
            $this->View['data_list']=Samsung::orderBy("cid_cate","ASC")->paginate(20);
        }
        
        if($request->input("change_value")){
            $nhom=$request->input("nhom",1);

            
            if((int)$nhom==1){
                $data=Samsung::whereRaw("cid_cate IN (18,3)")->get();
            }
                
                foreach($data as $d){
                    $myproduct=DTProduct::find($d->cid_product);

                    if(!empty($myproduct['id']) ){

                        $gift=$myproduct->Gift();
                        $TUpdate = Samsung::find($d->id);
                        $TUpdate->saleprice=$myproduct->getPrice()['saleprice'];
                        $TUpdate->discount=$myproduct->getPrice()['discount'];
                        if(!empty($gift['total'])){
                              $TUpdate->gift=$gift['total'];
                        }else{
                              $TUpdate->gift=0;
                        }
                      
                        $TUpdate->save();
                    }
                }
              //  dd('s');

        }
        return view("admin.bimat.lists",$this->View);  
    }
    public function removed($id){
    	$remove=Samsung::find($id);
    	$remove->delete();
    }
    
}
