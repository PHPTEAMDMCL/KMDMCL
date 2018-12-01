<?php

namespace App\Model\Read;

use Illuminate\Database\Eloquent\Model;

class ProductSupplier extends Model
{
    //
    protected $connection = 'mysql2';
    protected $table="pro_supplier_product";
    protected $primary='id';
    protected $timestamp=true;
    
}
