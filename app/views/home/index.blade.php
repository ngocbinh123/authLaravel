@extends('main')

@section('title')
  {{$data['title']}}
@endsection

@section('content')
  <?php 
    $hotList = $data["hot"];
    $specList = $data["special"];
  ?>
	<div class="first_content row"> 
		<div class=" col-md-3 promotion_list">
			<a href="javascript:void(0)" class="promotion_item">
					<img src="../public/assets/img/promotion/1.png" class="km_thumb">	
			</a>
		</div>
  		<div class="col-md-9">
  			<div id="tour" class="row tour_list">

            @foreach( $specList as $key => $tour)
    				<div class="tour_item col-xs-12 col-sm-6 col-md-6">
    					<div class="wrap">
    						<a href="javascript:void(0)">
          				<img src="../public/assets/img/tour/tour{{$key+1}}/1.png" class="attachment-tour_big_index wp-post-image" alt="title">
          				<div class="tbToursInfo">
            				<div class="left row">
                      <div class="col-md-4 col-sm-4">
                        <h3>{{$tour->name}}</h3>
                        <span class="thoigian">{{$tour->duration}}</span>
                      </div>
                      <div class="col-md-8 col-sm-8">
                        <span class="gia">{{$tour->price}}</span>
                      </div>                    	         
            				</div>                 		
            			</div>
          			</a>
        			</div>
  				  </div>
          @endforeach 
				
  			</div>
  		</div>
	</div>
	<div class="secon_content">
		<h3 class="title_category">TOUR HOT</h3>
		<div class="row tour_list">
        @foreach( $hotList as $key => $tour)
    			<div class="tour_item col-sm-6 col-md-4">
    				<div class="wrap">
    					<a href="javascript:void(0)">
                			<img src="../public/assets/img/tour/hot/{{$key+1}}.png" class="attachment-tour_big_index wp-post-image" alt="title">
                			<div class="tbToursInfo">
                          
                  				<div class="left row">
                            <div class="col-md-12 col-sm-12">
                                <h3>{{$tour->name}}</h3>
                            </div>
                            <div class="col-md-4 col-sm-4">
                    				  <span class="thoigian">{{$tour->duration}}</span>
                            </div>
                            <div class="col-md-8 col-sm-8">
                    				  <span class="gia">{{$tour->price}}</span>	
                            </div>			          
                  				</div>                 		
                			</div>
            			</a>
      				</div>
    			</div>
        @endforeach 
		</div>
	</div>
@endsection
