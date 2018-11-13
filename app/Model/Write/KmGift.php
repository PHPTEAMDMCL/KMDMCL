<?php

namespace App\Model\Write;

use Illuminate\Database\Eloquent\Model;

class KmGift extends Model
{
   
    protected $connection = 'mysql';
    protected $table="km_gift";
    public $timestamps = false;


   protected static function getLive(){
   		
   }
    
}
