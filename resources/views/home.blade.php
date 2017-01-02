@extends('layouts.app')

@section('content')
<!-- includes banner file -->
@include('parts.banner')
<!-- includes navigation file -->
@include('parts.navigation')
<!-- About Section -->
<section id="about" class="section padding-medium">
    <!-- Section Title -->
    <div class="section-title row text-center">
        <div class="large-12 medium-12 columns animate" data-animation="flipInX">
            <h2 style="color:#669C93">WHO WE ARE</h2>
            <p>
                What if everything in your wardrobe looked great on you? 
                <br>
                At Voguedose, that is what we aim to achieve.
                <br>
                Voguedose tries to understand you, your preferences, your lifestyle and puts together a customised Dose, at your budget so that You look your best.
            </p>
        </div>
    </div>
</section>
<!--/ End About Section --> 

<!-- Subsection -->
<section id="how" class="subsection padding-v-large steps" style="padding-top:4%">
    <div class="section-title text-center">
        <h2 style="color:#669C93">HOW IT WORKS</h2>
    </div>
    <div class="row text-center">
        <div class="medium-6 columns animate " data-animation="flipInY">
            <span class="icon large brand">
                <img src="{{ URL::asset('img/stylist_1.jpg') }}" alt="">
            </span>
        </div>
        <div class="medium-6 columns animate" data-animation="flipInY">
            <div class="hidden-sm hidden-xs" style="margin-top:18%;"></div>
            <h6>STEP 1:</h6>
            <h5>Get started with a Personal Style Quiz</h5>
            <p>
                Create a style profile so your personal stylist can get to know you.
            </p>
        </div>
    </div>
    <br>
    <div class="row text-center hide-for-small-only">
        <div class="medium-6 columns animate pushRight" data-animation="flipInY">
            <div class="hidden-sm hidden-xs" style="margin-top:18%;"></div>
            <h6>STEP 2:</h6>
            <h5>Receive 8-10 personalized pieces, delivered to your door</h5>
            <p>
                Try on and discover styles hand-picked to fit you, your budget and your preferences.
            </p>
        </div>
        <div class="medium-6 columns animate pushLeft" data-animation="flipInY">
            <span class="icon large brand">
                <img src="{{ URL::asset('img/stylist_2.jpg') }}" alt="">
            </span>
        </div>
    </div>
    <div class="row text-center show-for-small-only">
        <div class="medium-6 columns animate pushLeft" data-animation="flipInY">
            <span class="icon large brand">
                <img src="{{ URL::asset('img/stylist_2.jpg') }}" alt="">
            </span>
        </div>
        <div class="medium-6 columns animate pushRight" data-animation="flipInY">
            <div class="hidden-sm hidden-xs" style="margin-top:18%;"></div>
            <h6>STEP 2:</h6>
            <h5>Receive 8-10 personalized pieces, delivered to your door</h5>
            <p>
                Try on and discover styles hand-picked to fit you, your budget and your preferences.
            </p>
        </div>
    </div>
    <br>
    <div class="row text-center">
        <div class="medium-6 columns animate" data-animation="flipInY">
            <span class="icon large brand">
                <img src="{{ URL::asset('img/stylist_3.jpg') }}" alt="">
            </span>
        </div>
        <div class="medium-6 columns animate" data-animation="flipInY">
            <div class="hidden-sm hidden-xs" style="margin-top:18%;"></div>
            <h6>STEP 3:</h6>
            <h5>Keep what you love, send back the rest</h5>
            <p>
                Only pay for what you keep; your feedback makes your next experience even better!​
            </p>
        </div>
    </div>
</section>
<!--/ End Subsection -->

<!-- Subsection -->     
<section id="chooseUS" class="subsection light padding-v-medium">
    <div class="row">
        <div class="section-title row text-center">
            <div class="large-12 medium-12 columns animate" data-animation="flipInX">
                <h2 style="color:#669C93">WHY CHOOSE US</h2>
            </div>
        </div>
    </div>
    <br><br><br>
    <div class="row text-center">
        <div class="services-section-item medium-4 columns animate" data-animation="flipInY">
            <div class="services-section-item-icon">
                <img src="{{ URL::asset('img/works/icons/benefits-icon1.png') }}" alt="">
            </div>
            <h4 class="services-item-title font-second">
                PERSONALISED SELECTIONS
            </h4>
            <div class="services-section-item-text">
                <p>
                    Discover what you look and feel great in with the help of your personal stylist.
                </p>
            </div>
        </div>
        <div class="services-section-item medium-4 columns animate" data-animation="flipInY">
            <div class="services-section-item-icon">
                <img src="{{ URL::asset('img/works/icons/benefits-icon2.png') }}" alt="">
            </div>
            <h4 class="services-item-title font-second">
                BETTER EVERY TIME
            </h4>
            <div class="services-section-item-text">
                <p>
                    Your feedback helps your stylist select items you will love.
                </p>
            </div>
        </div>
        <div class="services-section-item medium-4 columns animate" data-animation="flipInY">
            <div class="services-section-item-icon">
                <img src="{{ URL::asset('img/works/icons/benefits-icon3.png') }}" alt="">
            </div>
            <h4 class="services-item-title font-second">
                ON YOUR SCHEDULE
            </h4>
            <div class="services-section-item-text">
                <p>
                    Opt to receive packages at your convenience.
                </p>
            </div>
        </div>
    </div>
    <br>
    <div class="row text-center">
        <div class="services-section-item medium-4 columns animate" data-animation="flipInY">
            <div class="services-section-item-icon">
                <img src="{{ URL::asset('img/works/icons/benefits-icon4.png') }}" alt="">
            </div>
            <h4 class="services-item-title font-second">
                PRICED FOR YOUR BUDGET
            </h4>
            <div class="services-section-item-text">
                <p>
                    Our personal shoppers select pieces customized to your spending preferences.
                </p>
            </div>
        </div>
        <div class="services-section-item medium-4 columns animate" data-animation="flipInY">
            <div class="services-section-item-icon">
                <img src="{{ URL::asset('img/works/icons/benefits-icon4.png') }}" alt="">
            </div>
            <h4 class="services-item-title font-second">
                LOVE EVERYTHING? <br>ENJOY A 25% DISCOUNT
            </h4>
            <div class="services-section-item-text">
                <p>
                    Celebrate with a discount when you love all 5 items!
                </p>
            </div>
        </div>
        <div class="services-section-item medium-4 columns animate" data-animation="flipInY">
            <div class="services-section-item-icon">
                <img src="{{ URL::asset('img/works/icons/benefits-icon6.png') }}" alt="">
            </div>
            <h4 class="services-item-title font-second">
                NO STYLING FEE
            </h4>
            <div class="services-section-item-text">
                <p>
                    $20 Styling fee waived off for limited period.
                </p>
            </div>
        </div>
    </div>
</section>
<!--/ End Subsection -->

<section id="testimonial" class="subsection light ">
    <div class="row">
        <div class="section-title row text-center">
            <div class="large-12 medium-12 columns animate" data-animation="flipInX">
                <h2 style="color:#669C93">WHAT OUR CUSTOMERS SAY</h2>
            </div>
        </div>
    </div>
    <article>
      <div id="owl">
        <div class="row">
          <div class="large-12 medium-12 columns testimonial">
            <div class="quote">
              <p>
                  I rarely do "reviews" but I'm hooked to this personalize styling experience with <a href="http://voguedose.com/" target="_blank">Voguedose</a> ... ! All you need to do is to fill up your portfolio details and next moment you will wait for your surprise loots for arrival !  
              </p>
            </div>
            <div class="student">
              <p>Li Hui &nbsp;&nbsp;</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="large-12 medium-12 columns testimonial">
            <div class="quote">
              <p>
                  Want to have your own stylist at no cost? Be sure to check out Voguedose! …! It's so hassle-free and convenient for both the working class and mums who can't find time to shop… Keep it up <a href="http://voguedose.com/" target="_blank">Voguedose</a>!!!
              </p>
            </div>
            <div class="student">
              <p>Diane Chan</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="large-12 medium-12 columns testimonial">
            <div class="quote">
              <p>
                First <a href="http://voguedose.com/" target="_blank">Voguedose</a> received and love the clothes chosen and the flexibility of their services! Thanks Nina for the awesome style you have created.
              </p>
            </div>
            <div class="student">
              <p>Alice Ong</p>
            </div>
          </div>
        </div>
      </div>
    </article>
</section>


<!-- Team Section -->
<section id="team" class="section white padding-medium">
    <!-- Section Title -->
    <div class="section-title row text-center">
        <div class="large-12 medium-12 columns animate" data-animation="flipInX">
            <h2 style="color:#669C93">OUR STYLISTS</h2>
            <h6>
                World-class International Stylists just for you
            </h6>
        </div>
    </div>
    <!-- Team Block -->
    <div class="team-block row row-wide">
        <!-- Team Person -->
        <div class="medium-4 columns animate" data-animation="flipInY">
            <div class="team-person">
                <img class="img-responsive" src="{{ URL::asset('img/team/team-1.png') }}" alt="team 1">
                <h3 class="name">Monica A</h3>
                <h6 class="position">US</h6>
            </div>
        </div>
        <!-- Team Person -->
        <div class="medium-4 columns animate" data-animation="flipInY">
            <div class="team-person">
                <img class="img-responsive" src="{{ URL::asset('img/team/team-2.png') }}" alt="team 2">
                <h3 class="name">Giuilia L</h3>
                <h6 class="position">Italy</h6>
            </div>
        </div>
        <!-- Team Person -->
        <div class="medium-4 columns animate" data-animation="flipInY">
            <div class="team-person">
                <img class="img-responsive" src="{{ URL::asset('img/team/team-3.png') }}" alt="team 3">
                <h3 class="name">Jemmy M</h3>
                <h6 class="position">Singapore</h6>
            </div>
        </div>
    </div>
</section>
<!--/ End Team Section -->
@if(\Auth::guard()->check() == false)
    <!-- Contact Section -->
    <section id="contact" class="section padding-v-medium">
        <!-- Section Content -->
        <div class="row">
            <div class="section-title row text-center">
                <div class="large-12 medium-12 columns animate" data-animation="flipInX">
                    <h2 style="color:#669C93">Registration</h2>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <!-- Contact Address -->
            <!-- Contact Form -->
            <div class="medium-6 columns animated fadeIn" data-animation="fadeIn">
                <img class="img-responsive" src="{{ URL::asset('img/blog/blog-2.jpg') }}" alt="Contact Image">
            </div>

            <div class="medium-6 columns animate" data-animation="fadeIn">
                <div class="social-login">
                    <div class="row">
                        <div class="medium-6 columns">
                            <a class="btn btn-block btn-social btn-facebook" href="{{ url('/auth/facebook') }}">
                                <i class="fa fa-facebook"></i> Sign up with Facebook
                            </a>
                        </div>
                        <div class="medium-6 columns">
                            <a class="btn btn-block btn-social btn-google" href="{{ url('/auth/google') }}">
                                <i class="fa fa-google"></i> Sign up with Google
                            </a>
                        </div>
                        {{-- <div class="medium-6 columns">
                            <a class="btn btn-block btn-social btn-instagram" href="{{ url('/auth/instagram') }}">
                                <i class="fa fa-instagram"></i> Sign up with Instagram
                            </a>
                        </div>
                        <div class="medium-6 columns">
                            <a class="btn btn-block btn-social btn-pinterest" href="{{ url('/auth/pinterest') }}">
                                <i class="fa fa-pinterest"></i> Sign up with Pinterest
                            </a>     
                        </div> --}}
                        <div class="medium-6 columns">
                            <a id="mini-ref-form" class="btn btn-block btn-social btn-vog-email">
                               <i class="fa fa-envelope-o"></i> Sign up with Email
                            </a>
                        </div>
                    </div>
                </div>
                <form id="regForm" method="post" class="form-ghost" action="{{ url('/user_signup') }}">
                    {{ csrf_field() }}
                    <input id="email" name="email" type="text" placeholder="Your Email" required>
                    <input id="password" name="password" type="password" placeholder="Password" required>
                    <input id="re_password" name="re_password" type="password" placeholder="Retype Password" required>
                    <input type="submit" value="Let’s Start" class="button expand ghost small" tabindex="4">
                </form>
            </div>
        </div>
    </section>
    <!--/ End Contact Section -->

    <div id="myModal" class="reveal-modal small" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
        <h2 id="modalTitle" style="text-align:center; margin-bottom:30px">
            <span class="fa fa-sign-in"></span> Sign In
        </h2>
        <a class="close-reveal-modal" aria-label="Close" style="font-size:1.5rem">&#215;</a>

        <form id="loginForm" method="post" class="form-ghost">
            <input id="email" name="email" type="text" placeholder="Your Email" required style="margin-bottom:20px">
            <input id="password" name="password" type="password" placeholder="Password" required style="margin-bottom:20px">
            <div class="regBtn" style="text-align:center; margin-top:10px">
                <input id="login_submit" type="submit" class="button medium" value="Submit">
            </div>
        </form>
        
        <div class="social-login">
        <h5>OR Sign In With</h5>
            <ul>
                <li><a href="{{ url('/auth/facebook') }}"><i class="fa fa-facebook"></i></a></li>
                <li><a href="{{ url('/auth/google') }}"><i class="fa fa-google"></i></a></li>
                {{-- <li><a href="{{ url('/auth/instagram') }}"><i class="fa fa-instagram"></i></a></li>
                <li><a href="{{ url('/auth/pinterest') }}"><i class="fa fa-pinterest"></i></a></li> --}}
            </ul>
        </div>
    </div>
@endif
<script type="text/javascript">
    $( document ).ready(function() {

        $( "#mini-ref-form" ).click(function() {
            $( "#regForm" ).addClass("formshow animated fadeIn" )
        });


        $("#owl").owlCarousel({
            navigation: false,
            slideSpeed: 100,
            pagination: true,
            paginationSpeed: 800,
            singleItem: false,
            autoPlay: true,
            items : 3,
            itemsDesktop : [1199,4]
        });


        $.validator.addMethod(
            "regex",
            function(value, element, regexp) 
            {
                if( value.length == 0 )
                    return true;
                var re = new RegExp(regexp);
                return re.test(value);
            },
            "Invalid Input"
        );

        $.ajaxSetup({
            headers:
            {
                'X-CSRF-Token': $('input[name="_token"]').val()
            }
        });

        $("#loginForm").validate({
            errorElement:'span',
            errorClass:'error',
            rules: {
                email: {  
                    required: true,
                    regex: {{ $EMAILREX }}
                },
                password:{
                    required: true,
                    minlength: {{ $PASSWORDLEN }}
                }
            },
            messages:{
                email: {
                    required: "Plaese input your mail address",
                    regex: "Plaese input valid mail address"
                },
                password:{
                    required: "Please input your password",
                    minlength: "Minimun length of your password must be {{ $PASSWORDLEN }} characters"
                }
            },
            submitHandler: function(form, event) {
                event.preventDefault();
                $.ajax({
                    type:"POST",
                    url: "{{ url('/user_login') }}",
                    data: { email: $("#loginForm input[name='email']").val(), password: $("#loginForm input[name='password']").val(), '_token': "{{ csrf_token() }}"  },
                    // dataType: "json",
                    success: function (rsp) {
                        if( rsp == "success" )
                            location.href = "{{ url('/create_style_profile') }}";
                        else
                            alert("Invalid Email or Password!");
                    }
                });
            }
        });

        $("#regForm").validate({
            errorElement:'span',
            errorClass:'error',
            rules: {
                email: {  
                    required: true,
                    regex: {{ $EMAILREX }},
                    remote: {
                        url: "{{ URL::to('/check_user_email') }}",
                        type: "post"
                    }
                },
                password:{
                    required: true,
                    minlength: {{ $PASSWORDLEN }}
                },
                re_password: {
                    required: true,
                    equalTo: "#password"
                }
            },
            messages:{
                email: {
                    required: "Plaese input your mail address",
                    regex: "Plaese input valid mail address",
                    remote: "Email already in use!"
                },
                password:{
                    required: "Please input your password",
                    minlength: "Minimun length of your password must be {{ $PASSWORDLEN }} characters"
                },
                re_password: {
                    required: "Please type the same password again",
                    equalTo: "Please type the same password again"
                }
            }
        });
    });
</script>
@endsection