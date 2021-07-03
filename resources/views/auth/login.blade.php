<!DOCTYPE html>
<html>
<head>
	<title>Web App Design</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" type="text/css" href="{{asset('fontend_temp/css/style.css')}}">
  	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" />
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  	
</head>
<body class="container-fluid form_body p-0 m-0 p-md-0 m-md-0">


	<!-- ****************login Form Start******************** -->
	<div class="global-container">
		<div class="form-main_cover col-md-4 offset-md-4 ">
			<div class="flipper" id="flipper">
		<div class="front">
			<div class="card login-form main_cover">
				<img class="logo text-center mr-auto" src="{{asset('fontend_temp/img/logo.png')}}">
				<h5 class="text-center">COLORS	</h5>
				<small class="text-center">TRADE</small>
				<div class="card-body">
					<h3 class="card-title ">Login </h3>
					<div class="card-text">
						@foreach ($errors->all() as $error)
						<li class="alert alert-danger">{{ $error }}</li>
					@endforeach
						<form method="POST" action="{{ isset($guard) ? url($guard.'/login') : route('login') }}">
							@csrf
							<div class="form-group">
								<label for="exampleInputEmail1">Email / Mobile Number</label>
								<input type="email" name="email" class="form-control form-control-sm" placeholder="Your Email Address">
							</div>
							<div class="form-group">
								<div id="empty">
								<a href="javascript:void(0)" onclick="editStudent()" class="show_text">Show</a>
								</div>
								<label for="exampleInputPassword1">Password</label>
								<input type="password" id="password" name="password" class="form-control form-control-sm" placeholder="Enter your password">
								<a class="flipbutton login_text" id="loginButton" href="#">Login Using OTP →</a>
								<a href="#" class="forgot_text">Forgot password?</a>
							</div>
							<button type="submit" class="btn-block my_btn">Log in</button>
							<hr>
							<div class="row">
								<div class="sign-up col-6 col-lg-6 col-md-6 col-sm-6">
									<a href="#" class="float-left socil_icon"><i class="fa fas fa-google"><small>Log in with Google</small></i></a>
								</div>
								<div class="sign-up col-6 col-lg-6 col-md-6 col-sm-6">
									<a href="#" class="float-left socil_icon"><i class="fa fas fa-facebook-square"><small>Log In with Facebook</small></i></a>
								</div>
								<div class="sign-up col-12 col-lg-12 col-md-12 col-sm-12">
									<small>Don’t have an account ?</small>  <a href="/register" class="text_color">Create New account</a>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>		
		<div class="back">
			<div class="card login-form main_cover">
				<img class="logo text-center mr-auto" src="{{asset('fontend_temp/img/logo.png')}}">
				<h5 class="text-center">COLORS	</h5>
				<small class="text-center">TRADE</small>
				<div class="card-body">
					<h3 class="card-title ">Login Using OTP </h3>
					<div class="card-text">
						<form class="form-cover">
							<div class="form-group">
								<label for="exampleInputEmail1">Email / Mobile Number</label>
								<input type="email" class="form-control form-control-sm" placeholder="Your Email Address">
							</div>
							<div class="form-group">
								{{-- <a href="#" class="show_text">Show</a> --}}
								<label for="exampleInputPassword1">OTP</label>
								<input type="text" class="form-control form-control-sm" placeholder="Enter OTP send to your email/mobile number">
								<a class="flipbutton login_text" id="registerButton" href="#">Login Using OTP →</a>
								<a href="#" class="forgot_text">Forgot password?</a>
							</div>
							<button type="submit" class="btn-block my_btn">Log in</button>
							<hr>
							<div class="row">
								<div class="sign-up col-6 col-lg-6 col-md-6 col-sm-6">
									<a href="#" class="float-left socil_icon"><i class="fa fas fa-google"><small>Log in with Google</small></i></a>
								</div>
								<div class="sign-up col-6 col-lg-6 col-md-6 col-sm-6">
									<a href="#" class="float-left socil_icon"><i class="fa fas fa-facebook-square"><small>Log In with Facebook</small></i></a>
								</div>
								<div class="sign-up col-12 col-lg-12 col-md-12 col-sm-12">
									<small>Don’t have an account ?</small>  <a href="/register" class="text_color">Create New account</a>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		</div>
	</div>
	</div>
	<!-- ****************login Form End******************** -->
	
	


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript">
    function editStudent(){
$('#empty').empty();
								
$('#empty').html(`<a href="javascript:void(0)" onclick="hidePassword()" class="show_text">Hide</a>`)
$('#password').attr('type', 'text');
    }

    </script>
   <script type="text/javascript">
    function hidePassword(){
$('#empty').empty();
								
$('#empty').html(`<a href="javascript:void(0)" onclick="editStudent()" class="show_text">Show</a>`)
$('#password').attr('type', 'password');
    }

    </script>



	<script>
		var loginButton = document.getElementById("loginButton");
	var registerButton = document.getElementById("registerButton");
	loginButton.onclick = function(){
		document.querySelector("#flipper").classList.toggle("flip");
	}
	registerButton.onclick = function(){
		document.querySelector("#flipper").classList.toggle("flip");
	}
	</script>
	
	


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>




</body>
</html>