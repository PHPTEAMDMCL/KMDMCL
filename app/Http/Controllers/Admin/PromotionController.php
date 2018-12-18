<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Read\Product as DTProduct;
use App\Model\Read\Cate as DTCate;

use App\Model\Write\Y2018\Promotion;
use App\Http\Requests;
use Validator;
use Image;
use App;

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
    
}
