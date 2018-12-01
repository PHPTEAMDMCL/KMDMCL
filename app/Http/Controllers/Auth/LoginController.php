<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Validator;
use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function login(){
        return view('auth.login');
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

                     
                if(Auth::attempt(['username'=>$username,'password'=>$password])){

                    return redirect("/admin/index/index");
                }else{

                        $request->session()->flash("success","username or password wrong");
                        return redirect()->back();
                    }    
                   
                
                
        }
    }
}
