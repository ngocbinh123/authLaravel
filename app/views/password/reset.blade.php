@extends('main')

@section('title')
	Reset Password
@endsection

@section('content')
	<div class='titleForm'>
		<h3>Reset password</h3>
	</div>
	<form action="{{ action('RemindersController@postReset') }}" method="POST" id='resetPassword'>

	    <input type="hidden" name="token" value="{{ $token }}">

	    <div>
	    	<p>Email:</p>
	    	<input type="email" name="email">
	    </div>
	    <div>
	    	<p>New Password:</p>
	    	<input type="password" name="password">
	    </div>
	    <div>
	    	<p>Password comfirmation:</p>
	    	<input type="password" name="password_confirmation">
	    </div>
	    <div>
	    	<input type="submit" value="Reset Password" class='btn btn-primary'>
	    </div> 
	</form>
@endsection

