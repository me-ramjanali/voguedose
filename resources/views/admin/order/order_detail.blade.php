@extends('admin.layouts.app')

@section('content')
<!-- Page content -->
<div id="page-content-wrapper">
    <!-- row -->
    <div class="row">
        <div class="col-md-9">
            <div class="request-details-area">
                <div class="col-md-3">
                    <div class="client-picture">
                        <img src="{{ URL::asset('img/body-shape/'.$order_info->bodyType.'.jpg') }}">
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="client-request-details">
                        <div class="request-details-info-top">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="request-details-info-top-left">
                                        <p>ABOUT CLIENT</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="request-details-info-top-right">
                                        <h3>Request Details</h3>
                                    </div>
                                </div>
                            </div>
                            
                        </div>

                        <div class="clesrfix"></div>
                        <div class="request-details-infos">
                            <div class="table-responsive">
                                <table class="table request-details-infos-table">
                                    <tbody> 
                                        <tr> 
                                            <td>Client Name</td>
                                            <td>: {{ $order_info->user }}</td> 
                                        </tr> 
                                        <tr> 
                                            <td>Client Age</td>
                                            <td>: {{ $order_info->customer_age }}</td> 
                                        </tr>
                                        <tr> 
                                            <td>Client Height</td>
                                            <td>: {{ $order_info->customer_height }} cm</td> 
                                        </tr>
                                        <tr> 
                                            <td>Client Weight</td>
                                            <td>: {{ $order_info->customer_weight }} Kg</td> 
                                        </tr>
                                        <tr> 
                                            <td>Client Profession</td>
                                            <td>: {{ $order_info->customer_profession }}</td> 
                                        </tr>
                                    </tbody>
                                </table>                        
                                <table class="table request-details-infos-table">
                                    <h5 style="color: #000;"><b>ABOUT Client's STYLE</b></h5>
                                    <tbody> 
                                        <tr> 
                                            <td>Client's wardrobe full & can't find anything to wear</td>
                                            <td>: {{ $order_info->clothesInWardrobe }}</td> 
                                        </tr>
                                        <tr> 
                                            <td>Rate of client's current style and wardrobe selection</td>
                                            <td>: {{ $order_info->currentStyleRate }}</td> 
                                        </tr>
                                        <tr> 
                                            <td>Which body type client more like</td>
                                            <td>: {{ $order_info->bodyType }}</td> 
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="table request-details-infos-table">
                                    <h5 style="color: #000;"><b>CLIENT'S MEASUREMENTS</b></h5>
                                    <tbody>
                                        <tr> 
                                            <td>Chest/ Bust</td>
                                            <td>: {{ $order_info->chest }} Inch</td> 
                                        </tr>
                                        <tr> 
                                            <td>Waist</td>
                                            <td>: {{ $order_info->waist }} Inch</td> 
                                        </tr>
                                        <tr> 
                                            <td>Hips</td>
                                            <td>: {{ $order_info->hips }} Inch</td> 
                                        </tr>
                                        <?php 
                                            $top = json_decode($order_info->top);
                                        ?>
                                        <tr> 
                                            <td>Client normally wear top with size</td>
                                            <td>: {{ $top->size }}</td> 
                                        </tr>
                                        <tr> 
                                            <td>Client normally wear top brand</td>
                                            <td>: {{ $top->brand }}</td> 
                                        </tr>
                                        <?php 
                                            $dress = json_decode($order_info->dress);
                                        ?>
                                        <tr>
                                            <td>Client normally wear dresses with size</td>
                                            <td>: {{ $dress->size }}</td> 
                                        </tr>
                                        <tr> 
                                            <td>Client normally wear dresses brand</td>
                                            <td>: {{ $dress->brand }}</td> 
                                        </tr>
                                        <?php 
                                            $bottom = json_decode($order_info->bottom);
                                        ?>
                                        <tr> 
                                            <td>Client normally wear bottoms with size</td>
                                            <td>: {{ $bottom->size }}</td> 
                                        </tr>
                                        <tr> 
                                            <td>Client normally wear bottoms brand</td>
                                            <td>: {{ $bottom->brand }}</td> 
                                        </tr>
                                        <tr> 
                                            <td>Client like clothes to fit top half of the body</td>
                                            <td>: {{ $order_info->topFit }}</td> 
                                        </tr>
                                        <tr> 
                                            <td>Client like clothes to fit lower half of my body</td>
                                            <td>: {{ $order_info->bottomFit }}</td> 
                                        </tr>
                                        <tr> 
                                            <td>Client prefer to wear</td>
                                            <td>: {{ $order_info->preferCloth }}</td> 
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="table request-details-infos-table">
                                    <h5 style="color: #000;"><b>What CLIENT LIKE</b></h5>
                                    <tbody> 
                                        <tr> 
                                            <td>Styles client would pick for closet</td>
                                            <td>: {{ $order_info->styleForCloset }}</td> 
                                        </tr>
                                        <?php $dressCoast = json_decode($order_info->dressCoast); ?>
                                        <tr> 
                                            <td>Optimum value for dress</td>
                                            <td>: ${{ $dressCoast->low }} to ${{ $dressCoast->high }}</td> 
                                        </tr>
                                        <?php $topsCoast = json_decode($order_info->topsCoast); ?>
                                        <tr> 
                                            <td>Optimum value for tops</td>
                                            <td>: ${{ $topsCoast->low }} to ${{ $topsCoast->high }}</td> 
                                        </tr>
                                        <?php $bottomCoast = json_decode($order_info->bottomCoast); ?>
                                        <tr> 
                                            <td>Optimum value for bottoms</td>
                                            <td>: ${{ $bottomCoast->low }} to ${{ $bottomCoast->high }}</td> 
                                        </tr>
                                        <?php $bagsCoast = json_decode($order_info->bagsCoast); ?>
                                        <tr> 
                                            <td>Optimum value for bags</td>
                                            <td>: ${{ $bagsCoast->low }} to ${{ $bagsCoast->high }}</td> 
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="table request-details-infos-table">
                                    <h5 style="color: #000;"><b>CLIENT'S STYLE ADVICE</b></h5>
                                    <tbody> 
                                        <tr> 
                                            <td>Client want the style advise to be</td>
                                            <td>: {{ $order_info->preferStyle }}</td> 
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="table request-details-infos-table">
                                    <h5 style="color: #000;"><b>CLIENT'S SOCIAL NETWORKS</b></h5>
                                    <tbody>
                                        <?php $socialLinks = json_decode($order_info->socialLinks); ?>
                                        <tr> 
                                            <td>LinkedIn</td>
                                            <td>: <a target="blank" href="{{ $socialLinks->IN }}">{{ $socialLinks->IN }}</a></td> 
                                        </tr>
                                        <tr> 
                                            <td>Facebook</td>
                                            <td>: <a target="blank" href="{{ $socialLinks->FB }}">{{ $socialLinks->FB }}</a></td> 
                                        </tr>
                                        <tr> 
                                            <td>Instagram</td>
                                            <td>: <a target="blank" href="{{ $socialLinks->INS }}">{{ $socialLinks->INS }}</a></td> 
                                        </tr>
                                        <tr> 
                                            <td>Pinterest</td>
                                            <td>: <a target="blank" href="{{ $socialLinks->PIN }}">{{ $socialLinks->PIN }}</a></td> 
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="right-side-bar-wrapper">
                <div class="right-side-bar">
                    <table class="table right-side-bar-table">  
                        <tbody> 
                            <tr> 
                                <td>Order id</td>
                                <td>: {{ $order_info->order_id }}</td>
                            </tr>
                            <tr> 
                                <td>User</td>
                                <td>: {{ $order_info->user }}</td> 
                            </tr>
                            <tr> 
                                <td>Order date</td>
                                <td>: {{ date("d-M-y", strtotime($order_info->created_at)) }}</td> 
                            </tr>
                            <tr> 
                                <td>Target Delivery</td>
                                <td>: {{ date("d-M-y", strtotime($order_info->target_date)) }}</td> 
                            </tr>
                        </tbody> 
                    </table>

                    <h4 class="text-center">Budget</h4>
                    <table class="table text-center right-side-bar-table">  
                        <tbody> 
                            <tr> 
                                <td>Dress</td>
                                <td>: ${{ $dressCoast->high }}</td> 
                            </tr>
                            <tr> 
                                <td>Tops</td>
                                <td>: ${{ $topsCoast->high }}</td> 
                            </tr>
                            <tr> 
                                <td>Bottoms</td>
                                <td>: ${{ $bottomCoast->high }}</td> 
                            </tr>
                            <tr> 
                                <td>Bags</td>
                                <td>: ${{ $bagsCoast->high }}</td> 
                            </tr>
                        </tbody> 
                    </table>

                    <div class="user-his-button">
                        <a href="user-history.php" class="btn btn-default">View User History</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #row -->
    <!-- #row -->
    <div class="row">
        <div class="col-md-9 products">
            <h3 style="color: #000; text-align:center;"><b>How client think the following styles would suit her?</b></h3>
            <?php $styleRatings = json_decode($order_info->styleRatings); ?>
            <div class="col-md-3">
                <div class="product-item">
                    <img class="img-responsive" src="{{ URL::asset('img/dress/dress-1.jpg') }}">
                    <span class="product-item-feedback"><b>{{ $styleRatings->dress_1 }}</b></span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <img class="img-responsive" src="{{ URL::asset('img/dress/dress-2.jpg') }}">
                    <span class="product-item-feedback"><b>{{ $styleRatings->dress_2 }}</b></span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <img class="img-responsive" src="{{ URL::asset('img/dress/dress-3.jpg') }}">
                    <span class="product-item-feedback"><b>{{ $styleRatings->dress_3 }}</b></span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <img class="img-responsive" src="{{ URL::asset('img/dress/dress-4.jpg') }}">
                    <span class="product-item-feedback"><b>{{ $styleRatings->dress_4 }}</b></span>
                </div>
            </div>
        </div>
    </div>
    <!-- #row -->
    <!-- #row -->
    <div class="row">
        <div class="col-md-9 products">
            <div class="col-md-3">
                <div class="product-item">
                    <img class="img-responsive" src="{{ URL::asset('img/dress/dress-5.jpg') }}">
                    <span class="product-item-feedback"><b>{{ $styleRatings->dress_5 }}</b></span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <img class="img-responsive" src="{{ URL::asset('img/dress/dress-6.jpg') }}">
                    <span class="product-item-feedback"><b>{{ $styleRatings->dress_6 }}</b></span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <img class="img-responsive" src="{{ URL::asset('img/dress/dress-7.jpg') }}">
                    <span class="product-item-feedback"><b>{{ $styleRatings->dress_7 }}</b></span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <img class="img-responsive" src="{{ URL::asset('img/dress/dress-8.jpg') }}">
                    <span class="product-item-feedback"><b>{{ $styleRatings->dress_8 }}</b></span>
                </div>
            </div>
        </div>
    </div>
    <!-- #row -->
    <!-- #row -->
    <div class="row">
        <div class="col-md-9 products">
            <div class="col-md-3">
                <div class="product-item">
                    <img class="img-responsive" src="{{ URL::asset('img/dress/dress-9.jpg') }}">
                    <span class="product-item-feedback"><b>{{ $styleRatings->dress_9 }}</b></span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <img class="img-responsive" src="{{ URL::asset('img/dress/dress-10.jpg') }}">
                    <span class="product-item-feedback"><b>{{ $styleRatings->dress_10 }}</b></span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <img class="img-responsive" src="{{ URL::asset('img/dress/dress-11.jpg') }}">
                    <span class="product-item-feedback"><b>{{ $styleRatings->dress_11 }}</b></span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <img class="img-responsive" src="{{ URL::asset('img/dress/dress-12.jpg') }}">
                    <span class="product-item-feedback"><b>{{ $styleRatings->dress_12 }}</b></span>
                </div>
            </div>
        </div>
    </div>
    <!-- #row -->
    <!-- #row -->
    <div class="row">
        <div class="col-md-9 products">
            <div class="col-md-3">
                <div class="product-item">
                    <img class="img-responsive" src="{{ URL::asset('img/dress/dress-13.jpg') }}">
                    <span class="product-item-feedback"><b>{{ $styleRatings->dress_13 }}</b></span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <img class="img-responsive" src="{{ URL::asset('img/dress/dress-14.jpg') }}">
                    <span class="product-item-feedback"><b>{{ $styleRatings->dress_14 }}</b></span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <img class="img-responsive" src="{{ URL::asset('img/dress/dress-15.jpg') }}">
                    <span class="product-item-feedback"><b>{{ $styleRatings->dress_15 }}</b></span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <img class="img-responsive" src="{{ URL::asset('img/dress/dress-16.jpg') }}">
                    <span class="product-item-feedback"><b>{{ $styleRatings->dress_16 }}</b></span>
                </div>
            </div>
        </div>
    </div>
    <!-- #row -->
    <div class="row">
        <div class="col-md-9 products">
            <div class="col-md-3">
                <div class="product-item">
                    <img class="img-responsive" src="{{ URL::asset('img/dress/dress-17.jpg') }}">
                    <span class="product-item-feedback"><b>{{ $styleRatings->dress_17 }}</b></span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <img class="img-responsive" src="{{ URL::asset('img/dress/dress-18.jpg') }}">
                    <span class="product-item-feedback"><b>{{ $styleRatings->dress_18 }}</b></span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <img class="img-responsive" src="{{ URL::asset('img/dress/dress-19.jpg') }}">
                    <span class="product-item-feedback"><b>{{ $styleRatings->dress_19 }}</b></span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <img class="img-responsive" src="{{ URL::asset('img/dress/dress-20.jpg') }}">
                    <span class="product-item-feedback"><b>{{ $styleRatings->dress_20 }}</b></span>
                </div>
            </div>
        </div>
    </div>
    <!-- #row -->
    <div class="row">
        <div class="col-md-9 products-pagination text-right">
            <a href="javascript:history.back()" class="btn btn-danger"><i class="fa fa-chevron-left"></i> Back</a>
            @if($order_info->process_status == 0)
            <a id="assign" href="#" class="btn btn-success"><i class="fa fa-check-circle"></i> Assign</a>
            @endif
        </div>
    </div>
    <!-- #row -->
</div>
<!-- # page-content-wrapper -->
@include('admin.order.js.common_js')
@endsection