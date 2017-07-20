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

use App\Model_salat_time;

use Auth;
use Session;

class Salat_time_cont extends Controller
{
     public function show1(){

        return view('breaking_and_salat.salat_time_in');   //show blade page 


   }
    
    public function show2(Request $request){
    
          $fozor = $request->input('fozor');
           $zohor = $request->input('zohor');
            $asor = $request->input('asor');
             $magrib =$request->input('magrib');         //take textfiled data        
              $esa = $request->input('esa');
               

                $this->validate($request, [
                 
                  'fozor' => 'required|max:255',
                  'zohor' => 'required|max:255',
                  'asor' => 'required|max:255',
                  'magrib' => 'required|max:255',       //just validation cheak
                  'esa' => 'required|max:255',
                
                 
              ]);



        $user =  Model_salat_time::find(1);

            $user->fozor =$fozor;
             $user->zohor =$zohor;
              $user->asor = $asor;              //save textfiled data and it always overridde data base
               $user->magrib = $magrib;
                $user->esa= $esa;
                

                 $user->save();    

         




            Session::flash('flash_message_insert_salat', 'Task successfully added!');

            return redirect()->back();


	   
	}

}
