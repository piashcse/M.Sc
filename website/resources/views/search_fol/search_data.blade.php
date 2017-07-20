@extends('master2')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Search data</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST"  action="{{ url('/search_page_post') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="title" class="col-md-4 control-label">Title</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}">
                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                               
                            </div>
                        </div>

                       

                        <div class="form-group{{ $errors->has('table') ? ' has-error' : '' }}">
                            <label for="table" class="col-md-4 control-label">Table choose</label>

                            <div class="col-md-6">
                               <div class="form-group">
										      <label for="sel1">Select list (select one):</label>
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

                        

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="glyphicon glyphicon-search"></i> Search
                                </button>
                            </div>
                        </div>

                        <div class="col-md-12">
                            @if(Session::has('flash_message_serach_not_match'))
                            <div class="alert alert-danger">
                                <center><h3>{{ Session::get('flash_message_serach_not_match') }}<h3></center>
                                {{ Session::forget('flash_message_serach_not_match') }}
                            </div>
                        @endif
                    </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection
