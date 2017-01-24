@extends('admin.layouts.app')

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
                <table id="histiryDatatable" class="table table-striped table-bordered queue-table datatable">
                    <thead>
                        <tr>
                            <th style="width:10%" class="text-center" rowspan="2">ID</th>
                            <th style="width:20%" class="text-center" rowspan="2">User</th>
                            <th style="width:20%" class="text-center" rowspan="2">Order Date</th>
                            <th style="width:20%" class="text-center" rowspan="2">Target Delevary</th>
                            <th style="width:30%" class="text-center" colspan="2" rowspan="2">Action</th>
                        </tr>
                        <tr>
                            <th colspan="5"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($newRequests as $req)
                        <tr>
                            <td>{{ $req->order_id }}</td>
                            <td>{{ $req->user }}</td> 
                            <td>{{ date("d-M-y", strtotime($req->created_at)) }}</td> 
                            <td>{{ date("d-M-y", strtotime($req->target_date)) }}</td>
                            <td><a href="{{ URL::to('admin/details/'.$req->id) }}" class="btn btn-danger"><i class="fa fa-link"></i> View Details</a></td>
                            <td>@if($req->process_status == 0)<a data-order_id="{{ $req->order_id }}" data-toggle="modal" data-target="#accept-modal" href="#" class="btn btn-success assign"><i class="fa fa-tasks"></i> Assign</a>@endif</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- #row -->
    <?php 
        $stylers = DB::table('stylers')
                        ->select('stylers.*', 'countries.name as country')
                        ->join('countries', 'stylers.country', '=', 'countries.code')
                        ->get();
    ?>
    <div id="accept-modal" class="modal fade" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title text-center"><b>Stylists</b></h3>
                </div>
                <div class="modal-body">
                    <div class="team-block row row-wide">
                        @foreach($stylers as $styler)
                        <!-- Team Person -->
                        <div class="col-md-4 text-center" data-animation="flipInY">
                            <div class="team-person">
                                <img class="img-circle" src="{{ URL::asset('uploads/styler_picture/'.$styler->picture) }}" alt="{{ $styler->name }}">
                                <h3 class="name">{{ $styler->name }}</h3>
                                <h6 class="position">{{ $styler->country }}</h6>
                                <input type="hidden" id="styler_id" name="styler_id" value="{{ $styler->id }}">
                            </div>
                        </div>
                        @endforeach
                        <input type="hidden" id="dose_id" name="dose_id" value="" />
                    </div>
                </div>
                <div class="modal-footer" style="text-align: center;">
                    <button id="styler_modal_close" type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button id="assign_to_styler" type="button" class="btn btn-success">Assign</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>
<script type="text/javascript" class="init">
    $(document).ready(function() {
        $('#histiryDatatable').DataTable({
            columnDefs: [ 
                { orderable: false, targets: [4, 5] }
            ]
        });
    });
</script>
<!-- # page-content-wrapper -->
@include('admin.home.js.home_js')
@endsection
