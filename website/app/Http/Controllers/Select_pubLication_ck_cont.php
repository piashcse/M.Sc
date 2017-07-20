<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;     //for eror data show 

use App\Http\Requests;

use Session;
use App\Model_read_bd;
use App\Model_read_sports;
use App\Model_read_international;
use App\Model_read_economy;

class Select_pubLication_ck_cont extends Controller
{
  
   public function show(Request $request)
    {

    	  //publication data

            $id1=$request->input('publication');
              $id2=$request->input('unpublication');    //take textfiled data     

             if($id1!=null){

              			  foreach($id1 as $data1)
              			    {
              			     

              			         $user =  Model_read_bd::find($data1);

                          
                                  $user->pub = "1";
                            

                                  $user->save();      



              			     //   DB::table('bd')->where('id',  $data1 )->update(array('pub' => 1));          

              			     // echo  " $data1 <br>"; 
              			    } 

         
           //
              }
              elseif ( $id2!=null) {
          	
    	  //Unpublication data	    
         

                  			  foreach($id2 as $data2)
                  			    {
                  			      

                  			       $user =  Model_read_bd::find($data2);

                              
                                       $user->pub = "0";
                                

                                      $user->save(); 

                  			       // DB::table('bd')->where('id',  $data1 )->update(array('pub' => 0));

                  			      // echo  " $data2 <br>"; 
                  			    } 
                       
         //

            }


         Session::flash('flash_message_publication_data', 'Task successfull');		 

        return redirect()->back();   

    }

     public function show2(Request $request)
    {

        //publication data

            $id1=$request->input('publication');
              $id2=$request->input('unpublication');

         if($id1!=null){

                        foreach($id1 as $data1)
                          {
                           

                               $user =  Model_read_international::find($data1);

                            
                                    $user->pub = "1";
                              

                                    $user->save();      



                           //   DB::table('bd')->where('id',  $data1 )->update(array('pub' => 1));          

                           // echo  " $data1 <br>"; 
                          } 

         
           //
              }
              elseif ( $id2!=null) {
            
        //Unpublication data      
         

                              foreach($id2 as $data2)
                                {
                                  

                                   $user =  Model_read_international::find($data2);

                                  
                                           $user->pub = "0";
                                    

                                          $user->save(); 

                                   // DB::table('bd')->where('id',  $data1 )->update(array('pub' => 0));

                                  // echo  " $data2 <br>"; 
                                } 
                                             
         //

                 }


         Session::flash('flash_message_publication_data', 'Task successfull');     

        return redirect()->back();   

    }

     public function show3(Request $request)
    {

        //publication data

            $id1=$request->input('publication');
              $id2=$request->input('unpublication');

            if($id1!=null){

                          foreach($id1 as $data1)
                            {
                             

                                 $user =  Model_read_sports::find($data1);

                              
                                      $user->pub = "1";
                                

                                      $user->save();      



                             //   DB::table('bd')->where('id',  $data1 )->update(array('pub' => 1));          

                             // echo  " $data1 <br>"; 
                            } 

         
           //
                }
                elseif ( $id2!=null) {
                  
        //Unpublication data      
         

                          foreach($id2 as $data2)
                            {
                              

                               $user =  Model_read_sports::find($data2);

                              
                                       $user->pub = "0";
                                

                                      $user->save(); 

                               // DB::table('bd')->where('id',  $data1 )->update(array('pub' => 0));

                              // echo  " $data2 <br>"; 
                            } 
                                         
                           //

                 }


         Session::flash('flash_message_publication_data', 'Task successfull');     

        return redirect()->back();   

    }

     public function show4(Request $request)
    {

        //publication data

            $id1=$request->input('publication');
              $id2=$request->input('unpublication');

          if($id1!=null){

                          foreach($id1 as $data1)
                            {
                             

                                 $user =  Model_read_economy::find($data1);

                              
                                      $user->pub = "1";
                                

                                      $user->save();      



                             //   DB::table('bd')->where('id',  $data1 )->update(array('pub' => 1));          

                             // echo  " $data1 <br>"; 
                            } 

         
           //
              }
              elseif ( $id2!=null) {
                
            //Unpublication data      
         

                              foreach($id2 as $data2)
                                {
                                  

                                   $user =  Model_read_economy::find($data2);

                                  
                                           $user->pub = "0";
                                    

                                          $user->save(); 

                                   // DB::table('bd')->where('id',  $data1 )->update(array('pub' => 0));

                                  // echo  " $data2 <br>"; 
                                } 
                       
         //

                }


         Session::flash('flash_message_publication_data', 'Task successfull');     

        return redirect()->back();   

    }








}
