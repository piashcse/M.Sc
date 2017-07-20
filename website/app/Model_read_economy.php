<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Model_read_economy extends Model
{
     protected $table="economy";
    protected $primaryKey="id";

    // protected $fillable=['id','name','po'];

     public $timestamps = false;
}
