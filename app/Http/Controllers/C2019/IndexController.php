<?php

namespace App\Http\Controllers\C2019;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //
    protected $View=[];
    public function index(){
    	$this->View['myname']=" hello lsdalsd";
    	return view("v2019.m01.index",$this->View);
    }
}
