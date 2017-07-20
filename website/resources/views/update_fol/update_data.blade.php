@extends('master2')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Update data</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" action="{{ url('/update_page_post') }}">
                        {{ csrf_field() }}
                 @foreach ($data1 as $udata)


                      <div class="form-group{{ $errors->has('id') ? ' has-error' : '' }}">
                            <label for="Id" class="col-md-4 control-label">Id</label>

                            <div class="col-md-6">
                                <input id="id" type="text" class="form-control" name="id" value="{{$udata->id}}">

                              
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="Title" class="col-md-4 control-label">Title</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" value="{{$udata->title}}">

                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="Name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{$udata->name}}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('time') ? ' has-error' : '' }}">
                            <label for="time" class="col-md-4 control-label">Time</label>

                            <div class="col-md-6">
                                <input id="time" type="text" class="form-control" name="time" value="{{$udata->time}}">

                                @if ($errors->has('time'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('time') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('pub') ? ' has-error' : '' }}">
                            <label for="publication" class="col-md-4 control-label">Publication</label>

                            <div class="col-md-6">
                                <label class="radio-inline">

										    <input type="radio" name="pub" value="1" >Yes
										    </label>
										    <label class="radio-inline">
										      <input type="radio" name="pub" value="0">NO
										    </label>
                                          <label class="radio-inline"><p style="color:green;">   @if (($udata->pub) == 1)   

                                                 publication
                                            @else
                                             unpublication
                                             @endif</p></label>
                                         
                                @if ($errors->has('pub'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pub') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('position') ? ' has-error' : '' }}">
                            <label for="position" class="col-md-4 control-label">Choose position</label>

                            <div class="col-md-6">
                                <div class="form-group">
										      <label for="sel1">Select list (select one):</label>&nbsp&nbsp {{$udata->show_view_specific}}
										      <select class="form-control" id="position" name="position">
										        <option value="1">1</option>
										        <option value="l2">l2</option>
										        <option value="R2">R2</option>
										        <option value="R3">R3</option>
										         <option value="Rlis3">Rlis3</option>
										          <option value="l4">l4</option>
										           <option value="R4">R4</option>
										        

										      </select>

                                @if ($errors->has('position'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('position') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('table') ? ' has-error' : '' }}">
                            <label for="table" class="col-md-4 control-label">Table choose</label>

                            <div class="col-md-6">
                               <div class="form-group">
										      <label for="sel1">Select list (select one): </label>
										      <select class="form-control" id="table" name="table">
										        <option value="bd">Bnagladesh</option>
										        <option value="internation">Internation</option>
										        <option value="sports">Sports</option>
										        <option value="economy">Economy</option>
										         <option value="entertainment">Entertainment</option>
										          <option value="science">Science</option>
										        
										        

										      </select>

                                @if ($errors->has('table'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('table') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                          <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
                            <label for="file" class="col-md-4 control-label">File</label>

                            <div class="col-md-6">
                                <input id="file" type="file" class="form-control" name="file" value="{{ old('file') }}">
                            </br>
                            <img src="{{ URL::to('/images/'.$udata->img) }}" alt="Smiley face" width="140" height="140" >

                                @if ($errors->has('file'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('file') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                          <div class="form-group{{ $errors->has('des') ? ' has-error' : '' }}">
                            <label for="des" class="col-md-4 control-label">Description</label>

                            <div class="col-md-6">
                              <textarea class="form-control" rows="5" id="des" name="des" >{{$udata->des}} </textarea>

                                @if ($errors->has('des'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('des') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
              @endforeach
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="glyphicon glyphicon-floppy-disk"></i> Update 
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
