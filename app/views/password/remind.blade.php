@extends('main')

@section('title')
	Reminder Password
@endsection

@section('content')
	<div class='titleForm'>
		<h3>Reminder password</h3>
	</div>
	<form method="post" action="{{ action('RemindersController@postRemind') }}" id='remind'>
		<div>
	   		<input type="email" name="email" placeholder='email'>
		</div>
		<div>
			<input type="submit" value="Send Reminder" class='btn btn-primary'>
		</div>
	</form>
@endsection

