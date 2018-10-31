<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table="test";
    protected $primary='id';
    protected $timestamp=true;
}
