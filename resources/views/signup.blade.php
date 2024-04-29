<!DOCTYPE html>
<html>
<head>
<title>Creative Colorlib SignUp Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>


<link href="{{ asset('') }}assets/styles/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="./assets/styles/style.css">

<link href="{{ asset('assets/styles/signup.css') }}" rel="stylesheet" type="text/css" media="all" />
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>
<body>

	@include('navbar')

	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1>SignUp</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="{{ route('signup') }}" method="POST">
					@csrf
					<input class="text" type="text" name="first_name" placeholder="First name" value="{{ old('first_name') }}"  required>
					<input class="text email" type="text" name="last_name" placeholder="Last name" value="{{ old('last_name') }}"  required>
					<input class="text email" type="text" name="phone" placeholder="Phone" value="{{ old('phone') }}"  required>
					<input class="text email" type="email" name="email" placeholder="Email" value="{{ old('email') }}"  required>
					{!! $errors->first('email', '<p style="color: #ffbb28;text-align: left;margin-top: -1.3em;margin-bottom: 1.3em;">:message</p>') !!}
					{{-- <div class="wthree-text">
						<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>I Agree To The Terms & Conditions</span>
						</label>
						<div class="clear"> </div>
					</div> --}}
					<input type="submit" value="SIGNUP">
				</form>
				{{-- <p>Don't have an Account? <a href="#"> Login Now!</a></p> --}}
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