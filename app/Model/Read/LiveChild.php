<?php

namespace App\Model\Read;

use Illuminate\Database\Eloquent\Model;
use App\Model\Read\Product;
use App\MrData;
class LiveChild extends Model
{
    //
    protected $connection = 'mysql2';
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
				$alone = $value->bold;
				$point = $value->bold1;
				$product = Product::getProduct($sap_code);
				
				if(!empty($product))
				{
					$data_product[$key][$number] = $product;
					$data_product[$key][$number]['alone'] = $alone;
					$data_product[$key][$number]['point'] = $point;
					
					$number++;

				}
			}

		}
		
		return $data_product;
	}
    
}
