@extends('master2')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Salat time Insertion</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST"  action="{{ url('/salat_time_data_post') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('fozor') ? ' has-error' : '' }}">
                            <label for="fozor" class="col-md-4 control-label">Fozor</label>

                            <div class="col-md-6">
                                <input id="fozor" type="text" class="form-control" name="fozor" value="{{ old('fozor') }}">

                                @if ($errors->has('fozor'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fozor') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('zohor') ? ' has-error' : '' }}">
                            <label for="zohor" class="col-md-4 control-label">Zohor</label>

                            <div class="col-md-6">
                                <input id="zohor" type="text" class="form-control" name="zohor" value="{{ old('zohor') }}">

                                @if ($errors->has('zohor'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('zohor') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('asor') ? ' has-error' : '' }}">
                            <label for="asor" class="col-md-4 control-label">Asor</label>

                            <div class="col-md-6">
                                <input id="asor" type="text" class="form-control" name="asor" value="{{ old('asor') }}">

                                @if ($errors->has('asor'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('asor') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('magrib') ? ' has-error' : '' }}">
                            <label for="magrib" class="col-md-4 control-label">Magrib</label>

                            <div class="col-md-6">
                                <input id="magrib" type="text" class="form-control" name="magrib" value="{{ old('magrib') }}">

                                @if ($errors->has('magrib'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('magrib') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('esa') ? ' has-error' : '' }}">
                            <label for="esa" class="col-md-4 control-label">Esa</label>

                            <div class="col-md-6">
                                <input id="esa" type="text" class="form-control" name="esa" value="{{ old('esa') }}">

                                @if ($errors->has('esa'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('esa') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                       

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-clock-o"></i> Update 
                                </button>
                            </div>
                        </div>

                       <div class="col-md-12">
                            @if(Session::has('flash_message_insert_salat'))
                            <div class="alert alert-success">
                                <center><h3>{{ Session::get('flash_message_insert_salat') }}<h3></center>
                                {{ Session::forget('flash_message_insert_salat') }}
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
