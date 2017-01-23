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
            <h3 class="page-title">Total Styler:<span>{{ count($stylers) }}</span></h3>
        </div>
        <div class="col-md-3 add-new-button">
            <!-- Button trigger modal -->
            <a class="btn btn-primary" href="{{ URL::to('admin/add_styler/') }}"><i class="fa fa-user-plus"></i> Add new Styler</a>
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
                <table id="histiryDatatable" class="table table-striped table-bordered queue-table datatable">
                    <thead>
                        <tr>
                            <th style="width:3%" class="text-center">SL</th>
                            <th style="width:20%" class="text-center">Name</th>
                            <th style="width:17%" class="text-center">Country</th>
                            <th style="width:20%" class="text-center">Email</th>
                            <th style="width:20%" class="text-center">Picture</th>
                            <th style="width:20%" class="text-center" colspan="3">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 0;?>
                        @foreach($stylers as $req)
                        <?php $i++;?>
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $req->name }}</td> 
                            <td>{{ $req->country }}</td>
                            <td>{{ $req->email }}</td> 
                            <td><img class="img-circle admin_list_img" src="{{ URL::asset('uploads/styler_picture/'.$req->picture) }}" alt="{{$req->name}} image"></td>
                            <td><a href="{{ URL::to('admin/edit_styler/'.$req->id) }}" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a></td>
                            <td><a href="{{ URL::to('admin/delete_styler/'.$req->id) }}" class="btn btn-danger delete_styler"><i class="fa fa-trash-o"></i> Delete</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- #row -->
</div>
<script type="text/javascript" class="init">
    $(document).ready(function() {
        $('#histiryDatatable').DataTable({
            'order': [ 0, 'desc'],
            'aoColumns': [
                null,
                null,
                null,
                null,
                null,
                null,
                {'bSortable': true}
            ]
        });
    });
</script>
@include('admin.styler.js.common_js')
<!-- # page-content-wrapper -->
@endsection
