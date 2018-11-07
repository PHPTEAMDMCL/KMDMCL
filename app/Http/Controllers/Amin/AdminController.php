<?php

namespace App\Http\Controllers\Amin;

    use App\Http\Controllers\Controller;

    //model
    use App\Model\Webmaster;
    use Illuminate\Http\Request;
    use Illuminate\Support\MessageBag;
    use App\Http\Requests;

    use Redirect;
    use Auth;
    use Validator;

class AdminController extends Controller
{
    //
    public function index(){
    	return view("admin.login",['title'=>'Login Admin']);
    }
    public function postlogin(Request $request){
        $validater=Validator::make($request->all(),[
            "username"=>"required",
            "password"=>"required"
        ],[
            "username.required"=>"Vui lòng nhập username.",
            "password.required"=>"Vui lòng nhập password"
        ]);

        if($validater->fails()){
            return redirect()->back()->withErrors($validater)->withInput();
        }else{
                $username = $request->input('username');
                $password = $request->input('password');
                $user=Webmaster::getUser($username,$password);
              
                if($user != 'null'){
                    if($user[0]->role==1){
                         return Redirect::to('/');
                    
                    }else{

                        $request->session()->flash("success","persimiss denied");
                        return redirect()->back();
                    }
                }else{

                        $request->session()->flash("success","username or password wrong");
                        return redirect()->back();
                    }    
                   
                
                
        }
        
    }
}
