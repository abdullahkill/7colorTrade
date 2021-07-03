<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Default Layout | Porto Admin - Responsive HTML5 Template</title>
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">
		<meta name="csrf-token" content="{{ csrf_token() }}">

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

		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="{{asset('backend/vendor/jquery-ui/jquery-ui.css')}}" />
		<link rel="stylesheet" href="{{asset('backend/vendor/jquery-ui/jquery-ui.theme.css')}}" />
		<link rel="stylesheet" href="{{asset('backend/vendor/bootstrap-multiselect/css/bootstrap-multiselect.css')}}" />
		<link rel="stylesheet" href="{{asset('backend/vendor/morris/morris.css')}}" />

		<!--(remove-empty-lines-end)-->

				<!-- Specific Page Vendor CSS -->
				<link rel="stylesheet" href="{{asset('backend/vendor/select2/css/select2.css')}}" />
		<link rel="stylesheet" href="{{asset('backend/vendor/select2-bootstrap-theme/select2-bootstrap.min.css')}}" />
		<link rel="stylesheet" href="{{asset('backend/vendor/datatables/media/css/dataTables.bootstrap4.css')}}" />

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
		<section class="body">
  
{{View::make('admin/layout/header') }} 
{{View::make('admin/layout/side_bar') }}
@yield('block')
@yield('active')
@yield('content')
@yield('category')
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
		<script src="{{asset('backend/vendor/jquery-ui/jquery-ui.js')}}"></script>
		<script src="{{asset('backend/vendor/jqueryui-touch-punch/jquery.ui.touch-punch.js')}}"></script>
		<script src="{{asset('backend/vendor/jquery-appear/jquery.appear.js')}}"></script>
		<script src="{{asset('backend/vendor/bootstrap-multiselect/js/bootstrap-multiselect.js')}}"></script>
		<script src="{{asset('backend/vendor/jquery.easy-pie-chart/jquery.easypiechart.js')}}"></script>
		<script src="{{asset('backend/vendor/flot/jquery.flot.js')}}"></script>
		<script src="{{asset('backend/vendor/flot.tooltip/jquery.flot.tooltip.js')}}"></script>
		<script src="{{asset('backend/vendor/flot/jquery.flot.pie.js')}}"></script>
		<script src="{{asset('backend/vendor/flot/jquery.flot.categories.js')}}"></script>
		<script src="{{asset('backend/vendor/flot/jquery.flot.resize.js')}}"></script>
		<script src="{{asset('backend/vendor/jquery-sparkline/jquery.sparkline.js')}}"></script>
		<script src="{{asset('backend/vendor/raphael/raphael.js')}}"></script>
		<script src="{{asset('backend/vendor/morris/morris.js')}}"></script>
		<script src="{{asset('backend/vendor/gauge/gauge.js')}}"></script>
		<script src="{{asset('backend/vendor/snap.svg/snap.svg.js')}}"></script>
		<script src="{{asset('backend/vendor/liquid-meter/liquid.meter.js')}}"></script>
		<script src="{{asset('backend/vendor/jqvmap/jquery.vmap.js')}}"></script>
		<script src="{{asset('backend/vendor/jqvmap/data/jquery.vmap.sampledata.js')}}"></script>
		<script src="{{asset('backend/vendor/jqvmap/maps/jquery.vmap.world.js')}}"></script>
		<script src="{{asset('backend/vendor/jqvmap/maps/continents/jquery.vmap.africa.js')}}"></script>
		<script src="{{asset('backend/vendor/jqvmap/maps/continents/jquery.vmap.asia.js')}}"></script>
		<script src="{{asset('backend/vendor/jqvmap/maps/continents/jquery.vmap.australia.js')}}"></script>
		<script src="{{asset('backend/vendor/jqvmap/maps/continents/jquery.vmap.europe.js')}}"></script>
		<script src="{{asset('backend/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js')}}"></script>
		<script src="{{asset('backend/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js')}}"></script>


		<!--(remove-empty-lines-end)-->
		
		<script src="{{asset('backend/vendor/select2/js/select2.js')}}"></script>
		<script src="{{asset('backend/vendor/datatables/media/js/jquery.dataTables.min.js')}}"></script>
		<script src="{{asset('backend/vendor/datatables/media/js/dataTables.bootstrap4.min.js')}}"></script>
		<!-- Theme Base, Components and Settings -->
		<script src="{{asset('backend/js/theme.js')}}"></script>
		
		<!-- Theme Custom -->
		<script src="{{asset('backend/js/custom.js')}}"></script>
		
		<!-- Theme Initialization Files -->
		<script src="{{asset('backend/js/theme.init.js')}}"></script>

		<!-- Examples -->
		<script src="{{asset('backend/js/examples/examples.dashboard.js')}}"></script>
							
		<script src="{{asset('backend/js/examples/examples.datatables.editable.js')}}"></script>
	</body>
</html>