@extends('layouts.app')

@section('content')
<!-- includes navigation file -->
@include('parts.order_navigation')
<!-- About Section -->
<section id="registration" class="section">
	<!-- Section Title -->
	<div class="section-title row text-center padding-medium">
		<div class="large-12 medium-12 columns animate" data-animation="flipInX">
			<h3>Let’s get acquainted. Remember, the more we know you, the better we get.</h2>
		</div>
	</div>
	<div class="ques-form">
		<div class="ques-form-inner text-center">
			<form id="data" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
			<!-- Start Question Step 1 -->
			<div class="ques-step-one segment">
				<div class="row padding-small">
					<h3>ABOUT YOU</h3>
					<br>
					<div class="medium-4 medium-offset-1 columns">
						<div id="user_name">
							<h5>Your Name</h5>
							<input id="username" name="username" value="{{\Auth::user()->name}}" type="text"/>
						</div>
					</div>
					<div class="medium-4 medium-offset-2 columns">
						<div id="user_age">
							<h5>Your Age <small>(in years)</small></h5>
							<input id="age" name="age" type="text"/>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="row padding-small">
					<div class="medium-6 columns">
						<div id="sliderDiv1" class="sliderClass notClicked">
							<h5>How tall are you?</h5>
							<input id="tall" name="size_height" data-slider-id='measurementSlider' type="text" data-slider-min="140" data-slider-max="200" data-slider-step="1" data-slider-value="170"/>
						</div>
					</div>
					<div class="medium-6 columns">
						<div id="sliderDiv2" class="sliderClass notClicked">
							<h5>How much do you weight?</h5>
							<input id="weight" name="size_weight" data-slider-id='measurementSlider' type="text" data-slider-min="30" data-slider-max="110" data-slider-step="1" data-slider-value="70"/>
						</div>
					</div>
					<div class="medium-12 columns">
						<div id="for_living" class="ques-btn occupation text-center">
							<h5>What do you do for living?</h5>
							<span class="button tiny ghost brand"><b>Client Services</b></span>
							<span class="button tiny ghost brand"><b>Homemaker</b></span>
							<span class="button tiny ghost brand"><b>Marketing</b></span>
							<span class="button tiny ghost brand"><b>Student</b></span>
							<span class="button tiny ghost brand"><b>Technology</b></span>
							<span class="button tiny ghost brand"><b>Management</b></span>
							<span class="button tiny ghost brand"><b>Retails</b></span>
							<span class="button tiny ghost brand"><b>Others</b></span>
						</div>
					</div>
				</div>
			</div>
			<!-- / End Question Step 1 -->

			<!-- Start Question Step 2 -->
			<div class="ques-step-two segment">
				<div class="row padding-small">
					<h3>ABOUT YOUR STYLE</h3>
					<br>
					<div class="medium-5 columns">
						<div id="sliderDiv7" class="sliderClass notClicked">
							<h5>You have a wardrobe full of clothes and yet can't find anything to wear?</h5>
							<input id="" type="text"
							data-slider-id='wardrobe1'
							data-provide="slider"
							data-slider-ticks="[1, 2, 3, 4, 5, 6, 7, 8, 9, 10]"
							data-slider-min="1"
							data-slider-max="10"
							data-slider-step="1"
							data-slider-value="1"
							data-slider-tooltip="always"/>
							<p class="text-sans-serif">1 = “Strongly Disagree”</p>
							<p class="text-sans-serif">10 = “Strongly Agree”</p>
						</div>
					</div>
					<div class="medium-5 columns">
						<div id="sliderDiv8" class="sliderClass notClicked">
							<h5>How would you rate your current style and wardrobe selection?</h5>
							<input id="" type="text"
							data-slider-id='wardrobe2'
							data-provide="slider"
							data-slider-ticks="[1, 2, 3, 4, 5, 6, 7, 8, 9, 10]"
							data-slider-min="1"
							data-slider-max="10"
							data-slider-step="1"
							data-slider-value="1"
							data-slider-tooltip="always"/>
							<p class="text-sans-serif">1 = “I suck”</p>
							<p class="text-sans-serif">5 = “I can do better”</p>
							<p class="text-sans-serif">10 = “I am a fashionista!”</p>
						</div>
					</div>
				</div>
				<div id="body_type" class="row">
					<h4>Tell us which body type is more like yours?</h4>
					<br>
					<div class="medium-2 columns">
						<div class="body-shape">
							<div class="single-shape">
								<img src="{{ URL::asset('img/body-shape/triangle.jpg') }}" alt="Triangle Shape">
							</div>
							<h5>Triangle</h5>
							<p class="text-sans-serif">
								I have narrow shoulders and wide hips.
							</p>
						</div>
						<hr class="hidden-lg hidden-md">
					</div>

					<div class="medium-2 columns">
						<div class="body-shape">
							<div class="single-shape">
								<img src="{{ URL::asset('img/body-shape/oval.jpg') }}" alt="Oval Shape">
							</div>
							<h5>Oval</h5>
							<p class="text-sans-serif">
								My shoulders waist and hips are form a round shape.
							</p>
						</div>
						<hr class="hidden-lg hidden-md">
					</div>

					<div class="medium-2 columns">
						<div class="body-shape">
							<div class="single-shape">
								<img src="{{ URL::asset('img/body-shape/invt-triangle.jpg') }}" alt="Inverted Triangle Shape">
							</div>
							<h5>Inverted Triangle</h5>
							<p class="text-sans-serif">
								I have board shoulders and narrow hips.
							</p>
						</div>
						<hr class="hidden-lg hidden-md">
					</div>

					<div class="medium-2 columns">
						<div class="body-shape">
							<div class="single-shape">
								<img src="{{ URL::asset('img/body-shape/rectangle.jpg') }}" alt="Rectangle Shape">
							</div>
							<h5>Rectangle</h5>
							<p class="text-sans-serif">
								My shoulders waist and hips are aligned.
							</p>
						</div>
						<hr class="hidden-lg hidden-md">
					</div>

					<div class="medium-2 columns">
						<div class="body-shape">
							<div class="single-shape">
								<img src="{{ URL::asset('img/body-shape/hourglass.jpg') }}" alt="Hourglass Shape">
							</div>
							<h5>Hourglass</h5>
							<p class="text-sans-serif">
								My shoulders and hips are aligned, yet my waist is narrow.
							</p>
						</div>
						<hr class="hidden-lg hidden-md">
					</div>

					<div class="medium-2 columns">
						<div class="body-shape">
							<div class="single-shape">
								<img src="{{ URL::asset('img/body-shape/diamond.jpg') }}" alt="Diamond Shape">
							</div>
							<h5>Diamond</h5>
							<p class="text-sans-serif">
								My shoulders and hips narrow, yet may waist is wide.
							</p>
						</div>
						<hr class="hidden-lg hidden-md">
					</div>
				</div>
			</div>
			<!-- / End Question Step 2 -->

			<!-- Start Question Step 3 -->
			<div class="ques-step-three segment">
				<div class="row padding-small">
					<h3>ABOUT YOUR MEASUREMENTS</h3>
					<br>
					<div class="medium-4 columns">
						<div id="user_chest">
							<h5>Chest/ Bust</h5>
							<input id="chest" name="chest" type="text"/>
						</div>
					</div>
					<div class="medium-4 columns">
						<div id="user_waist">
							<h5>Waist</h5>
							<input id="waist" name="waist" type="text"/>
						</div>
					</div>
					<div class="medium-4 columns">
						<div id="user_hips">
							<h5>Hips</h5>
							<input id="hips" name="hips" type="text"/>
						</div>
					</div>
				</div>

				<div class="row padding-small">
					<div class="medium-7 columns">
						<div id="top_size" class="ques-btn top-size text-center">
							<h5>You normally wear top with size?</h5>
							<span class="button tiny ghost brand"><b>6</b></span>
							<span class="button tiny ghost brand"><b>8</b></span>
							<span class="button tiny ghost brand"><b>10</b></span>
							<span class="button tiny ghost brand"><b>12</b></span>
							<span class="button tiny ghost brand"><b>14</b></span>
							<span class="button tiny ghost brand"><b>16</b></span>
							<br>
							<span class="button tiny ghost brand"><b>XS</b></span>
							<span class="button tiny ghost brand"><b>S</b></span>
							<span class="button tiny ghost brand"><b>M</b></span>
							<span class="button tiny ghost brand"><b>L</b></span>
							<span class="button tiny ghost brand"><b>XL</b></span>
						</div>
					</div>
					<div class="medium-5 columns">
						<div id="top_size_brand" class="ques-btn top-size-brand text-center">
							<h5>From Brand</h5>
							<span class="button tiny ghost brand"><b>H&amp;M</b></span>
							<span class="button tiny ghost brand"><b>ZARA</b></span>
							<span class="button tiny ghost brand"><b>Love Bonito</b></span>
							<span class="button tiny ghost brand"><b>MDS</b></span>
							<span class="button tiny ghost brand"><b>Mango</b></span>
							<span class="button tiny ghost brand"><b>Others</b></span>
						</div>
					</div>
				</div>

				<div class="row padding-v-small">
					<div class="medium-7 columns">
						<div id="dress_size" class="ques-btn dress-size text-center">
							<h5>You normally wear dresses with size?</h5>
							<span class="button tiny ghost brand"><b>6</b></span>
							<span class="button tiny ghost brand"><b>8</b></span>
							<span class="button tiny ghost brand"><b>10</b></span>
							<span class="button tiny ghost brand"><b>12</b></span>
							<span class="button tiny ghost brand"><b>14</b></span>
							<span class="button tiny ghost brand"><b>16</b></span>
							<br>
							<span class="button tiny ghost brand"><b>XS</b></span>
							<span class="button tiny ghost brand"><b>S</b></span>
							<span class="button tiny ghost brand"><b>M</b></span>
							<span class="button tiny ghost brand"><b>L</b></span>
							<span class="button tiny ghost brand"><b>XL</b></span>
						</div>
					</div>
					<div class="medium-5 columns">
						<div id="dress_size_brand" class="ques-btn dress-size-brand text-center">
							<h5>From Brand</h5>
							<span class="button tiny ghost brand"><b>H&amp;M</b></span>
							<span class="button tiny ghost brand"><b>ZARA</b></span>
							<span class="button tiny ghost brand"><b>Love Bonito</b></span>
							<span class="button tiny ghost brand"><b>MDS</b></span>
							<span class="button tiny ghost brand"><b>Mango</b></span>
							<span class="button tiny ghost brand"><b>Others</b></span>
						</div>
					</div>
				</div>

				<div class="row padding-v-small">
					<div class="medium-7 columns">
						<div id="bottom_size" class="ques-btn btm-size text-center">
							<h5>You normally wear bottoms with size?</h5>
							<span class="button tiny ghost brand"><b>6</b></span>
							<span class="button tiny ghost brand"><b>8</b></span>
							<span class="button tiny ghost brand"><b>10</b></span>
							<span class="button tiny ghost brand"><b>12</b></span>
							<span class="button tiny ghost brand"><b>14</b></span>
							<span class="button tiny ghost brand"><b>16</b></span>
							<br>
							<span class="button tiny ghost brand"><b>XS</b></span>
							<span class="button tiny ghost brand"><b>S</b></span>
							<span class="button tiny ghost brand"><b>M</b></span>
							<span class="button tiny ghost brand"><b>L</b></span>
							<span class="button tiny ghost brand"><b>XL</b></span>
						</div>
					</div>
					<div class="medium-5 columns">
						<div id="bottom_size_brand" class="ques-btn bottom-size-brand text-center">
							<h5>From Brand</h5>
							<span class="button tiny ghost brand"><b>H&amp;M</b></span>
							<span class="button tiny ghost brand"><b>ZARA</b></span>
							<span class="button tiny ghost brand"><b>Love Bonito</b></span>
							<span class="button tiny ghost brand"><b>MDS</b></span>
							<span class="button tiny ghost brand"><b>Mango</b></span>
							<span class="button tiny ghost brand"><b>Others</b></span>
						</div>
					</div>
				</div>

				<div class="row padding-v-small">
					<div class="medium-7 columns">
						<div id="top_cloth" class="ques-btn top-cloth text-center">
							<h5>I like clothes to fit top half of the body</h5>
							<span class="button tiny ghost brand"><b>Mostly Tight/ Form Fitting</b></span>
							<span class="button tiny ghost brand"><b>Prefer Fitted/ Show my figure</b></span><br>
							<span class="button tiny ghost brand"><b>Straight</b></span>
							<span class="button tiny ghost brand"><b>Mostly Loose</b></span>
							<span class="button tiny ghost brand"><b>Oversized</b></span>
						</div>
					</div>
					<div class="medium-5 columns">
						<div id="bottom_cloth" class="ques-btn btm-cloth text-center">
							<h5>I like clothes to fit lower half of my body</h5>
							<span class="button tiny ghost brand"><b>Tight</b></span>
							<span class="button tiny ghost brand"><b>Fitted</b></span>
							<span class="button tiny ghost brand"><b>Straight</b></span>
							<span class="button tiny ghost brand"><b>Loose</b></span>
						</div>
					</div>
					<div class="clearfix"></div><br>
					<div class="medium-6 medium-offset-3 columns">
						<div id="prefer_cloth" class="ques-btn prefer-cloth text-center">
							<h5>I prefer to wear</h5>
							<span class="button tiny ghost brand"><b>Jeans/ Pants</b></span>
							<span class="button tiny ghost brand"><b>Dresses</b></span>
							<span class="button tiny ghost brand"><b>A healthy mix of both</b></span>
						</div>
					</div>
				</div>
			</div>
			<!-- / End Question Step 3 -->

			<!-- Start Question Step 4 -->
			<div class="ques-step-four padding-small segment text-center">
				<h3>About what you like</h3>
				<br><br>
				<div id="for_closet">
					<div class="tag">
						<h4>Which styles you would pick for your closet?</h4>
						<br>
						<div class="row">
							<div class="medium-12 columns">
								<div class="single-tag">
									<span class="button ghost brand">
										<b>BOLD</b>
									</span>
									<span class="button ghost brand">
										<b>CASUAL</b>
									</span>
									<span class="button ghost brand">
										<b>EDGY</b>
									</span>
									<span class="button ghost brand">
										<b>ELEGANT</b>
									</span>
									<span class="button ghost brand">
										<b>GIRLY</b>
									</span>
									<span class="button ghost brand">
										<b>GLAMOROUS</b>
									</span>
									<span class="button ghost brand">
										<b>ROMANTIC</b>
									</span>
									<span class="button ghost brand">
										<b>SEXY</b>
									</span>
									<span class="button ghost brand">
										<b>SPORTY</b>
									</span>
									<span class="button ghost brand">
										<b>TRENDY</b>
									</span>

								</div>
							</div>
						</div>
					</div>
				</div>
				<br>
				<br>

				<h4>
					Let's make your wallet and closet the best of friends.
					<br>
					How much you think would be the optimum value for these items?
				</h4>
				<br>
				<br>

				<div class="row">
					<div class="medium-6 columns">
						<div id="sliderDiv3" class="sliderClass notClicked">
							<h5>Dress</h5>
							<input id="priceForDress" name="" data-slider-id='priceForDressSlider' type="text" data-slider-min="20" data-slider-max="180" data-slider-step="1" data-slider-value="[20,180]"/>
						</div>
					</div>
					<div class="medium-6 columns">
						<div id="sliderDiv4" class="sliderClass notClicked">
							<h5>Tops</h5>
							<input id="priceForTops" name="" data-slider-id='priceForTopsSlider' type="text" data-slider-min="20" data-slider-max="100" data-slider-step="1" data-slider-value="[20,100]"/>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="medium-6 columns">
						<div id="sliderDiv5" class="sliderClass notClicked">
							<h5>Bottoms</h5>
							<input id="priceForBottoms" name="" data-slider-id='priceForBottomSlider' type="text" data-slider-min="20" data-slider-max="150" data-slider-step="1" data-slider-value="[20,150]"/>
						</div>
					</div>
					<div class="medium-6 columns">
						<div id="sliderDiv6" class="sliderClass notClicked">
							<h5>Bags</h5>
							<input id="priceForBags" name="" data-slider-id='priceForBagSlider' type="text" data-slider-min="50" data-slider-max="400" data-slider-step="1" data-slider-value="[50,400]"/>
						</div>
					</div>
				</div>

				
				<div class="dress-box">
					<div id="date_dress_opt">
						<div class="row">
							<h4 class="padding-small">
							How do you think the following styles would suit you?
							</h4>
							<div class="medium-3 columns">
								<div class="single-dress-box">
									<img class="img-responsive" src="{{ URL::asset('img/dress/dress-1.jpg') }}" alt="Dress Image">
									<div id="dress_1" class="ques-btn text-center">
										<span class="button tiny ghost brand"><b>Wow</b></span>
										<span class="button tiny ghost brand"><b>Average</b></span>
										<span class="button tiny ghost brand"><b>Nah</b></span>
									</div>
								</div>
							</div>
							<div class="medium-3 columns">
								<div class="single-dress-box">
									<img class="img-responsive" src="{{ URL::asset('img/dress/dress-2.jpg') }}" alt="Dress Image">
									<div id="dress_2" class="ques-btn text-center">
										<span class="button tiny ghost brand"><b>Wow</b></span>
										<span class="button tiny ghost brand"><b>Average</b></span>
										<span class="button tiny ghost brand"><b>Nah</b></span>
									</div>
								</div>
							</div>
							<div class="medium-3 columns">
								<div class="single-dress-box">
									<img class="img-responsive" src="{{ URL::asset('img/dress/dress-3.jpg') }}" alt="Dress Image">
									<div id="dress_3" class="ques-btn text-center">
										<span class="button tiny ghost brand"><b>Wow</b></span>
										<span class="button tiny ghost brand"><b>Average</b></span>
										<span class="button tiny ghost brand"><b>Nah</b></span>
									</div>
								</div>
							</div>
							<div class="medium-3 columns">
								<div class="single-dress-box">
									<img class="img-responsive" src="{{ URL::asset('img/dress/dress-4.jpg') }}" alt="Dress Image">
									<div id="dress_4" class="ques-btn text-center">
										<span class="button tiny ghost brand"><b>Wow</b></span>
										<span class="button tiny ghost brand"><b>Average</b></span>
										<span class="button tiny ghost brand"><b>Nah</b></span>
									</div>
								</div>
							</div>
						</div>
						<div class="clearfix"></div><br>
						<div class="row">
							<div class="medium-3 columns">
								<div class="single-dress-box">
									<img class="img-responsive" src="{{ URL::asset('img/dress/dress-5.jpg') }}" alt="Dress Image">
									<div id="dress_5" class="ques-btn text-center">
										<span class="button tiny ghost brand"><b>Wow</b></span>
										<span class="button tiny ghost brand"><b>Average</b></span>
										<span class="button tiny ghost brand"><b>Nah</b></span>
									</div>
								</div>
							</div>
							<div class="medium-3 columns">
								<div class="single-dress-box">
									<img class="img-responsive" src="{{ URL::asset('img/dress/dress-6.jpg') }}" alt="Dress Image">
									<div id="dress_6" class="ques-btn text-center">
										<span class="button tiny ghost brand"><b>Wow</b></span>
										<span class="button tiny ghost brand"><b>Average</b></span>
										<span class="button tiny ghost brand"><b>Nah</b></span>
									</div>
								</div>
							</div>
							<div class="medium-3 columns">
								<div class="single-dress-box">
									<img class="img-responsive" src="{{ URL::asset('img/dress/dress-7.jpg') }}" alt="Dress Image">
									<div id="dress_7" class="ques-btn text-center">
										<span class="button tiny ghost brand"><b>Wow</b></span>
										<span class="button tiny ghost brand"><b>Average</b></span>
										<span class="button tiny ghost brand"><b>Nah</b></span>
									</div>
								</div>
							</div>
							<div class="medium-3 columns">
								<div class="single-dress-box">
									<img class="img-responsive" src="{{ URL::asset('img/dress/dress-8.jpg') }}" alt="Dress Image">
									<div id="dress_8" class="ques-btn text-center">
										<span class="button tiny ghost brand"><b>Wow</b></span>
										<span class="button tiny ghost brand"><b>Average</b></span>
										<span class="button tiny ghost brand"><b>Nah</b></span>
									</div>
								</div>
							</div>
						</div>
						<div class="clearfix"></div><br>
						<div class="row">
							<div class="medium-3 columns">
								<div class="single-dress-box">
									<img class="img-responsive" src="{{ URL::asset('img/dress/dress-9.jpg') }}" alt="Dress Image">
									<div id="dress_9" class="ques-btn text-center">
										<span class="button tiny ghost brand"><b>Wow</b></span>
										<span class="button tiny ghost brand"><b>Average</b></span>
										<span class="button tiny ghost brand"><b>Nah</b></span>
									</div>
								</div>
							</div>
							<div class="medium-3 columns">
								<div class="single-dress-box">
									<img class="img-responsive" src="{{ URL::asset('img/dress/dress-10.jpg') }}" alt="Dress Image">
									<div id="dress_10" class="ques-btn text-center">
										<span class="button tiny ghost brand"><b>Wow</b></span>
										<span class="button tiny ghost brand"><b>Average</b></span>
										<span class="button tiny ghost brand"><b>Nah</b></span>
									</div>
								</div>
							</div>
							<div class="medium-3 columns">
								<div class="single-dress-box">
									<img class="img-responsive" src="{{ URL::asset('img/dress/dress-11.jpg') }}" alt="Dress Image">
									<div id="dress_11" class="ques-btn text-center">
										<span class="button tiny ghost brand"><b>Wow</b></span>
										<span class="button tiny ghost brand"><b>Average</b></span>
										<span class="button tiny ghost brand"><b>Nah</b></span>
									</div>
								</div>
							</div>
							<div class="medium-3 columns">
								<div class="single-dress-box">
									<img class="img-responsive" src="{{ URL::asset('img/dress/dress-12.jpg') }}" alt="Dress Image">
									<div id="dress_12" class="ques-btn text-center">
										<span class="button tiny ghost brand"><b>Wow</b></span>
										<span class="button tiny ghost brand"><b>Average</b></span>
										<span class="button tiny ghost brand"><b>Nah</b></span>
									</div>
								</div>
							</div>
						</div>
						<div class="clearfix"></div><br>
						<div class="row">
							<div class="medium-3 columns">
								<div class="single-dress-box">
									<img class="img-responsive" src="{{ URL::asset('img/dress/dress-13.jpg') }}" alt="Dress Image">
									<div id="dress_13" class="ques-btn text-center">
										<span class="button tiny ghost brand"><b>Wow</b></span>
										<span class="button tiny ghost brand"><b>Average</b></span>
										<span class="button tiny ghost brand"><b>Nah</b></span>
									</div>
								</div>
							</div>
							<div class="medium-3 columns">
								<div class="single-dress-box">
									<img class="img-responsive" src="{{ URL::asset('img/dress/dress-14.jpg') }}" alt="Dress Image">
									<div id="dress_14" class="ques-btn text-center">
										<span class="button tiny ghost brand"><b>Wow</b></span>
										<span class="button tiny ghost brand"><b>Average</b></span>
										<span class="button tiny ghost brand"><b>Nah</b></span>
									</div>
								</div>
							</div>
							<div class="medium-3 columns">
								<div class="single-dress-box">
									<img class="img-responsive" src="{{ URL::asset('img/dress/dress-15.jpg') }}" alt="Dress Image">
									<div id="dress_15" class="ques-btn text-center">
										<span class="button tiny ghost brand"><b>Wow</b></span>
										<span class="button tiny ghost brand"><b>Average</b></span>
										<span class="button tiny ghost brand"><b>Nah</b></span>
									</div>
								</div>
							</div>
							<div class="medium-3 columns">
								<div class="single-dress-box">
									<img class="img-responsive" src="{{ URL::asset('img/dress/dress-16.jpg') }}" alt="Dress Image">
									<div id="dress_16" class="ques-btn text-center">
										<span class="button tiny ghost brand"><b>Wow</b></span>
										<span class="button tiny ghost brand"><b>Average</b></span>
										<span class="button tiny ghost brand"><b>Nah</b></span>
									</div>
								</div>
							</div>
						</div>
						<div class="clearfix"></div><br>
						<div class="row">
							<div class="medium-3 columns">
								<div class="single-dress-box">
									<img class="img-responsive" src="{{ URL::asset('img/dress/dress-17.jpg') }}" alt="Dress Image">
									<div id="dress_17" class="ques-btn text-center">
										<span class="button tiny ghost brand"><b>Wow</b></span>
										<span class="button tiny ghost brand"><b>Average</b></span>
										<span class="button tiny ghost brand"><b>Nah</b></span>
									</div>
								</div>
							</div>
							<div class="medium-3 columns">
								<div class="single-dress-box">
									<img class="img-responsive" src="{{ URL::asset('img/dress/dress-18.jpg') }}" alt="Dress Image">
									<div id="dress_18" class="ques-btn text-center">
										<span class="button tiny ghost brand"><b>Wow</b></span>
										<span class="button tiny ghost brand"><b>Average</b></span>
										<span class="button tiny ghost brand"><b>Nah</b></span>
									</div>
								</div>
							</div>
							<div class="medium-3 columns">
								<div class="single-dress-box">
									<img class="img-responsive" src="{{ URL::asset('img/dress/dress-19.jpg') }}" alt="Dress Image">
									<div id="dress_19" class="ques-btn text-center">
										<span class="button tiny ghost brand"><b>Wow</b></span>
										<span class="button tiny ghost brand"><b>Average</b></span>
										<span class="button tiny ghost brand"><b>Nah</b></span>
									</div>
								</div>
							</div>
							<div class="medium-3 columns">
								<div class="single-dress-box">
									<img class="img-responsive" src="{{ URL::asset('img/dress/dress-20.jpg') }}" alt="Dress Image">
									<div id="dress_20" class="ques-btn text-center">
										<span class="button tiny ghost brand"><b>Wow</b></span>
										<span class="button tiny ghost brand"><b>Average</b></span>
										<span class="button tiny ghost brand"><b>Nah</b></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- / End Question Step 4 -->

			<!-- Start Question Step 5 -->
			<div class="ques-step-five padding-small segment text-center">
				<h3>ABOUT YOUR STYLE ADVICE</h3>
				<br>
				<div class="row padding-v-small">
					<div id="style_advice">
						<div class="advice-tag">
							<h4>How adventurous do you want your style advise to be?</h4>
							<br>
							<div class="row">
								<div class="medium-12 columns">
									<div class="single-advice-tag">
										<span class="button ghost tiny brand">
											<b>Very – I would like to try new styles only</b>
										</span>
										<span class="button ghost tiny brand">
											<b>Little – Please incorporate a few new things to my existing choices</b>
										</span>
										<span class="button ghost tiny brand">
											<b>Not at all – I am happy with my current style.</b>
										</span>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
			<!-- / End Question Step 5 -->

			<!-- Start Question Step 6 -->
			<div class="ques-step-six padding-small segment text-center">
				<h3>SOCIAL NETWORKS</h3>
				<br>
				<div class="social-activities">
					<div class="social-link-share">
						<div class="row padding-v-small">						
							<h5>
								Please share URL to your LinkedIn/ Facebook/ Instagram/ Pinterest profile. This would help our stylists know you better and pick better stuff for you!
							</h5>
							<br>
							<div class="medium-6 columns">
								<span><i class="fa fa-linkedin-square" aria-hidden="true"></i></span>
								<input id="linkedin" name="linkedin" type="text"/>
							</div>
							<div class="medium-6 columns">
								<span><i class="fa fa-facebook-official" aria-hidden="true"></i></span>
								<input id="facebook" name="facebook" type="text"/>
							</div>
							<div class="medium-6 columns">
								<span><i class="fa fa-instagram" aria-hidden="true"></i></span>
								<input id="instagram" name="instagram" type="text"/>
							</div>
							<div class="medium-6 columns">
								<span><i class="fa fa-pinterest" aria-hidden="true"></i></span>
								<input id="pinterest" name="pinterest" type="text"/>
							</div>
						</div>
					</div>

					<div class="social-personal-share">
						<h5>OR</h5>
						<h5>Upload 1 or more pictures of yours</h5>
						<div class="row padding-v-small">
							<!-- <div class="medium-6 columns"></div> -->
							<div class="medium-12 columns">
								<div class="photo-upload">
									<button class="file-upload">            
									  	<input type="file" class="file-input" id="files" name="files[]" multiple>Choose File
									</button>
									<br>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- / End Question Step 6 -->


			<!-- Start Question Step 7 -->
			<div class="ques-step-seven padding-small segment text-center">
				<h3>Tell Us More (Optional)</h3>
				<br>
				<div class="optional-step">
					<div class="row padding-v-small">						
						<div class="medium-4 medium-offset-1 columns">
							<div>
								<h5>Colors that you really love</h5>
								<input id="likedColor" name="likedColor" type="text"/>
							</div>
						</div>
						<div class="medium-4 medium-offset-2 columns">
							<div>
								<h5>Colors that you really dislike</h5>
								<input id="dislikedColor" name="dislikedColor" type="text"/>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="row padding-v-small text-sans-serif">
						<div id="additionalBodyOption" class="medium-6 columns">
							<fieldset>
								<h5>Anything worth a mention about your body</h5>
								<br>
								<div class="single-checkbox">
									<input id="check1" type="checkbox">
									<label for="check1">Big Shoulders</label>
								</div>
								<div class="single-checkbox">
									<input id="check2" type="checkbox">
									<label for="check2">Small Shoulders</label>
								</div>
								<div class="single-checkbox">
									<input id="check3" type="checkbox">
									<label for="check3">Narrow Hips</label>
								</div>
								<div class="single-checkbox">
									<input id="check4" type="checkbox">
									<label for="check4">Wide Hips</label>
								</div>
								<div class="single-checkbox">
									<input id="check5" type="checkbox">
									<label for="check5">Thin Legs</label>
								</div>
								<div class="single-checkbox">
									<input id="check6" type="checkbox">
									<label for="check6">Chunky Legs</label>
								</div>
								<div class="single-checkbox">									
									<input id="check7" type="checkbox">
									<label for="check7">Flabby Arms</label>
								</div>
								<br>
								<br>
								<div>
									<p style="text-align:left; margin-bottom:4px; font-size:14px;">
										Any other things that you would like us to know
									</p>
									<input id="additionalBodyComment" name="additionalBodyComment" type="text"/>
								</div>
							</fieldset>
						</div>
						<div id="itemsToReject" class="medium-6 columns">
							<fieldset>
								<h5>Any items that you never wear </h5>
								<br>
								<div class="single-checkbox">
									<input id="check8" type="checkbox">
									<label for="check8">Shirts</label>
								</div>
								
								<div class="single-checkbox">
									<input id="check9" type="checkbox">
									<label for="check9">Blouse</label>
								</div>
								
								<div class="single-checkbox">
									<input id="check10" type="checkbox">
									<label for="check10">Tank Tops</label>
								</div>
								
								<div class="single-checkbox">
									<input id="check11" type="checkbox">
									<label for="check11">Mini Skirts</label>
								</div>
								
								<div class="single-checkbox">
									<input id="check12" type="checkbox">
									<label for="check12">Knee Length Skirts</label>
								</div>
								
								<div class="single-checkbox">
									<input id="check13" type="checkbox">
									<label for="check13">Formal Wear</label>
								</div>
								<br>
								<br>
								<div>
									<p style="text-align:left; margin-bottom:4px; font-size:14px;">
										Any other things that you would like us to know
									</p>
									<input id="itemsToRejectComment" name="itemsToRejectComment" type="text"/>
								</div>
							</fieldset>
						</div>
					</div>
				</div>
			</div>
			<!-- / End Question Step 7 -->

			<!-- Start Question Step 8 -->
			<div class="ques-step-eight padding-small segment text-center">
				<div class="row">
					<div class="medium-4 columns">
						<div id="user_phonenumber">
							<h5>Phone number</h5>
							<input id="phonenumber" name="phonenumber" type="text"/>
						</div>
					</div>
					<div class="medium-8 columns">
						<div id="user_address">
							<h5>Address</h5>
							<input id="address" name="address" type="text"/>
						</div>
					</div>
				</div>
				<br>
				<br>
				<div class="row">
					<div class="medium-12 olumns">
						<h5>Any final comments/ suggestions while we put together your Dose for you.</h5>
						<textarea name="comments" id="comments" cols="10" rows="4"></textarea>
					</div>
				</div>
			</div>
			<!-- / End Question Step 8 -->
			<br>
			<div class="form-submit">
				<div class="row">
					<div class="medium-6 medium-offset-3 columns">
						<button id="submitOrder" class="button expand">Submit</button>
					</div>
				</div>
			</div>
			<br>
			</form>
		</div>
	</div>
</section>
<!--/ End About Section -->
<div class="progress">
	<div id="bar" class="progress-bar progress-bar-danger progress-bar-striped">
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function() {
	  	if (window.File && window.FileList && window.FileReader) {
	    	$("#files").on("change", function(e) {
	      		var files = e.target.files,
	        	filesLength = files.length;
	      		for (var i = 0; i < filesLength; i++) {
	        		var f = files[i]
	        		var fileReader = new FileReader();
	        		fileReader.onload = (function(e) {
	          			var file = e.target;
	          			$("<span class=\"pip\">" +
	            			"<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
	            			"<br/><span class=\"remove\"><i class=\"fa fa-times\"></i></span>" +
	            			"</span>").insertAfter(".file-upload");
	          			$(".remove").click(function(){
	            			$(this).parent(".pip").remove();
	          			});          
	        		});
	        		fileReader.readAsDataURL(f);
	      		}
    		});
	  	} else {
	    	alert("Your browser doesn't support to File API")
	  	}
	});

  	$(function() {
  		var cParentId = "";

  		$('.draggable').draggable();

  		$(document).on('draggable:start', '.draggable', function (e, ui) 
	  	{
	  		cParentId = $(this).parent().attr("id");
	  	});

  		$(document).on('draggable:stop', '.draggable', function (e, ui) 
	  	{
	  		var drragedDiv = $(this);
			var parentId   = cParentId;	

			if( parentId === undefined )
				return false;

			var pos  = $("#"+parentId).offset();
			var minX = pos.left;
			var maxX = pos.left+$("#"+parentId).width();

			var elm = drragedDiv.clone();
			elm.attr("style","");

			var point = $(this).offset().left;

			if( parentId == "centerBox" )
			{
				if( minX > point )
				{
					$("#leftBox").append(elm);
					drragedDiv.remove();
				}

				if( maxX < point )
				{
					$("#rightBox").append(elm);
					drragedDiv.remove();
				}
			}else if( parentId == "leftBox" ){
				if( maxX < point )
				{
					$("#centerBox").append(elm);
					drragedDiv.remove();
				}
			}else{
				if( minX > point )
				{
					$("#centerBox").append(elm);
					drragedDiv.remove();
				}
			}

			if( $("#leftBox").find("li").length > 0 ||  $("#rightBox").find("li").length > 0 ){

				$("#swipeLeft").hide();
				$("#swipeRight").hide();
			}else{
				$("#swipeLeft").show();
				$("#swipeRight").show();					  
			}

			$('.draggable').draggable();
		});

    	$('.droppable').droppable({ activeClass: 'active'});
    	$('.droppable').parent().css( "position","inherit");
    		    
  		$(document).on("click",".single-shape",function(){
  			$(".single-shape").each(function() {
                if( $(this).hasClass("shapeSelected") )
                	$(this).removeClass("shapeSelected");
            });

  			$(this).addClass("shapeSelected");
  		});

  		$(document).on("click","span.button.ghost.tiny.brand",function(){

  			if( !$(this).parent().hasClass("dress-test") )
  			{
	  			var classNames = $(this).parent().attr("class").replace(" ", ".");

                $(this).parent().find(".button").each(function() {
                	if( $(this).hasClass("optSelected") )
                    	$(this).removeClass("optSelected");
                });

                $(this).addClass("optSelected"); 
        	}else{

        		if( $(this).hasClass("optSelected") )
                	$(this).removeClass("optSelected");
                else{
                	var count = 0;
                	$(this).parent().find(".button").each(function() {
	                	if( $(this).hasClass("optSelected") )
	                    	count++;
	                });

                	if( count < 2 )
                	{
                		$(this).addClass("optSelected"); 
                	}else{
                		$('.alert-box').show();
                	}
                }
        	}
        });

  		$(document).on("click",".single-tag .button",function(){
  			
            if( $(this).hasClass("optSelected") )
            	$(this).removeClass("optSelected");
            else
            	$(this).addClass("optSelected"); 	                
        });

        $(document).on("submit","#data", function(e){
        	e.preventDefault();
        	var dataArr   	  = {};

        	dataArr['username'] 	= $("#username").val();
        	dataArr['age'] 	   		= $("#age").val();
        	dataArr['height'] 	   	= $("#tall").val();
        	dataArr['weight'] 	   	= $("#weight").val();
        	dataArr['for_living']  	= $("#for_living .optSelected").text();
        	if( dataArr['username'].length == 0 )
        	{
        		scrollTo( $("#user_name").offset().top-65, "#user_name h5", true );
        		return false;	
        	}else{
        		scrollTo( 0, "#user_name h5", false );
        	}
        	if( dataArr['age'].length == 0 )
        	{
        		scrollTo( $("#user_age").offset().top-65, "#user_age h5", true );
        		return false;	
        	}else{
        		scrollTo( 0, "#user_age h5", false );
        	}
        	if( dataArr['for_living'].length == 0 )
        	{
        		scrollTo( $("#for_living").offset().top-65, "#for_living h5", true );
        		return false;	
        	}else{
        		scrollTo( 0, "#for_living h5", false );
        	}

        	dataArr['clothesInWardrobe'] = $("#wardrobe1").next('input').val();
        	dataArr['currentStyleRate'] = $("#wardrobe2").next('input').val();

        	dataArr['body_type'] = $("#body_type .shapeSelected").parent().find('h5').text();
        	
            if( dataArr['body_type'].length == 0 )
        	{
        		scrollTo( $("#body_type").offset().top-65, "#body_type h4", true );
        		return false;	
        	}else{
        		scrollTo( 0, "#body_type h4", false );
        	}

        	dataArr['chest'] = $("#chest").val();
        	if( dataArr['chest'].length == 0 )
        	{
        		scrollTo( $("#user_chest").offset().top-65, "#user_chest h5", true );
        		return false;	
        	}else{
        		scrollTo( 0, "#user_chest h5", false );
        	}

        	dataArr['waist'] = $("#waist").val();
        	if( dataArr['waist'].length == 0 )
        	{
        		scrollTo( $("#user_waist").offset().top-65, "#user_waist h5", true );
        		return false;	
        	}else{
        		scrollTo( 0, "#user_waist h5", false );
        	}

        	dataArr['hips'] = $("#hips").val();
        	if( dataArr['hips'].length == 0 )
        	{
        		scrollTo( $("#user_hips").offset().top-65, "#user_hips h5", true );
        		return false;	
        	}else{
        		scrollTo( 0, "#user_hips h5", false );
        	}
        	data_temp = [];
        	data_temp['top_size'] = $("#top_size .optSelected b").text();
            if( data_temp['top_size'].length == 0 )
        	{
        		scrollTo( $("#top_size").offset().top-65, "#top_size h5", true );
        		return false;	
        	}else{
        		scrollTo( 0, "#top_size h5", false );
        	}

        	data_temp['top_size_brand'] = $("#top_size_brand .optSelected b").text();
            if( data_temp['top_size_brand'].length == 0 )
        	{
        		scrollTo( $("#top_size_brand").offset().top-65, "#top_size_brand h5", true );
        		return false;	
        	}else{
        		scrollTo( 0, "#top_size_brand h5", false );
        	}
        	dataArr['top'] = {'size': data_temp['top_size'], 'brand': data_temp['top_size_brand']};

        	data_temp['dress_size'] = $("#dress_size .optSelected b").text();
            if( data_temp['dress_size'].length == 0 )
        	{
        		scrollTo( $("#dress_size").offset().top-65, "#dress_size h5", true );
        		return false;	
        	}else{
        		scrollTo( 0, "#dress_size h5", false );
        	}
        	
        	data_temp['dress_size_brand'] = $("#dress_size_brand .optSelected b").text();
            if( data_temp['dress_size_brand'].length == 0 )
        	{
        		scrollTo( $("#dress_size_brand").offset().top-65, "#dress_size_brand h5", true );
        		return false;	
        	}else{
        		scrollTo( 0, "#dress_size_brand h5", false );
        	}
        	dataArr['dress'] = {'size': data_temp['dress_size'], 'brand': data_temp['dress_size_brand']};

        	data_temp['bottom_size'] = $("#bottom_size .optSelected b").text();
            if( data_temp['bottom_size'].length == 0 )
        	{
        		scrollTo( $("#bottom_size").offset().top-65, "#bottom_size h5", true );
        		return false;	
        	}else{
        		scrollTo( 0, "#bottom_size h5", false );
        	}
        	
        	data_temp['bottom_size_brand'] = $("#bottom_size_brand .optSelected b").text();
            if( data_temp['bottom_size_brand'].length == 0 )
        	{
        		scrollTo( $("#bottom_size_brand").offset().top-65, "#bottom_size_brand h5", true );
        		return false;	
        	}else{
        		scrollTo( 0, "#bottom_size_brand h5", false );
        	}
        	dataArr['bottom'] = {'size': data_temp['bottom_size'], 'brand': data_temp['bottom_size_brand']};

        	dataArr['top_cloth'] = $("#top_cloth .optSelected").text();
        	if( dataArr['top_cloth'].length == 0 )
        	{
        		scrollTo( $("#top_cloth").offset().top-65, "#top_cloth h5", true );
        		return false;	
        	}else{
        		scrollTo( 0, "#top_cloth h5", false );
        	}

        	dataArr['bottom_cloth']  = $("#bottom_cloth .optSelected").text();
        	if( dataArr['bottom_cloth'].length == 0 )
        	{
        		scrollTo( $("#bottom_cloth").offset().top-65, "#bottom_cloth h5", true );
        		return false;	
        	}else{
        		scrollTo( 0, "#bottom_cloth h5", false );
        	}

        	dataArr['prefer_cloth']  = $("#prefer_cloth .optSelected").text();
        	if( dataArr['prefer_cloth'].length == 0 )
        	{
        		scrollTo( $("#prefer_cloth").offset().top-65, "#prefer_cloth h5", true );
        		return false;	
        	}else{
        		scrollTo( 0, "#prefer_cloth h5", false );
        	}

        	data_temp = [];
        	$(".single-tag .optSelected b").each(function() {
        		data_temp.push($(this).text().trim());
            });
        	dataArr['styleForCloset'] = data_temp.join();

        	data_temp = [];
        	data_temp['low'] = $("#priceForDressSlider .min-slider-handle").attr('aria-valuenow');
        	data_temp['high'] = $("#priceForDressSlider .max-slider-handle").attr('aria-valuenow');
        	dataArr['dressCoast'] = {'low': data_temp['low'], 'high': data_temp['high']};

        	data_temp = [];
        	data_temp['low'] = $("#priceForTopsSlider .min-slider-handle").attr('aria-valuenow');
        	data_temp['high'] = $("#priceForTopsSlider .max-slider-handle").attr('aria-valuenow');
        	dataArr['topsCoast'] = {'low': data_temp['low'], 'high': data_temp['high']};

        	data_temp = [];
        	data_temp['low'] = $("#priceForBottomSlider .min-slider-handle").attr('aria-valuenow');
        	data_temp['high'] = $("#priceForBottomSlider .max-slider-handle").attr('aria-valuenow');
        	dataArr['bottomCoast'] = {'low': data_temp['low'], 'high': data_temp['high']};

        	data_temp = [];
        	data_temp['low'] = $("#priceForBagSlider .min-slider-handle").attr('aria-valuenow');
        	data_temp['high'] = $("#priceForBagSlider .max-slider-handle").attr('aria-valuenow');
        	dataArr['bagsCoast'] = {'low': data_temp['low'], 'high': data_temp['high']};

        	data_temp = [];
        	data_temp['dress_1'] = $("#dress_1 .optSelected").text();
            if( data_temp['dress_1'].length == 0 )
        	{
        		elment = $("#dress_1").prev('img');
        		scrollToImg( $("#dress_1").offset().top-450, elment, true );
        		return false;	
        	}else{
        		elment = $("#dress_1").prev('img');
        		scrollToImg( 0, elment, false );
        	}

        	data_temp['dress_2'] = $("#dress_2 .optSelected").text();
            if( data_temp['dress_2'].length == 0 )
        	{
        		elment = $("#dress_2").prev('img');
        		scrollToImg( $("#dress_2").offset().top-450, elment, true );
        		return false;	
        	}else{
        		elment = $("#dress_2").prev('img');
        		scrollToImg( 0, elment, false );
        	}

        	data_temp['dress_3'] = $("#dress_3 .optSelected").text();
            if( data_temp['dress_3'].length == 0 )
        	{
        		elment = $("#dress_3").prev('img');
        		scrollToImg( $("#dress_3").offset().top-450, elment, true );
        		return false;	
        	}else{
        		elment = $("#dress_3").prev('img');
        		scrollToImg( 0, elment, false );
        	}

        	data_temp['dress_4'] = $("#dress_4 .optSelected").text();
            if( data_temp['dress_4'].length == 0 )
        	{
        		elment = $("#dress_4").prev('img');
        		scrollToImg( $("#dress_4").offset().top-450, elment, true );
        		return false;	
        	}else{
        		elment = $("#dress_4").prev('img');
        		scrollToImg( 0, elment, false );
        	}

        	data_temp['dress_5'] = $("#dress_5 .optSelected").text();
            if( data_temp['dress_5'].length == 0 )
        	{
        		elment = $("#dress_5").prev('img');
        		scrollToImg( $("#dress_5").offset().top-450, elment, true );
        		return false;	
        	}else{
        		elment = $("#dress_5").prev('img');
        		scrollToImg( 0, elment, false );
        	}

        	data_temp['dress_6'] = $("#dress_6 .optSelected").text();
            if( data_temp['dress_6'].length == 0 )
        	{
        		elment = $("#dress_6").prev('img');
        		scrollToImg( $("#dress_6").offset().top-450, elment, true );
        		return false;	
        	}else{
        		elment = $("#dress_6").prev('img');
        		scrollToImg( 0, elment, false );
        	}

        	data_temp['dress_7'] = $("#dress_7 .optSelected").text();
            if( data_temp['dress_7'].length == 0 )
        	{
        		elment = $("#dress_7").prev('img');
        		scrollToImg( $("#dress_7").offset().top-450, elment, true );
        		return false;	
        	}else{
        		elment = $("#dress_7").prev('img');
        		scrollToImg( 0, elment, false );
        	}

        	data_temp['dress_8'] = $("#dress_8 .optSelected").text();
            if( data_temp['dress_8'].length == 0 )
        	{
        		elment = $("#dress_8").prev('img');
        		scrollToImg( $("#dress_8").offset().top-450, elment, true );
        		return false;	
        	}else{
        		elment = $("#dress_8").prev('img');
        		scrollToImg( 0, elment, false );
        	}

        	data_temp['dress_9'] = $("#dress_9 .optSelected").text();
            if( data_temp['dress_9'].length == 0 )
        	{
        		elment = $("#dress_9").prev('img');
        		scrollToImg( $("#dress_9").offset().top-450, elment, true );
        		return false;	
        	}else{
        		elment = $("#dress_9").prev('img');
        		scrollToImg( 0, elment, false );
        	}

        	data_temp['dress_10'] = $("#dress_10 .optSelected").text();
            if( data_temp['dress_10'].length == 0 )
        	{
        		elment = $("#dress_10").prev('img');
        		scrollToImg( $("#dress_10").offset().top-450, elment, true );
        		return false;	
        	}else{
        		elment = $("#dress_10").prev('img');
        		scrollToImg( 0, elment, false );
        	}

        	data_temp['dress_11'] = $("#dress_11 .optSelected").text();
            if( data_temp['dress_11'].length == 0 )
        	{
        		elment = $("#dress_11").prev('img');
        		scrollToImg( $("#dress_11").offset().top-450, elment, true );
        		return false;	
        	}else{
        		elment = $("#dress_11").prev('img');
        		scrollToImg( 0, elment, false );
        	}

        	data_temp['dress_12'] = $("#dress_12 .optSelected").text();
            if( data_temp['dress_12'].length == 0 )
        	{
        		elment = $("#dress_12").prev('img');
        		scrollToImg( $("#dress_12").offset().top-450, elment, true );
        		return false;	
        	}else{
        		elment = $("#dress_12").prev('img');
        		scrollToImg( 0, elment, false );
        	}

        	data_temp['dress_13'] = $("#dress_13 .optSelected").text();
            if( data_temp['dress_13'].length == 0 )
        	{
        		elment = $("#dress_13").prev('img');
        		scrollToImg( $("#dress_13").offset().top-450, elment, true );
        		return false;	
        	}else{
        		elment = $("#dress_13").prev('img');
        		scrollToImg( 0, elment, false );
        	}

        	data_temp['dress_14'] = $("#dress_14 .optSelected").text();
            if( data_temp['dress_14'].length == 0 )
        	{
        		elment = $("#dress_14").prev('img');
        		scrollToImg( $("#dress_14").offset().top-450, elment, true );
        		return false;	
        	}else{
        		elment = $("#dress_14").prev('img');
        		scrollToImg( 0, elment, false );
        	}

        	data_temp['dress_15'] = $("#dress_15 .optSelected").text();
            if( data_temp['dress_15'].length == 0 )
        	{
        		elment = $("#dress_15").prev('img');
        		scrollToImg( $("#dress_15").offset().top-450, elment, true );
        		return false;	
        	}else{
        		elment = $("#dress_15").prev('img');
        		scrollToImg( 0, elment, false );
        	}

        	data_temp['dress_16'] = $("#dress_16 .optSelected").text();
            if( data_temp['dress_16'].length == 0 )
        	{
        		elment = $("#dress_16").prev('img');
        		scrollToImg( $("#dress_16").offset().top-450, elment, true );
        		return false;	
        	}else{
        		elment = $("#dress_16").prev('img');
        		scrollToImg( 0, elment, false );
        	}

        	data_temp['dress_17'] = $("#dress_17 .optSelected").text();
            if( data_temp['dress_17'].length == 0 )
        	{
        		elment = $("#dress_17").prev('img');
        		scrollToImg( $("#dress_17").offset().top-450, elment, true );
        		return false;	
        	}else{
        		elment = $("#dress_17").prev('img');
        		scrollToImg( 0, elment, false );
        	}

        	data_temp['dress_18'] = $("#dress_18 .optSelected").text();
            if( data_temp['dress_18'].length == 0 )
        	{
        		elment = $("#dress_18").prev('img');
        		scrollToImg( $("#dress_18").offset().top-450, elment, true );
        		return false;	
        	}else{
        		elment = $("#dress_18").prev('img');
        		scrollToImg( 0, elment, false );
        	}

        	data_temp['dress_19'] = $("#dress_19 .optSelected").text();
            if( data_temp['dress_19'].length == 0 )
        	{
        		elment = $("#dress_19").prev('img');
        		scrollToImg( $("#dress_19").offset().top-450, elment, true );
        		return false;	
        	}else{
        		elment = $("#dress_19").prev('img');
        		scrollToImg( 0, elment, false );
        	}

        	data_temp['dress_20'] = $("#dress_20 .optSelected").text();
            if( data_temp['dress_20'].length == 0 )
        	{
        		elment = $("#dress_20").prev('img');
        		scrollToImg( $("#dress_20").offset().top-450, elment, true );
        		return false;	
        	}else{
        		elment = $("#dress_20").prev('img');
        		scrollToImg( 0, elment, false );
        	}
			dataArr['styleRatings'] = {
				"dress_1": data_temp['dress_1'],
				"dress_2": data_temp['dress_2'],
				"dress_3": data_temp['dress_3'],
				"dress_4": data_temp['dress_4'],
				"dress_5": data_temp['dress_5'],
				"dress_6": data_temp['dress_6'],
				"dress_7": data_temp['dress_7'],
				"dress_8": data_temp['dress_8'],
				"dress_9": data_temp['dress_9'],
				"dress_10": data_temp['dress_10'],
				"dress_11": data_temp['dress_11'],
				"dress_12": data_temp['dress_12'],
				"dress_13": data_temp['dress_13'],
				"dress_14": data_temp['dress_14'],
				"dress_15": data_temp['dress_15'],
				"dress_16": data_temp['dress_16'],
				"dress_17": data_temp['dress_17'],
				"dress_18": data_temp['dress_18'],
				"dress_19": data_temp['dress_19'],
				"dress_20": data_temp['dress_20']
			};
        	dataArr['preferStyle']  = $(".single-advice-tag .optSelected").text();
        	if( dataArr['preferStyle'].length == 0 )
        	{
        		scrollTo( $("#style_advice").offset().top-65, "#style_advice h4", true );
        		return false;	
        	}else{
        		scrollTo( 0, "#style_advice h4", false );
        	}

			data_temp = [];
        	data_temp['IN'] = $("#linkedin").val();
        	data_temp['FB'] = $("#facebook").val();
        	data_temp['INS'] = $("#instagram").val();
        	data_temp['PIN'] = $("#pinterest").val();
        	dataArr['socials'] = {'IN': data_temp['IN'], 'FB': data_temp['FB'], 'INS': data_temp['INS'], 'PIN': data_temp['PIN']};
        	dataArr['files'] = $("#files").prop('files');
        	var formData = new FormData($(this)[0]);

            if( data_temp['IN'].length == 0 && data_temp['FB'].length == 0 && data_temp['INS'].length == 0 && data_temp['PIN'].length == 0 && dataArr['files'].length == 0)
        	{
        		scrollTo( $(".social-link-share").offset().top-65, ".social-link-share h5", true );
        		return false;	
        	}else{
        		scrollTo( 0, ".social-link-share h5", false );
        	}

			data_temp = [];
			if($('#check1').checked){
				data_temp['BigShoulders'] = 'YES';
			}else{
				data_temp['BigShoulders'] = 'NO';
			}
			if($('#check2').checked){
				data_temp['SmallShoulders'] = 'YES';
			}else{
				data_temp['SmallShoulders'] = 'NO';
			}
			if($('#check3').checked){
				data_temp['NarrowHips'] = 'YES';
			}else{
				data_temp['NarrowHips'] = 'NO';
			}
			if($('#check4').checked){
				data_temp['WideHips'] = 'YES';
			}else{
				data_temp['WideHips'] = 'NO';
			}
			if($('#check5').checked){
				data_temp['ThinLegs'] = 'YES';
			}else{
				data_temp['ThinLegs'] = 'NO';
			}
			if($('#check6').checked){
				data_temp['ChunkyLegs'] = 'YES';
			}else{
				data_temp['ChunkyLegs'] = 'NO';
			}
			if($('#check7').checked){
				data_temp['FlabbyArms'] = 'YES';
			}else{
				data_temp['FlabbyArms'] = 'NO';
			}
			dataArr['additionalBodyOption'] = {"BigShoulders": data_temp['BigShoulders'], "SmallShoulders": data_temp['SmallShoulders'], "NarrowHips": data_temp['NarrowHips'], "WideHips": data_temp['WideHips'], "ThinLegs": data_temp['ThinLegs'], "ChunkyLegs": data_temp['ChunkyLegs'], "FlabbyArms": data_temp['FlabbyArms']};
			dataArr['additionalBodyComment'] = $('#additionalBodyComment').val();

			data_temp = [];
			if($('#check8').checked){
				data_temp['Shirts'] = 'YES';
			}else{
				data_temp['Shirts'] = 'NO';
			}
			if($('#check9').checked){
				data_temp['Blouse'] = 'YES';
			}else{
				data_temp['Blouse'] = 'NO';
			}
			if($('#check10').checked){
				data_temp['TankTops'] = 'YES';
			}else{
				data_temp['TankTops'] = 'NO';
			}
			if($('#check11').checked){
				data_temp['MiniSkirts'] = 'YES';
			}else{
				data_temp['MiniSkirts'] = 'NO';
			}
			if($('#check12').checked){
				data_temp['KneeLengthSkirts'] = 'YES';
			}else{
				data_temp['KneeLengthSkirts'] = 'NO';
			}
			if($('#check13').checked){
				data_temp['FormalWear'] = 'YES';
			}else{
				data_temp['FormalWear'] = 'NO';
			}

			dataArr['likedColor'] = $("#likedColor").val();
			dataArr['dislikedColor'] = $("#dislikedColor").val();
			
			dataArr['itemsToReject'] = {"Shirts": data_temp['Shirts'], "Blouse": data_temp['Blouse'], "TankTops": data_temp['TankTops'], "MiniSkirts": data_temp['MiniSkirts'], "KneeLengthSkirts": data_temp['KneeLengthSkirts'], "FormalWear": data_temp['FormalWear']};
			dataArr['itemsToRejectComment'] = $('#itemsToRejectComment').val();


			dataArr['phonenumber'] = $("#phonenumber").val();
        	if( dataArr['phonenumber'].length == 0 )
        	{
        		scrollTo( $("#user_phonenumber").offset().top-65, "#user_phonenumber h5", true );
        		return false;	
        	}else{
        		scrollTo( 0, "#user_phonenumber h5", false);
        	}

        	dataArr['address'] = $("#address").val();
        	if( dataArr['address'].length == 0 )
        	{
        		scrollTo( $("#user_address").offset().top-65, "#user_address h5", true );
        		return false;	
        	}else{
        		scrollTo( 0, "#user_address h5", false);
        	}
        	dataArr['comments'] = $("#comments").val();
        	$.ajaxSetup({
	            headers:
	            {
	                'X-CSRF-Token': $('input[name="_token"]').val()
	            }
	        });
        	formData.append('info', JSON.stringify(dataArr));
        	$.ajax({
		        type:"POST",
		        cache:false,
				contentType: false,
    			processData: false,
    			dataType : 'json',
		        url: "{{ URL::to('order') }}",
		        data: formData,
		        success: function () {
		        	alert("Thank You for creating your Style Profile. We will contact you shortly via email for delivery instructions and any other questions that we have.");
		        	location.href="{{ URL::to('/') }}"
		        }
	      	});

        	console.log(JSON.stringify(dataArr));
        });
  	});
	
	function scrollTo( scrollPos, elm, error  )
	{
		if(error)
		{
			$(elm).css( "color", "red" );
			$('html, body').animate({
			    scrollTop: scrollPos
			}, 1000);
		}else{
			$(elm).css( "color", "black" );
		}
	}

	function scrollToImg( scrollPos, elm, error  )
	{
		if(error)
		{
			$(elm).css( "border-color", "red" );
			$('html, body').animate({
			    scrollTop: scrollPos
			}, 1000);
		}else{
			$(elm).css( "border-color", "#d7dddb" );
		}
	}
	
  	$("#tall").slider({
		tooltip: 'always',
		formatter: function(value) {
			return  value + ' cm';
		}
	});

	$("#weight").slider({
		tooltip: 'always',
		formatter: function(value) {
			return  value + ' kg';
		}
	});

	$("#priceForDress").slider({
		tooltip: 'always',
	});

	$("#priceForTops").slider({
		tooltip: 'always',
	});

	$("#priceForBottoms").slider({
		tooltip: 'always',
	});

	$("#priceForBags").slider({
		tooltip: 'always',
	});

	$("#priceForOthers").slider({
		tooltip: 'always',
		formatter: function(value) {
			return  '$' + value;
		}
	});

    $(".slider-track").mousedown(function(){
        $(this).find('.slider-selection').css("background","#669C93");
        $(this).find('.slider-selection .tick-slider-selection').css("background","#669C93)");
    });
</script>
@endsection