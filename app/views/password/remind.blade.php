@extends('main')

@section('title')
	Reminder Password
@endsection

@section('content')
	<div class='titleForm'>
		<h3>Reminder password</h3>
	</div>
	<form method="post" action="{{ action('RemindersController@postRemind') }}" id='remind'>
	    <input type="email" name="email">
	    <input type="submit" value="Send Reminder">
	</form>
@endsection

