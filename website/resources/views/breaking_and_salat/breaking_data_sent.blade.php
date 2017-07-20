@extends('master2')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Breaking News Insertion</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST"  action="{{ url('/breking_news_data_post') }}">
                        {{ csrf_field() }}

                      

                          <div class="form-group{{ $errors->has('news') ? ' has-error' : '' }}">
                            <label for="news" class="col-md-4 control-label">Breaking News</label>

                            <div class="col-md-6">
                              <textarea class="form-control" rows="5" id="des" name="news"></textarea>

                                @if ($errors->has('news'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('news') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-bell-o"></i> Update
                                </button>
                            </div>
                        </div>

                       <div class="col-md-12">
                            @if(Session::has('flash_message_insert_beaking_news'))
                            <div class="alert alert-success">
                                <center><h3>{{ Session::get('flash_message_insert_beaking_news') }}<h3></center>
                                {{ Session::forget('flash_message_insert_beaking_news') }}
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
