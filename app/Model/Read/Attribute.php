<?php

namespace App\Model\Read;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{

    protected $connection = 'mysql2';
    protected $table="aa_comp_attr";
    protected $primary='id'; 
    protected $timestamp=false;
}
				