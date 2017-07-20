<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Regsi_model;

class Regsi_cont extends Controller
{


	 public function show0(){

         return view('reg.registat');  



	 }
     public function show1(Request $request){
    
          $email = $request->input('email');
           $name = $request->input('name');
            $password_data= $request->input('password');
            


                 $this->validate($request, [
                   'email' => 'required',
                 
                  'name' => 'required',
               
                   'password' => 'required'
                

                 
               ]);
             
      


              Regsi_model:: insert(
                  [ 'name' => $name, 'email' =>$email , 'password' => bcrypt($password_data), 'remember_token'=>bcrypt(rand())

                  ]
             );

          



         //   Session::flash('flash_message_insert', 'Task successfully added!');

            return redirect()->back();


	     // dd($input['imagename']);			        

		//dd($data);
	}

}
