@extends('main')

@section('title')
	Edit Profile
@endsection 

@section('content')
	<h1>EDIT PROFILE</h1>

	<form method ='post' action="{{Asset('editprofile')}}" id='editprofile'>
		{{Form::token()}}
		<a href="{{Asset('logout')}}">Logout</a>
		<a href="{{Asset('passwordreset/{token}')}}">Reset password</a>
	</form>
@endsection