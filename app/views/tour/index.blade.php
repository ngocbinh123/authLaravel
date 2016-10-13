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
	                	<img width="360" height="270" src="../../assets/img/tour/tour{{$tour->id}}/1.jpg">                
	                </a>
	            </div>
	        </div>
	        <div class="col-md-9 tour_info">
	        	<p></p>
	        	<a href=""><h3>{{$tour->name}}</h3></a>
	       		<p>Địa điểm: {{$tour->place}}</p>
	       		<p>Giá: {{$tour->price}}VND</p>
	       		<p>Khởi hành: {{$tour->start_time}} - {{$tour->start_time}}</p>
	           	<p>{{$tour->short_description}}</p>
	        </div> 
    	</div>
	@endforeach
</div>
@endsection
