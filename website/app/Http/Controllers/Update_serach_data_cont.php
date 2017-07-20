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

use Image;

use Auth;
use App\Model_read_bd;

use App\Model_read_sports;
use App\Model_read_international;
use App\Model_read_economy;

class Update_serach_data_cont extends Controller
{
     public function show1(Request $request){

  

         $id = $request->input('id');
     	
          $title = $request->input('title');
           $name = $request->input('name');
            $des = $request->input('des');
             $time =$request->input('time');
              $publication = $request->input('pub');
               $position = $request->input('position');       //take textfiled data      
                $table = $request->input('table');
                
              
      
          
            if($table=="bd"){
                    
                   $user =  Model_read_bd::find($id);

                    $user->title =$title;
                     $user->name =$name;
                      $user->des = $des;
                       $user->pub = $publication;                  //update data from text filed
                        $user->time=$time;
                         $user->show_view_specific =$position;

                       $user->save();      
            }else if($table=="international"){

                       $user =  Model_read_international::find($id);

                        $user->title =$title;
                         $user->name =$name;
                          $user->des = $des;
                           $user->pub = $publication;
                            $user->time=$time;                            //update data from text filed
                             $user->show_view_specific =$position;

                              $user->save();      
            }else if($table=="sports"){

                   $user =  Model_read_sports::find($id);

                  $user->title =$title;
                   $user->name =$name;
                    $user->des = $des;
                     $user->pub = $publication;                         //update data from text filed
                      $user->time=$time;
                       $user->show_view_specific =$position;

                       $user->save();        

            }

            else if($table=="economy"){

                    $user = Model_read_economy::find($id);

                  $user->title =$title;
                   $user->name =$name;
                    $user->des = $des;
                     $user->pub = $publication;
                      $user->time=$time;                                 //update data from text filed
                       $user->show_view_specific =$position;

                       $user->save();      

            }



        



          return view('search_fol.search_data');   


	    
	}

}
