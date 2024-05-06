<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap RTL CSS -->
    <link href="{{ asset('') }}assets/styles/bootstrap.rtl.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('') }}assets/styles/style.css?v=0.2">

    <link href="{{ asset('assets/styles/signup.css?v=0.1') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('assets/styles/main.css?v=0.01') }}" rel="stylesheet" type="text/css" media="all" />

    <title>المميزات</title>
</head>

<body>

    @include('ar.navbar')

    <div class="wrapper">
        <section class="text-white " style="height: 100vh;">
            <div class="align-items-center container d-flex flex-column h-100 justify-content-center text-center">
                <div class="pb-3">
                    <img height="120" class="cursor-pointer" data-tilt src="{{ asset('assets/images/logo00.png') }}"
                        alt="">
                </div>

                <div class=" row ">
                    <h1 class="heading">تخزين وتبادل الأصول الرقمية</h1>
                    <p class="fs-6 fw-600">شراء وبيع الأصول الرقمية بسهولة. ما عليك سوى التسجيل ببريدك الإلكتروني
                        والتداول في الأصول الرقمية الرئيسية على مدار الساعة طوال أيام الأسبوع.
                    </p>
                    
                    {{-- <p class="pt-2"><span>Support@Kryptosa.com</span> - <span>+966-7777777</span></p> --}}

                    <div class="mt-5">
                        <a class="yellow-btn text-decoration-none text-white" style="color: #fff !important" href="{{ url('signup') }}">
                            اعرف المزيد
                        </a>
                    </div>
                </div>
            </div>
        </section>


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

        <p class="bottom-0 fs-6 mb-3 position-absolute text-center text-light w-100"> <span>كل الحقوق محفوظة </span>©KrytpoSA© - 66 inc</p>
    </div>

    <script src="{{ asset('') }}assets/js/bootstrap.bundle.min.js"></script>

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
