<!DOCTYPE>
<html xmlns="http://www.w3.org/1999/xhtml" lang="vi-VN">

<head>
	<title>@yield('title')</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="icon" href="{{Asset('assets/img/ic_logo.png')}}" type="image/png">
	<meta name="description" content="Bàn chân Việt bước trên mọi nẻo đường">
	<link rel="stylesheet" type="text/css" href="{{Asset('assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{Asset('assets/css/common.css')}}">
	<script type="text/javascript" src="{{Asset('assets/js/jquery-2.1.1.min.js')}}"></script>
	<script type="text/javascript" src="{{Asset('assets/js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{Asset('assets/js/common.js')}}"></script>
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
	<footer id="" class="footer">@include('include._footer')</footer> 	
</body>
</html>