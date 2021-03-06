<?php

namespace App\Model\Write;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    protected $connection = 'mysql';
    protected $table="users";


    protected static function getUser($username)
		{
			try 
			{
				$us=User::where('username','=',$username)->get();
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
