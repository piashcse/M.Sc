<?php

namespace App\Http\Controllers;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;     //for eror data show 

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Business_add_model;

class Business_add_cont extends Controller
{
    public function show1(){

      return view('Add.business_add_insert');       // show blade page

    }

    public function show2(Request $request)
    {

       $id = $request->input('id');
       $image = $request->file('file');           //textfiled file


         $this->validate($request, [
                   'id' => 'required',
                 
                  'file' => 'required',         //just validation cheak
               
                

                 
               ]);
      
    

       if( $id !=null){

       	       $input['imagename'] = time().'.'.$image->getClientOriginalExtension();  //image name 
			  $destinationPath = public_path('/add_f');               // images folder add big image
				$image->move($destinationPath, $input['imagename']);
                    
                   $user =  Business_add_model::find($id);

                   
                     $user->name = $input['imagename'] ;

                       $user->save();      
         }

				      

        Session::flash('flash_message_file_insert', 'Task successfully added!');     //after show message task comepleted

            return redirect()->back();
    

		//$data="$image1.$image2";
		//return  $data;
      			        
				        	
    }
}
