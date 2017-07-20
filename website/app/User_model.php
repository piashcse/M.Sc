<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_model extends Model
{
    
    protected $table="users";
    protected $primaryKey="id";

    

     public $timestamps = false;
}
