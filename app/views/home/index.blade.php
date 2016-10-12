@extends('main')

@section('title')
	Việt Step Travel 
@endsection

@section('content')
<!-- 	<div class='titleForm'>
		<h3></h3>
	</div>
 -->
	<div class="first_contentrow row"> 
		<div class=" col-md-3 promotion_list">
			<h2 class="">KHUYẾN MÃI</h2>
			<a href="" class="promotion_item">
				<h3>Đón Giáng Sinh trên du thuyền</h3>
				<div>
					<img src="../public/assets/img/tour/img_tour_15.jpg" class="km_thumb">
				</div>
				<div class="km_des">
					Bạn sẽ có một kỳ nghỉ ấn tượng trên chuyến hải trình 5 sao Mariner of the Seas khám phá 3 quốc gia Singapore - Malaysia - Thái Lan
				</div>
			</a>
		</div>
  		<div class="col-md-9">
  			<div id="tours" class="row tour_list">
				@for($i=0;$i<4;$i++)
  					<div class="tour_item col-xs-12 col-sm-6 col-md-6">
  						<div class="wrap">
  							<a href="/">
	                			<img src="../public/assets/img/tour/tour1/1.jpg" class="attachment-tour_big_index wp-post-image" alt="title">
	                			<div class="tbToursInfo">
	                  				<div class="left">
	                    				<h3>Tour Hà Giang mùa hoa tam giác mạch</h3>
	                    				<span class="thoigian">3 ngày 2 đêm</span><span class="gia">2.380.000đ</span>
					                    <div class="excerpt">
					                    	<p>Tour Hà Giang mùa hoa tam giác mạch khởi hành thứ 2 và thứ 6 hàng tuần. Tặng dịch vụ Photo Tour, đi tour với nhiếp ảnh gia chuyên nghiệp, tặng áo cờ đỏ sao vàng và gối hơi tựa cổ. Đừng bỏ lỡ tour Hà Giang mùa đẹp nhất trong năm.</p>
					                    </div>
	                  				</div>                 		
	                			</div>
                			</a>
              			</div>
  					</div>
				@endfor
  			</div>
  		</div>
	</div>
	<div class="secon_content">
		<h3 class="title_category">TOUR HOT</h3>
		<div class="row tour_list">
			@for($i=0;$i<6;$i++)
					<div class="tour_item col-sm-4 col-md-4">
						<div class="wrap">
							<a href="/">
                			<img src="../public/assets/img/tour/tour1/1.jpg" class="attachment-tour_big_index wp-post-image" alt="title">
                			<div class="tbToursInfo">
                  				<div class="left">
                    				<h3>Tour Hà Giang mùa hoa tam giác mạch</h3>
                    				<span class="thoigian">3 ngày 2 đêm</span><span class="gia">2.380.000đ</span>
				                    <div class="excerpt">
				                    	<p>Tour Hà Giang mùa hoa tam giác mạch khởi hành thứ 2 và thứ 6 hàng tuần. Tặng dịch vụ Photo Tour, đi tour với nhiếp ảnh gia chuyên nghiệp, tặng áo cờ đỏ sao vàng và gối hơi tựa cổ. Đừng bỏ lỡ tour Hà Giang mùa đẹp nhất trong năm.</p>
				                    </div>
                  				</div>                 		
                			</div>
            			</a>
          			</div>
					</div>
			@endfor
		</div>
	</div>
@endsection
