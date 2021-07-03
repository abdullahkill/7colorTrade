<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:100,300,400,600,800,900|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{asset('backend/vendor/bootstrap/css/bootstrap.css')}}" />
		<link rel="stylesheet" href="{{asset('backend/vendor/animate/animate.css')}}">

		<link rel="stylesheet" href="{{asset('backend/vendor/font-awesome/css/all.min.css')}}" />
		<link rel="stylesheet" href="{{asset('backend/vendor/magnific-popup/magnific-popup.css')}}" />
		<link rel="stylesheet" href="{{asset('backend/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css')}}" />

		<!--(remove-empty-lines-end)-->

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{asset('backend/css/theme.css')}}" />


		<!--(remove-empty-lines-end)-->



		<!-- Skin CSS -->
		<link rel="stylesheet" href="{{asset('backend/css/skins/default.css')}}" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{asset('backend/css/custom.css')}}">

		<!-- Head Libs -->
		<script src="{{asset('backend/vendor/modernizr/modernizr.js')}}"></script>

	</head>
	<body>
		<!-- start: page -->
		<section class="body-sign">
			<div class="center-sign">
				<a href="/login" class="logo float-left">
					<img src="{{asset('backend/img/logo.png')}}" height="54" alt="Porto Admin" />
				</a>

				<div class="panel card-sign">
					<div class="card-title-sign mt-3 text-right">
						<h2 class="title text-uppercase font-weight-bold m-0"><i class="fas fa-user mr-1"></i> Sign In</h2>
					</div>
					<div class="card-body">


					@if (session('status'))
            <div class="alert alert-danger">
                {{ session('status') }}
            </div>
        @endif



					<form method="POST" action="{{ isset($guard) ? url($guard.'/login') : route('login') }}">
            @csrf
							<div class="form-group mb-3">
								<label>Email</label>
								<div class="input-group">
									<input name="email" type="text" :value="old('email')" required autofocus class="form-control form-control-lg" required />
									<span class="input-group-append">
										<span class="input-group-text">
											<i class="fas fa-user"></i>
										</span>
									</span>
								</div>
							</div>

							<div class="form-group mb-3">
								<div class="clearfix">
									<label class="float-left">Password</label>
									
								</div>
								<div class="input-group">
									<input name="password" type="password" class="form-control form-control-lg" required autocomplete="current-password"/>
									<span class="input-group-append">
										<span class="input-group-text">
											<i class="fas fa-lock"></i>
										</span>
									</span>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-8">
									<div class="checkbox-custom checkbox-default">

									</div>
								</div>
								<div class="col-sm-4 text-right">
									<button type="submit" class="btn btn-primary mt-2">Sign In</button>
								</div>
							</div>

	
							
						</form>
					</div>
				</div>

			</div>
		</section>
		<!-- end: page -->

		<!-- Vendor -->
		<script src="{{asset('backend/vendor/jquery/jquery.js')}}"></script>
		<script src="{{asset('backend/vendor/jquery-browser-mobile/jquery.browser.mobile.js')}}"></script>
		<script src="{{asset('backend/vendor/popper/umd/popper.min.js')}}"></script>
		<script src="{{asset('backend/vendor/bootstrap/js/bootstrap.js')}}"></script>
		<script src="{{asset('backend/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
		<script src="{{asset('backend/vendor/common/common.js')}}"></script>
		<script src="{{asset('backend/vendor/nanoscroller/nanoscroller.js')}}"></script>
		<script src="{{asset('backend/vendor/magnific-popup/jquery.magnific-popup.js')}}"></script>
		<script src="{{asset('backend/vendor/jquery-placeholder/jquery.placeholder.js')}}"></script>
		
		<!-- Specific Page Vendor -->


		<!--(remove-empty-lines-end)-->
		
		<!-- Theme Base, Components and Settings -->
		<script src="{{asset('backend/js/theme.js')}}"></script>
		
		<!-- Theme Custom -->
		<script src="{{asset('backend/js/custom.js')}}"></script>
		
		<!-- Theme Initialization Files -->
		<script src="{{asset('backend/js/theme.init.js')}}"></script>

	</body>
</html>