@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create new group</div>

                <div class="panel-body">
                  <form class="form-horizontal" role="form" method="POST" action="{{ URL::to('/') }}/group/new">
                      {{ csrf_field() }}

                      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                          <label for="name" class="col-md-4 control-label">Group name</label>

                          <div class="col-md-6">
                              <input id="name" type="name" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                              @if ($errors->has('name'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('name') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <p>Needs to be improved</p>

                      <div class="form-group">
                          <div class="col-md-8 col-md-offset-4">
                              <button type="submit" class="btn btn-primary">
                                  Create group
                              </button>
                          </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
