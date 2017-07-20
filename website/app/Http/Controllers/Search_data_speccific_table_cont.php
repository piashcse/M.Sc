<?php

namespace App\Http\Controllers;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;     //for eror data show 

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;


use App\Model_read_bd;
use Auth;

use Session;
use App\Model_read_sports;
use App\Model_read_international;
use App\Model_read_economy;

class Search_data_speccific_table_cont extends Controller
{
    
    public function show00()
    {

    	
    	return view('search_fol.search_data');    //show blade page 
    }

     public function show1(Request $request)
    {

           $title=$request->input('title');
            $table=$request->input('table');    //take textfiled data       

          //  dd($table1);
  
              $this->validate($request, [
                 
                  'title' => 'required'        //just validation cheak
                
                 
              ]);

           $users;

           //user choose data only show by down programmg

           if($table=="bd"){
                    
                   $users = Model_read_bd::where('title', $title)->get();  


            

                if ($users->isEmpty()) {

                       Session::flash('flash_message_serach_not_match', 'Title didnot match please enter right data!');    
                           //show error when data donot find 

                        return view('search_fol.search_data');    //show blade page 
                     // echo "data not find";
                  }


                 

            }else if($table=="internation"){

            $users = Model_read_international::where('title', $title)->get();  

                   if ($users->isEmpty()) {

                       Session::flash('flash_message_serach_not_match', 'Title didnot match please enter right data!');    
                           //show error when data donot find 

                        return view('search_fol.search_data');    //show blade page 
                     // echo "data not find";
                  }  

            }else if($table=="sports"){

             $users = Model_read_sports::where('title', $title)->get();  


                    if ($users->isEmpty()) {

                       Session::flash('flash_message_serach_not_match', 'Title didnot match please enter right data!');    
                           //show error when data donot find 

                        return view('search_fol.search_data');    //show blade page 
                     // echo "data not find";
                  } 

            }

            else if($table=="economy"){

              $users = Model_read_economy::where('title', $title)->get();  



                      if ($users->isEmpty()) {

                       Session::flash('flash_message_serach_not_match', 'Title didnot match please enter right data!');    
                           //show error when data donot find 

                        return view('search_fol.search_data');    //show blade page 
                     // echo "data not find";
                  }

            }







       
          
         
        return view('update_fol.update_data')->with('data1', $users);

    }
}
