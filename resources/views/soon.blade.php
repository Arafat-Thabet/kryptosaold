<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comming Soon!</title>
    <style>
        body {
            background-image: url(assets/images/soon.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            overflow: hidden;
        }

        .container {
            display: flex;
            justify-content: center;
            min-height: 100vh;
            align-items: center;
            flex-direction: column;
        }

        h1 {
            font-size: 64px;
            font-family: sans-serif;
            color: #fff;
        }
        a {
            cursor: pointer;
            text-decoration: none;
        }
    </style>
    
    <link rel="stylesheet" href="./assets/styles/style.css">
</head>

<body>
    <div class="container">
        <h1>Comming Soon!</h1>
        <a href="{{ url('') }}" class="yellow-btn text-decoration-none">Back to home</a>
    </div>
</body>

</html>
