<?php

namespace App\Model\Write\Y2018;

use Illuminate\Database\Eloquent\Model;

class Grab extends Model
{
   
    protected $connection = 'mysql';
    protected $table="y2018_grab";
    protected $primary='id';
    public $timestamps = true;
    public function Cate(){
        $result=\App\Model\Read\Cate::find($this->cid_cate);
       
    	return $result->toArray();
    }
    public function Product(){
    	return $this->belongsTo( \App\Model\Read\Product::class,"cid_product")->getResults();
    }
    public function Promotion(){
        // $result=\App\Model\Write\Y2018\Promotion::find($this->cid_promotion);      
        // return $result->toArray();
        return $this->belongsTo( \App\Model\Write\Y2018\Promotion::class,"cid_promotion")->getResults();
    }
    
}