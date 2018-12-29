<?php

namespace App\Model\Read;

use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    //
    protected $connection = 'mysql2';
    protected $table="pro_series";
    protected $primary='id';
    public $timestamps=false;
}