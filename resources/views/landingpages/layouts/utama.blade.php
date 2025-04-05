<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laku Budaya</title>
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/image/favicon.ico') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slicknav.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/flaticon.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/progressbar_barfiller.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/gijgo.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animated-headline.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/magnific-popup.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/fontawesome-all.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/themify-icons.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/nice-select.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/authmodal.css') }}">
        <script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>
        <link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css" />
        <style>
            /* NAVBAR */
            .color-primary-lb {
                color: #395144 !important;
                font-weight: 900 !important;
            }
            .btn.btn3 {
                color: #395144 !important;
                background: none !important;
                border: 2px solid #395144 !important;
                border-radius: 40px !important;
                padding: 25px 30px !important;
            }
            .btn.btn3:hover{
                color: #fff !important;
                border: 2px solid #634730 !important;
            }
            .btn.btn3:hover::before{
                color: #fff !important;
                background:#634730 !important;
                border: 2px solid #634730 !important;
            }
            .slider-area .hero__caption p, .slider-area2 .hero__caption p {
                color: #395144;
                font-size: 20px;
                margin-bottom: 10px;
            }
            .header-sticky.sticky-bar {
                background: #fff !important;
            }

            /* BANNER */
            h1, h2, h3, h4, h5, h6 {
                font-family: "Josefin Sans",sans-serif;
                color: #395144 !important;
                margin-top: 0px;
                font-style: normal;
                font-weight: 400;
                text-transform: normal;
            }
            b, sup, sub, u, del {
                color: #395144 !important;
            }
            .slider-area,.slider-area2 {
                background-image: url({{asset('assets/img/landingpages/banner.png')}})
            }
            .services-area .single-services {
                display: flex;
                box-shadow: 0px 25px 60px rgba(66,85,164,0.06);
                padding: 29px 24px;
                border-radius: 20px;
                background: #395144;
            }
            .form-custom-banner {
                display: block !important;
                width: 100% !important;
                height: calc(2.25rem + 2px) !important;
                padding: 0.375rem 0.75rem !important;
                font-size: 16px !important;
                line-height: 60px !important;
                font-weight: 500 !important;
                color: #fff !important;
                background-color: transparent !important;
                border: none !important;
                border-bottom: 1px solid #fff !important;
                border-radius: 0.25rem !important;
                padding-left: 0px !important;
            }
            .single-input-custom-banner {
                display: block !important;
                width: 100% !important;
                line-height: 50px !important;
                outline: none !important;
                background-color: transparent !important;
                padding: 0px !important;
                color: #fff !important;
                font-weight: 700 !important;
                border-bottom: 2px solid #FFF !important;
            }
            .single-input-custom-banner::placeholder {
                color: #ffffffa9 !important;
                opacity: 9 !important;
            }
            .input-group-icon .icon {
                z-index: 1 !important;
            }

            /* Trending */
            .courses-area .properties__footer {
                margin-bottom: 0px !important;
                -webkit-transition: .4s;
                -moz-transition: .4s;
                -o-transition: .4s;
                transition: .4s;
            }
            .overlay1-custom::before {
                background-color: transparent !important;
                border-radius: 10px 10px 10px 10px !important;
            }
            .border-btn.border-btn2 {
                border: 2px solid #634730 !important;
                color: #634730 !important;
                border-radius: 30px !important;
            }
            .border-btn.border-btn2:hover {
                background-color: #634730 !important;
                border: 2px solid #634730 !important;
                color: #fff !important;
                border-radius: 30px !important;
            }
            .courses-area .properties:hover .border-btn2 {
                color:#fff !important;
                background:#634730 !important;
            }

            /* Hot Offers */
            .topic-content-box:hover {
                border-radius: 0px !important;
            }
            .topic-content-box:hover .offer {
                color: rgba(255, 255, 255, 0.9) !important
            }

            /* Footer */
            .footer-bg {
                background: #634730 !important;
            }
            .footer-bottom-area .footer-border {
                padding: 0px 20px !important;
            }

            /* Scroll Up */
            #scrollUp, #back-top {
                background: #9d795c !important;
            }

            /* Menu Mobile */
            .slicknav_icon .slicknav_icon-bar::after {
                color: #634730 !important;
            }
            .slicknav_btn {
                background-color: #634730 !important;
                margin-bottom: -15px !important;
                border-radius: 5px !important;
                padding: 5px 10px 12px 8px;
                right: 5px;
                margin-top: -10px !important;
            }
            .mobile_menu .slicknav_menu .slicknav_nav {
                margin-top: 0px !important;
                background: #fff;
            }

            /* Preloader */
            .preloader .preloader-circle {
                width: 250px !important;
                height: 250px !important;
		        border-top-color: #634730 !important;
                -webkit-box-shadow: 0 1px 5px 0 #634730 !important;
                box-shadow: 0 1px 5px 0 #634730 !important;
            }
            .preloader .preloader-circle2 {
                border-top-color: #634730 !important;
            }
            .preloader .preloader-img img {
                max-width: 250px !important;
            }

            /* Footer */
            .footer-social a:hover {
                background: #395144 !important;
            }
        </style>
        @yield('css')
    </head>

    <body style="overflow: visible;">

        @include('landingpages.layouts.preloader')

        @include('landingpages.layouts.navbar')

        @yield('content')

        @include('landingpages.layouts.footer')

        @include('landingpages.layouts.scrollup')

        @include('landingpages.layouts.authentication')

        <script type="text/javascript" src="{{ asset('assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/popper.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/jquery.slicknav.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/slick.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/wow.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/animated.headline.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/jquery.magnific-popup.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/gijgo.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/jquery.barfiller.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/waypoints.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/hover-direction-snake.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/contact.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/jquery.form.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/mail-script.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/plugins.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>

        @yield('javascript')

        <script>
            $(".slicknav_nav").on('click', function(event){
                $(this).addClass("slicknav_hidden");
                $(this).css("display","none");
                $(".slicknav_btn").removeClass("slicknav_open")
                $(".slicknav_btn").addClass("slicknav_collapsed")
            });
        </script>

    </body>
</html>
