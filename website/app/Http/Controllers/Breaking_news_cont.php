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

use App\Model_beraking_news;

use Auth;
use Session;

class Breaking_news_cont extends Controller
{
     public function show1(){

        return view('breaking_and_salat.breaking_data_sent');     //show blade page 


   }
    
    public function show2(Request $request){

       try
        {
    
          $news = $request->input('news');                     //take textfiled data        
          

           $this->validate($request, [
                 
                  'news' => 'required'                   //just validation cheak
                
                 
              ]);


          $user =  Model_beraking_news::find(1);        //data search then   save data

           
                 $user->name =$news;

                 $user->save();      
     
           



            Session::flash('flash_message_insert_beaking_news', 'Task successfully added!');   //message after complete task

         }
        catch (NotFoundHttpException $e)
        {
            return Response::view('errors.missing', [], 404);   //for eror data show 

        }

            return redirect()->back();


	     
	}

}
