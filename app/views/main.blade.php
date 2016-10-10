<!DOCTYPE html>
<html>

<head>
	<title>@yield('title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="{{Asset('assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{Asset('assets/css/common.css')}}">
	<script type="text/javascript" src="{{Asset('assets/js/jquery-2.1.1.min.js')}}"></script>
	<script type="text/javascript" src="{{Asset('assets/js/jquery-validate/jquery.validate.min.js')}}"></script>
	<script type="text/javascript" src="{{Asset('assets/js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{Asset('assets/js/myValidate.js')}}"></script>
</head>
<body>
	<!-- Navigation -->
	<div class="header">
    	<nav class="navbar navbar-inverse" role="navigation">@include('include._header')</nav>
	</div>
	<div class="slider">
		<div id="myCarousels" class="carouselslide">@include('include._slideDemo')</div> 
	</div>
	<div class="content container">@yield('content')</div>
	<div class="bottom">
		<div id="" class="footer">@include('include._footer')</div> 
	</div>	
</body>
</html>