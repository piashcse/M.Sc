<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


use DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class Data_sentCont extends Controller
{

	public function show(){
        $data=Input::all();

       


         $image = Input::file('file');
				        $input['imagename'] = time().'.'.$image->getClientOriginalExtension();  //image name 

	      dd($input['imagename']);			        

		//dd($data);
	}
  
}
