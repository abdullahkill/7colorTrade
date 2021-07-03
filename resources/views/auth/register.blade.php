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
	<div class="card login-form main_cover col-md-4 offset-md-4 " >
		<img class="logo text-center" src="{{asset('fontend_temp/img/logo.png')}}">
			<h5 class="text-center">Name</h5>
	<div class="card-body">
		<h4 class="card-title ">Signup </h4>
		@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

		<div class="card-text">
        <form method="POST" action="{{ route('register') }}">
            @csrf

				<div class="form-group">
					<label for="exampleInputEmail1">Name</label>
					<input type="text" name="name" :value="old('name')" required autofocus autocomplete="name"  class="form-control form-control-sm" placeholder="Enter your Name">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1"> Email</label>
					<input type="email" name="email" :value="old('email')" required  class="form-control form-control-sm" placeholder="Your Email">
				</div>
				<button  type="submit" class="my_btn mb-3" >Send To</button>
				<div class="form-group">
					<label for="exampleInputPassword1">Enter OTP</label>
					<input type="text" class="form-control form-control-sm" id="exampleInputPassword1" placeholder="Enter your OTP">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Create Your Password</label>
					<input type="password" name="password" onchange="myFunction()" id="password" class="form-control form-control-sm" id="exampleInputPassword1" placeholder="Use uppercase, lowercase, numbers & symbols">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Retype Your Password</label>
					<input type="password" name="password_confirmation" class="form-control form-control-sm" id="exampleInputPassword1" placeholder="Use uppercase, lowercase, numbers & symbols">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Enter your referral code / link (optional)</label>
					<input type="link" name="refer" class="form-control form-control-sm"placeholder="Referal code / link">
				</div>
				<button type="submit" class="btn-block my_btn">Create Account</button>
			</form>
		</div>
	</div>
</div>
</div>



<!-- ****************login Form End******************** -->




















<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>




</body>
</html>