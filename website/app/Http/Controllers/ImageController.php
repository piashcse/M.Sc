<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


use Image;

use Auth;
class ImageController extends Controller
{

	/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
  
    public function resizeImage()
    {

    	if (Auth::check()) {
    	return view('resizeImage');   //cheak and find vaule then accen this page 

        }


         else{

        	return view('auth.login');
        
        }	
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function resizeImagePost(Request $request)
    {

    // 

					    $this->validate($request, [
					    	'title' => 'required',
				            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
				        ]);

                        $title1=$request->input('title');

				        $image = $request->file('image');
				        $input['imagename'] = time().'.'.$image->getClientOriginalExtension();  //image name 
				     
				   
				        $destinationPath = public_path('/thumbnail');             // thumbnail folder  add small image 
				        $img = Image::make($image->getRealPath());
				        $img->resize(100, 100, function ($constraint) {
						    $constraint->aspectRatio();
						})->save($destinationPath.'/'.$input['imagename']);
 
				        $destinationPath = public_path('/images');               // images folder add big image
				        $image->move($destinationPath, $input['imagename']);

				       // $this->postImage->add($input);
                        // Auth::user()->name;
				        return  $title1;
      			        
				        	
    }

}