<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Model_read_sports extends Model
{
     protected $table="sports";
    protected $primaryKey="id";

    // protected $fillable=['id','name','po'];

     public $timestamps = false;
}
