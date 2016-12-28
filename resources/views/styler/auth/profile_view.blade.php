@extends('styler.layouts.app')

@section('content')
<!-- Page content -->
<div id="page-content-wrapper">
    <div class="container-fluid">
        @if(Session::has('message'))
            <p class="alert alert-{{ Session::get('msg_class') }}">{{ Session::get('message') }}</p>
        @endif
        <form id="profile" method="post" action="{{ URL::to('styler/update_profile') }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <!-- row -->
            <div class="row">
                <div class="profile">
                    <div class="col-md-12 profile">
                        <div class="cover-footer">
                            <div class="google-panel">
                                <div class="panel panel-danger contacts">
                                    <div class="panel-heading">
                                        <div class="cover-picture"></div>
                                        <div class="profile-line">
                                            <div class="profile-picture">
                                                @if($user_info->picture != '')
                                                    <img src="{{ URL::asset('uploads/styler_picture/'.$user_info->picture) }}" class="img-responsive" alt="avatar">
                                                @else
                                                    <img src="{{ URL::asset('images/avatars/female-avatar.png') }}" class="img-responsive" alt="avatar">
                                                @endif
                                            </div>
                                        </div>
                                        <hr />
                                        <div>
                                            Change Picture 
                                            <input type="file" name="picture" id="picture" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #row -->

            <!-- #row -->
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 vertical-tab">
                    <div class="table-responsive">
                        <table class="my-profile-info table table-bordered">
                            <tbody>
                                <tr>
                                    <th valign="middle">Name:</th>
                                    <td><input name="name" id="name" class="form-control" type="text" value="{{ $user_info->name }}" /></td>
                                </tr>
                                <tr>
                                    <th valign="middle">User Name:</th>
                                        <td><input name="username" id="username" class="form-control" type="text" value="{{ $user_info->username }}" /></td>
                                </tr>
                                <tr>
                                    <th valign="middle">Email:</th>
                                    <td><input name="email" id="email" class="form-control" type="text" value="{{ $user_info->email }}" /></td>
                                </tr>
                                <tr>
                                    <th valign="middle">Password</th>
                                    <td><input name="password" id="password" class="form-control" type="password" /></td>
                                </tr>
                                <tr>
                                    <th valign="middle">Confirm Password</th>
                                    <td><input name="re_password" id="re_password" class="form-control" type="password" /></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="profile-button text-right">
                        <button id="update" type="submit" class="btn btn-success">Update</button>
                        <button type="button" onclick="history.back()" class="btn btn-danger">Cancel</button>
                    </div>
                </div>
            </div>
            <!-- #row -->
        </form>
    </div>
</div>
<!-- # page-content-wrapper -->
@include('styler.auth.js.profile_update_js')
@endsection
