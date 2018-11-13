<?php

namespace App\Model\Write;

use Illuminate\Database\Eloquent\Model;

class KmLiveChild extends Model
{
   
    protected $connection = 'mysql';
    protected $table="km_live_child";
    public $timestamps = false;

    protected static function getProgram(){
   //  	$listEx=KmLiveChild::join('KmLive','KmLive.name','=','KmLiveChild.cid_live')
			// 		->join('KmGift','KmLiveChild.id','=','KmGift.cid_child')
			// 		->where('pro_product.sap_code','=',$sap_code)->
			// 		->select()->distinct()->OrderBy('pro_supplier_product.discount','ASC')->first();
			// return $listEx;
    }
    
}
