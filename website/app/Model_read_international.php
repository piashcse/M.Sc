<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Model_read_international extends Model
{
     protected $table="international";
    protected $primaryKey="id";

    // protected $fillable=['id','name','po'];

     public $timestamps = false;
}
