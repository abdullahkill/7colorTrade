<!DOCTYPE html>
<html>
<head>
	<title>Web App Design</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" type="text/css" href="{{asset('fontend_temp/css/style.css')}}">
	  <meta name="csrf-token" content="{{ csrf_token() }}">

  	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" />
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  	
</head>
<body class="form_body">



<!-- ****************Dashbord Start******************** -->
<div class="container-scroller d-flex">


		{{View::make('layout/side_bar') }} 
{{-- {{View::make('admin/layout/header') }} --}} 

@yield('block')
@yield('active')
@yield('content')
@yield('script')
@yield('edit')
@yield('delete')
@yield('checked')
@yield('add')
@yield('color')
@yield('size')

@yield('normal')
@yield('front')
@yield('side')
@yield('up')
@yield('colorButton')
@yield('hello')
@yield('category')

		<!-- Vendor -->
	</div>
</div>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="{{asset('fontend_temp/js/custom.js')}}"></script>




</body>
</html>
