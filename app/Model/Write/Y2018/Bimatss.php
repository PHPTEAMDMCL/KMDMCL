<?php

namespace App\Model\Write\Y2018;

use Illuminate\Database\Eloquent\Model;

class Bimatss extends Model
{
   
    protected $connection = 'mysql';
    protected $table="secret_samsung";
    protected $primary='id';
    public $timestamps = true;
    public function Cate(){
        $result=\App\Model\Read\Cate::find($this->cid_cate);
       
    	return $result->toArray();
    }
    public function Product(){
    	return $this->belongsTo( \App\Model\Read\Product::class,"cid_product")->getResults();
    }
    
}