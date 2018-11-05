<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Webmaster extends Model
{
    //
    protected $table="tm_webmaster";


    protected static function getUser($username,$password)
		{
			try 
			{
				$us=Webmaster::where('username','=',$username)->where('password','=',md5($password))->get();
				if(count($us)==1)
				{
					return $us;
				}
				else
				{
					return 'null';
				}
			} 
			catch (Exception $e) 
			{
				return 'null';	
			}
		}
    
}
