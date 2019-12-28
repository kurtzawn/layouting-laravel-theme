<!DOCTYPE html>
<html lang="id">
<head>
	<title>@yield('title')</title>
	<meta charset="UTF-8">
	<meta name="description" content="SolMusic HTML Template">
	<meta name="keywords" content="music, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- Favicon -->
	<link href="{{asset('frontend/img/favicon.ico" rel="shortcut icon')}}"/>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">
 
	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('frontend/css/slicknav.min.css')}}"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="{{asset('frontend/css/style.css')}}"/>


	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>

@include('frontend.layouts.header')

@yield('content')

@include('frontend.layouts.footer')


<!--====== Javascripts & Jquery ======-->
<script src="{{asset('frontend/js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('frontend/js/jquery.slicknav.min.js')}}"></script>
	<script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('frontend/js/mixitup.min.js')}}"></script>
	<script src="{{asset('frontend/js/main.js')}}"></script>

	</body>
</html>
