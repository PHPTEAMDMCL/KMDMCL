<?php

namespace App\Model\Read;

use Illuminate\Database\Eloquent\Model;
use DB;
class Product extends Model
{
    //
    protected $connection = 'mysql2';
    protected $table="pro_product";
    protected $primary='id';
    protected $timestamp=false;

   protected static function getProduct($sap_code)
		{
			
			$listEx=Product::join('pro_supplier_product','pro_product.id','=','pro_supplier_product.cid_product')
					->join('pro_categories','pro_categories.id','=','pro_product.cid_cate')
					->where('pro_product.sap_code','=',$sap_code)
					->select('pro_product.name','pro_product.id as myid','pro_product.sap_code','pro_product.cid_series','pro_product.is_icon','pro_product.is_price','pro_product.is_flash_sale','pro_product.is_sale','pro_product.is_model','pro_product.new_description','pro_supplier_product.discount','pro_supplier_product.saleprice','pro_supplier_product.is_promotion','pro_supplier_product.id AS cid_res','pro_categories.name AS namecate')->distinct()->OrderBy('pro_supplier_product.discount','ASC')->first();
	
			
			return $listEx;
				
		}
		protected static function getProductCate($id){
			$sql_query="
					SELECT DISTINCT a.id AS myid,a.name,a.code,a.cid_series,a.isprice,a.is_icon,a.is_model,a.is_price,a.is_flash_sale,a.is_sale,a.new_description,
						a.is_red_day,a.is_double_price,a.is_million,
						check_coupon(a.id,a.cid_cate,2) AS coupons,
						check_coupon(a.id,a.cid_cate,1) AS discountcoupons,
						b.discount,
						b.saleprice,
						b.id as cid_res,
						b.is_promotion,
						c.name AS namecate
					FROM (  pro_product AS a INNER JOIN pro_supplier_product AS b ON a.id = b.cid_product )
											 INNER JOIN pro_categories AS c ON c.id=a.cid_cate 
											  
					WHERE   
								(b.stock_num > 0 OR (b.stock_num = 0 AND a.is_sample='0' ) )
							    AND a.is_status_cate='1' AND a.status='1' AND b.status='1'  AND 
								a.cid_cate=$id 					
				";
			return $result= DB::connection("mysql2")->select($sql_query);

		}
		protected static function getProductCateParent($id){
			$sql="
					SELECT DISTINCT  a.id AS myid,a.name,a.cid_series,a.isprice,a.is_icon,a.is_model,a.is_price,a.is_flash_sale,a.is_sale,a.new_description,
						a.is_red_day,a.is_double_price,a.is_million,
						check_coupon(a.id,a.cid_cate,2) AS coupons,
						check_coupon(a.id,a.cid_cate,1) AS discountcoupons,
						b.discount,
						b.saleprice,
						b.is_promotion,
						b.id AS cid_res,
						c.name AS namecate
					FROM (  pro_product AS a INNER JOIN pro_supplier_product AS b ON a.id = b.cid_product )
									INNER JOIN pro_categories AS c ON c.id=a.cid_cate
											  
					WHERE   
								(b.stock_num > 0 OR (b.stock_num = 0 AND a.is_sample='0' ) )
							    AND a.is_status_cate='1' AND a.status='1'  AND b.status='1'  AND b.cid_supplier='1' AND
								a.cid_cate=$id
					
				  	ORDER BY  a.id DESC

					LIMIT 8
				";
				return $result= DB::connection("mysql2")->select($sql);
		}
		public function Cate(){
			return $this->belongsTo(Cate::class,"cid_cate")->getResults();
		}
		public function getPrice(){
		
			$Product_Suppllier = $this->belongsTo(ProductSupplier::class,"id","cid_product")->getResults();
			if(!empty($Product_Suppllier['id'])){

				$Promotion= Promotion::whereRaw("cid_product={$Product_Suppllier['id']} and status='0' AND type_promo NOT IN(4,6)")->orderBy("type_promo","ASC")->first();
					if(!empty($Promotion['id'])){
						$Result= DB::connection("mysql2")->select("
								SELECT IF(b.is_sock='2',b.price_sock,get_price(b.id,b.discount)) AS discount,
								get_sale_price(b.id,b.saleprice) AS saleprice
								 FROM  pro_supplier_product AS b
								  WHERE b.id={$Product_Suppllier['id']} LIMIT 1");
						if(!empty($Result[0])){
								if($Result[0]->saleprice){
									
											return [
												"discount"=>$Result[0]->discount,
												"saleprice"=>$Result[0]->saleprice
											];
								}
						}
					}else{
						$Result= ProductSupplier::select("is_sock","price_sock")->where("id",$Product_Suppllier['id'])->first();
						
						if(!empty($Result['is_sock'])){
								if($Result['is_sock']=='2'){
									
											return [
												"discount"=>$Result['price_sock'],
												"saleprice"=>$Product_Suppllier['saleprice']
											];
									}
						}

					}


				return [
					"discount"=>$Product_Suppllier['discount'],
					"saleprice"=>$Product_Suppllier['saleprice']
				];

			}
			return null;
			
	}

	public function Gift(){
		$total_price=0;
		$result=array();
			$product_deal_flash= Promotion::whereRaw("cid_product={$this->id} and status='0' AND type_promo IN (1,5)")->first(); 

			if(empty($product_deal_flash)){
				$Product_Suppllier = $this->belongsTo(ProductSupplier::class,"id","cid_product")->getResults();

				$product=Promotion::whereRaw("cid_product={$this->id} and status='0' AND type_promo IN (2,3,4)")->orderBy("type_promo","ASC")->first(); 
			
					if(!empty($product['type_promo'])){
						$type_promo=$product['type_promo'];
						 if($type_promo=='2'){
				                $sql_online = "
				                    SELECT 
				                  		  d.description,d.price_gift,d.price_online,d.name
									FROM 
										 pro_promotion_product as c 
										 INNER JOIN promo_online as d ON d.id=c.cid_promotion
									WHERE 
									 d.active='1' AND c.type_promo='2'  AND d.description!=''
									AND c.cid_product={$Product_Suppllier['id']} LIMIT 1
				                ";
				                $data_product=DB::connection("mysql2")->select($sql_online);

				                if(!empty($data_product[0])){
				                	$data_product[0]=(array)$data_product[0];
				                	$total_price=$total_price+ (int)$data_product[0]['price_gift'];
				                	$result[]=array(
				                				"price_online"=>$data_product[0]['price_online'],
				                				"name"=>$data_product[0]['description'],
				                				"description"=>"",
				                				"order"=> $data_product[0]['name']);
				                	
				                }
				           
				              
				            }elseif($type_promo=='3'){
				                $sql_press = "
				                    SELECT 
					                    d.price_gift,d.price_online,
										d.description,d.name
									FROM 
											pro_promotion_product as c 
												INNER JOIN  promo_press as d ON d.id=c.cid_promotion
									WHERE   d.active='1' AND c.type_promo='3' AND d.description!=''
									AND c.cid_product={$Product_Suppllier['id']} 
				                ";
				                
				                 $data_product=DB::connection("mysql2")->select($sql_press);

				                if(!empty($data_product[0])){
				                	$data_product[0]=(array)$data_product[0];
				                	$total_price=$total_price+ (int) $data_product[0]['price_gift'];
				                	
				                	$result[]=array(
		                				"price_online"=>$data_product[0]['price_online'],
		                				"name"=>$data_product[0]['description'],
		                				"description"=>"",
		                				"order"=> $data_product[0]['name']
			                		);
				                }
				            //    return array("total"=>$total_price,"data"=>$result);

				            }elseif($type_promo=='4'){
				                $sql="
									SELECT
									c.id,
									d.price_gift,d.name,d.price_online,
									d.description,
									f.contentview,f.is_type,f.is_buy
									FROM 
										pro_promotion_product as c 
										INNER JOIN promo_text as d ON d.id=c.cid_promotion
										INNER JOIN promo_cidcode AS f ON d.code=f.code
									WHERE   d.active='1' AND c.type_promo='4'  AND d.description!=''
									AND c.cid_product={$Product_Suppllier['id']}
									ORDER BY f.is_type ASC
								";

								$data_product=DB::connection("mysql2")->select($sql);
								
				                if(!empty($data_product[0])){
				                	foreach ($data_product as $value) {
				                		$value=(array)$value;
				                		 $total_price=$total_price+(int)$value['price_gift'];
				                		
				             		
				                		$result[]=array(
				                					"id"=>$value['id'],
				                					"name"=>$value['contentview'],
				                					"description"=>$value['description'],
				                					'is_type'=>$value['is_type'],
				                					'is_buy'=>$value['is_buy'],
				                					'price_gift'=>$value['price_gift'],
				                					'price_online'=>$value['price_online'],
				                					"order"=> $value['name']
				                				);
				                	}
				                	
				                		
				                }
				              
				                return array("total"=>$total_price,"data"=>$result);
				            }
				                
							
					}
				}

			
		         	if(!empty($result)){
		         		
		         		 return array("total"=>$total_price,"data"=>$result);
		         	}
		          
			return null;
	}
}
