<?php

namespace App\Model\Write;

use Illuminate\Database\Eloquent\Model;

class KmLive extends Model
{
   
    protected $connection = 'mysql';
    protected $table="km_live";
    public $timestamps = false;


   protected static function getLive(){
   		$us = KmLive::where('status','=','1')->get();
   		return $us;
   }
    
}
