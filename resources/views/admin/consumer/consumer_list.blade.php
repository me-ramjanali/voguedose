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
            <h3 class="page-title">Consumer List</span></h3>
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
                            <th style="width:5%" class="text-center">SL</th>
                            <th style="width:25%" class="text-center">User Name</th>
                            <th style="width:20%" class="text-center">Last Order Date</th>
                            <th style="width:20%" class="text-center">Status</th>
                            <th style="width:30%" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;?>
                        @foreach($order_info as $order)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $order->user }}</td> 
                            <td>{{ date("d-M-y", strtotime($order->created_at)) }}</td> 
                            <td>@if($order->process_status < 4) In progress @endif</td>
                            <td><a href="{{ URL::to('admin/details/'.$order->id) }}" class="btn btn-danger"><i class="fa fa-link"></i> View Details</a></td>
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
        $('#histiryDatatable').DataTable();
    });
</script>
{{-- @include('admin.admin_user.js.common_js') --}}
<!-- # page-content-wrapper -->
@endsection
