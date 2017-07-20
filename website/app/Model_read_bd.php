<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Model_read_bd extends Model
{
     protected $table="bd";
    protected $primaryKey="id";

    // protected $fillable=['id','name','po'];

     public $timestamps = false;
}
