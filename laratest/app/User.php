<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = "users_practice";
    protected $primaryKey = "user_id";

    public $timestamps = false;
    /* const CREATED_AT = null;
       const UPDATED_AT = null; 
    */
}
