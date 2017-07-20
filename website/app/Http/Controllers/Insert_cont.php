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
use Session;

use App\Model_read_bd;
use App\Model_read_international;
use App\Model_read_sports;
use App\Model_read_economy;

class Insert_cont extends Controller
{




   public function show00(){

        return view('nav.bd');   

          if (Auth::check()) {
              return view('nav.bd');     //cheak and find vaule then show blade  page 

        }


         else{

          return view('auth.login');
        
        } 


   }
    
    public function show(Request $request){
    
          $title = $request->input('title');
           $name = $request->input('name');
            $des = $request->input('des');
             $time =$request->input('time');
              $publication = $request->input('pub');       //textfiled input
               $position = $request->input('position');      
                $table =$request->input('table');


                 $this->validate($request, [
                   'title' => 'required',
                 
                  'des' => 'required',
                  'time'=>  'required',              //validation cheak
                   'pub' => 'required',
                 'position' => 'required',

                 
               ]);
             
       // dd( $request->all());

         $image = Input::file('file');
	      $input['imagename'] = time().'.'.$image->getClientOriginalExtension();  //image name 

	        $destinationPath = public_path('/thumbnail');             // thumbnail folder  add small image 
			 $img = Image::make($image->getRealPath());
		   $img->resize(100, 100, function ($constraint) {
				     $constraint->aspectRatio();
			 			})->save($destinationPath.'/'.$input['imagename']);
 
				        $destinationPath = public_path('/images');               // images folder add big image
			 	        $image->move($destinationPath, $input['imagename']);


           // $t="12:32, Nov 01, 2016";


            if($table=="bd"){         //textfiled cheak what admin choose then go blow if and else save data
                    
                     Model_read_bd::  insert(
                  ['title' =>  $title, 'name' => $name, 'time' =>$time, 'des' =>  $des, 'pub' =>  $publication, 'show_view_specific' =>$position ,
                  'img' =>  $input['imagename']]
             );

            }else if($table=="international"){

              Model_read_international:: insert(
                  ['title' =>  $title, 'name' => $name, 'time' =>$time , 'des' =>  $des, 'pub' =>  $publication, 'show_view_specific' =>$position ,
                  'img' =>  $input['imagename']]
             );

            }else if($table=="sports"){

              Model_read_sports:: insert(
                  ['title' =>  $title, 'name' => $name, 'time' =>$time , 'des' =>  $des, 'pub' =>  $publication, 'show_view_specific' =>$position ,
                  'img' =>  $input['imagename']]
             );

            }

            else if($table=="economy"){

              Model_read_economy:: insert(
                  ['title' =>  $title, 'name' => $name, 'time' =>$time , 'des' =>  $des, 'pub' =>  $publication, 'show_view_specific' =>$position ,
                  'img' =>  $input['imagename']]
             );

            }

       





            Session::flash('flash_message_insert', 'Task successfully added!');        //after show message task comepleted

            return redirect()->back();


	     // dd($input['imagename']);			        

		//dd($data);
	}


}
