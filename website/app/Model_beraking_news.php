<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Model_beraking_news extends Model
{
    protected $table="breaking_news";
    protected $primaryKey="id";

     protected $fillable=['id','name'];

     public $timestamps = false;
}
