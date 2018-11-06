<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Product;
class LiveChild extends Model
{
    //
    protected $table="ww_live_child";


    protected static function getJson($live){

		
		$us=LiveChild::where('cid_live','=',$live)->get();
		
		$data_product = array();
		foreach ($us as $items) {
			$key = $items['name'];
			
			$products = (array)json_decode($items['json']);

			$number = 0;

			foreach ($products as $value) {
				$sap_code = $value->sap;
				$discountonline = $value->price;
				$product = Product::getProduct($sap_code);
				
				if(!empty($product))
				{
					$data_product[$key][$number] = $product;
					// $data_product[$key][$number]['discountonline'] = $discountonline;
					$number++;

				}
			}

		}
		
		return $data_product;
	}
    
}
