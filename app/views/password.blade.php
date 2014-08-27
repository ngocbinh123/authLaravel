@extends('main')

@section('title')
	Register
@endsection

@section('content')
	<div class='titleForm'>
		<h3>REGISTER</h3>
	</div>
	<form action="{{ action('RemindersController@postRemind') }}" method="POST" id='passwordRemind'>
    	<input type="email" name="email">
    	<input type="submit" value="Send Reminder">
	</form>
	
@endsection
