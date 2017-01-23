<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ isset($meta) ? $meta : '' }} : Vogue Dose &laquo; The Personal Stylist for women</title>
    <link rel="shortcut icon"  href="{{ URL::asset('img/favicon.png') }}" />

    <!-- Google Fonts -->   
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Vollkorn:400italic,700italic,400,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:300,400,600,700" rel="stylesheet">
    <!-- Foundation --> 
    <link rel="stylesheet" href="{{ URL::asset('css/foundation.css') }}" />
    <!-- bootstrap --> 
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}" />
    <!-- Animate.css -->
    <link rel="stylesheet" href="{{ URL::asset('css/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/animsition.min.css') }}" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}" />
    <!-- Simple Line Icons -->
    <link rel="stylesheet" href="{{ URL::asset('css/simple-line-icons.css') }}" />
    <!-- Simple Line Icons -->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap-slider.min.css') }}" />
    <!-- Bxslider-->
    <link rel="stylesheet" href="{{ URL::asset('css/jquery.bxslider.css') }}" />
    <!-- Magnific Popup-->
    <link rel="stylesheet" href="{{ URL::asset('css/magnific-popup.css') }}" />
    <!-- OwlCarousel Assets -->
    <link rel="stylesheet" href="{{ URL::asset('css/owl.carousel.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/owl.transitions.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/owl.theme.css') }}" />
    <!-- Odometer-->
    <link rel="stylesheet" href="{{ URL::asset('css/odometer-theme-default.css') }}" />
    <!-- Main Style -->
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
    <!-- Custom Style -->
    <link rel="stylesheet" href="{{ URL::asset('css/custom-style.css') }}" />
    <!-- Responsive style -->
    <link rel="stylesheet" href="{{ URL::asset('css/responsive.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/ladda-themeless.min.css') }}">

    {{-- scripts --}}
    <script src="{{ URL::asset('js/vendor/jquery.js') }}"></script>
    <script src="{{ URL::asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('js/vendor/modernizr.js') }}"></script>
    <script src="{{ URL::asset('js/vendor/jquery.easing.min.js') }}"></script>
    <script src="{{ URL::asset('js/vendor/jquery.bxslider.min.js') }}"></script>
    <script src="{{ URL::asset('js/vendor/jquery.fittext.js') }}"></script>
    <script src="{{ URL::asset('js/vendor/jquery.mixitup.min.js') }}"></script>
    <script src="{{ URL::asset('js/vendor/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ URL::asset('js/vendor/jquery.matchHeight-min.js') }}"></script>
    <script src="{{ URL::asset('js/vendor/jquery.vide.min.js') }}"></script>
    <script src="{{ URL::asset('js/vendor/waypoints.min.js') }}"></script>
    <script src="{{ URL::asset('js/vendor/owl.carousel.min.js') }}"></script>
    <script src="{{ URL::asset('js/vendor/odometer.min.js') }}"></script>
    <script src="{{ URL::asset('js/vendor/skrollr.min.js') }}"></script>
    <script src="{{ URL::asset('js/vendor/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ URL::asset('js/vendor/smoothscroll.min.js') }}"></script>
    <script src="{{ URL::asset('js/vendor/retina.min.js') }}"></script>
    <script src="{{ URL::asset('js/vendor/bootstrap-slider.min.js') }}"></script>
    <script src="{{ URL::asset('js/vendor/progress-scroll.js') }}"></script>
    <script src="{{ URL::asset('js/vendor/touch-dnd.js') }}"></script>
    <script src="{{ URL::asset('js/vendor/wow.js') }}"></script>
    <script src="{{ URL::asset('js/foundation.min.js') }}"></script>
    <script src="{{ URL::asset('js/jquery.validate.min.js') }}"></script>
    <script src="{{ URL::asset('js/additional-methods.min.js') }}"></script>
    <script src="{{ URL::asset('js/spin.min.js') }}"></script>
    <script src="{{ URL::asset('js/ladda.min.js') }}"></script>
</head>

<body class="preload">
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){

        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');


        ga('create', 'UA-89521766-1', 'auto');

        ga('send', 'pageview');
    </script>
    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
        n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
        document,'script','https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1828543760736881', {
            em: "<?php if(Auth::check()){echo Auth::user()->email;}?>",
        });
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1828543760736881&ev=PageView&noscript=1"/></noscript>
    <!-- DO NOT MODIFY -->
    <!-- End Facebook Pixel Code -->
    <!-- Preloader -->
    <div id="preloader">
        <div class="spinner">&nbsp;</div>
    </div>
    <!--/ End Preloader -->