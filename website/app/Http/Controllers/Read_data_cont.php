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

class Read_data_cont extends Controller
{
    public function show1()
    {


      // add data specific blck in html and show in blade page 

     $users00 = Model_read_bd::where('show_view_specific','=','1')->where('pub','=','1')->get(); 



     $users1 = Model_read_bd::where('show_view_specific','=','l2')->where('pub','=','1')->get();       

     $users2 = Model_read_bd::where('show_view_specific','=','R2')->where('pub','=','1')->get();  

     $users3 = Model_read_bd::where('show_view_specific','=','R3')->where('pub','=','1')->get();  

     $users4 = Model_read_bd::where('show_view_specific','=','Rlis3')->where('pub','=','1')->get();  

     $users5 = Model_read_bd::where('show_view_specific','=','l4')->where('pub','=','1')->get();  

     $users6 = Model_read_bd::where('show_view_specific','=','R4')->where('pub','=','1')->get();  


     $users7 = Model_salat_time::where('id','=','1')->get();  

      $users8 =Model_beraking_news::where('id','=','1')->get();  

      
     $users9 = Business_add_model::where('id','<','2')->get();  
       $users10 = Business_add_model::where('id','>','1')->get();  

    return view('read_page.bdpage')->with('data00', $users00)->
    with('data1',  $users1)->with('data2',  $users2)->
    with('data3',  $users3)->with('data4',  $users4)->
    with('data5',  $users5)->with('data6',  $users6)->
    with('salat',  $users7)->with('breaking', $users8)->
    with('add1_2',  $users9)->with('add3_4', $users10);
            
       
    }

     public function show2()
    {

       // add data specific blck in html and show in blade page 
     $users00 = Model_read_international::where('show_view_specific','=','1')->where('pub','=','1')->get(); 



     $users1 = Model_read_international::where('show_view_specific','=','l2')->where('pub','=','1')->get();       

     $users2 = Model_read_international::where('show_view_specific','=','R2')->where('pub','=','1')->get();  

     $users3 = Model_read_international::where('show_view_specific','=','R3')->where('pub','=','1')->get();  

     $users4 = Model_read_international::where('show_view_specific','=','Rlis3')->where('pub','=','1')->get();  

     $users5 =Model_read_international::where('show_view_specific','=','l4')->where('pub','=','1')->get();  

     $users6 = Model_read_international::where('show_view_specific','=','R4')->where('pub','=','1')->get();  


     $users7 = Model_salat_time::where('id','=','1')->get();  

      $users8 =Model_beraking_news::where('id','=','1')->get();  

     

    $users9 = Business_add_model::where('id','<','2')->get();  
       $users10 = Business_add_model::where('id','>','1')->get();  

    return view('read_page.international')->with('data00', $users00)->
    with('data1',  $users1)->with('data2',  $users2)->
    with('data3',  $users3)->with('data4',  $users4)->
    with('data5',  $users5)->with('data6',  $users6)->
    with('salat',  $users7)->with('breaking', $users8)->
    with('add1_2',  $users9)->with('add3_4', $users10);
            

    }

     public function show3()
    {


// add data specific blck in html and show in blade page 

     $users00 = Model_read_sports::where('show_view_specific','=','1')->where('pub','=','1')->get(); 



     $users1 = Model_read_sports::where('show_view_specific','=','l2')->where('pub','=','1')->get();       

     $users2 = Model_read_sports::where('show_view_specific','=','R2')->where('pub','=','1')->get();  

     $users3 = Model_read_sports::where('show_view_specific','=','R3')->where('pub','=','1')->get();  

     $users4 = Model_read_sports::where('show_view_specific','=','Rlis3')->where('pub','=','1')->get();  

     $users5 = Model_read_sports::where('show_view_specific','=','l4')->where('pub','=','1')->get();  

     $users6 = Model_read_sports::where('show_view_specific','=','R4')->where('pub','=','1')->get();  


     $users7 = Model_salat_time::where('id','=','1')->get();  

      $users8 =Model_beraking_news::where('id','=','1')->get();  
      

  

    $users9 = Business_add_model::where('id','<','2')->get();  
       $users10 = Business_add_model::where('id','>','1')->get();  

    return view('read_page.sportspage')->with('data00', $users00)->
    with('data1',  $users1)->with('data2',  $users2)->
    with('data3',  $users3)->with('data4',  $users4)->
    with('data5',  $users5)->with('data6',  $users6)->
    with('salat',  $users7)->with('breaking', $users8)->
    with('add1_2',  $users9)->with('add3_4', $users10);
            

    }

     public function show4()
    {
// add data specific blck in html and show in blade page 

     $users00 = Model_read_economy::where('show_view_specific','=','1')->where('pub','=','1')->get(); 



     $users1 = Model_read_economy::where('show_view_specific','=','l2')->where('pub','=','1')->get();       

     $users2 = Model_read_economy::where('show_view_specific','=','R2')->where('pub','=','1')->get();  

     $users3 = Model_read_economy::where('show_view_specific','=','R3')->where('pub','=','1')->get();  

     $users4 = Model_read_economy::where('show_view_specific','=','Rlis3')->where('pub','=','1')->get();  

     $users5 = Model_read_economy::where('show_view_specific','=','l4')->where('pub','=','1')->get();  

     $users6 = Model_read_economy::where('show_view_specific','=','R4')->where('pub','=','1')->get();  


     $users7 = Model_salat_time::where('id','=','1')->get();  

      $users8 =Model_beraking_news::where('id','=','1')->get();  

  

   $users9 = Business_add_model::where('id','<','2')->get();  
       $users10 = Business_add_model::where('id','>','1')->get();  

    return view('read_page.economypage')->with('data00', $users00)->
    with('data1',  $users1)->with('data2',  $users2)->
    with('data3',  $users3)->with('data4',  $users4)->
    with('data5',  $users5)->with('data6',  $users6)->
    with('salat',  $users7)->with('breaking', $users8)->
    with('add1_2',  $users9)->with('add3_4', $users10);
            

    }


      public function show5()
    {

// add data specific blck in html and show in blade page 

  $users1 = Model_read_bd::where('show_view_specific','=','R2')->orWhere('show_view_specific','=','l2')->where('pub','=','1')->get();  

  $users2 = Model_read_international::where('show_view_specific','=','R2')->orWhere('show_view_specific','=','l2')->where('pub','=','1')->get();  

  $users3 = Model_read_sports::where('show_view_specific','=','R2')->orWhere('show_view_specific','=','l2')->where('pub','=','1')->get();  

  $users4 = Model_read_economy::where('show_view_specific','=','R2')->orWhere('show_view_specific','=','l2')->where('pub','=','1')->get();  


$users5 = Model_read_bd::where('show_view_specific','=','R3')->where('pub','=','1')->paginate(1);
 $users6 = Model_read_international::where('show_view_specific','=','R3')->where('pub','=','1')->paginate(1);

$users12 = Model_read_sports::where('show_view_specific','=','R3')->where('pub','=','1')->paginate(1);


 

      $users7 = Model_salat_time::where('id','=','1')->get();  
      $users8 =Model_beraking_news::where('id','=','1')->get();  

  

       $users9 = Business_add_model::where('id','<','2')->get();  
       $users10 = Business_add_model::where('id','>','1')->get();  

    return view('read_page.home')->with('salat',  $users7)->with('breaking', $users8)->
    with('add1_2',  $users9)->with('add3_4', $users10)->
     with('data1',  $users1)->with('data2',  $users2)->
    with('data3',  $users3)->with('data4',  $users4)->with('data12',  $users12)->
     with('data5',  $users5)->with('data6',  $users6);
     
            

    }


   
}
