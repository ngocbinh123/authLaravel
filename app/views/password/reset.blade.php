@extends('main')

@section('title')
	Reset Password
@endsection

@section('content')
	<div class='titleForm'>
		<h3>Reminder password</h3>
	</div>
	<form action="{{ action('RemindersController@postReset') }}" method="POST">
	    <input type="hidden" name="token" value="{{ $token }}">
	    <input type="email" name="email">
	    <input type="password" name="password">
	    <input type="password" name="password_confirmation">
	    <input type="submit" value="Reset Password">
	</form>
@endsection

