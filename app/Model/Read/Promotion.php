<?php

namespace App\Model\Read;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    //
    protected $connection = 'mysql2';
    protected $table="pro_promotion_product";
    protected $primary='id';
    protected $timestamp=false;
}