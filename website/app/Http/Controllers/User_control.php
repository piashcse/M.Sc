<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;



use App\User_model;
use Session;

class User_control extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       return view('register_fo.registation');       // show blade page
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
         

           $name = $request->input('name');
            $email = $request->input('email');
             $password =$request->input('password');

               $this->validate($request, [
                  'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',

                 
               ]);






                User_model::  insert(
                  ['name'=>$name,'email'=>$email,'password'=>bcrypt($password),'remember_token'=>str_random(60),'created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]
             );


               Session::flash('flash_message_regist', 'successfully added!');        //after show message task comepleted

            return redirect()->back();
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
