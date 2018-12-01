<?php

namespace App\Model\Read;

use Illuminate\Database\Eloquent\Model;

class Cate extends Model
{

    protected $connection = 'mysql2';
    protected $table="pro_categories";
    protected $primary='id'; 
    protected $timestamp=false;
}
				