@extends('styler.layouts.app')

@section('content')
<!-- Page content -->
<div id="page-content-wrapper">
    <!-- Breacrumb -->
    <div class="row csk-breadcrumb">
        <div class="col-xs-9">
            <h3 class="page-title">Total sets in queue:<span>{{ count($ClothSets) }}</span></h3>
        </div>
        <div class="col-xs-3 add-new-button">
            <button class="btn btn-danger" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Make New Set</button>
            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-keyboard="false" data-backdrop="static" style="margin-top: 50px;">
                <div class="feedback-modal-dialog modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <form class="form-horizontal" id="add_product" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="modal-header text-center">
                                <h4 class="modal-title">Make a cloth set</h4>
                            </div>
                            <div class="modal-body cloth-set-modal-body">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        {{-- <label for="type" class="col-sm-3 control-label">Select product Type</label> --}}
                                        <div class="col-sm-12">
                                            <select class="form-control" name="product_type" id="product_type">
                                                <option value="" selected="selected">Select product type</option>
                                                @foreach($types as $type)
                                                <option value="{{ $type->type }}">{{ $type->type }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div role="separator" class="divider"></div>
                                    <h4>Choose Products</h4>
                                    <div role="separator" class="divider"></div>
                                    <div id="products" class="row"><p class="text text-help">No product loaded. Select type from avobe to load products.</p></div>
                                    <div class="clearfix"></div>
                                    <div role="separator" class="divider"></div>
                                    <h3>Selected Products</h3>
                                    <div role="separator" class="divider"></div>
                                </div>
                            </div>
                            <div class="modal-footer" style="clear: both;text-align: right;border-top: none;padding-top: 35px;">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success">Make set</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
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
                            <th style="width:10%" class="text-center">SL</th>
                            <th style="width:20%" class="text-center">Name</th>
                            <th style="width:20%" class="text-center">Product Codes</th>
                            <th style="width:20%" class="text-center">Order Id</th>
                            <th style="width:30%" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i =1;?>
                        @foreach($ClothSets as $ClothSet)
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $ClothSet->name }}</td> 
                            <td>@foreach(json_decode($ClothSet->product_ids)  as $product_code => $value) $value @endforeach</td> 
                            <td>{{ $ClothSet->order_id }}</td>
                            <td>
                                <a href="{{ URL::to('styler/details/'.$ClothSet->id) }}" class="btn btn-danger"><i class="fa fa-link"></i> View Details</a>
                                @if($ClothSet->process_status == 1)
                                <a id="accept" href="{{ URL::to('styler/accept/'.$ClothSet->id) }}" class="btn btn-success"><i class="fa fa-check-circle"></i> Acceept</a>
                                <a id="reject" href="{{ URL::to('styler/reject/'.$ClothSet->id) }}" class="btn btn-inverse"><i class="fa fa-trash-o"></i>  Decline</a>
                                @endif
                            </td>
                        </tr>
                        <?php $i++;?>
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

        $.ajaxSetup({
            headers:
            {
                'X-CSRF-Token': '{{ csrf_token() }}'
            }
        });

        $('#product_type').on('change', function(){
            type = $(this).val();
            $.ajax({
                url: '{{ url('styler/get_product_by_type') }}',
                type: 'POST',
                data: {type: type},
            })
            .done(function(data) {
                // console.log(data);
                $('#products').html(data);
            })
            .fail(function() {
                alert("Something went wrong! please try again later.");
            })
            
        });
    });
</script>
<!-- # page-content-wrapper -->
@endsection