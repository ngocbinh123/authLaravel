@extends('main',compact("data"))

@section('title')
	Hom Page
@endsection

@section('content')
	<div class='titleForm'>
		<h3>Home Page</h3>
		@foreach ($data as $item)
			<p>{{$item->name}}</p>
		@endforeach
	</div>
@endsection
