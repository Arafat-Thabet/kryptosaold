<!DOCTYPE html>
<html>

<head>
    <title>Creative Colorlib SignUp Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>


    <link href="{{ asset('') }}assets/styles/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/styles/style.css?v=0.1">

    <link href="{{ asset('assets/styles/signup.css?v=0.1') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('assets/styles/main.css?v=0.01') }}" rel="stylesheet" type="text/css" media="all" />
    <!-- web font -->
    <link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
    <!-- //web font -->
</head>

<body>

    @include('navbar')

    <!-- main -->
    <div class="main-w3layouts wrapper">
        <h1 class="h1">KryptoSA</h1>
        <div class="main-agileinfo about">
            <div class="agileits-top">
                <div class="py-2">
					<h5 class="fs-5 fw-bold text-white">Government Backed Exchange</h5>
                    <p class="text-start my-2">                        
                        We are driving innovation in the Saudi Arabian cryptocurrency market with our government-backed
                        exchange. Our platform empowers individuals and businesses to seamlessly buy, sell, trade, and
                        manage digital assets within a robust, compliant ecosystem.
                    </p>
                </div>
                <div class="py-2">
					<h5 class="fs-5 fw-bold text-white">What Sets us Apart?</h5>
                    <p class="text-start my-2">
                        Our collaboration with government entities will set us apart. Direct integration with government
                        APIs will establish unparalleled security and regulatory alignment. This partnership solidifies
                        our
                        commitment to security and positions us as a responsible, forward- thinking leader in the
                        digital
                        finance landscape.
                    </p>
                </div>
                <div class="py-2">
					<h5 class="fs-5 fw-bold text-white">Our Vision</h5>
                    <p class="text-start my-2">
                        To make Saudi Arabia & Neom the global cryptocurrency hub, shaping policies to attract
                        multi-billion- dollar international investments in the sector.
                    </p>
                </div>
            </div>
        </div>

        <ul class="colorlib-bubbles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>

		
        <p class="bottom-0 fs-6 mb-3 position-absolute text-center text-light w-100"> All rights reserved KryptoSA© 66inc© </p>
    </div>
    <!-- //main -->

    <script src="{{ asset('') }}assets/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(".hamburger-menu").on("click", function() {
            $(".hamburger-menu").toggleClass("animate");
            $("#overlay").toggleClass("overlay-active");
            $(".koin-hero").toggleClass("mobile-view");
        });
    </script>
</body>

</html>
