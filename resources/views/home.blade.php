<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Primary Meta Tags -->

    <meta name="title" content="Buy and Sell digital tokens the easy way">
    <meta name="description"
        content="KryptoSa brings you the Future of Money | Got Airtime? Get Crypto | No need for banks anymore | Get your Crypto the legal and stress free way">
    <meta name="keywords"
        content="Digital Asset, Virtual Asset Provider, VASP, Cryptocurrency, Kryptosa cryptocurrency price, Kryptosa Bitcoin price, Kryptosa ethereum price, Kryptosa litecoin price, Buy bitcoin Nigeria debit card Nigeria, Lowest crypto trading fees, Cryptocurrency exchange rates, Cryptocurrency wallet Nigeria, Buy ethereum with credit card, Buy cryptocurrency in Nigeria, Best cryptocurrency to invest in now">
    <meta name="robots" content="index, follow">
    <meta name="language" content="English">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url('') }}/">
    <meta property="og:title" content="Buy and Sell digital tokens the easy way">
    <meta property="og:description"
        content="KryptoSa brings you the Future of Money | Got Airtime? Get Crypto | No need for banks anymore | Get your Crypto the legal and stress free way">
    <meta property="og:image" content="{{ url('') }}/assets/images/koinkoin-url-preview.jpg">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url('') }}/">
    <meta property="twitter:title" content="Buy and Sell digital tokens the easy way">
    <meta property="twitter:description"
        content="KryptoSa brings you the Future of Money | Got Airtime? Get Crypto | No need for banks anymore | Get your Crypto the legal and stress free way">
    <meta property="twitter:image" content="{{ url('') }}/assets/images/koinkoin-url-preview.jpg">
    <!-- Bootstrap CSS -->
    <link href="{{ asset('') }}assets/styles/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- CAROUSEL-LINK -->
    <link rel="stylesheet" href="{{ asset('') }}assets/libs/slick-carousel/1.8.1/slick-theme.min.css?v=0.1" />
    <link rel="stylesheet" href="{{ asset('') }}assets/libs/slick-carousel/1.8.1/slick.min.css?v=0.1" />

    <link rel="stylesheet" href="{{ asset('') }}assets/styles/style.css?v=0.4">
    <link rel="icon" type="image/x-icon" href="./logo.ico">


    <title>KryptoSa : Buy and Sell digital tokens the easy way</title>
</head>

<body>
    @include('navbar')

    <section class="bg-video-wrap hero position-relative">
        @if (session('success'))
            <div class="alert alert-dismissible alert-success align-items-center container fade show w-50"
                style="z-index: 10;margin-top: 100px" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <video src="./assets/images/World - 1992.mp4" loop muted autoplay></video>
        <div class="header-section">

            <div class="container text-white py-xl-5 center">

                <div class="row justify-content-around">
                    <div class="col-lg-7 col-12 d-flex align-items-center order-2 mt-lg-0 mt-4 order-lg-1">
                        <div class="pe-lg-5">
                            <h1 class="text-center main-heading">Saudi Arabia’s First <span class="text-yellow">
                                    Cryptocurrency
                                </span> Exchange
                            </h1>

                            <p class="text-center normal-para fw-600 mt-4 mb-0 opacity-unset">Security First | Powered
                                for A
                                Borderless
                                Saudi Arabia
                                & A
                                Borderless
                                World.
                            </p>
                            <p class="text-center normal-para fw-600 mb-4 opacity-unset">
                                We strive to bring Financial Inclusion through affordable and simple access to
                                financial
                                technology
                            </p>
                            <div class="d-flex justify-content-center pt-3 mb-5">
                                <a class="yellow-btn text-decoration-none" href="{{ url('signup') }}">
                                    Open Trading Account
                                </a>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-lg-5 col-xl-4 col-9 phone-img mt-lg-5 order-1 d-flex align-items-center order-lg-2 text-center">
                        <div class="w-100 h-100 ">
                            <div class="position-relative phone  d-xxl-flex  ">

                                <img class=" iphone-1  " data-tilt data-tilt-max="5" data-tilt-scale="1.1"
                                    src="./assets/images/iPhone-12-Pro.png?v=0.01" alt="">
                                <img data-tilt data-tilt-max="5" data-tilt-scale="1.1" class="  iphone-2 "
                                    src="./assets/images/iPhone-12-Pro-Mockup.png?v=0.01" alt="">

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="borderless-africa py-5">
        <div class="container my-lg-4">
            <div class="row text-center text-lg-start">
                <div class="col-lg-6 text-center d-flex flex-column justify-content-center">
                    <h2 class="heading">
                        New beginnings borderless <span class="text-yellow">
                            Saudi Arabia
                        </span>
                    </h2>
                    <p class="normal-para my-sm-4">
                        KryptoSa’s continuing mission is to bolster small businesses and empower individuals using
                        blockchain technology
                    </p>
                    <div class="mt-lg-5 mb-4 mt-3">
                        <a href="{{ url('signup') }}" class="blue-btn text-decoration-none">
                            Open An Account
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <video autoplay muted loop class="vid" src="{{ asset('assets/images/kryptosa.MP4') }}"></video>
                </div>
            </div>
        </div>
    </section>

    <section class="koin-work py-5 position-relative">
        <div class="container mb-lg-5">
            <p class="heading text-center mb-4 pb-3">How it works </p>
            <div class="text-nowrap overflow-x-auto pb-4">
                <ul class="nav nav-tabs justify-content-center  border-0" id="myTab" role="tablist">
                    <li class="nav-item " role="presentation">
                        <button class="nav-link active skew-btn " id="step-1-tab" data-bs-toggle="tab"
                            data-bs-target="#step-1" type="button" role="tab" aria-controls="step-1"
                            aria-selected="true">
                            <span class="skew-text">
                                Step-1
                            </span>
                        </button>
                    </li>
                    <li class="nav-item mx-3" role="presentation">
                        <button class="nav-link skew-btn " id="step-2-tab" data-bs-toggle="tab"
                            data-bs-target="#step-2" type="button" role="tab" aria-controls="step-2"
                            aria-selected="false"><span class="skew-text">
                                Step-2
                            </span></button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link skew-btn " id="step-3-tab" data-bs-toggle="tab"
                            data-bs-target="#step-3" type="button" role="tab" aria-controls="step-3"
                            aria-selected="false"><span class="skew-text">
                                step-3
                            </span></button>
                    </li>
                    <li class="nav-item mx-3" role="presentation">
                        <button class="nav-link skew-btn " id="step-4-tab" data-bs-toggle="tab"
                            data-bs-target="#step-4" type="button" role="tab" aria-controls="step-4"
                            aria-selected="false"><span class="skew-text">
                                step-4
                            </span></button>
                    </li>
                    <li class="nav-item " role="presentation">
                        <button class="nav-link skew-btn " id="step-5-tab" data-bs-toggle="tab"
                            data-bs-target="#step-5" type="button" role="tab" aria-controls="step-5"
                            aria-selected="false"><span class="skew-text">
                                step-5
                            </span></button>
                    </li>
                </ul>
            </div>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="step-1" role="tabpanel" aria-labelledby="step-1-tab">
                    <div class="row mt-lg-5 mt-3 justify-content-between text-center text-lg-start">
                        <div class="col-lg-6 col-12">
                            <img class="w-100" src="./assets/images/step-1-img.png?v=0.01" alt="">
                        </div>
                        <div class="col-lg-5 col-12 d-flex justify-content-center flex-column">
                            <div class="text-center d-md-none my-3">
                                <img src="./assets/images/animation-group.png" alt="">
                            </div>
                            <p class="mb-0 step-1">Step-1</p>
                            <p class="heading"> <span class="text-yellow">Krypto</span>Sa Wallet</p>
                            <p class="normal-para  mb-4 pb-3">Once you have signed up, logged in and verified your
                                account.
                                You
                                will be able to go to
                                our wallets page (Click Wallet at the top), make a quick cash or crypto deposit and
                                start trading immediately. "Easy"
                            </p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="step-2" role="tabpanel" aria-labelledby="step-2-tab">
                    <div class="row mt-lg-5  mt-3 justify-content-between text-center text-lg-start">
                        <div class="col-lg-6">
                            <img class="w-100" src="./assets/images/step2 1.png?v=0.01" alt="">
                        </div>
                        <div class="col-lg-5 d-flex justify-content-center flex-column">
                            <div class="text-center d-md-none my-3">
                                <img src="./assets/images/animation-group.png" alt="">
                            </div>
                            <p class="mb-0 step-1">Step-2</p>
                            <p class="heading"> <span class="text-yellow"> BTC</span>-USDT</p>
                            <p class="normal-para  mb-4 pb-3">To get the best tradeable prices from over 40 exchanges
                                for a variety of crypto/fiat pairs, go to our markets page (Click Pro Trade at the top)
                                and you will be able to execute trades immediately at market price. You can also place
                                limit orders and/or stop orders on any of the pairs on offer.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="step-3" role="tabpanel" aria-labelledby="step-3-tab">
                    <div class="row mt-lg-5 mt-3 justify-content-between text-center text-lg-start">
                        <div class="col-lg-6">
                            <img class="w-100" src="./assets/images/step3 1.png?v=0.01" alt="">
                        </div>
                        <div class="col-lg-5 d-flex justify-content-center flex-column">
                            <div class="text-center d-md-none my-3">
                                <img src="./assets/images/animation-group.png" alt="">
                            </div>
                            <p class="mb-0 step-1">Step-3</p>
                            <p class="heading"> <span class="text-yellow">Trade</span> Crypto</p>
                            <p class="normal-para  mb-4 pb-3">Simply make quick trades (Click Quick Trade at the top)
                                by
                                simply swapping cash for crypto, crypto for crypto or crypto for cash.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="step-4" role="tabpanel" aria-labelledby="step-4-tab">
                    <div class="row mt-lg-5 mt-3 justify-content-between text-center text-lg-start">
                        <div class="col-lg-6">
                            <img class="w-100" src="./assets/images/step4 1.png?v=0.01" alt="">
                        </div>
                        <div class="col-lg-5 d-flex justify-content-center flex-column">
                            <div class="text-center d-md-none my-3">
                                <img src="./assets/images/animation-group.png" alt="">
                            </div>
                            <p class="mb-0 step-1">Step-4</p>
                            <p class="heading"> <span class="text-yellow">Send </span> Coin</p>
                            <p class="normal-para  mb-4 pb-3">To send crypto to your friends and loved ones, simply go
                                back to the wallets page and hit withdraw next to the crypto you wish to send. Complete
                                the wallet address details, memo if needed and amount you are sending. It is all very
                                easy.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="step-5" role="tabpanel" aria-labelledby="step-5-tab">
                    <div class="row mt-lg-5 mt-3 justify-content-between text-center text-lg-start">
                        <div class="col-lg-6">
                            <img class="w-100" src="./assets/images/step5 1.png?v=0.01" alt="">
                        </div>
                        <div class="col-lg-5 d-flex justify-content-center flex-column">
                            <div class="text-center d-md-none my-3">
                                <img src="./assets/images/animation-group.png" alt="">
                            </div>
                            <p class="mb-0 step-1">Step-5</p>
                            <p class="heading"> <span class="text-yellow">Invite</span> Friend</p>
                            <p class="normal-para  mb-4 pb-3">Refer as many friends and colleagues you wish and earn up
                                to 500USDT Weekly from transaction fees.
                            </p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <div class="d-none d-md-block">
            <div class="shape-img1">
                <img src="./assets/images/shape-img1.png" alt="">
            </div>
            <div class="shape-img2">

                <img src="./assets/images/shape-img2.png" alt="">
            </div>
            <div class="shape-img3">
                <img src="./assets/images/shape-img3.png" alt="">
            </div>
            <div class="shape-img4">
                <img src="./assets/images/shape-img4.png" alt="">
            </div>
            <div class="shape-img5">
                <img src="./assets/images/shape-img5.png" alt="">
            </div>
            <div class="shape-img6">
                <img src="./assets/images/shape-img6.png" alt="">
            </div>
            <div class="shape-img7">
                <img src="./assets/images/shape-img7.png" alt="">
            </div>
            <div class="shape-img8">
                <img src="./assets/images/shape-img8.png" alt="">
            </div>
            <div class="shape-img9">
                <img src="./assets/images/shape-img9.png" alt="">
            </div>
            <div class="shape-img10">
                <img src="./assets/images/shape-img10.png" alt="">
            </div>
            <div class="shape-img11">
                <img src="./assets/images/shape-img11.png" alt="">
            </div>

            <div class="shape-img01">
                <img src="./assets/images/shape-img5.png" alt="">
            </div>
            <div class="shape-img12">
                <img src="./assets/images/shape-img12.png" alt="">
            </div>
            <div class="shape-img13">
                <img src="./assets/images/shape-img13.png" alt="">
            </div>
            <div class="shape-img14">
                <img src="./assets/images/shape-img14.png" alt="">
            </div>
            <div class="shape-img15">
                <img src="./assets/images/shape-img15.png" alt="">
            </div>
            <div class="shape-img16">
                <img src="./assets/images/shape-img16.png" alt="">
            </div>
            <div class="shape-img17">
                <img src="./assets/images/shape-img17.png" alt="">
            </div>
            <div class="shape-img18">
                <img src="./assets/images/shape-img18.png" alt="">
            </div>
            <div class="shape-img19">
                <img src="./assets/images/shape-img19.png" alt="">
            </div>
            <div class="shape-img20">
                <img src="./assets/images/shape-img20.png" alt="">
            </div>
            <div class="shape-img21">
                <img src="./assets/images/shape-img21.png" alt="">
            </div>
            <div class="shape-img22">
                <img src="./assets/images/shape-img22.png" alt="">
            </div>
            <div class="shape-img23">
                <img src="./assets/images/shape-img23.png" alt="">
            </div>
            <div class="shape-img24">
                <img src="./assets/images/shape-img24.png" alt="">
            </div>
            <div class="shape-img25">
                <img src="./assets/images/shape-img25.png" alt="">
            </div>
            <div class="shape-img26">
                <img src="./assets/images/shape-img26.png" alt="">
            </div>


            <div class="shape-img02">
                <img src="./assets/images/shape-img5.png" alt="">
            </div>


        </div>
        <div>
            <img class="hero-green-circle d-md-block d-none" src="./assets/images/green.png" alt="">
        </div>
    </section>
    <!-- <section class="got-airtime">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class=" col-12">
                    <div class="py-5 my-lg-4 text-white">
                        <img class="got-airline-img mb-4 mb-sm-0" data-tilt="" src="./assets/images/got air time.png"
                            alt="">
                        <h4 class="heading">
                            Got airtime? <span class="text-yellow">
                                Get crypto
                            </span>
                        </h4>
                        <div class="py-4">
                            <p class="normal-para mb-0">No need for banks anymore!!</p>
                            <p class="normal-para mb-0">
                                (you can now deposit cash using your mobile airtime - it's so easy and quick)

                            </p>
                            <p class="normal-para ">
                                KryptoSa has joined forces with MiloGlobal to usher in the future of money
                            </p>
                        </div>
                        <div>
                            <a class="yellow-btn text-decoration-none" href="#">
                                Learn more
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <section class="mobile-app py-lg-5 pb-5 pt-2">
        <div class="container my-lg-4">
            <div class="row text-center text-lg-start justify-content-lg-between">
                <div class="col-lg-6 col-12 order-2 order-lg-1">
                    <div class="mt-5 mt-lg-0 ">
                        <h1 class="heading px-4 px-sm-0">Download the <span class="text-yellow">
                                Krypto</span>Sa Mobile App</h1>
                        <p class="normal-para mb-5 mt-4 pe-lg-5 me-lg-5">It's quick and easy to use. The KryptoSa app
                            allows you to make instant deposits and withdrawals, you can also use the wallet QR payment
                            process to send over 50 cryptocurrencies as a means of payment where needed..</p>
                        <div class=" ">
                            <a href="#"><img class="pe-2 mobile-app-img js-tilt"
                                    src="./assets/images/app-store.png" alt=""></a>
                            <a href="#"><img class="mobile-app-img js-tilt"
                                    src="./assets/images/play-store.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-7 mx-auto col-8 mt-lg-0 mt-5 order-1 order-lg-2">
                    <img class="w-100 js-tilt" src="./assets/images/three-mobile.png?v=0.01" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- CAROUSEL-SECTION -->

    <section class="mt-lg-4 mt-3 pt-5">
        <div class="container carousel ">
            <h1 class="heading text-center mb-4 pb-lg-3">
                Earn Daily with <span class="text-yellow">
                    Krypto</span>Sa
            </h1>
            <div class="position-relative ">
                <div class="slick-sliderrrr ">
                    <div class="">
                        <img class="w-100 px-3" src="./assets/images/carousel-img-1.png" alt="">
                    </div>
                    <div class="">
                        <img class="w-100 px-3" src="./assets/images/carousel-img-3.png" alt="">
                    </div>
                    <div class="">
                        <img class="w-100 px-3" src="./assets/images/carousel-img-1.png" alt="">
                    </div>
                    <div class="">
                        <img class="w-100 px-3" src="./assets/images/carousel-img-3.png" alt="">
                    </div>
                    <div class="">
                        <img class="w-100 px-3" src="./assets/images/carousel-img-1.png" alt="">
                    </div>
                    <div class="">
                        <img class="w-100 px-3" src="./assets/images/carousel-img-3.png" alt="">
                    </div>
                </div>
                <div>
                    <button class="bg-transparent border-0 prev">
                        <svg width="31" height="31" viewBox="0 0 31 31" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g opacity="0.7">
                                <circle cx="15.5" cy="15.5" r="15.5" fill="#0ee9a2" />
                                <path d="M19.2414 7.48291L10.6897 16.0346L19.2414 24.5864" stroke="#0C0C0D"
                                    stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                        </svg>

                    </button>
                    <button class="bg-transparent border-0 next">
                        <svg width="31" height="31" viewBox="0 0 31 31" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="15.5" cy="15.5" r="15.5" fill="#0ee9a2" />
                            <path d="M10.6897 7.48291L19.2415 16.0346L10.6897 24.5864" stroke="#0C0C0D"
                                stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                    </button>
                </div>
            </div>
        </div>
    </section>
    <section class="latest-card py-5 my-lg-5 position-relative">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-4 col-md-6 col-12  mt-4">
                    <div class="card-1">
                        <div class="text-center">
                            <div class="text-center mt-2">
                                <img class="card-1-img" data-tilt src="./assets/images/engineer-img-1.png"
                                    alt="">
                            </div>
                            <h4 class="sub-heading mt-4">
                                Engineered with the latest technology
                            </h4>
                            <p class="normal-para my-4">
                                Keeping ahead and staying up to date with the very best trading technology available
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-12  mt-4">
                    <div class="card-1">
                        <div class="text-center">
                            <div class="text-center mt-2">

                                <img class="card-1-img" data-tilt src="./assets/images/engineer-img-2.png"
                                    alt="">
                            </div>
                            <div>
                                <h4 class="sub-heading mt-4">
                                    For everyone
                                </h4>
                                <p class="normal-para my-4">
                                    Building a Borderless World Through International Crypto exchange trading
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-12 mt-4">
                    <div class="card-1">
                        <div class="text-center">
                            <div class="text-center mt-2">
                                <img class="card-1-img" data-tilt src="./assets/images/engineer-img-3.png"
                                    alt="">
                            </div>
                            <h4 class="sub-heading mt-4">
                                Best liquidity
                            </h4>
                            <p class="normal-para my-4">
                                Trade your local currencies against BTC and other major crypto assets
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-none d-sm-block">
            <img class="left-orange-circle" src="./assets/images/engineer-orange-circle.png" alt="">
            <img class="left-green-circle" src="./assets/images/ENGINEER-GREEN-CIRCLE.png" alt="">
        </div>
    </section>

    <section class="koinkoin-trading py-5">
        <div class="container mb-4">
            <h1 class="heading mt-3 mb-4 text-center px-4 px-sm-0">Kryptosa corporate otc trading </h1>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6 col-12 mt-4 mt-lg-0">
                    <div class="card-2">
                        <div class="mb-3 mt-1">
                            <svg width="72" height="72" viewBox="0 0 72 72" fill="none"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <rect width="72" height="72" fill="url(#pattern0)" />
                                <defs>
                                    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1"
                                        height="1">
                                        <use xlink:href="#image0_274_113" transform="scale(0.0078125)" />
                                    </pattern>
                                    <image id="image0_274_113" width="128" height="128"
                                        xlink:href="data:image/png;base64,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" />
                                </defs>
                            </svg>

                        </div>
                        <h4 class="small-heading">
                            Exclusive Access to the Best Deals
                        </h4>
                        <p class="normal-para mt-3 mb-4 pb-3">
                            Access quality, exclusive deals securely, right in our platform.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12  mt-4 mt-lg-0">
                    <div class="card-2">
                        <div class="mb-3 mt-1">
                            <img src="./assets/images/image 14 (1).png" alt="">
                        </div>
                        <h4 class="small-heading">
                            Auditable Transactions, Secure Trading Environment
                        </h4>
                        <p class="normal-para mt-3 mb-4 pb-3">
                            All traders using our platform are fully vetted ensuring a safe and secure trading ecosystem
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12  mt-4 mt-lg-0">
                    <div class="card-2">
                        <div class="mb-3 mt-1">
                            <img src="./assets/images/image 14 (2).png" alt="">
                        </div>
                        <h4 class="small-heading">
                            Strict Deal Confidentiality
                        </h4>
                        <p class="normal-para mt-3 ">
                            KryptoSa has implemented strict confidentiality for every offer, deal, and counter-offer
                            within the platform. All transactions handled with a high degree of privacy.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12 mt-4 mt-lg-0">
                    <div class="card-2">
                        <div class="mb-3 mt-1">
                            <img src="./assets/images/image 14 (3).png" alt="">


                        </div>
                        <h4 class="small-heading">
                            Greater Liquidity with Institutional Grade Compliance
                        </h4>
                        <p class="normal-para mt-3 mb-4 pb-3">
                            We partnered with OTCTrade for compliance and to ensure greater liquidity for our clients.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="trade-crypto my-5 py-lg-4">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6 col-12 text-center ">
                    <img class="w-100" src="./assets/images/trade section.png?v=0.02" alt="">
                </div>
                <div class="col-lg-6 col-12 ps-4">
                    <h3 class="heading text-center text-lg-start mt-4 mt-lg-0">
                        Trade <span class="text-yellow">
                            crypto
                        </span> with local currency easily
                    </h3>
                    <div class="d-flex trade-hover justify-content-between mt-5">
                        <div class="pe-4">
                            <svg class="trade-svg" width="64" height="64" viewBox="0 0 64 64" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="32" cy="32" r="32" fill="#01060A" />
                                <path
                                    d="M31.264 11.752H36.208V43H30.544V22.696H23.104V18.28H24.304C25.776 18.28 26.896 18.168 27.664 17.944C28.464 17.72 29.184 17.288 29.824 16.648C30.784 15.688 31.264 14.344 31.264 12.616V11.752Z"
                                    fill="white" />
                            </svg>

                        </div>
                        <div class="ps-2">
                            <p class="trade-text small-heading mb-0">
                                Open account
                            </p>
                            <p class="normal-para">
                                Come as you are. No requirments but your email to open account.
                            </p>
                        </div>
                    </div>
                    <div class="d-flex trade-hover  justify-content-between ">
                        <div class="pe-4">
                            <svg class="trade-svg" width="64" height="65" viewBox="0 0 64 65" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="32" cy="32" r="32" fill="#01060A" />
                                <path
                                    d="M45.36 45H21.36V43.56C21.36 42.632 21.36 41.944 21.36 41.496C21.392 41.016 21.44 40.408 21.504 39.672C21.6 38.904 21.728 38.328 21.888 37.944C22.08 37.528 22.32 37.016 22.608 36.408C22.928 35.768 23.328 35.224 23.808 34.776C24.288 34.328 24.88 33.816 25.584 33.24C26.288 32.632 27.104 32.04 28.032 31.464C28.96 30.856 30.048 30.2 31.296 29.496C34.816 27.512 36.944 25.912 37.68 24.696C38.032 24.088 38.208 23.496 38.208 22.92C38.208 21.544 37.616 20.488 36.432 19.752C35.28 18.984 33.968 18.6 32.496 18.6C29.264 18.6 26.064 19.832 22.896 22.296V15.912C24.144 15.368 25.168 14.952 25.968 14.664C26.8 14.344 27.872 14.04 29.184 13.752C30.496 13.464 31.824 13.32 33.168 13.32C36.624 13.32 39.408 14.152 41.52 15.816C43.632 17.48 44.688 19.576 44.688 22.104C44.688 24.248 43.92 26.136 42.384 27.768C40.848 29.368 38.288 31.192 34.704 33.24C31.216 35.256 29.024 36.824 28.128 37.944C27.808 38.328 27.536 38.936 27.312 39.768H45.36V45Z"
                                    fill="white" />
                            </svg>

                        </div>
                        <div class="ps-2">
                            <p class="small-heading mb-0 trade-text  ">
                                Deposit crypto / currency
                            </p>
                            <p class="normal-para">
                                Deposit your local currency or Simply transfer your crypto to your KryptoSa address.
                            </p>
                        </div>
                    </div>
                    <div class="d-flex trade-hover  justify-content-lg-between">
                        <div class="pe-4">
                            <svg class="trade-svg" width="64" height="65" viewBox="0 0 64 65" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="32" cy="32" r="32" fill="#01060A" />
                                <path
                                    d="M22.56 42.744V36.456C26.048 38.984 29.376 40.248 32.544 40.248C34.464 40.248 36.112 39.768 37.488 38.808C38.864 37.848 39.552 36.664 39.552 35.256C39.552 33.944 38.944 32.92 37.728 32.184C36.544 31.448 35.12 31.08 33.456 31.08H25.488V26.136H31.584C33.44 26.136 34.992 25.784 36.24 25.08C37.488 24.344 38.112 23.384 38.112 22.2C38.112 21.112 37.584 20.232 36.528 19.56C35.504 18.856 34.192 18.504 32.592 18.504C31.12 18.504 29.648 18.776 28.176 19.32C26.704 19.832 25.632 20.296 24.96 20.712C24.32 21.128 23.52 21.688 22.56 22.392V16.056C25.952 14.168 29.488 13.224 33.168 13.224C36.816 13.224 39.584 14.008 41.472 15.576C43.392 17.112 44.352 18.968 44.352 21.144C44.352 22.008 44.192 22.824 43.872 23.592C43.552 24.36 43.184 24.984 42.768 25.464C42.352 25.912 41.808 26.36 41.136 26.808C40.496 27.224 39.984 27.528 39.6 27.72C39.248 27.88 38.8 28.072 38.256 28.296V28.392C40.816 28.584 42.704 29.368 43.92 30.744C45.168 32.088 45.792 33.688 45.792 35.544C45.792 38.488 44.528 40.888 42 42.744C39.504 44.6 36.384 45.528 32.64 45.528C31.168 45.528 29.712 45.352 28.272 45C26.832 44.648 25.776 44.328 25.104 44.04C24.464 43.72 23.616 43.288 22.56 42.744Z"
                                    fill="white" />
                            </svg>


                        </div>
                        <div class="ps-2">
                            <p class="small-heading mb-0 trade-text ">
                                Buy / sell crypto
                            </p>
                            <p class="normal-para">
                                Start trading. Buy, sell and transfer the largest crypto assets.
                            </p>
                        </div>
                    </div>
                    <div class="mt-4 text-center text-lg-start">
                        <a class="blue-btn text-decoration-none" href="{{ url('signup') }}">
                            Open An Account
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="faq-section mb-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="mw-786 mx-auto ">
                        <h2 class="heading text-center my-5">
                            FAQs
                        </h2>
                        <div class="accordion mt-2" id="accordionExample">
                            <div class="accordion-item  mt-2  ">
                                <h2 class="accordion-header" id="headingone">
                                    <button class="accordion-button border-0 collapsed small-heading" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseone" aria-expanded="true"
                                        aria-controls="collapseone">
                                        Can I create an account on KryptoSa from anywhere in the world?
                                    </button>
                                </h2>
                                <div id="collapseone" class="accordion-collapse collapse"
                                    aria-labelledby="headingone" data-bs-parent="#accordionExample">
                                    <div class="accordion-body ">
                                        <p class="accordion-para normal-para">
                                            Yes you can, KryptoSa provides access to our superior crypto-wallets for
                                            safe
                                            custody of your cryptocurrency assets wherever you are based.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item   mt-2">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button border-0 collapsed small-heading" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo">
                                        Can I deposit USDT and buy other crypto currencies on KryptoSa?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body ">
                                        <p class="accordion-para normal-para mt-2">
                                            Yes you can, you can transfer your USDT to us using ERC20 and/or TRC20
                                            addresses or simply scan and send via the QR code presented on the deposit
                                            screen.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item  mt-2 ">
                                <h2 class="accordion-header" id="headingthree">
                                    <button class="accordion-button border-0 collapsed small-heading" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapsethree"
                                        aria-expanded="false" aria-controls="collapsethree">
                                        Does KryptoSa allow me to place large fiat orders for crypto?
                                    </button>
                                </h2>
                                <div id="collapsethree" class="accordion-collapse collapse"
                                    aria-labelledby="headingthree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body ">
                                        <p class="accordion-para normal-para mt-2">
                                            Yes we do, KryptoSa offers a robust OTC service, simple message us at
                                            Support@Kryptosa.com and we will let you know if you are eligible or not.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item  mt-2 ">
                                <h2 class="accordion-header" id="headingfour">
                                    <button class="accordion-button border-0 collapsed small-heading" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapsefour"
                                        aria-expanded="false" aria-controls="collapsefour">
                                        Can I withdraw my crypto?
                                    </button>
                                </h2>
                                <div id="collapsefour" class="accordion-collapse collapse"
                                    aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body ">
                                        <p class="accordion-para mt-2 normal-para">
                                            Yes you can, you can withdraw your crypto to another wallet directly. If you
                                            have any issues with this process- email our support team -
                                            Support@Kryptosa.com
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>


                </div>
            </div>
        </div>
    </section>

    <section class="contact-us py-5">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5 col-12">
                    <h3 class="heading mb-4 pt-3 text-center text-lg-start">
                        Contact Us
                    </h3>

                    <div id="send-info"></div>

                    <form id="contact-us-form" method="post" enctype="text/plain">
                        <div>
                            <input class="normal-para contact-input" type="text" name="name" id="name"
                                required placeholder="Name" />
                            <br>
                            <input class="normal-para contact-input" type="email" name="email" id="email"
                                required placeholder="Email Address" />
                            <br>
                            <input class="normal-para contact-input" type="text" name="subject" id="subject"
                                required placeholder="Subject" />
                            <br>
                            <textarea class="contact-input normal-para" name="msg" id="msg" cols="30" rows="3"
                                placeholder="Message" required></textarea>
                        </div>
                        <div class="mt-4 text-center text-lg-start d-sm-flex justify-content-between">
                            <button type="submit" class="text-decoration-none blue-btn" id="send-btn">
                                Send Message
                            </button>
                            <button type="reset" class="text-decoration-none blue-btn mt-sm-0 mt-3" id="reset-btn">
                                Reset
                            </button>

                        </div>
                    </form>
                </div>
                <div class="col-lg-6 col-12 mt-5 mt-lg-0">
                    <h3 class="heading mb-4 text-lg-start text-center">
                        Office Address
                    </h3>
                    <div class="d-flex head-office pt-3">
                        <div class="pe-sm-5 pe-4">
                            <svg class="head-svg" width="64" height="64" viewBox="0 0 64 64" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="32" cy="32" r="32" fill="#01060A" />
                                <path
                                    d="M24.2 23.6C24.6774 23.6 25.1353 23.4104 25.4728 23.0728C25.8104 22.7352 26 22.2774 26 21.8C26 21.3226 25.8104 20.8648 25.4728 20.5272C25.1353 20.1896 24.6774 20 24.2 20C23.7226 20 23.2648 20.1896 22.9272 20.5272C22.5897 20.8648 22.4 21.3226 22.4 21.8C22.4 22.2774 22.5897 22.7352 22.9272 23.0728C23.2648 23.4104 23.7226 23.6 24.2 23.6Z"
                                    fill="white" />
                                <path
                                    d="M26 28.9997C26 29.4771 25.8104 29.9349 25.4728 30.2725C25.1353 30.6101 24.6774 30.7997 24.2 30.7997C23.7226 30.7997 23.2648 30.6101 22.9272 30.2725C22.5897 29.9349 22.4 29.4771 22.4 28.9997C22.4 28.5223 22.5897 28.0645 22.9272 27.7269C23.2648 27.3894 23.7226 27.1997 24.2 27.1997C24.6774 27.1997 25.1353 27.3894 25.4728 27.7269C25.8104 28.0645 26 28.5223 26 28.9997Z"
                                    fill="white" />
                                <path
                                    d="M24.2 37.9999C24.4364 37.9999 24.6705 37.9533 24.8889 37.8629C25.1072 37.7724 25.3057 37.6398 25.4728 37.4727C25.64 37.3055 25.7725 37.1071 25.863 36.8887C25.9535 36.6703 26 36.4363 26 36.1999C26 35.9635 25.9535 35.7295 25.863 35.5111C25.7725 35.2927 25.64 35.0943 25.4728 34.9271C25.3057 34.76 25.1072 34.6274 24.8889 34.5369C24.6705 34.4465 24.4364 34.3999 24.2 34.3999C23.7226 34.3999 23.2648 34.5895 22.9272 34.9271C22.5897 35.2647 22.4 35.7225 22.4 36.1999C22.4 36.6773 22.5897 37.1351 22.9272 37.4727C23.2648 37.8103 23.7226 37.9999 24.2 37.9999Z"
                                    fill="white" />
                                <path
                                    d="M33.2 21.8C33.2 22.2774 33.0103 22.7352 32.6728 23.0728C32.3352 23.4104 31.8774 23.6 31.4 23.6C30.9226 23.6 30.4647 23.4104 30.1272 23.0728C29.7896 22.7352 29.6 22.2774 29.6 21.8C29.6 21.3226 29.7896 20.8648 30.1272 20.5272C30.4647 20.1896 30.9226 20 31.4 20C31.8774 20 32.3352 20.1896 32.6728 20.5272C33.0103 20.8648 33.2 21.3226 33.2 21.8Z"
                                    fill="white" />
                                <path
                                    d="M31.4 30.7997C31.8774 30.7997 32.3352 30.6101 32.6728 30.2725C33.0103 29.9349 33.2 29.4771 33.2 28.9997C33.2 28.5223 33.0103 28.0645 32.6728 27.7269C32.3352 27.3894 31.8774 27.1997 31.4 27.1997C30.9226 27.1997 30.4647 27.3894 30.1272 27.7269C29.7896 28.0645 29.6 28.5223 29.6 28.9997C29.6 29.4771 29.7896 29.9349 30.1272 30.2725C30.4647 30.6101 30.9226 30.7997 31.4 30.7997Z"
                                    fill="white" />
                                <path
                                    d="M33.2 36.1999C33.2 36.6773 33.0103 37.1351 32.6728 37.4727C32.3352 37.8103 31.8774 37.9999 31.4 37.9999C30.9226 37.9999 30.4647 37.8103 30.1272 37.4727C29.7896 37.1351 29.6 36.6773 29.6 36.1999C29.6 35.7225 29.7896 35.2647 30.1272 34.9271C30.4647 34.5895 30.9226 34.3999 31.4 34.3999C31.8774 34.3999 32.3352 34.5895 32.6728 34.9271C33.0103 35.2647 33.2 35.7225 33.2 36.1999Z"
                                    fill="white" />
                                <path
                                    d="M38.5999 37.9999C38.8363 37.9999 39.0704 37.9533 39.2888 37.8629C39.5071 37.7724 39.7056 37.6398 39.8727 37.4727C40.0399 37.3055 40.1725 37.1071 40.2629 36.8887C40.3534 36.6703 40.3999 36.4363 40.3999 36.1999C40.3999 35.9635 40.3534 35.7295 40.2629 35.5111C40.1725 35.2927 40.0399 35.0943 39.8727 34.9271C39.7056 34.76 39.5071 34.6274 39.2888 34.5369C39.0704 34.4465 38.8363 34.3999 38.5999 34.3999C38.1225 34.3999 37.6647 34.5895 37.3271 34.9271C36.9896 35.2647 36.7999 35.7225 36.7999 36.1999C36.7999 36.6773 36.9896 37.1351 37.3271 37.4727C37.6647 37.8103 38.1225 37.9999 38.5999 37.9999Z"
                                    fill="white" />
                                <path
                                    d="M18.8 51.1998C18.4817 51.1998 18.1765 51.0734 17.9514 50.8483C17.7264 50.6233 17.6 50.3181 17.6 49.9998V16.3998C17.6 15.445 17.9793 14.5294 18.6544 13.8542C19.3295 13.1791 20.2452 12.7998 21.2 12.7998H35.6C36.5548 12.7998 37.4704 13.1791 38.1456 13.8542C38.8207 14.5294 39.2 15.445 39.2 16.3998V27.1998H42.8C43.7548 27.1998 44.6704 27.5791 45.3456 28.2542C46.0207 28.9293 46.4 29.845 46.4 30.7998V49.9998C46.4 50.3181 46.2736 50.6233 46.0485 50.8483C45.8235 51.0734 45.5182 51.1998 45.2 51.1998H18.8ZM20 16.3998V48.7998H24.8V42.7998C24.8 42.4815 24.9264 42.1763 25.1514 41.9513C25.3765 41.7262 25.6817 41.5998 26 41.5998H38C38.3182 41.5998 38.6235 41.7262 38.8485 41.9513C39.0735 42.1763 39.2 42.4815 39.2 42.7998V48.7998H44V30.7998C44 30.4815 43.8735 30.1763 43.6485 29.9513C43.4235 29.7262 43.1182 29.5998 42.8 29.5998H38C37.6817 29.5998 37.3765 29.4734 37.1514 29.2483C36.9264 29.0233 36.8 28.7181 36.8 28.3998V16.3998C36.8 16.0815 36.6735 15.7763 36.4485 15.5513C36.2235 15.3262 35.9182 15.1998 35.6 15.1998H21.2C20.8817 15.1998 20.5765 15.3262 20.3514 15.5513C20.1264 15.7763 20 16.0815 20 16.3998ZM36.8 43.9998H33.2V48.7998H36.8V43.9998ZM30.8 43.9998H27.2V48.7998H30.8V43.9998Z"
                                    fill="white" />
                            </svg>

                        </div>
                        <div class="mx-3 mx-sm-0">
                            <h5 class="normal-para  fw-bold mb-2 ">
                                Head Office
                            </h5>
                            <p class="normal-para mb-2">
                                KryptoSa 71–75 Shelton St, London WC2H 9JQ, United Kingdom.
                            </p>
                            <!-- <p>
                                +1 123 123 123 0
                            </p> -->
                        </div>
                    </div>
                    <div class="d-flex mt-4 head-office">
                        <div class="pe-sm-5 pe-4">
                            <svg class="head-svg" width="64" height="64" viewBox="0 0 64 64" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="32" cy="32" r="32" fill="#01060A" />
                                <path
                                    d="M38.38 50C36.24 46.86 34 42.72 34 39C34 35.34 35.92 32 38.8 30H38V26H42V28.46C43 28.18 44 28 45 28C45.34 28 45.68 28 46 28.06V14H18V50H30V43H34V50H38.38ZM38 18H42V22H38V18ZM26 46H22V42H26V46ZM26 38H22V34H26V38ZM26 30H22V26H26V30ZM26 22H22V18H26V22ZM30 18H34V22H30V18ZM30 26H34V30H30V26ZM30 38V34H34V38H30ZM45 32C41.2 32 38 35.22 38 39C38 44.22 45 52 45 52C45 52 52 44.22 52 39C52 35.22 48.8 32 45 32ZM45 41.62C43.6 41.62 42.6 40.42 42.6 39.22C42.6 37.82 43.8 36.82 45 36.82C46.2 36.82 47.4 38 47.4 39.22C47.6 40.42 46.4 41.62 45 41.62Z"
                                    fill="white" />
                            </svg>


                        </div>
                        <div class="mx-3 mx-sm-0">
                            <h5 class="normal-para  fw-bold mb-2 ">
                                Branch Office
                            </h5>
                            <p class="normal-para mb-2">
                                KryptoSa 676 Prince Sultan RD, Jeddah, Saudi Arabia
                            </p>
                            <!-- <p>
                                +1 123 123 123 0
                            </p> -->
                        </div>
                    </div>
                    <div class="d-flex mt-4 head-office">
                        <div class="pe-sm-5 pe-4">
                            <svg class="head-svg" width="64" height="64" viewBox="0 0 64 64" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="32" cy="32" r="32" fill="#01060A" />
                                <path
                                    d="M18 14V50H30V43H34V50H46V14H18ZM22 18H26V22H22V18ZM30 18H34V22H30V18ZM38 18H42V22H38V18ZM22 26H26V30H22V26ZM30 26H34V30H30V26ZM38 26H42V30H38V26ZM22 34H26V38H22V34ZM30 34H34V38H30V34ZM38 34H42V38H38V34ZM22 42H26V46H22V42ZM38 42H42V46H38V42Z"
                                    fill="white" />
                            </svg>

                        </div>
                        <div class="mx-3 mx-sm-0">
                            <h5 class="normal-para  fw-bold mb-2 ">
                                Main Office
                            </h5>
                            <p class="normal-para mb-2">
                                KryptoSa 6318 <br>
                                Emaar Square, Building 4 <br>
                                Sheikh Mohammed bin Rashid Blvd Dubai - United Arab Emirates
                            </p>
                            <!-- <p>
                                +1 123 123 123 0
                            </p> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="footer-section pt-4 position-relative">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-1 col-sm-4 col-6 mt-3 text-center">
                    <ul class="list-unstyled">
                        <span class="footer-head">
                            Social


                        </span>
                        <li class="mb-2 mt-3">
                            <a class="footer-link" href="#">
                                Reddit
                            </a>
                        </li>
                        <li class="my-2">
                            <a class="footer-link" href="https://twitter.com/sa_krypto">
                                Twitter
                            </a>
                        </li>
                        <li class="my-2">
                            <a class="footer-link" href="#">
                                Facebook

                            </a>
                        </li>
                        <li class="my-2">
                            <a class="footer-link" href="#">
                                Linkedin
                            </a>
                        </li>
                        <li class="my-2">
                            <a class="footer-link" href="#">
                                Telegram
                            </a>
                        </li>
                        <li class="my-2">
                            <a class="footer-link" href="https://www.instagram.com/kryptosa">
                                Instagram
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-sm-4 col-6 mt-3 text-center">
                    <ul class="list-unstyled">
                        <span class="footer-head">
                            About

                        </span>
                        <li class="mb-2 mt-3">
                            <a class="footer-link" href="#">
                                Blog
                            </a>
                        </li>
                        <li class="my-2">
                            <a class="footer-link" href="#">
                                Website
                            </a>
                        </li>
                        <li class="my-2">
                            <a class="footer-link" href="#">
                                Contact us
                            </a>
                        </li>
                        <li class="my-2">
                            <a class="footer-link" href="#">
                                Information
                            </a>
                        </li>
                        <li class="my-2">
                            <a class="footer-link" href="#">
                                Terms of use
                            </a>
                        </li>
                        <li class="my-2">
                            <a class="footer-link" href="#">
                                Privacy policy
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-sm-4 col-6 mt-3 text-center">
                    <ul class="list-unstyled">
                        <span class="footer-head">
                            Developers

                        </span>
                        <li class="mb-2 mt-3">
                            <a class="footer-link" href="#">
                                Github
                        </li>
                        <li class="my-2">
                            <a class="footer-link" href="#">
                                Ios app
                            </a>
                        </li>
                        <li class="my-2">
                            <a class="footer-link" href="#">
                                Android app

                            </a>
                        </li>
                        <li class="my-2">
                            <a class="footer-link" href="#">
                                Trading api
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-sm-4 col-6 mt-3 text-center">
                    <ul class="list-unstyled">
                        <span class="footer-head">
                            Resources
                        </span>
                        <li class="mb-2 mt-3">
                            <a class="footer-link" href="#">
                                Support
                            </a>
                        </li>
                        <li class="my-2">
                            <a class="footer-link" href="#">
                                Whitepaper
                            </a>
                        </li>
                        <li class="my-2">
                            <a class="footer-link" href="#">
                                List your coin

                            </a>
                        </li>
                        <li class="my-2">
                            <a class="footer-link" href="#">
                                Investor information
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-sm-4 col-6 mt-3 text-center">
                    <ul class="list-unstyled">
                        <span class="footer-head">
                            Otc trading


                        </span>
                        <li class="mb-2 mt-3">
                            <a class="footer-link" href="#">
                                Corporate
                            </a>
                        </li>
                        <li class="my-2">
                            <a class="footer-link" href="#">
                                Corporate client sign up
                            </a>
                        </li>


                    </ul>
                </div>
                <div class="col-lg-2 col-sm-4 col-6 mt-3 text-center">
                    <ul class="list-unstyled">
                        <span class="footer-head">
                            Exchange services
                        </span>
                        <li class="mb-2 mt-3">
                            <a class="footer-link" href="#">
                                Login
                            </a>
                        </li>
                        <li class="my-2">
                            <a class="footer-link" href="#">
                                Trade
                            </a>
                        </li>
                        <li class="my-2">
                            <a class="footer-link" href="{{ url('signup') }}">
                                sign up

                            </a>
                        </li>
                        <li class="my-2">
                            <a class="footer-link" href="#">
                                Cash deposit
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            {{-- <div>
                <img class="footer-circle" src="./assets/images/Ellipse 5 (1).png" alt="">
                <img class="footer-orange" src="./assets/images/engineer-orange-circle.png" alt="">
            </div> --}}
        </div>
    </section>

    <div class="bg-black col-12 col-lg-8 py-3 text-center text-white w-100">
        <div class="text-center">
            <img height="80" class="cursor-pointer" data-tilt src="./assets/images/logo00.png" alt="">
        </div>

        <h2 class="text-center py-2">
            Saudi Arabia’s First
            <span class="text-yellow"> Cryptocurrency </span>
            Exchange
        </h2>
        <p class="text-center mb-0"> All rights reserved KryptoSA© 66inc© </p>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered koin-video w-100 px-3 ">
            <div class="modal-content ">
                <div class="modal-body ">
                    <iframe id="koin-koin-video" width="100%" class="h-90vh"
                        src="https://www.youtube.com/embed/D9ghNBzcldQ" title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('') }}assets/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ asset('') }}assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('') }}assets/js/tilt.js"></script>
    <script src="{{ asset('') }}assets/libs/slick-carousel/1.8.1/slick.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.slick-sliderrrr').slick({
                dots: false,
                infinite: true,
                speed: 300,
                autoplay: true,
                prevArrow: ".prev",
                nextArrow: ".next",
                slidesToShow: 3,
                slidesToScroll: 1,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                            infinite: true,
                            dots: false,
                        }
                    },
                    {
                        breakpoint: 991,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 767,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 575,
                        settings: {
                            slidesToShow: 1,
                            dots: true,
                            prevArrow: false,
                            nextArrow: ".next",
                            slidesToScroll: 1
                        }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
            });
        });
    </script>
    <script>
        $('.js-tilt').tilt({
            glare: true,
            maxGlare: .1
        })
    </script>

    <!-- HAMBURGER TOGGLER   -->
    <script>
        $(".hamburger-menu").on("click", function() {
            $(".hamburger-menu").toggleClass("animate");
            $("#overlay").toggleClass("overlay-active");
            $(".koin-hero").toggleClass("mobile-view");
        });
    </script>
    <script>
        const nav = document.querySelector('#nav-bar-scroll');
        window.addEventListener('scroll', (event) => {

            if (window.scrollY > 10) {
                nav.classList.add("nav-bg")
            } else {
                nav.classList.remove("nav-bg")
            }
        });
    </script>
    <script>
        $(document).ready(function() {
            const koinkoin = document.querySelector(" .mobile-app");
            const mainMenu = document.querySelector(" #main-menu ");

            $(" .overlay-links ").click(function() {
                mainMenu.click();
                console.log(" clicked ");
                $(" .hamburger-menu ").removeClass(" animate ");
                $(" #overlay ").removeClass(" overlay-active ");
                $(" .landshare-hero ").removeClass(" mobile-view ");
                koinkoin.scrollIntoView();
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            var url = $("#koin-koin-video").attr('src');
            $("#exampleModal").on('hide.bs.modal', function() {
                $("#koin-koin-video").attr('src', '');
            });
            $("#exampleModal").on('show.bs.modal', function() {
                $("#koin-koin-video").attr('src', url);
            });
        });
    </script>

    <script>
        function myFunction() {
            var element = document.body;
            element.classList.toggle("dark-mode");
        }
    </script>

    {{-- Chat popup  --}}
    {{-- <script src="//code.tidio.co/5ufndcjekwi1ilypqm3ctzqoamall6aa.js" async></script> --}}

    {{-- Contact US --}}
    <script>
        $(document).ready(function() {
            $("#contact-us-form").submit(function(e) {
                e.preventDefault();

                $('#send-info').html('');
                var obj = {
                    _token: "{{ csrf_token() }}",
                    name: $("#name").val(),
                    email: $("#email").val(),
                    subject: $("#subject").val(),
                    msg: $("#msg").val(),
                };

                $("#send-btn").prop("disabled", true);
                $("#send-btn").html(
                    '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> <span class="">Loading...</span>'
                );

                var url = "{{ route('contact') }}";
                $.ajax({
                    url: url,
                    data: obj,
                    type: 'POST',
                    dataType: 'json',
                    success: function(data) {
                        //data after responed , textStatus and jqXHR is object from XHHTTP class
                        if (data.error == true) {
                            $('#send-info').html(
                                '<div class="alert alert-danger alert-dismissible fade show" role="alert">' +
                                ' <div> ' + data.message + '</div>' +
                                '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">' +
                                '</button></div>');
                        } else {
                            $('#send-info').html(
                                '<div class="alert alert-success alert-dismissible fade show bg-success text-white" role="alert">' +
                                ' <div> ' + data.message + '</div>' +
                                '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">' +
                                '</button></div>');
                            $("#reset-btn").trigger('click');
                        }


                        $("#send-btn").prop("disabled", false);
                        $("#send-btn").html('Send message');
                    },
                    statusCode: {
                        404: function() {
                            $('#send-info').html(
                                '<div class="alert alert-danger" style="margin-top:50px">Error Occur try again</div>'
                            );
                        },
                        500: function() {
                            $('#send-info').html(
                                '<div class="alert alert-danger" style="margin-top:50px">Error Occur try again </div>'
                            );
                        }
                    }
                });
            });
        });
    </script>

</body>

</html>
