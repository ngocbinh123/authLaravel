@extends('main')

@section('title')
	Basic Auth
@endsection

@section('content')
	<div class='titleForm'>
		<h3>HTTP BASIC AUTHENTICATION</h3>
	</div>
	
	<form method="post" action="{{Asset('login')}}" id='login'>
		{{Form::token()}}
		<a href="{{Asset('logout')}}" class='register'>LOGOUT</a>
	</form>
@endsection
