<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <title>تسجيل الدخول</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

    <!-- Bootstrap RTL CSS -->
    <link href="{{ asset('') }}assets/styles/bootstrap.rtl.min.css" rel="stylesheet">
    <link href="{{ asset('') }}assets/styles/style.css?v=0.2" rel="stylesheet">
    <link href="{{ asset('') }}assets/styles/style-ar.css" rel="stylesheet">

    <link href="{{ asset('assets/styles/signup.css?v=0.1') }}" rel="stylesheet" type="text/css" media="all" />
    <!-- web font -->
    <link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
    <!-- //web font -->

    <style>
        h1, input[type="submit"] {
            letter-spacing: unset;
        }
    </style>
</head>

<body>

    @include('ar.navbar')

    <!-- main -->
    <div class="main-w3layouts wrapper">
        <h1>انشاء حساب جديد</h1>
        <div class="main-agileinfo">
            <div class="agileits-top">
                <form action="{{ route('signup') }}" method="POST">
                    @csrf
                    <input class="text" type="hidden" name="ar" value="ar">
                    <input class="text" type="text" name="first_name" placeholder="الاسم الاول"
                        value="{{ old('first_name') }}" required>
                    <input class="text email" type="text" name="last_name" placeholder="الاسم الاخير"
                        value="{{ old('last_name') }}" required>
                    <input class="text email" type="text" name="phone" placeholder="الجوال"
                        value="{{ old('phone') }}" required>
                    <input class="text email" type="email" name="email" placeholder="الايميل"
                        value="{{ old('email') }}" required>
                    {!! $errors->first(
                        'email',
                        '<p style="color: #ffbb28;text-align: left;margin-top: -1.3em;margin-bottom: 1.3em;">:message</p>',
                    ) !!}
                    <input type="submit" value="انشاء">
                </form>
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