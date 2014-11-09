@extends('main')

@section('title')
	login
@endsection

@section('content')
	<div class='titleForm'>
		<h3>SIGN IN</h3>
	</div>
	
	<form method="post" action="{{Asset('login')}}" id='login'>
		{{Form::token()}}
		<div class='userName'>
			<p>Email:</p>
			<input type="text" name='user_input' id='user_input' placeholder='email'>
		</div>
		<div class='userPass'>
			<p>Password:</p>
			<div>
				<input type="password" name='password' id='password' placeholder='user Pass'>
			</div>
		</div>
		<div>
			<ul class='row'>
				<li class='col-xs-6'><a href="{{Asset('register')}}" class='register'>Register</a></li>
				<li class='col-xs-6'><a href="{{Asset('password/remind')}}" class='forgotPassword'>Forgot password</a></li>
			</ul>
		</div>
		<div>
			<button class='btn btn-lg btn-primary' id='btnLogin'>Login</button>
		</div>
	</form>
@endsection
