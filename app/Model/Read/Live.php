<?php

namespace App\Model\Read;

use Illuminate\Database\Eloquent\Model;

class Live extends Model
{
    
    protected $connection = 'mysql2';
    protected $table="ww_live";
}
