<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comming Soon!</title>
    <style>
        section {
            background-image: url(assets/images/soon.jpg);
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

<link href="{{ asset('') }}assets/styles/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="./assets/styles/style.css?v=0.1">
    <link rel="stylesheet" href="./assets/styles/style.css">
</head>

<body>

    @include('navbar')

    <section class="text-white">
        <div class="align-items-center container d-flex flex-column h-100 justify-content-center text-center">
            <h1>Comming Soon!</h1>
            <a href="{{ url('') }}" class="yellow-btn text-decoration-none">Back to home</a>
        </div>

    </section>

    <script src="{{ asset('') }}assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>
