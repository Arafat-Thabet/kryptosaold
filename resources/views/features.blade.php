<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('') }}assets/styles/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/styles/style.css">

    <title>Features</title>
</head>

<body>

    @include('navbar')

    <section class="text-white " style="height: 100vh;background-color: #41464b;">
        <div class="align-items-center container d-flex flex-column h-100 justify-content-center text-center">
            <div class=" row ">
                <h1 class="heading">Digital Assets Custody & Exchange</h1>
                <p class="fs-6 fw-600">Easily buy and sell digital assets. Simply sign up with your email and trade the major digital assets
                    24/7.</p>
            </div>
            <div class="d-flex justify-content-center gap-2">
                <button class="btn bg-white btn-outline-light text-primary border-primary">VIEW EXCHANGE</button>
                <button class="btn btn-primary">START TRADING</button>
            </div>
        </div>
    </section>


    <script src="{{ asset('') }}assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>
