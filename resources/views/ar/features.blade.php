<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap RTL CSS -->
    <link href="{{ asset('') }}assets/styles/bootstrap.rtl.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('') }}assets/styles/style.css?v=0.2">
    {{-- <link rel="stylesheet" href="{{ asset('') }}assets/styles/style-ar.css"> --}}

    <title>المميزات</title>
</head>

<body>

    @include('ar.navbar')

    <section class="text-white " style="height: 100vh;background-color: #41464b;">
        <div class="align-items-center container d-flex flex-column h-100 justify-content-center text-center">
            <div class=" row ">
                <h1 class="heading">تخزين وتبادل الأصول الرقمية</h1>
                <p class="fs-6 fw-600">شراء وبيع الأصول الرقمية بسهولة. ما عليك سوى التسجيل ببريدك الإلكتروني والتداول في الأصول الرقمية الرئيسية على مدار الساعة طوال أيام الأسبوع.</p>
            </div>
            <div class="d-flex justify-content-center gap-2">
                <button class="btn bg-white btn-outline-light text-primary border-primary">عرض التبادل</button>
                <button class="btn btn-primary">ابدأ التداول</button>
            </div>
        </div>
    </section>


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
