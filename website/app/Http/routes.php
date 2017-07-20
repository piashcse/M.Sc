<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::get('/', function () {
    return view('welcome');          // welcome page
});


Route::get('/ft', function () {
    return view('hy');          // welcome page
});


Route::get('/h1', function () {
    return view('h');                 //for log out then go this page
});


Route::get('/h2', function () {
      return response()->json(['name' => 'Abigail', 'state' => 'CA']);    //json data   in android
});



Route::get('register', ['as' => 'auth.register', 'uses' => 'Auth\AuthController@showRegistrationForm']);
Route::post('register', ['as' => 'auth.register', 'uses' => 'Auth\AuthController@register']);

 //for login page

Route::group(['middleware' => 'web'], function () {

		Route::auth();                                 

		Route::get('/home', 'HomeController@index');

});
///

Route::get('resizeImage', 'ImageController@resizeImage');                                           //image ulpad with thumbanil
Route::post('resizeImagePost',['as'=>'resizeImagePost','uses'=>'ImageController@resizeImagePost']);  





//  Read data for cont


Route::get('/bd','Read_data_cont@show1');    //all home page data show

Route::get('/inter','Read_data_cont@show2');
Route::get('/sport','Read_data_cont@show3');
Route::get('/economy','Read_data_cont@show4');


Route::get('/home-main','Read_data_cont@show5'); 









//



// Link_des_cont for cont

Route::get('link_data_bd/{id}','Link_des_cont@show1');     // data pass to controller
Route::get('link_data_international/{id}','Link_des_cont@show2');     // data pass to controller
Route::get('link_data_sports/{id}','Link_des_cont@show3');     // data pass to controller
Route::get('link_data_economy/{id}','Link_des_cont@show4');     // data pass to controller

//




//  Insert  for cont

Route::group(['middleware' => 'auth'], function () {


//Route::group(['middleware' => 'vali'], function () {
		Route::get('/bdpage_insert', 'Insert_cont@show00');   

		Route::post('/bdpage_insert_pos', 'Insert_cont@show');   

	//	});

});

//


 
//  Select_publication_ck for cont

Route::group(['middleware' => 'auth'], function () {

		Route::get('/chk_page','Select_publication_ck00_count@show'); 
		Route::get('/chk_page_international','Select_publication_ck00_count@show2'); 
		Route::get('/chk_page_sports','Select_publication_ck00_count@show3'); 
		Route::get('/chk_page_economy','Select_publication_ck00_count@show4'); 

		Route::post('/chk_page_post','Select_pubLication_ck_cont@show'); 
		Route::post('/chk_page_international_post','Select_pubLication_ck_cont@show2'); 
		Route::post('/chk_page_sports_post','Select_pubLication_ck_cont@show3'); 
		Route::post('/chk_page_economy_post','Select_pubLication_ck_cont@show4'); 

});

//


// Search data_ for cont

Route::group(['middleware' => 'auth'], function () {
		Route::get('/search_page','Search_data_speccific_table_cont@show00'); 

		Route::post('/search_page_post','Search_data_speccific_table_cont@show1'); 
});
//


// update data for cont

Route::group(['middleware' => 'auth'], function () {

       Route::post('/update_page_post','Update_serach_data_cont@show1'); 
       

});

//



//Breaking_news_ for cont

Route::group(['middleware' => 'auth'], function () {
        
        Route::get('/breking_news_data','Breaking_news_cont@show1'); 

		Route::post('/breking_news_data_post','Breaking_news_cont@show2'); 

});

//


// Salat_time for cont

Route::group(['middleware' => 'auth'], function () {

        Route::get('/salat_time_data','Salat_time_cont@show1'); 

		Route::post('/salat_time_data_post','Salat_time_cont@show2'); 

});

//


// Business_ad for cont

Route::group(['middleware' => 'auth'], function () {

        Route::get('/busines_add_data','Business_add_cont@show1'); 

		Route::post('/busines_add_data_post','Business_add_cont@show2'); 

});

//





Route::get('/error',function(){
   abort(404);                     //for error handling
});






Route::auth();

Route::get('/home', 'HomeController@index');


Route::group(['middleware' => 'auth'], function () {

		Route::get('/regi_use', 'User_control@index');   

		Route::post('/regi_use_pos', 'User_control@create');   


});