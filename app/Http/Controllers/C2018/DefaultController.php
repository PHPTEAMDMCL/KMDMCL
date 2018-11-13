<?php

namespace App\Http\Controllers\C2018;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Validator;
use App\Model\Product as DTProduct;
class DefaultController extends AppController
{
    //
 
    public function test(){
        
        
    	return view("v2018.m10.test",$this->View);
        
    }
    
}
