@extends('master2')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9 col-md-offset-2">
            <div class="panel panel-default">
              <div class="panel-heading">Publication and UnPublication</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST"  action="{{ url('/chk_page_economy_post') }}">
                        {{ csrf_field() }}

                        <div class="table-responsive">
								  <table id="datatable" class="table table-striped table-bordered">
                                      <thead>
								      <tr>
								       
								        <th>ID</th>
								        <th><center>Title</center></th>
                                        <th><center>Image</center></th>
								        <th>Publication</th>
								        <th>Publish</th>
								        <th>UnPublish</th>
								      </tr>
								    </thead>
								 
								    <tbody>
                                        @foreach ($data as $udata)
								      <tr>
								     
								        <td>{{$udata->id}}</td>
								        <td>{{$udata->title}}</td>
                                         <td><img src="{{ URL::to('/images/'.$udata->img) }}" alt="Smiley face" width="100" height="50" align="left"></td>
								       
								          <td>@if (($udata->pub) == 1)   

                                               <div class="alert alert-success">  Publication </div>
                                            @else
                                                <div class="alert alert-danger"> UnPublication </div>
                                             @endif
                                         </td>
								        <td><center> <input type="checkbox" name="publication[]" value="{{$udata->id}}" ></center></td>
								        <td><center><input type="checkbox" name="unpublication[]" value="{{$udata->id}}" ></center></td>
								      </tr>
                                       @endforeach  
								    </tbody>
								    		
								  </table>
					   </div>

                        

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-edit"></i> Update
                                </button>
                            </div>
                        </div>


                         <div class="col-md-12">
                            @if(Session::has('flash_message_publication_data'))
                            <div class="alert alert-success">
                                <center><h3>{{ Session::get('flash_message_publication_data') }}<h3></center>
                                {{ Session::forget('flash_message_publication_data') }}
                            </div>
                        @endif
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
