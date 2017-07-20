<?php

namespace App\Http\Controllers;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;     //for eror data show 

use Illuminate\Http\Request;

use App\Http\Requests;


use App\Model_db_data;
use DB;
use App\Http\Controllers\Controller;
use App\Model_read_bd;
use App\Model_read_sports;
use App\Model_read_international;
use App\Model_read_economy;

class Select_publication_ck00_count extends Controller
{
    


     public function show()
    {
        
      $users = Model_read_bd::get();                        
    

      return view('chek_fill.chek_all_data')->with('data', $users);    // update show in blade page for publication or unpublication
    }

    public function show2()
    {
        
      $users = Model_read_international::get();                        
    

      return view('chek_fill.chek_all_data_international')->with('data', $users);
    }                                                                                  // update show in blade page for publication or unpublication

    public function show3()
    {
        
      $users = Model_read_sports::get();                        
    

      return view('chek_fill.cheak_all_data_sport')->with('data', $users);             // update show in blade page for publication or unpublication
    }

    public function show4()
    {
        
      $users = Model_read_economy::get();                        
    

      return view('chek_fill.cheak_all_data_economy')->with('data', $users);   // update show in blade page for publication or unpublication
    }

}
