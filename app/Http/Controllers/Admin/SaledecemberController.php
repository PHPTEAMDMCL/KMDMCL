<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Read\Product as DTProduct;
use App\Model\Read\Cate as DTCate;

use App\Model\Write\Y2018\SaleDecember as Sale;

use Validator;

class SaledecemberController extends Controller
{
    //
    protected $View=[];
    public function add(Request $request){
    		if($request->isMethod("post")){
    			$validater=Validator::make($request->all(),[
    				"cid_cate"=>"required",
    				"cid_product"=>"required"
    			],[
    				'cid_product.required'=>"Vui lòng nhập sản phẩm "
                    
    			
    			]);
    			if($validater->fails()){
    				return redirect()->back()->withErrors($validater)->withInput();
    			}else{

    				$check_product= DTProduct::where("sap_code","LIKE",$request->input("cid_product"))->first();
    				if(empty($check_product['id'])){
    					$validater->errors()->add("cid_product","Sản phẩm này không tồn tại, Vui lòng kiểm tra lại sản phẩm  trên website");
    					return redirect()->back()->withErrors($validater)->withInput();
    				}
                    $check_survice = Sale::where('cid_product','=',$check_product['id'])->first();
                    if(!empty($check_survice['cid_product'])){
                       $validater->errors()->add("cid_product","SAP tồn tại trong chương trình, Vui lòng kiểm tra lại.");
                        return redirect()->back()->withErrors($validater)->withInput(); 
                    }
                    
    				$TNews= new Sale();
    				$TNews->cid_cate= $request->input("cid_cate");
                    $TNews->price   = $request->input("price");
                    $TNews->percent = $request->input("percent");
    				$TNews->cid_product=$check_product->id;
                    $TNews->saleprice=$check_product->getPrice()['saleprice'];
                    $TNews->discount=$check_product->getPrice()['discount'];
                   
    				$TNews->save();
    				$request->session()->flash("success","Thêm thành công sản phẩm:" . $check_product->name );
    				return redirect()->back();
    			}

    		}
    		$this->View['cid_cate']=DTCate::whereRaw("alias IN ('tivi-led','tu-lanh','may-giat','gia-dung','dien-thoai-di-dong') ")->pluck("name",'id');
    		
    		return view("admin.sale12.add",$this->View);	
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

    				$TUpdate = Sale::find($id);
    				$TUpdate->cid_cate= $request->input("cid_cate");
    				$TUpdate->cid_product=$check_product->id;
    				$TUpdate->price=$request->input("price");
                    $TUpdate->percent=$request->input("percent");
                    $TUpdate->saleprice=$check_product->getPrice()['saleprice'];
                    $TUpdate->discount=$check_product->getPrice()['discount'];
                   

    				$TUpdate->save();
    				$request->session()->flash("success","Chỉnh sản phẩm  thành công sản phẩm:" . $check_product->name );
    				return redirect()->back();
    			}

    		}
    		$this->View['cid_cate']=DTCate::whereRaw("alias IN ('tivi-led','tu-lanh','may-giat','gia-dung','dien-thoai-di-dong') ")->pluck("name",'id');

    		$this->View['data']= Sale::find($id);
    		
    		return view("admin.sale12.edit",$this->View);
    }
    public function lists(Request $request){
    	if($search_id=$request->input("search_id")){
          
            $this->View['data_list']=Sale::where("cid_product",$search_id)->orderBy("cid_cate","ASC")->paginate(20);
        }else{
            $this->View['data_list']=Sale::orderBy("id","DESC")->paginate(20);
        }
        
        if($request->input("change_value")){
            $nhom=$request->input("nhom",1);

            
            if((int)$nhom==1){
                $data=Sale::whereRaw("cid_cate IN (18,3,8,13,9)")->get();
            }
                
                foreach($data as $d){
                    $myproduct=DTProduct::find($d->cid_product);

                    if(!empty($myproduct['id']) ){

                        $gift=$myproduct->Gift();
                        $TUpdate = Sale::find($d->id);
                        $TUpdate->saleprice=$myproduct->getPrice()['saleprice'];
                        $TUpdate->discount=$myproduct->getPrice()['discount'];
                        
                      
                        $TUpdate->save();
                    }
                }
              //  dd('s');

        }
        return view("admin.sale12.lists",$this->View);  
    }
    public function removed($id){
    	$remove=Sale::find($id);
    	$remove->delete();
    }
    
}
