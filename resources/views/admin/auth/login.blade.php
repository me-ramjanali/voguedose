@extends('admin.layouts.login_layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-push-4 col-xs-12 sign-box" style="margin-top: 91.1429px;">
            <div class="panel panel-default pale-panel-border-top">
                <div class="panel-heading text-center">
                    <h3 class="nm np">
                        <img src="{{ URL::asset('images/logo.png') }}" alt="">
                    </h3>
                </div>
                <div class="panel-body">
                    <br>
                    <form class="form" role="form" method="POST" action="{{ url('admin/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <input id="username" type="username" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username">

                            @if ($errors->has('username'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('username') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <input id="password" type="password" class="form-control" name="password" placeholder="Password">

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <button type="submit" class="center btn btn-vog btn-lg btn-block">
                                <i class="fa fa-btn fa-sign-in"></i> Login
                            </button>
                        </div>
                    </form>
                    <div class="text-right">
                        <small><a class="text-danger" href="{{ url('admin/password/reset') }}">Forgot Password?</a><small>
                    </small>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection