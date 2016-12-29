@extends('admin.layouts.app')

@section('content')
<!-- Page content -->
<div id="page-content-wrapper">
	<!-- Breacrumb -->
	<div class="row csk-breadcrumb">
		<div class="col-md-9">
			<h3 class="page-title">Total Inventory: <span>{{ $total_products }}</span></h3>
		</div>
		<div class="col-md-3 add-new-button">
			<!-- Button trigger modal -->
			<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">
				Add new item
			</button>

			<!-- Modal -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="margin-top: 50px;">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<form class="form-horizontal" id="add_product" method="post" enctype="multipart/form-data">
							{{ csrf_field() }}
							<div class="modal-body">
								<div class="col-md-6 no-pad-left">
									<div class="inventory-upload-pic-area">
										<div class="photo-upload">
											<span class="btn btn-success fileinput-button inverory-upload">
												<i class="glyphicon glyphicon-camera"></i>
												<input id="files" type="file" name="files[]" multiple="">
											</span>
											<br>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="code" class="col-sm-3 control-label">Code</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="code" placeholder="Code" disabled="disabled" value="{{ $code }}">
										</div>
									</div>
									<div class="form-group">
										<label for="type" class="col-sm-3 control-label">Type</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="type" placeholder="Type">
										</div>
									</div>
									<div class="form-group">
										<label for="color" class="col-sm-3 control-label">Color</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="color" placeholder="Color">
										</div>
									</div>
									<div class="form-group">
										<label for="fit" class="col-sm-3 control-label">Fit</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="fit" placeholder="Fit">
										</div>
									</div>
									<div class="form-group">
										<label for="size" class="col-sm-3 control-label">Size</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="size" placeholder="Size">
										</div>
									</div>
									<div class="form-group">
										<label for="price" class="col-sm-3 control-label">Price</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="price" placeholder="Price">
										</div>
									</div>
								</div>
							</div>
							<div class="modal-footer" style="clear: both;text-align: center;border-top: none;padding-top: 35px;">
								<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-success">Add to inventory</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- # Breadcrumb -->
	<!-- row -->
	<div class="inventory-product-select-options">
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-2">
					<input type="text" class="form-control" placeholder="Enter code">
				</div>
				<div class="col-md-2">
					{{-- <a class="btn btn-default btn-select btn-select-light">
						<input type="hidden" class="btn-select-input">
						<span class="btn-select-value">Type</span>
						<span class="btn-select-arrow glyphicon glyphicon-chevron-down"></span>
						<ul style="display: none;">
							@foreach($types as $type)
							<li>{{ $type->type }}</li>
							@endforeach
						</ul>
					</a> --}}
					<select name="type" id="type" class="form-control">
						<option selected="selected" value="0">Select</option>
						@foreach($types as $type)
						<option value="{{ $type->type }}">{{ $type->type }}</option>
						@endforeach
					</select>
				</div>
				<div class="col-md-2">
					{{-- <a class="btn btn-default btn-select btn-select-light">
						<input type="hidden" class="btn-select-input">
						<span class="btn-select-value">Color</span>
						<span class="btn-select-arrow glyphicon glyphicon-chevron-down"></span>
						<ul style="display: none;">
							@foreach($colors as $color)
							<li>{{ $color->color }}</li>
							@endforeach
						</ul>
					</a> --}}
					<select name="type" id="type" class="form-control">
						<option selected="selected" value="0">Select</option>
						@foreach($colors as $color)
						<option value="{{ $color->color }}">{{ $color->color }}</option>
						@endforeach
					</select>
				</div>
				<div class="col-md-2">
					{{-- <a class="btn btn-default btn-select btn-select-light">
						<input type="hidden" class="btn-select-input">
						<span class="btn-select-value">Fit</span>
						<span class="btn-select-arrow glyphicon glyphicon-chevron-down"></span>
						<ul style="display: none;">
							@foreach($fits as $fit)
							<li>{{ $fit->fit }}</li>
							@endforeach
						</ul>
					</a> --}}
					<select name="type" id="type" class="form-control">
						<option selected="selected" value="0">Select</option>
						@foreach($fits as $fit)
						<option value="{{ $fit->fit }}">{{ $fit->fit }}</option>
						@endforeach
					</select>
				</div>
				<div class="col-md-2">
					{{-- <a class="btn btn-default btn-select btn-select-light">
						<input type="hidden" class="btn-select-input">
						<span class="btn-select-value">Size</span>
						<span class="btn-select-arrow glyphicon glyphicon-chevron-down"></span>
						<ul style="display: none;">
							@foreach($sizes as $size)
							<li>{{ $size->size }}</li>
							@endforeach
						</ul>
					</a> --}}
					<select name="type" id="type" class="form-control">
						<option selected="selected" value="0">Select</option>
						@foreach($sizes as $size)
						<option value="{{ $size->size }}">{{ $size->size }}</option>
						@endforeach
					</select>
				</div>
			</div>
		</div>
		<br />
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-2">
					<input type="text" class="form-control text-right" id="from" name="from" placeholder="Price From">
				</div>
				<div class="col-md-2">
					<input type="text" class="form-control text-right" id="to" name="to" placeholder="To">
				</div>
			</div>
		</div>
	</div>
	<!-- #row -->
	<!-- row -->
	@foreach($types as $type)
	<div class="row">
		<div class="col-md-12 inventory-products">
			<div class="inventory-product-item-heading">
				<h4>{{ $type->type }}</h4>
			</div>
			<?php 
				$i = 0;
				$products = DB::table('products')->where('type', $type->type)->orderBy('created_at', 'desc')->get();
			?>
			@foreach($products as $product)
			<div class="col-md-2 accepted-product-item">
				<?php 
					$images = [];
					$images_objects = json_decode($product->picture);$i++;
					foreach($images_objects as $key => $value){
						array_push($images, $value);
					}
				?>
				<div class="single-product @if(count($images) > 1) has-frames @endif">
					<figure class="wpf-demo-6">
						<img class="img-responsive" src="{{ URL::asset('uploads/product_image/'.$images[0]) }}" alt="Product Image">
						<figcaption class="view-caption">
							<a data-toggle="modal" data-target="#feedbackModal_{{ $type->type.'_'.$i }}">Expand</a>
						</figcaption>
					</figure>
				</div>
			</div>
			<!-- Modal -->
			<div id="feedbackModal_{{ $type->type.'_'.$i }}" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="feedback-modal-dialog modal-dialog modal-lg" role="document">
					<div class="modal-content" style="width: 50%;margin: 12% auto;">
						<div class="modal-body">
							<p class="modal-details-edit"><a class="edit_link" href="#" id="edit_{{ $type->type.'_'.$i }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></p>
							<div class="feedback">
								<div class="feedback-item">
									<form id="form_{{ $type->type.'_'.$i }}" enctype="multipart/form-data" method="post">
										<div class="col-sm-6">
											<input type="hidden" id="product_id_{{ $type->type.'_'.$i }}" name="product_id_{{ $type->type.'_'.$i }}" value="{{ $product->id }}">
											<div id="carousel-example-generic_{{ $type->type.'_'.$i }}" class="carousel slide" data-ride="carousel">
												<!-- Wrapper for slides -->
												<div class="carousel-inner" role="listbox">
													{{-- <img class="img-responsive" src="{{ URL::asset('uploads/product_image/'.$images[0]) }}" alt="Product Image"> --}}
													<?php $j = 0;?>
													@foreach($images as $image => $value)
													<div class="item @if($j == 0) active @endif">
														<img src="{{ URL::asset('uploads/product_image/'.$value) }}" alt="Product Image">
													</div>
													<?php $j++;?>
													@endforeach
												</div>

												<!-- Controls -->
												<a class="left carousel-control" href="#carousel-example-generic_{{ $type->type.'_'.$i }}" role="button" data-slide="prev">
													<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
													<span class="sr-only">Previous</span>
												</a>
												<a class="right carousel-control" href="#carousel-example-generic_{{ $type->type.'_'.$i }}" role="button" data-slide="next">
													<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
													<span class="sr-only">Next</span>
												</a>
											</div>
											<span class="file_field hide">
												<input type="file" name="files[]" id="files" multiple="multiple">
												<div class="checkbox">
													<input type="checkbox" name="img_remove" id="img_remove">
													remove previous image(s)
												</div>
											</span>
										</div>
										<div class="col-sm-6">
											<div class="table-responsive">
												<table class="table request-details-infos-table">
													<tbody> 
														<tr> 
															<td><span class="pull-left">Code</span> <span class="pull-right">:</span></td>
															<td>
																{{ $product->code }}
															</td> 
														</tr> 
														<tr> 
															<td><span class="pull-left">Type</span> <span class="pull-right">:</span></td>
															<td>
																<span class="text show"> {{ $product->type }}</span>
																<span class="edit_field hide">
																	<input class="form-control" type="text" name="type" id="type" value="{{ $product->type }}">
																</span>
															</td> 
														</tr>
														<tr> 
															<td><span class="pull-left">Color</span> <span class="pull-right">:</span></td>
															<td>
																<span class="text show"> {{ $product->color }}</span>
																<span class="edit_field hide">
																	<input class="form-control" type="text" name="color" id="color" value="{{ $product->color }}">
																</span>
															</td> 
														</tr>
														<tr> 
															<td><span class="pull-left">Fit</span> <span class="pull-right">:</span></td>
															<td>
																<span class="text show"> {{ $product->fit }}</span>
																<span class="edit_field hide">
																	<input class="form-control" type="text" name="fit" id="fit" value="{{ $product->fit }}">
																</span>
															</td> 
														</tr>
														<tr> 
															<td><span class="pull-left">Size</span> <span class="pull-right">:</span></td>
															<td>
																<span class="text show"> {{ $product->size }}</span>
																<span class="edit_field hide">
																	<input class="form-control" type="text" name="size" id="size" value="{{ $product->size }}">
																</span>
															</td> 
														</tr>
														<tr> 
															<td><span class="pull-left">Status</span> <span class="pull-right">:</span></td>
															<td>
																<span> @if($product->status == 1) Listed @else Not listed @endif</span>
															</td> 
														</tr>
														<tr> 
															<td><span class="pull-left"><b>Price<b></span> <span class="pull-right">:</span></td>
															<td>
																<span class="text show"> ${{ $product->price }}</span>
																<span class="edit_field hide">
																	<input class="form-control" type="text" name="price" id="price" value="{{ $product->price }}">
																</span>
															</td> 
														</tr>
													</tbody>
												</table>
												<input type="hidden" name="product_id" id="product_id" value="{{ $product->id }}">
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
						<div class="modal-footer text-center">
							<span class="pull-left">
								<button type="button" id="{{ $type->type.'_'.$i }}" class="btn btn-danger close_btn" data-dismiss="modal">Close</button>
							</span>
							<span class="submit_button hide pull-left">
								<button type="button" class="btn btn-success update_button" id="{{ $type->type.'_'.$i }}">Update</button>
							</span>
							@if($product->status == 0)
								<span class="to_list_button show pull-left">
									<a href="#" class="btn btn-success add_to_list">Add to a list</a>
								</span>
								<span class="order_no_input hide pull-left">
									<div id="suggest" class="pull-left">
										<input class="form-control pull-left auto_sug_input" type="text" id="{{ $type->type.'_'.$i }}" name="order_no_{{ $type->type.'_'.$i }}" placeholder="Type Dose ID" />
										<div id="suggestions_{{ $type->type.'_'.$i }}" class="suggestionsBox" style="display: none;">
											<div id="suggestionsList_{{ $type->type.'_'.$i }}" class="suggestionList"></div>
										</div>
									</div>
									<button type="button" class="btn btn-primary pull-left add_product" id="{{ $type->type.'_'.$i }}">Add</button>
								</span>
							@endif
						</div>
					</div>
				</div>
			</div>
			<!-- /End Modal -->
			@endforeach
		</div>
	</div>
	<!-- row -->
	@endforeach
</div>
<!-- # page-content-wrapper -->
@include('admin.inventory.js.product_entry_js')
@include('admin.inventory.js.product_edit_js')
@include('admin.inventory.js.common_js')
@endsection