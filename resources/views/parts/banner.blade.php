<!-- Header -->
<header id="home" class="dark full-height">
    <!-- Parallax Background Image -->
    <div class="background-image parallax" style="background-image:url({{ URL::asset('img/header/banner.jpg') }})"></div>
    <!-- Parallax Text -->
    <div class="parallax-text text-center display-table">
        <div class="display-table-cell">
            <div class="row">
                <div class="medium-12 columns animate" data-animation="flipInX">
                    <span class="icon xlarge">
                        <img src="{{ URL::asset('img/slider-logo.png') }}" alt="Slier Logo">
                    </span>
                    <br><br>
                    <!-- Static Text -->
                    <h2 class="fittext" style="font-size:40px;">YOUR PARTNER IN PERSONAL STYLE</h2>
                    <br>
                    <h3 class="text-serif text-normal" style="font-size:20px;">
                        Clothing and accessories hand-selected by a personal stylist, delivered to your door.
                    </h3>
                    <div class="action-buttons">
                        <a href="#about" data-scroll class="button large brand" >Learn More</a>
                        @if(\Auth::guard()->check() == false)
                            <a href="#contact" data-scroll class="button large brand" style="background-color:#DA511E">Get Started</a>
                        @else
                            <a href="{{ URL::to('create_style_profile') }}" data-scroll class="button large brand" style="background-color:#DA511E">Get Started</a>
                        @endif
                    </div>
                    <!-- View More Button -->
                </div>
            </div>
        </div>
    </div>
</header>
<!--/ End Header -->