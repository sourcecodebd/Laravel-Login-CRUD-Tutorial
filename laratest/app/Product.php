<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /* protected $table = null; */
    protected $primaryKey = "product_id";

    public $timestamps = false;
    /* const CREATED_AT = null;
       const UPDATED_AT = null; 
    */
}
