<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Model_salat_time extends Model
{
    protected $table="salat_time";
    protected $primaryKey="id";

    protected $fillable=['fozor','zohor','asor','magrib','esa'];

     public $timestamps = false;
}
