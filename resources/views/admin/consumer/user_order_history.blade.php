@extends('admin.layouts.app')

@section('content')
<!-- Page content -->
<div id="page-content-wrapper">
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
	<div class="container-fluid">
		<!-- row -->
		<div class="row">
			<div class="col-md-12">
				<div class="request-details-area">
					<div class="col-md-12">
						<div class="client-request-details">
							<div class="request-details-info-top">
								<div class="row">
									<div class="col-md-12">
										<div class="request-details-info-top-left">
											<div class="request-details-infos">
												<div class="table-responsive">
													<table class="table request-details-infos-table">
														<tbody> 
															<tr> 
																<td style="width:60%"><h4>User</h4></td>
																<td><h4>: {{ $user_info->name }}</h4></td> 
															</tr> 
															<tr> 
																<td style="width:60%"><h4>Total Requests</h4></td>
																<td><h4>: {{ count($order_info) }}</h4></td> 
															</tr>
															<tr> 
																<td style="width:60%"><h4>Acceptance Rate</h4></td>
																<?php 
																	$x = $accepted_orders;
																	$y = count($order_info);

																	$percent = $x/$y;
																	$percent_friendly = number_format( $percent * 100, 2 ) . '%';
																?>
																<td><h4>: {{ $percent_friendly }}</h4></td> 
															</tr>
														</tbody>
													</table>						
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- #row -->
		@foreach($order_info as $order)
		@if($order->process_status >= 6)
		<!-- #row -->
		<div class="row">
			<div class="col-md-9 accepted-products">
				<div class="accepted-product-item-heading">
					<h4>Accepted Deliveries</h4>
				</div>
				<div class="col-md-3 accepted-product-item">
					<div class="single-product">
						<figure class="wpf-demo-6">
							<img class="img-responsive" src="datas/images/products/sparkel/dress-1.jpg" alt="Single Product Image">
							<figcaption class="view-caption">
								<a data-toggle="modal" data-target="#feedbackModal">Expand</a>
							</figcaption>
						</figure>
					</div>
				</div>
				<!-- Modal -->
				<div  id="feedbackModal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="feedback-modal-dialog modal-dialog modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-body">
								<div class="feedback">
									<div class="feedback-item">
										<div class="col-sm-2">
											<img class="img-responsive" src="datas/images/products/sparkel/dress-1.jpg" alt="Single Feedback Image">
										</div>
										<div class="col-sm-10">
											<h4>Feedback</h4>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea laboriosam sit quas, veniam ex nesciunt, officiis, quisquam eligendi non autem cupiditate laborum ad vero, delectus dicta. Temporibus vitae quisquam necessitatibus.
											</p>
										</div>
									</div>
									<div class="feedback-item">
										<div class="col-sm-2">
											<img class="img-responsive" src="datas/images/products/black/dress-1.jpg" alt="Single Feedback Image">
										</div>
										<div class="col-sm-10">
											<h4>Feedback</h4>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea laboriosam sit quas, veniam ex nesciunt, officiis, quisquam eligendi non autem cupiditate laborum ad vero, delectus dicta. Temporibus vitae quisquam necessitatibus.
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="clearfix"></div>
							<div class="modal-footer text-center">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>
				<!-- /End Modal -->
				<div class="col-md-3 accepted-product-item">
					<div class="single-product">
						<figure class="wpf-demo-6">
							<img class="img-responsive" src="datas/images/products/black/dress-2.jpg" alt="Single Product Image">
							<figcaption class="view-caption">
								<a href="#">Expand</a>
							</figcaption>
						</figure>
					</div>
				</div>
				<div class="col-md-3 accepted-product-item">
					<div class="single-product">
						<figure class="wpf-demo-6">
							<img class="img-responsive" src="datas/images/products/sparkel/dress-3.jpg" alt="Single Product Image">
							<figcaption class="view-caption">
								<a href="#">Expand</a>
							</figcaption>
						</figure>
					</div>
				</div>
				<div class="col-md-3 accepted-product-item">
					<div class="single-product">
						<figure class="wpf-demo-6">
							<img class="img-responsive" src="datas/images/products/date/dress-4.jpg" alt="Single Product Image">
							<figcaption class="view-caption">
								<a href="#">Expand</a>
							</figcaption>
						</figure>
					</div>
				</div>
			</div>
		</div>
		<!-- #row -->
		@elseif($order->process_status == 7)
		<!-- #row -->
		<div class="row">
			<div class="col-md-9 rejected-products">
				<div class="rejected-product-item-heading">
					<h4>Rejected Deliveries</h4>
				</div>
				<div class="col-md-3 rejected-product-item">
					<div class="single-product">
						<figure class="wpf-demo-6">
							<img class="img-responsive" src="datas/images/products/date/dress-1.jpg" alt="Single Product Image">
							<figcaption class="view-caption">
								<a href="#">Expand</a>
							</figcaption>
						</figure>
					</div>
				</div>
				<div class="col-md-3 rejected-product-item">
					<div class="single-product">
						<figure class="wpf-demo-6">
							<img class="img-responsive" src="datas/images/products/date/dress-2.jpg" alt="Single Product Image">
							<figcaption class="view-caption">
								<a href="#">Expand</a>
							</figcaption>
						</figure>
					</div>
				</div>
				<div class="col-md-3 rejected-product-item">
					<div class="single-product">
						<figure class="wpf-demo-6">
							<img class="img-responsive" src="datas/images/products/date/dress-3.jpg" alt="Single Product Image">
							<figcaption class="view-caption">
								<a href="#">Expand</a>
							</figcaption>
						</figure>
					</div>
				</div>
				<div class="col-md-3 rejected-product-item">
					<div class="single-product">
						<figure class="wpf-demo-6">
							<img class="img-responsive" src="datas/images/products/date/dress-4.jpg" alt="Single Product Image">
							<figcaption class="view-caption">
								<a href="#">Expand</a>
							</figcaption>
						</figure>
					</div>
				</div>
			</div>
		</div>
		<!-- #row -->
		@endif
		@endforeach
		<!-- row -->
		<div class="row">
			<div class="col-md-9 products-pagination text-right">
				<a href="request-new.php" class="btn btn-danger"><i class="fa fa-chevron-left"></i> Back</a>
				<a href="#" class="btn btn-success"><i class="fa fa-check-circle"></i> Acceept</a>
				<a href="#" class="btn btn-inverse"><i class="fa fa-trash-o"></i> Decline</a>
			</div>
		</div>
		<!-- #row -->
	<!-- # page-content-wrapper -->
	</div>
</div>
<!-- # page-content-wrapper -->
@endsection