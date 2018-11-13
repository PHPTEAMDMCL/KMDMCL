<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "Điện máy chợ lớn ";
        return redirect("https://dienmaycholon.vn");
        return view('welcome',['one'=>1,'two'=>'hello world']);
        
    }
}
