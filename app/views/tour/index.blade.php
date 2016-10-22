@extends('main')

@section('title')
	{{$data["title"]}}
@endsection

@section('content')
<div class="tour_list horizontal">
	@foreach($data["tourList"] as $tour)
		<div class="row tour_item">
	        <div class="col-md-3 tour_img">
	            <div class="">
	                <a class="" href="#">
	                	<img width="360" height="270" src="../../assets/img/tour/tour{{$tour->id}}/1.png">                
	                </a>
	            </div>
	        </div>
	        <div class="col-md-9 tour_info">
	        	<p></p>
	        	<a href=""><h3>{{$tour->name}}</h3></a>
	   			<p>Thời gian: {{$tour->duration}}</p>
	       		<p>Giá: {{$tour->price}}</p>
	        </div> 
    	</div>
	@endforeach
</div>
@endsection
