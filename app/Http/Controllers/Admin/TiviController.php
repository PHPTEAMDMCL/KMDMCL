<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Read\Product as DTProduct;
use App\Model\Read\Cate as DTCate;
use App\Model\Read\Series;

use App\Model\Write\Y2018\Tivi;

use Validator;

class TiviController extends Controller
{
    //
    protected $View=[];
    public function add(Request $request){
    		if($request->isMethod("post")){
    			$validater=Validator::make($request->all(),[
    				"cid_series"=>"required",
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

                    $check_survice = Tivi::where('cid_product','=',$check_product['id'])->first();
                    if(!empty($check_survice['cid_product'])){
                       $validater->errors()->add("cid_product","SAP tồn tại trong chương trình, Vui lòng kiểm tra lại.");
                        return redirect()->back()->withErrors($validater)->withInput(); 
                    }
    				$TNews= new Tivi();
    				$TNews->cid_series= $request->input("cid_series");
                    $TNews->cid_cate = $check_product->cid_cate;
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
    		$this->View['cid_series']=Series::whereRaw("name IN ('samsung','lg','sony','tcl') ")->pluck("name",'id');
    		
    		return view("admin.tivi.add",$this->View);	
    }
    public function edit($id,Request $request){
    		if($request->isMethod("post")){
    			$validater=Validator::make($request->all(),[
    				"cid_series"=>"required",
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
    				$TUpdate = Tivi::find($id);
    				$TUpdate->cid_series= $request->input("cid_series");
    				$TUpdate->cid_product=$check_product->id;
    				$TUpdate->cid_cate= $check_product->cid_cate;
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
    		$this->View['cid_series']=Series::whereRaw("name IN ('samsung','lg','sony','tcl') ")->pluck("name",'id');

    		$this->View['data']= Tivi::find($id);
    		
    		return view("admin.tivi.edit",$this->View);
    }
    public function lists(Request $request){
        if($search_id=$request->input("search_id")){
          
            $this->View['data_list']=Tivi::where("cid_product",$search_id)->orderBy("cid_cate","ASC")->paginate(20);
        }else{
            $this->View['data_list']=Tivi::orderBy("cid_cate","ASC")->paginate(20);
        }
    	
        if($request->input("change_value")){
            $nhom=$request->input("nhom",1);

            
            if((int)$nhom==1){
                $data=Tivi::whereRaw("cid_series IN (15,16,24,119)")->get();
            }
                
                foreach($data as $d){
                    $myproduct=DTProduct::find($d->cid_product);

                    if(!empty($myproduct['id']) ){

                        $gift=$myproduct->Gift();
                        $TUpdate = Tivi::find($d->id);
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
    	return view("admin.tivi.list",$this->View);	
    }
    public function removed($id){
    	$remove=Tivi::find($id);
    	$remove->delete();
    }
    
}
