<?php

namespace App\Model\Write;

use Illuminate\Database\Eloquent\Model;
use DB;
class Promotionproduct extends Model
{
   
    protected $connection = 'mysql';
    protected $table="promotion_product";
    protected $primary='id';
    public $timestamps = true;
    public function Cate(){
        $result=\App\Model\Read\Cate::find($this->cid_cate);
       
    	return $result->toArray();
    }
    public function Product(){
    	return $this->belongsTo( \App\Model\Read\Product::class,"cid_product")->getResults();
    }
    protected static function getDanhDach($tenchuongtrinh){
       $_sql_promo = "SELECT * FROM promotion_product WHERE name_promotion like '".$tenchuongtrinh."' ORDER BY oder ASC";
        $result = DB::connection("mysql")->select($_sql_promo);
        return $result;
    }
}
