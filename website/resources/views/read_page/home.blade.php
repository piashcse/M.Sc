@extends('master')

@section('title', '71')



@section('content')
    



<div class="bs-example">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Carousel indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>   
        <!-- Wrapper for carousel items -->
        <div class="carousel-inner">
            <div class="item active">

                 @foreach ($data5 as $udata)
                  <img src="{{ URL::to('/images/'.$udata->img) }}" width="900" height="742"  alt="Second Slide">
                           <div data-u="caption" data-t="1" data-3d="1" style="position:absolute;top:-50px;left:125px;width:350px;height:30px;z-index:0;background-color:rgba(235,81,0,0.5);font-size:20px;color:#ffffff;line-height:30px;text-align:center;">time lined layer animation</div>
                             @endforeach
            </div>
            <div class="item">
               @foreach ($data6 as $udata)
                <img src="{{ URL::to('/images/'.$udata->img) }}" width="900" height="742"  alt="Second Slide">
                  @endforeach
            </div>
            <div class="item">
                 @foreach ($data12 as $udata)
                  <img src="{{ URL::to('/images/'.$udata->img) }}" width="900" height="742"  alt="Second Slide">
                  @endforeach
            </div>
            
        </div>
        <!-- Carousel controls -->
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
</div>



               
						</br>

          </br>


           <!--content 1 middle -->
               <div class="sp0">


                     <div class="sp1">

<div id="board"><p style="text-align:center; padding: 5px;">BANGLADESH</p></div>

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

                          <div id="board"><p style="text-align:center; padding: 5px;">INTERNATIONAL</p></div>

                   <div class="ani_right">         
             <table style="width:700px margin:10px; padding:10px">
               @foreach ($data2 as $udata)
                <tr>
                   
                      <td><a href="{{ URL::to('link_data_international/' .  $udata->id) }}"> <h4><div class="title_name"><p style="color:black;">{{$udata->title}}</p></div></h4>
                   <div class="img_lef"><img src="{{ URL::to('/images/'.$udata->img) }}" alt="Smiley face" width="140" height="140" align="left"></div><p style="color:black;">{{$udata->name}}</p><span class="label label-info">Details</span></a></td>


                  
                    </tr>

                     @endforeach
            </table>

              </div>
                    



                      </div>  




               </div>   



                <!--content 1 middle -->
               <div class="sp0">


                     <div class="sp1">
                <div id="board"><p style="text-align:center; padding: 5px;">ENTERTAINMENT</p></div>
                          <div class="ani_left">
                        <table style="width:700px margin:10px; padding:10px">
               @foreach ($data3 as $udata)
                <tr>
                   
                    <td><a href="{{ URL::to('link_data_sports/' .  $udata->id) }}"> <h4><div class="title_name"><p style="color:black;">{{$udata->title}}</p></div></h4>
                   <div class="img_lef"><img src="{{ URL::to('/images/'.$udata->img) }}" alt="Smiley face" width="140" height="140" align="left"></div><p style="color:black;">{{$udata->name}}</p><span class="label label-info">Details</span></a></td>


                  
                    </tr>

                     @endforeach
            </table>
          </div>





                      </div>  

                       <div class="sp2">
<div id="board"><p style="text-align:center; padding: 5px;">ECONOMY</p></div>
                <div class="ani_right">
             <table style="width:700px margin:10px; padding:10px">
               @foreach ($data4 as $udata)
                <tr>
                   
                      <td><a href="{{ URL::to('link_data_economy/' .  $udata->id) }}"> <h4><div class="title_name"><p style="color:black;">{{$udata->title}}</p></div></h4>
                   <div class="img_lef"><img src="{{ URL::to('/images/'.$udata->img) }}" alt="Smiley face" width="140" height="140" align="left"></div><p style="color:black;">{{$udata->name}}</p><span class="label label-info">Details</span></a></td>


                  
                    </tr>

                     @endforeach
            </table>

          </div>
                    



                      </div>  




               </div>   







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


