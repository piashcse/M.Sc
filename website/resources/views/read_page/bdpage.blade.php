@extends('master')

@section('title', '71')



@section('content')
    
 <div class="sp00"> <!--content main middle -->


                           @foreach ($data00 as $udata)  

                              <div class="ani_left">
                               
													<div class="banner"> <a  href="{{ URL::to('link_data_bd/' .  $udata->id) }}"><div class="img_lef00"><img src="{{ URL::to('/images/'.$udata->img) }}" alt="Smiley face" width="300" height="142" align="left"></div><h3><p style="color:black;">{{$udata->title}}</p> </h3>
													 <p style="color:black;">{{$udata->name}}</p>  <span class="label label-info">Details</span></a></div>

                               </div>
												
													
                              @endforeach

                  </div>

                  </br>
                

		

           <!--content 1 middle -->
               <div class="sp0">


                     <div class="sp1">
                          <div class="ani_left">
                        <table style="width:700px margin:10px; padding:10px">

							 @foreach ($data1 as $udata)
							 
								<tr>
									 
									  <td><a href="{{ URL::to('link_data_bd/' .  $udata->id) }}"> <h4><div class="title_name"><p style="color:black;">{{$udata->title}}</p></div></h4>
									 <div class="img_lef"><img src="{{ URL::to('/images/'.$udata->img) }}" alt="Smiley face" width="140" height="140" align="left"></div><p style="color:black;">{{$udata->name}}</p><span class="label label-info">Details</span></a></td>


									
									  </tr>
									

									   @endforeach
						</table>
                             </div>



                      </div>  

                       <div class="sp2">
                                 <div class="ani_right">
                          
						 <table style="width:700px margin:10px; padding:10px">
							 @foreach ($data2 as $udata)
								<tr>
									 
									    <td><a href="{{ URL::to('link_data_bd/' .  $udata->id) }}"> <h4><div class="title_name"><p style="color:black;">{{$udata->title}}</p></div></h4>
									 <div class="img_lef"><img src="{{ URL::to('/images/'.$udata->img) }}" alt="Smiley face" width="140" height="140" align="left"></div><p style="color:black;">{{$udata->name}}</p><span class="label label-info">Details</span></a></td>


									
									  </tr>

									   @endforeach
						</table>
                                  </div>



                      </div>  




               </div>                  



                </br>
               

               <!--content 2 middle -->
         <div class="sp0">


                     <div class="sp1">
                             <div class="ani_left">
                      
                              <table style="width:700px margin:10px; padding:10px">
							 @foreach ($data3 as $udata)
								<tr>
									 
									    <td><a href="{{ URL::to('link_data_bd/' .  $udata->id) }}"> <h4><div class="title_name"><p style="color:black;">{{$udata->title}}</p></div></h4>
									 <div class="img_lef"><img src="{{ URL::to('/images/'.$udata->img) }}" alt="Smiley face" width="140" height="140" align="left"></div><p style="color:black;">{{$udata->name}}</p><span class="label label-info">Details</span></a></td>


									
									  </tr>

									   @endforeach
						</table>
                    
                          </div>



                      </div>  

                       <div class="sp2">


                         				<!--list view by table row -->
											
												<table rules="rows" style=" margin:10px; padding:10px">
												  @foreach ($data4 as $udata)
														<tr>
															<td><a href="{{ URL::to('link_data_bd/' .  $udata->id) }}"> <div class="img_lef2"><img src="{{ URL::to('/images/'.$udata->img) }}"  width="40px" height="40px" align="left"></a>
															</div> </td>
															<td><a href="{{ URL::to('link_data_bd/' .  $udata->id) }}"> <p style="color:black;">{{$udata->name}}</p></a> </td>
														</tr>
												 @endforeach		 
												</table>



                      </div>  




               </div>              
                 </br>
                 
    <!--content 3 middle -->
         <div class="sp0">


                     <div class="sp1">
                                 <div class="ani_left">
                         <table style="width:700px margin:10px; padding:10px">
							 @foreach ($data5 as $udata)
								<tr>
									 
									    <td><a href="{{ URL::to('link_data_bd/' .  $udata->id) }}"> <h4><div class="title_name"><p style="color:black;">{{$udata->title}}</p></div></h4>
									 <div class="img_lef"><img src="{{ URL::to('/images/'.$udata->img) }}" alt="Smiley face" width="140" height="140" align="left"></div><p style="color:black;">{{$udata->name}}</p><span class="label label-info">Details</span></a></td>


									
									  </tr>

									   @endforeach
						</table>

					</div>





                      </div>  

                       <div class="sp2">

                     <div class="ani_right"
                      <table style="width:700px margin:10px; padding:10px">
							 @foreach ($data6 as $udata)
								<tr>
									 
									    <td><a href="{{ URL::to('link_data_bd/' .  $udata->id) }}"> <h4><div class="title_name"><p style="color:black;">{{$udata->title}}</p></div></h4>
									 <div class="img_lef"><img src="{{ URL::to('/images/'.$udata->img) }}" alt="Smiley face" width="140" height="140" align="left"></div><p style="color:black;">{{$udata->name}}</p><span class="label label-info">Details</span></a></td>


									
									  </tr>

									   @endforeach
						</table>
                       </div>


                      </div>  




               </div>                 

               </br>
                
						







@endsection



@section('sidebar')



       @foreach ($add1_2 as $udata)
								
									 
						
	<img src="{{ URL::to('/add_f/'.$udata->name) }}" alt="Smiley face" width="250" height="400">
 </br> </br>
								
									
	   @endforeach



  <div class="table-responsive">
  	<img src="{{ URL::to('/img2/salat.JPG') }}" alt="Smiley face" width="250" height="100">
 </br>
  <table class="table">
    <thead>
      <tr>
     
        <th>Name</th>
		<th>Time </th>
   
      </tr>
    </thead>
    <tbody>
       @foreach ($salat as $udata)
      <tr>
      
        <td>Fozor</td>
		<td>{{$udata->fozor}}</td>
     
      </tr>
    </tbody>

<tbody>
  
      <tr>
      
        <td>Zohor</td>
		<td>{{$udata->zohor}}</td>
     
      </tr>
    </tbody>
<tbody>
      <tr>
      
        <td>Asor</td>
		<td>{{$udata->asor}}</td>
     
      </tr>
    </tbody>

    <tbody>
      <tr>
      
        <td>Magrib</td>
		<td>{{$udata->magrib}}</td>
     
      </tr>
    </tbody>

    <tbody>
      <tr>
      
        <td>Esa</td>
		<td>{{$udata->esa}}</td>
     
      </tr>
           @endforeach
    </tbody>
  </table>
  </div>

 </br> </br>
  @foreach ($add3_4 as $udata)
								
									 
						
	<img src="{{ URL::to('/add_f/'.$udata->name) }}" alt="Smiley face" width="250" height="400">
 </br> </br>
								
									
	   @endforeach



	   

  
@endsection





@section('breking_news')




<marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">

     @foreach ($breaking as $udata)

           {{$udata->name}}
       @endforeach

</marquee>



@endsection


