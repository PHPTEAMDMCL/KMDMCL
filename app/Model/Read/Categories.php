<?php

namespace App\Model\Read;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{

    protected $connection = 'mysql2';
    protected $table="pro_product";
    protected $primary='id'; 
    protected $timestamp=true;
}
				