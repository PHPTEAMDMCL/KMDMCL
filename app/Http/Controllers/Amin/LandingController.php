<?php

namespace App\Http\Controllers\Amin;

    use App\Http\Controllers\Controller;

    //model
    use App\Model\Webmaster;

    // write
    use App\Model\User;
    use App\Model\Write\KmLive;
    use App\Model\Write\KmLiveChild;
    use App\Model\Write\KmGift;

    use Illuminate\Http\Request;
    use Illuminate\Support\MessageBag;
    use App\Http\Requests;

    use Redirect;
    use Auth;
    use Validator;

class LandingController extends Controller
{
    public function addlive(){
        return view('admin.landing.addlive',["title"=>" Thêm chương trình landing page"]);
    }
    public function addlivepost(Request $request){
            
        $validater=Validator::make($request->all(),[
            "name"=>"required|unique:km_live",
            
        ],[
            "name.required"=>"Vui lòng nhập tên chương trình",
            "name.unique" => " Chương trình đã tồn tại"        
        ]);

        if($validater->fails()){
            return redirect()->back()->withErrors($validater)->withInput();

        }else{
                
                $datetime = date('Y-m-d H:i:s', time());
                $kmlive = new KmLive;

                $kmlive->name       = $request->name;
                $kmlive->status     = $request->status; 
                $kmlive->created_at = $datetime;
                $kmlive->updated_at = $datetime;
                $kmlive->save();
                $request->session()->flash("success","Thêm chương trình thành công");
                return redirect()->back();
               
            
        }
    }
    public function addlivechild(){
        $getlive = KmLive::getLive();
        
        return view('admin.landing.addlivechild',['getlive'=>$getlive,'title'=>'Thêm chương trình con landing page']);
    }
    public function addlivechildpost(Request $request){
        $validater=Validator::make($request->all(),[
            "title"=>"required",
            'cid_live'=>'required'
        ],[
            "title.required"=>"Vui lòng nhập tiêu đề",
            'cid_live.required'=>'Vui lòng chọn chương trình'
        ]);

        if($validater->fails()){
            return redirect()->back()->withErrors($validater)->withInput();
        }else{
            $sap    = $request->input('sap');
            $price  = $request->input('price');
            $text   = $request->input('text');


            $datetime = date('Y-m-d H:i:s', time());
            $kmlive = new KmLiveChild;

            $kmlive->cid_live   = $request->cid_live;
            $kmlive->title      = $request->title; 
            $kmlive->created_at = $datetime;
            $kmlive->updated_at = $datetime;
            $kmlive->save();

            if($sap != 'null'){
                for($i=0;$i<count($sap);$i++ ){
                    $gift = new KmGift;
                    $gift->cid_live = $request->cid_live;
                    $gift->cid_child = $kmlive->id;
                    $gift->sap      = $sap[$i];
                    $gift->price    = $price[$i];
                    $gift->text     = $text[$i];
                    $gift->save();
                }
            }



            $request->session()->flash("success","Thêm chương trình con thành công");
            return redirect()->back();
        }
    }

     public function listactive(){
        $live = KmLive::where('status','=','1')->get();
        $xx =array();
        foreach ($live as $key=> $value) {
            $_xx = array();
            $_xx['name'] = $value['name'];
            $_xx['id']  = $value['id'];
            $_xx['child'] = KmLiveChild::where('cid_live','=',$value['name'])->get();
           $xx[] =$_xx;
         
        }
      
        return view('admin.landing.listactive',['xx'=>$xx,'title'=>'Danh sách chương trình đang chạy']);
     }
    public function listunactive(){
        $liveun = KmLive::where('status','=','0')->get();
        $xx =array();
        foreach ($liveun as $key=> $value) {
            $_xx = array();
            $_xx['name'] = $value['name'];
            $_xx['id']  = $value['id'];
            $_xx['child'] = KmLiveChild::where('cid_live','=',$value['name'])->get();
           $xx[] =$_xx;
         
        }
        
        
        return view('admin.landing.listunactive',['xx'=>$xx,'title'=>'Danh sách chương trình đang chạy']);
    }


    public function editlive($id){
        $live = KmLive::find($id);
        return view('admin.landing.editlive',['live'=>$live,'title'=>'Sửa chương trình']);
    }
    public function editlivepost(Request $request, $id){
        $lv = KmLive::find($id);
        $validater=Validator::make($request->all(),[
            "name"=>"required"
        ],[
            "name.required"=>"Vui lòng nhập tên chương trình"        
        ]);

        if($validater->fails()){
            return redirect()->back()->withErrors($validater)->withInput();

        }else{
                
                $datetime = date('Y-m-d H:i:s', time());
                $lv->name       = $request->name;
                $lv->status     = $request->status; 
                $lv->updated_at = $datetime;
                $lv->save();
                $request->session()->flash("success","Sửa chương trình con thành công");
                return redirect()->back();
               
            
        }
    }
    public function editlivechild($id){
        $getlive = KmLive::getLive();
        $live = KmLiveChild::find($id);
        
        $gift = KmGift::where('cid_live','=',$live->cid_live)->where('cid_child','=',$live->id)->get();
        return view('admin.landing.editlivechild',['live'=>$live,'getlive'=>$getlive,'gift'=>$gift,'title'=>'Sửa chương trình']);
    }

    public function editlivechildpost(Request $request,$id){
        $live = KmLiveChild::find($id);
        $validater=Validator::make($request->all(),[
            "title"=>"required"
        ],[
            "title.required"=>"Vui lòng nhập tiêu đề"
        ]);

        if($validater->fails()){
            return redirect()->back()->withErrors($validater)->withInput();
        }else{
            $sap    = $request->input('sap');
            $price  = $request->input('price');
            $text   = $request->input('text');


            $datetime = date('Y-m-d H:i:s', time());

            $live->title      = $request->title; 
            $live->updated_at = $datetime;
            $live->save();
            $del = KmGift::where('cid_child','=',$live->id)->delete();
            if($sap != 'null'){
                for($i=0;$i<count($sap);$i++ ){
                    $gift = new KmGift;
                    $gift->cid_live = $request->cid_live;
                    $gift->cid_child = $live->id;
                    $gift->sap      = $sap[$i];
                    $gift->price    = $price[$i];
                    $gift->text     = $text[$i];
                    $gift->save();
                }
            }



            $request->session()->flash("success","Thêm chương trình con thành công");
            return redirect()->back();
        }
    }
    public function removelivechild($id){
         $live = KmLiveChild::find($id);
         $remove = KmGift::where('cid_child','=',$live->id)->delete();
         $live->delete();
         return Redirect::to('/admin/landing/list-active');
    }
    public function removegift($id){
        $gift = KmGift::find($id)->delete();
         return redirect()->back();
    }
    
}
