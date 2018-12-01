<?php


namespace App\Http\Controllers\C2018;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class AppController extends Controller
{
    // thong tin chung cho moi controller
    public $View=[];
    public function __contructor(){
    	$this->View['is_general']=true;
    }
}
