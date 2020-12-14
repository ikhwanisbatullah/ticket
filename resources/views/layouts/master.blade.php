<!doctype html>
<html class="no-js" lang="en">


<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Ticket – Ticket Bootstrap 4 Template</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Place favicon.ico in the root directory -->
	<link rel="shortcut icon" type="image/x-icon" href="/public/img/favicon.ico">
    <!--All Css Here-->
    
	<!-- Elegant Icon Font CSS-->
    <link rel="stylesheet" href="/public/css/elegant_font.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="/public/css/font-awesome.min.css">
    <!-- Ionicons CSS-->
    <link rel="stylesheet" href="/public/css/ionicons.min.css">
    
	<!-- Bootstrap CSS-->
	<link rel="stylesheet" href="/public/css/bootstrap.min.css">
	<!-- Plugins CSS-->
	<link rel="stylesheet" href="/public/css/plugins.css">
	<!-- Style CSS -->
	<link rel="stylesheet" href="/public/style.css">
	<!-- Responsive CSS -->
	<link rel="stylesheet" href="/public/css/responsive.css">
	<!-- Modernizr Js -->
	<script src="/public/js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
    <div class="wrapper wrapper-box">
        @yield('content')
    </div> 
<!--All Js Here-->
    
	<!--Jquery 1.12.4-->
    <script src="{{asset('public/js/vendor/jquery-1.12.4.min.js')}}"></script>
	<!--Popper-->
	<script src="{{asset('public/js/popper.min.js')}}"></script>
	<!--Bootstrap-->
	<script src="{{asset('public/js/bootstrap.min.js')}}"></script>
	<!--Ajax Mail-->
	<script src="{{asset('public/js/ajax-mail.js')}}"></script>
	<!--Plugins-->
	<script src="{{asset('public/js/plugins.js')}}"></script>
	<!--Main Js-->
	<script src="{{asset('public/js/main.js')}}"></script>
</body>
</html>



