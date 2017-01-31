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
                                    <div id="products" class="row"><p class="text text-help pad-left no-margin-top-p">No product loaded. Select type from avobe to load products.</p></div>
                                    <div class="clearfix"></div>
                                    <div role="separator" class="divider"></div>
                                    <h3>Selected Products</h3>
                                    <div id="selected_products" class="row">
                                        <p class="text text-help pad-left no-margin-top-p">No product selected.</p>
                                        <input type="hidden" name="selected_ids" id="selected_ids" value="" />
                                    </div>
                                    <div role="separator" class="divider"></div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="set_name" id="set_name" placeholder="Enter set name" style="display: none;">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer" style="clear: both;text-align: right;">
                                <button type="button" id="set_modal_close" class="btn btn-danger" data-dismiss="modal">Close</button>
                                <button id="make_set" type="submit" class="btn btn-success ladda-button" data-style="expand-right">
                                    <span class="ladda-label">Make set</span>
                                </button>
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
                if(data == ''){
                    $('#products').html('<p class="text text-help pad-left no-margin-top-p">No product loaded. Select type from avobe to load products.</p>');
                }else{
                    $('#products').html(data);    
                }
                
            })
            .fail(function() {
                alert("Something went wrong! please try again later.");
            })
        });
        $(document).on('click', '.add_to_list', function(){
            product_id = $(this).data('product_id');
            if($('#selected_ids').val() != ''){
                product_ids = $('#selected_ids').val().split(',');
                for (var i = 0; i < product_ids.length; i++) {
                    if(product_ids[i] == product_id){
                        alert('Product is already added');
                        return false;
                    }
                }
                $('#selected_ids').val($('#selected_ids').val()+','+product_id);
            }else{
                $('#selected_ids').val(product_id);
            }
            html_block = $(this).closest('.accepted-product-item').html();
            $html_block = $(html_block)
            $html_block.find('a').removeClass('add_to_list');
            $html_block.find('a').addClass('remove_from_list');
            $html_block.find('a').text('remove');
            html_block = $html_block[0].outerHTML;
            $('#selected_products').find('p').hide();
            $('#selected_products').prepend('<div class="col-md-2 accepted-product-item">'+html_block+'</div>');
            $('#set_name').show();
        });

        $('#set_modal_close').on('click', function(){
            $('#product_type').val("");
            $('#products').html('<p class="text text-help pad-left no-margin-top-p">No product loaded. Select type from avobe to load products.</p>');
            $('#selected_ids').val('');
            $('#selected_products').find('p').show();
            default_html = $('#selected_products').find('p');
            $('#selected_products').html(default_html);
            $('#set_name').hide();
        });

        $(document).on('click', '.remove_from_list', function(){
            product_id = $(this).data('product_id');
            product_id_array = $('#selected_ids').val().split(',');
            index = product_id_array.indexOf(product_id);
            product_id_array.splice(index, 1);
            $(this).closest('.single-product').remove();
            $('#selected_ids').val(product_id_array.join())
        });

        $(document).on('click', '#make_set', function(){
            if($('#set_name').val() == ''){
                alert('Please set name');
                $('#set_name').parent().addClass('has-error');
                $('#set_name').focus();
                return false;
            }else{
                $('#set_name').parent().removeClass('has-error');
            }
            var l = Ladda.create(document.querySelector( '#make_set' ));
            l.start();
            product_id_values = $('#selected_ids').val();
            $.ajax({
                url: '{{ url('styler/create_set') }}',
                type: 'POST',
                data: {product_ids: product_id_values},
            })
            .done(function(data) {
                console.log(data);
                // if(data == ''){
                //     $('#products').html('<p class="text text-help pad-left no-margin-top-p">No product loaded. Select type from avobe to load products.</p>');
                // }else{
                //     $('#products').html(data);    
                // }
                
            })
            .fail(function() {
                alert("Something went wrong! please try again later.");
            })
        });

    });
</script>
<!-- # page-content-wrapper -->
@endsection