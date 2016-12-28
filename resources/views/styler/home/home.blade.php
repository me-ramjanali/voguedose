@extends('styler.layouts.app')

@section('content')
<!-- Page content -->
<div id="page-content-wrapper">
    <!-- Breacrumb -->
    <div class="row csk-breadcrumb">
        <div class="col-xs-12">
            <h3 class="page-title">Total oder in queue:<span>{{ count($newRequests) }}</span></h3>
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
    @if(Session::has('message'))
        <p class="alert alert-{{ Session::get('msg_class') }}">{{ Session::get('message') }}</p>
    @endif
    <!-- row -->
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped table-bordered queue-table datatable">
                    <thead>
                        <tr>
                            <th style="width:10%" class="text-center">ID</th>
                            <th style="width:20%" class="text-center">User</th>
                            <th style="width:20%" class="text-center">Order Date</th>
                            <th style="width:20%" class="text-center">Target Delevary</th>
                            <th style="width:30%" class="text-center" colspan="3">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($newRequests as $req)
                        <tr>
                            <td>{{ $req->order_id }}</td>
                            <td>{{ $req->user }}</td> 
                            <td>{{ date("d-M-y", strtotime($req->created_at)) }}</td> 
                            <td>{{ date("d-M-y", strtotime($req->target_date)) }}</td>
                            <td><a href="{{ URL::to('styler/details/'.$req->id) }}" class="btn btn-danger"><i class="fa fa-link"></i> View Details</a></td>
                            @if($req->process_status == 0)
                            <td><a id="accept" href="{{ URL::to('styler/accept/'.$req->id) }}" class="btn btn-success"><i class="fa fa-check-circle"></i> Acceept</a></td>
                            <td><a id="reject" href="{{ URL::to('styler/reject/'.$req->id) }}" class="btn btn-inverse"><i class="fa fa-trash-o"></i>  Decline</a></td>
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- #row -->
</div>
<!-- # page-content-wrapper -->
@include('styler.home.js.home_js')
@endsection
