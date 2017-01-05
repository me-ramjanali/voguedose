@extends('admin.layouts.app')

@section('content')
<!-- Page content -->
<div id="page-content-wrapper">
    @if(Session::has('message'))
        <p class="alert alert-success">{{ Session::get('message') }}</p>
    @endif
    @if(Session::has('error'))
        <p class="alert alert-danger">{{ Session::get('error') }}</p>
    @endif
    <!-- Breacrumb -->
    <div class="row csk-breadcrumb">
        <div class="col-xs-9">
            <h3 class="page-title">Total User:<span>{{ count($users) }}</span></h3>
        </div>
        <div class="col-md-3 add-new-button">
            <!-- Button trigger modal -->
            <a class="btn btn-primary" href="{{ URL::to('admin/add_user/') }}"><i class="fa fa-user-plus"></i> Add new User</a>
        </div>
    </div>
    <!-- # Breadcrumb -->
    <!-- row -->
    <div class="row">
        <div class="col-md-12">
            <div class="date-info">
                <p>Today is {{ date('l, j M Y') }}</p>
            </div>
        </div>
    </div>
    <!-- #row -->
    <!-- row -->
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped table-bordered queue-table datatable">
                    <thead>
                        <tr>
                            <th style="width:10%" class="text-center">SL</th>
                            <th style="width:20%" class="text-center">Name</th>
                            <th style="width:20%" class="text-center">Email</th>
                            <th style="width:20%" class="text-center">Picture</th>
                            <th style="width:30%" class="text-center" colspan="3">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 0;?>
                        @foreach($users as $req)
                        <?php $i++;?>
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $req->name }}</td> 
                            <td>{{ $req->email }}</td> 
                            <td><img class="img-circle admin_list_img" src="{{ URL::asset('uploads/admin_picture/'.$req->picture) }}" alt="{{$req->name}} image"></td>
                            <td><a href="{{ URL::to('admin/edit_user/'.$req->id) }}" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a></td>
                            <td><a href="{{ URL::to('admin/delete_user/'.$req->id) }}" class="btn btn-danger delete_user"><i class="fa fa-trash-o"></i> Delete</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- #row -->
</div>
@include('admin.admin_user.js.common_js')
<!-- # page-content-wrapper -->
@endsection
