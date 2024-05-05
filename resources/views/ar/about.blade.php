<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <title>Creative Colorlib SignUp Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>


    <!-- Bootstrap RTL CSS -->
    <link href="{{ asset('') }}assets/styles/bootstrap.rtl.min.css" rel="stylesheet">
    <link href="{{ asset('') }}assets/styles/style.css?v=0.5" rel="stylesheet">
    <link href="{{ asset('') }}assets/styles/style-ar.css?v=0.03" rel="stylesheet">

    <link href="{{ asset('assets/styles/signup.css?v=0.1') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('assets/styles/main.css?v=0.01') }}" rel="stylesheet" type="text/css" media="all" />
    <!-- web font -->
    <link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
    <!-- //web font -->
</head>

<body>

    @include('ar.navbar')

    <!-- main -->
    <div class="main-w3layouts wrapper">
        <h1 class="h1">كربتو السعودية</h1>
        <div class="main-agileinfo about">
            <div class="agileits-top">
                <div class="py-2">
					<h5 class="fs-5 fw-bold text-white">التبادل المدعوم من قبل الحكومة</h5>
                    <p class="text-start my-2">                        
                        نحن ندفع بالابتكار في سوق العملات المشفرة السعودية من خلال تبادلنا المدعوم من الحكومة. منصتنا تمكّن الأفراد والشركات من شراء وبيع وتداول وإدارة
                         الأصول الرقمية بسهولة ضمن نظام بيئي قوي ومتوافق مع القوانين.
                    </p>
                </div>
                <div class="py-2">
					<h5 class="fs-5 fw-bold text-white">ما الذي يميزنا؟</h5>
                    <p class="text-start my-2">
                        تعاوننا مع الجهات الحكومية سيميزنا. الاندماج المباشر مع واجهات برمجة التطبيقات الحكومية سيؤسّس لأمن لا مثيل له وتوافق تنظيمي. 
                        هذا الشراكة ترسخ التزامنا بالأمن وتمثلنا كقائد مسؤول ومتفكر مستقبلي في مشهد التمويل الرقمي.
                    </p>
                </div>
                <div class="py-2">
					<h5 class="fs-5 fw-bold text-white">رؤيتنا</h5>
                    <p class="text-start my-2">
                        نجعل من المملكة العربية السعودية ومشروع نيوم مركزًا عالميًا للعملات المشفرة، وتشكل السياسات لجذب الاستثمارات الدولية متعددة البليونات من الدولارات في هذا القطاع.
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

		
        <p class="text-center mb-0 all-rights-text text-light fs-6"><span>كل الحقوق محفوظة </span>©KrytpoSA© - 66 inc</p>
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
