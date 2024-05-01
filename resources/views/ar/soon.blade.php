<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comming Soon!</title>
    <style>
        section {
            background-image: url('{{ asset('') }}assets/images/soon.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            overflow: hidden;
            height: 100vh;
        }

        a {
            cursor: pointer;
            text-decoration: none;
        }
    </style>

    <!-- Bootstrap RTL CSS -->
    <link href="{{ asset('') }}assets/styles/bootstrap.rtl.min.css" rel="stylesheet">
    <link href="{{ asset('') }}assets/styles/style.css?v=0.2" rel="stylesheet">

</head>

<body>

    @include('ar.navbar')

    <section class="text-white">
        <div class="align-items-center container d-flex flex-column h-100 justify-content-center text-center">
            <h1>قريبا...</h1>
            <a href="{{ url('/ar') }}" class="yellow-btn text-decoration-none">العودة للرئيسية</a>
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
