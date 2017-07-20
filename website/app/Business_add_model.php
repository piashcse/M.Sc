<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Business_add_model extends Model
{
    protected $table="business_add";
    protected $primaryKey="id";

     protected $fillable=['id','name'];

     public $timestamps = false;
}
