<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Read\Product as DTProduct;
use App\Model\Read\Cate as DTCate;

use App\Model\Write\Y2018\Online;

use Validator;

class OnlineController extends Controller
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
                    $check_survice = Online::where('cid_product','=',$check_product['id'])->first();
                    if(!empty($check_survice['cid_product'])){
                       $validater->errors()->add("cid_product","SAP tồn tại trong chương trình, Vui lòng kiểm tra lại.");
                        return redirect()->back()->withErrors($validater)->withInput(); 
                    }
                    $check_cate =  DTCate::where('id',$check_product['cid_cate'])->first();

                    $_percent = round(100-($check_product->getPrice()['discount']*100)/$check_product->getPrice()['saleprice']);
                   
    				$TNews= new Online();
    				$TNews->cid_cate= $request->input("cid_cate");
                    $TNews->cid_product=$check_product->id;
                    $TNews->name_product = $check_product->name;
                    $TNews->alias_product = $check_product->alias;
                    $TNews->name_cate = $check_cate->name;
                    $TNews->alias_cate=$check_cate->alias;
                    $TNews->percent = $_percent;
                    $TNews->hot = $request->input('hot');
                    $TNews->saleprice=$check_product->getPrice()['saleprice'];
                    $TNews->discount=$check_product->getPrice()['discount'];
                 
    				$TNews->save();
    				$request->session()->flash("success","Thêm thành công sản phẩm:" . $check_product->name );
    				return redirect()->back();
    			}

    		}
    		$this->View['cid_cate']=DTCate::whereRaw("alias IN ('tivi-led','tu-lanh','may-giat','gia-dung','loa') ")->pluck("name",'id');
    		
    		return view("admin.online.add",$this->View);	
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
                    $check_cate =  DTCate::where('id',$check_product['cid_cate'])->first();
                    $_percent = round(100-($check_product->getPrice()['discount']*100)/$check_product->getPrice()['saleprice']);

    				$TUpdate = Online::find($id);
    				$TUpdate->cid_cate= $request->input("cid_cate");
                    $TUpdate->cid_product=$check_product->id;
                    $TUpdate->name_product = $check_product->name;
                    $TUpdate->alias_product = $check_product->alias;
                    $TUpdate->name_cate = $check_cate->name;
                    $TUpdate->alias_cate=$check_cate->alias;
                    $TUpdate->percent = $_percent;
                    $TUpdate->hot = $request->input('hot');
                    $TUpdate->saleprice=$check_product->getPrice()['saleprice'];
                    $TUpdate->discount=$check_product->getPrice()['discount'];
                   

                    
    				$TUpdate->save();
    				$request->session()->flash("success","Chỉnh sản phẩm  thành công sản phẩm:" . $check_product->name );
    				return redirect()->back();
    			}

    		}
    		$this->View['cid_cate']=DTCate::whereRaw("alias IN ('tivi-led','tu-lanh','may-giat','gia-dung','loa') ")->pluck("name",'id');

    		$this->View['data']= Online::find($id);
    		
    		return view("admin.online.edit",$this->View);
    }
    public function lists(Request $request){
        $this->View['data_list']=Online::orderBy("id","DESC")->get();
        
        
        if($request->input("change_value")){
            $nhom=$request->input("nhom",1);

            
            if((int)$nhom==1){
                $data=Online::whereRaw("cid_cate IN (8,3,18,9,28)")->get();
            }
                
                foreach($data as $d){
                    $myproduct=DTProduct::find($d->cid_product);

                    if(!empty($myproduct['id']) ){

                        $gift=$myproduct->Gift();
                        $TUpdate = Online::find($d->id);
                        $TUpdate->saleprice=$myproduct->getPrice()['saleprice'];
                        $TUpdate->discount=$myproduct->getPrice()['discount'];
                        
                      
                        $TUpdate->save();
                    }
                }
              //  dd('s');

        }
        return view("admin.online.lists",$this->View);
    }
    public function removed($id){
    	$remove=Online::find($id);
    	$remove->delete();
    }
    
}
