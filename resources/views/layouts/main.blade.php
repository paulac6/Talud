<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Favicon -->
	<link href="assets/img/brand/favicon.png" rel="icon" type="image/png">

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800" rel="stylesheet">

<!-- Icons -->
<link href="{{asset('assets-dashboard/css/icons.css')}}" rel="stylesheet">

<!--Bootstrap.min css-->
<link rel="stylesheet" href="{{asset('assets-dashboard/plugins/bootstrap/css/bootstrap.min.css')}}">

@yield('css')
<!-- Data table css -->
<link href="{{asset('assets-dashboard/plugins/datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />

<!-- Ansta CSS -->
<link href="{{asset('assets-dashboard/css/dashboard.css')}}"rel="stylesheet" type="text/css">

<!-- Custom scroll bar css-->
<link href="{{asset('assets-dashboard/plugins/customscroll/jquery.mCustomScrollbar.css')}}" rel="stylesheet" />

<!-- Sidemenu Css -->
<link href="{{asset('assets-dashboard/plugins/toggle-sidebar/css/sidemenu.css')}}" rel="stylesheet">

</head>
<body class="app sidebar-mini rtl">

	<div class="page">
		<div class="page-main">
		@include('layouts.navbars.sidebar')
      @include('layouts.navbars.navs.auth')
	  
</div>
</div>
</body>
<!-- Ansta Scripts -->
@yield('js')
	<!-- Core -->
	<script src="{{asset('assets-dashboard/plugins/jquery/dist/jquery.min.js')}}"></script>
	<script src="{{asset('assets-dashboard/js/popper.js')}}"></script>
	<script src="{{asset('assets-dashboard/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

	<!-- Echarts JS
	<script src="assets/plugins/chart-echarts/echarts.js"></script> -->

	<!-- Fullside-menu Js-->
	<script src="{{asset('assets-dashboard/plugins/toggle-sidebar/js/sidemenu.js')}}"></script> 

	<!-- Data tables -->
<script src="{{asset('assets-dashboard/plugins/datatable/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('assets-dashboard/plugins/datatable/dataTables.bootstrap4.min.js')}}"></script>
	
	<!-- Custom scroll bar Js-->
	<!-- <script src="assets/plugins/customscroll/jquery.mCustomScrollbar.concat.min.js"></script> -->

	<!-- peitychart -->
	<!-- <script src="assets/plugins/peitychart/jquery.peity.min.js"></script>
	<script src="assets/plugins/peitychart/peitychart.init.js"></script> -->

	<!-- Vector Plugin -->
	<!-- <script src="assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
	<script src="assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="assets/plugins/jvectormap/gdp-data.js"></script>
	<script src="assets/plugins/jvectormap/jquery-jvectormap-us-aea-en.js"></script>
	<script src="assets/plugins/jvectormap/jquery-jvectormap-uk-mill-en.js"></script>
	<script src="assets/plugins/jvectormap/jquery-jvectormap-au-mill.js"></script>
	<script src="assets/plugins/jvectormap/jquery-jvectormap-ca-lcc.js"></script>
	<script src="assets/js/dashboard2map.js"></script> -->

	<!-- Ansta JS -->
	<script src="{{asset('assets-dashboard/js/custom.js')}}"></script>
	<script src="{{asset('assets-dashboard/js/dashboard-sales.js')}}"></script>

	<script>
		$(function(e) {
			$('#example').DataTable();

			var table = $('#example1').DataTable();
			$('button').click( function() {
				var data = table.$('input, select').serialize();
				alert(
					"The following data would have been submitted to the server: \n\n"+
					data.substr( 0, 120 )+'...'
				);
				return false;
			});
			$('#example2').DataTable( {
				"scrollY":        "200px",
				"scrollCollapse": true,
				"paging":         false
			});
		} );

	</script>  
	
</html>
