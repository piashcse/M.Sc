@extends('master2')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Business add Insert</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" action="{{ url('/busines_add_data_post') }}">
                        {{ csrf_field() }}

                         <div class="form-group{{ $errors->has('id') ? ' has-error' : '' }}">
                            <label for="id" class="col-md-4 control-label">ID</label>

                            <div class="col-md-6">
                                <input id="id" type="text" class="form-control" name="id" value="{{ old('id') }}">

                                @if ($errors->has('id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
                            <label for="file" class="col-md-4 control-label">File</label>

                            <div class="col-md-6">
                                <input id="file" type="file" class="form-control" name="file" value="{{ old('file') }}">

                                @if ($errors->has('file'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('file') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                       


                        


                         
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-building-o"></i> Insert 
                                </button>
                            </div>
                        </div>

                       <div class="col-md-12">
                            @if(Session::has('flash_message_file_insert'))
                            <div class="alert alert-success">
                                <center><h3>{{ Session::get('flash_message_file_insert') }}<h3></center>
                                {{ Session::forget('flash_message_file_insert') }}
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
