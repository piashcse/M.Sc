@extends('master')

@section('title', '71')



@section('content')
    
  <div class="sp00"> <!--content main middle -->

                           @foreach ($data1 as $udata)  
                               
													<div class="banner"> 
														<div class="img_lef00">
															<img src="{{ URL::to('/images/'.$udata->img) }}" alt="Smiley face" width="300" height="142" align="left">
														</div><h3><p style="color:black;">{{$udata->title}}</p> </h3>
													<br>
                                                       <p style="color:black;">{{ $udata->des }}</p>

													</div>


													
													
                              @endforeach

                  </div>

                  </br>
                  <hr>

		

         

               </br>
                  <hr>
						







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




<marquee behavior="scroll" direction="right" onmouseover="this.stop();" onmouseout="this.start();">

     @foreach ($breaking as $udata)

           {{$udata->name}}
       @endforeach

</marquee>



@endsection
