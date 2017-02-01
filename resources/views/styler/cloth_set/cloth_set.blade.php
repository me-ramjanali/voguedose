@extends('styler.layouts.app')

@section('content')
<!-- Page content -->
<div id="page-content-wrapper">
    <!-- Breacrumb -->
    <div class="row csk-breadcrumb">
        <div class="col-xs-9">
            <h3 class="page-title">Total sets in queue:<span>{{ count($clothsets) }}</span></h3>
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
                    <?php $i = 1;?>
                    @foreach($clothsets as $clothset)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $clothset->name }}</td> 
                        <td>{{ $clothset->product_codes }}</td> 
                        <td>{{ $clothset->order_id }}</td>
                        <td style="text-align: left;">
                            <button data-toggle="modal" data-target="#editMyModal{{$i}}" class="btn btn-danger"><i class="fa fa-link"></i> View and edit</button>
                            <!-- Modal -->
                            <div class="modal fade" id="editMyModal{{$i}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-keyboard="false" data-backdrop="static" style="margin-top: 50px;">
                                <div class="feedback-modal-dialog modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <form class="form-horizontal" id="add_product" method="post" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            <div class="modal-header text-center">
                                                <h4 class="modal-title">Update cloth set</h4>
                                            </div>
                                            <div class="modal-body cloth-set-modal-body">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        {{-- <label for="type" class="col-sm-3 control-label">Select product Type</label> --}}
                                                        <div class="col-sm-12">
                                                            <select class="form-control" name="edit_product_type" id="edit_product_type">
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
                                                    <div id="edit_products" class="row"><p class="text text-help pad-left no-margin-top-p">No product loaded. Select type from avobe to load products.</p></div>
                                                    <div class="clearfix"></div>
                                                    <div role="separator" class="divider"></div>
                                                    <h3>Selected Products</h3>
                                                    <div id="edit_selected_products" class="row">
                                                        <?php 
                                                            $products = DB::table('products')->whereIn('code', explode(',', $clothset->product_codes))->get();
                                                        ?>
                                                        @foreach($products as $product)
                                                        <?php
                                                            $images = [];
                                                            $has_frame = '';
                                                            $images_objects = json_decode($product->picture);
                                                            foreach($images_objects as $key => $value){
                                                                array_push($images, $value);
                                                            }
                                                            if(count($images) > 1){
                                                                $has_frame = 'has-frames';
                                                            }
                                                        ?>
                                                        <div class="col-md-2 accepted-product-item">
                                                            <div class="single-product {{$has_frame}}">
                                                                <figure class="wpf-demo-6">
                                                                    <img class="img-responsive" src="{{ url('uploads/product_image/'.$images[0]) }}" alt="Product Image">
                                                                    <figcaption class="view-caption">
                                                                        <a class="edit_remove_from_list" data-edit_product_code="{{ $product->code }}">remove</a>
                                                                    </figcaption>
                                                                </figure>
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                        <input type="hidden" name="edit_selected_ids" id="edit_selected_ids" value="{{ $clothset->product_codes }}" />
                                                    </div>
                                                    <div role="separator" class="divider"></div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="edit_set_name" id="edit_set_name" value="{{ $clothset->name }}" placeholder="Enter set name">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer" style="clear: both;text-align: right;">
                                                <button type="button" id="edit_set_modal_close" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                <button id="update_set" type="submit" class="btn btn-success ladda-button" data-style="expand-right" data-set_id="{{$clothset->id}}">
                                                    <span class="ladda-label">Update set</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            @if($clothset->order_id == '')
                            <a href="{{ URL::to('styler/add_to_list/'.$clothset->id) }}" class="btn btn-success"><i class="fa fa-tasks"></i> Add to Dose</a>
                            @endif
                        </td>
                    </tr>
                    <?php $i++;?>
                    @endforeach
                </tbody>
            </table>
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
            product_code = $(this).data('product_code');
            if($('#selected_ids').val() != ''){
                product_codes = $('#selected_ids').val().split(',');
                for (var i = 0; i < product_codes.length; i++) {
                    if(product_codes[i] == product_code){
                        alert('Product is already added');
                        return false;
                    }
                }
                $('#selected_ids').val($('#selected_ids').val()+','+product_code);
            }else{
                $('#selected_ids').val(product_code);
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
            product_code = $(this).data('product_code');
            product_code_array = $('#selected_ids').val().split(',');
            index = product_code_array.indexOf(product_code);
            product_code_array.splice(index, 1);
            $(this).closest('.accepted-product-item').remove();
            $('#selected_ids').val(product_code_array.join())
        });

        $(document).on('click', '#make_set', function(){
            if($('#selected_ids').val() == ''){
                alert('You haven\'t choose any item');
                return false;
            }
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
            product_code_values = $('#selected_ids').val();
            $.ajax({
                url: '{{ url('styler/create_set') }}',
                type: 'POST',
                data: {product_codes: product_code_values, name: $('#set_name').val()},
            })
            .done(function(data) {
                // console.log(data);
                alert('Cloth set created successfully');
                location.reload();
            })
            .fail(function() {
                alert("Something went wrong! please try again later.");
                return false;
            })
        });

        $('#edit_product_type').on('change', function(){
            type = $(this).val();
            $.ajax({
                url: '{{ url('styler/get_product_by_type_edit') }}',
                type: 'POST',
                data: {type: type},
            })
            .done(function(data) {
                // console.log(data);
                if(data == ''){
                    $('#edit_products').html('<p class="text text-help pad-left no-margin-top-p">No product loaded. Select type from avobe to load products.</p>');
                }else{
                    $('#edit_products').html(data);    
                }
                
            })
            .fail(function() {
                alert("Something went wrong! please try again later.");
            })
        });

        $(document).on('click', '.edit_add_to_list', function(){
            product_code = $(this).data('edit_product_code');
            if($('#edit_selected_ids').val() != ''){
                product_codes = $('#edit_selected_ids').val().split(',');
                for (var i = 0; i < product_codes.length; i++) {
                    if(product_codes[i] == product_code){
                        alert('Product is already added');
                        return false;
                    }
                }
                $('#edit_selected_ids').val($('#edit_selected_ids').val()+','+product_code);
            }else{
                $('#edit_selected_ids').val(product_code);
            }
            html_block = $(this).closest('.accepted-product-item').html();
            $html_block = $(html_block)
            $html_block.find('a').removeClass('edit_add_to_list');
            $html_block.find('a').addClass('edit_remove_from_list');
            $html_block.find('a').text('remove');
            html_block = $html_block[0].outerHTML;
            $('#edit_selected_products').find('p').hide();
            $('#edit_selected_products').prepend('<div class="col-md-2 accepted-product-item">'+html_block+'</div>');
            $('#edit_set_name').show();
        });

        $('#edit_set_modal_close').on('click', function(){
            $('#edit_product_type').val("");
            $('#edit_products').html('<p class="text text-help pad-left no-margin-top-p">No product loaded. Select type from avobe to load products.</p>');
            $('#edit_selected_ids').val('');
            $('#edit_selected_products').find('p').show();
            default_html = $('#edit_selected_products').find('p');
            $('#edit_selected_products').html(default_html);
            $('#edit_set_name').hide();
        });

        $(document).on('click', '.edit_remove_from_list', function(){
            product_code = $(this).data('edit_product_code');
            product_code_array = $('#edit_selected_ids').val().split(',');
            index = product_code_array.indexOf(product_code);
            product_code_array.splice(index, 1);
            $(this).closest('.accepted-product-item').remove();
            $('#edit_selected_ids').val(product_code_array.join())
        });

        $(document).on('click', '#update_set', function(){
            set_id = $(this).data('set_id');
            if($('#edit_selected_ids').val() == ''){
                alert('You haven\'t choose any item');
                return false;
            }
            if($('#edit_set_name').val() == ''){
                alert('Please set name');
                $('#edit_set_name').parent().addClass('has-error');
                $('#edit_set_name').focus();
                return false;
            }else{
                $('#edit_set_name').parent().removeClass('has-error');
            }
            var l = Ladda.create(document.querySelector( '#update_set' ));
            l.start();
            product_code_values = $('#edit_selected_ids').val();
            $.ajax({
                url: '{{ url('styler/update_set') }}',
                type: 'POST',
                data: {product_codes: product_code_values, name: $('#edit_set_name').val(), set_id: set_id},
            })
            .done(function(data) {
                // console.log(data);
                alert('Cloth set updated successfully');
                location.reload();
            })
            .fail(function() {
                alert("Something went wrong! please try again later.");
                return false;
            })
        });

    });
</script>
<!-- # page-content-wrapper -->
@endsection