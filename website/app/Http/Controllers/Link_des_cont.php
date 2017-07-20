<?php

namespace App\Http\Controllers;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;     //for eror data show 

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Model_db_data;
use DB;
use App\Http\Controllers\Controller;

use App\Model_read_bd;
use App\Model_beraking_news;
use App\Model_salat_time;

use App\Model_read_sports;
use App\Model_read_international;
use App\Model_read_economy;
use App\Business_add_model;



class Link_des_cont extends Controller
{
     public function show1($id)
    {
       $users = Model_read_bd::where('id','=',$id)->get();       // show specific data when user clcik by link id with mysql  
                                                                      // result

        $users7 = Model_salat_time::where('id','=','1')->get();  
        $users8 =Model_beraking_news::where('id','=','1')->get();  

      
        $users9 = Business_add_model::where('id','<','2')->get();  
        $users10 = Business_add_model::where('id','>','1')->get(); 


        return view('link_page.link_des_page')->with('data1', $users)->
                with('salat',  $users7)->with('breaking', $users8)->
                with('add1_2',  $users9)->with('add3_4', $users10);
     

    }
     public function show2($id)
    {
       $users = Model_read_international::where('id','=',$id)->get();       // show specific data when user clcik by link id with mysql  
                                                                      // result
        $users7 = Model_salat_time::where('id','=','1')->get();  
        $users8 =Model_beraking_news::where('id','=','1')->get();  

      
        $users9 = Business_add_model::where('id','<','2')->get();  
        $users10 = Business_add_model::where('id','>','1')->get(); 


        return view('link_page.link_des_page')->with('data1', $users)->
                with('salat',  $users7)->with('breaking', $users8)->
                with('add1_2',  $users9)->with('add3_4', $users10);
     

    }
     public function show3($id)
    {
       $users = Model_read_sports::where('id','=',$id)->get();       // show specific data when user clcik by link id with mysql  
                                                                      // result
          $users7 = Model_salat_time::where('id','=','1')->get();  
        $users8 =Model_beraking_news::where('id','=','1')->get();  

      
        $users9 = Business_add_model::where('id','<','2')->get();  
        $users10 = Business_add_model::where('id','>','1')->get(); 


        return view('link_page.link_des_page')->with('data1', $users)->
                with('salat',  $users7)->with('breaking', $users8)->
                with('add1_2',  $users9)->with('add3_4', $users10);
     

    }
     public function show4($id)
    {
       $users = Model_read_economy::where('id','=',$id)->get();       // show specific data when user clcik by link id with mysql  
                                                                      // result
         $users7 = Model_salat_time::where('id','=','1')->get();  
        $users8 =Model_beraking_news::where('id','=','1')->get();  

      
        $users9 = Business_add_model::where('id','<','2')->get();  
        $users10 = Business_add_model::where('id','>','1')->get(); 


        return view('link_page.link_des_page')->with('data1', $users)->
                with('salat',  $users7)->with('breaking', $users8)->
                with('add1_2',  $users9)->with('add3_4', $users10);
     

    }
}
