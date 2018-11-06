<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table="pro_product";
    protected $primary='id';
    protected $timestamp=true;

   protected static function getProduct($sap_code)
		{
			
				$listEx=Product::join('pro_supplier_product','pro_product.id','=','pro_supplier_product.cid_product')
						->join('pro_categories','pro_categories.id','=','pro_product.cid_cate')
						->where('pro_product.sap_code','=',$sap_code)
						->select('pro_product.name','pro_supplier_product.discount','pro_supplier_product.saleprice','pro_supplier_product.is_promotion','pro_supplier_product.id AS cid_res','pro_categories.name AS namecate')
						->OrderBy('pro_supplier_product.discount','ASC')->get();
		
				
					return $listEx;
				
		}
}
