<?php

namespace App\Model\Write\Y2018;

use Illuminate\Database\Eloquent\Model;

class Tivi extends Model
{
   
    protected $connection = 'mysql';
    protected $table="y2018_tivi";
    protected $primary='id';
    public $timestamps = true;
    public function Cate(){
        $result=\App\Model\Read\Cate::find($this->cid_cate);
       
    	return $result->toArray();
    }
    public function Product(){
    	return $this->belongsTo( \App\Model\Read\Product::class,"cid_product")->getResults();
    }
    public function Series(){
       $result=\App\Model\Read\Series::find($this->cid_series);
       
        return $result->toArray(); 
    }
}
