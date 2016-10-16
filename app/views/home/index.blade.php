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
			<a href="#" class="promotion_item">
				<div>
					<img src="../public/assets/img/promotion/1.png" class="km_thumb">
				</div>			
			</a>
		</div>
  		<div class="col-md-9">
  			<div id="tour" class="row tour_list">
  				<div class="tour_item col-xs-12 col-sm-6 col-md-6">
					<div class="wrap">
						<a href="#">
            				<img src="../public/assets/img/tour/special/1.png" class="attachment-tour_big_index wp-post-image" alt="title">
            				<div class="tbToursInfo">
                  				<div class="left">
                    				<h3>Miền Tây</h3>
                    				<span class="thoigian">3 ngày 2 đêm</span>
                    				<span class="gia">1,999,000 VND</span>
				                    <div class="excerpt">
				                    	<p></p>
				                    </div>
                  				</div>                 		
                			</div>
            			</a>
          			</div>
				</div>

				<div class="tour_item col-xs-12 col-sm-6 col-md-6">
					<div class="wrap">
						<a href="#">
            				<img src="../public/assets/img/tour/special/2.png" class="attachment-tour_big_index wp-post-image" alt="title">
            				<div class="tbToursInfo">
                  				<div class="left">
                    				<h3>Singapore</h3>
                    				<span class="thoigian">3 ngày 2 đêm</span>
                    				<span class="gia">6,666,000 VND</span>
				                    <div class="excerpt">
				                    	<p></p>
				                    </div>
                  				</div>                 		
                			</div>
            			</a>
          			</div>
				</div>

				<div class="tour_item col-xs-12 col-sm-6 col-md-6">
					<div class="wrap">
						<a href="#">
            				<img src="../public/assets/img/tour/special/3.png" class="attachment-tour_big_index wp-post-image" alt="title">
            				<div class="tbToursInfo">
                  				<div class="left">
                    				<h3>Đà Lạt</h3>
                    				<span class="thoigian">3 ngày 2 đêm</span>
                    				<span class="gia">1,999,000 VND</span>
				                    <div class="excerpt">
				                    	<p></p>
				                    </div>
                  				</div>                 		
                			</div>
            			</a>
          			</div>
				</div>

				<div class="tour_item col-xs-12 col-sm-6 col-md-6">
					<div class="wrap">
						<a href="#">
            				<img src="../public/assets/img/tour/special/4.png" class="attachment-tour_big_index wp-post-image" alt="title">
            				<div class="tbToursInfo">
                  				<div class="left">
                    				<h3>Phuket</h3>
                    				<span class="thoigian">4 ngày 3 đêm</span><span class="gia">6,999,000 VND</span>
				                    <div class="excerpt">
				                    	<p></p>
				                    </div>
                  				</div>                 		
                			</div>
            			</a>
          			</div>
				</div>
				<!-- @for($i=0;$i<2;$i++)
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
				@endfor -->
  			</div>
  		</div>
	</div>
	<div class="secon_content">
		<h3 class="title_category">TOUR HOT</h3>
		<div class="row tour_list">
			<div class="tour_item col-sm-4 col-md-4">
				<div class="wrap">
					<a href="#">
            			<img src="../public/assets/img/tour/hot/1.png" class="attachment-tour_big_index wp-post-image" alt="title">
            			<div class="tbToursInfo">
              				<div class="left">
                				<h3>Malaysia</h3>
                				<span class="thoigian">3 ngày 2 đêm</span>
                				<span class="gia">3,888,000 VND</span>				          
              				</div>                 		
            			</div>
        			</a>
  				</div>
			</div>

			<div class="tour_item col-sm-4 col-md-4">
				<div class="wrap">
					<a href="#">
            			<img src="../public/assets/img/tour/hot/2.png" class="attachment-tour_big_index wp-post-image" alt="title">
            			<div class="tbToursInfo">
              				<div class="left">
                				<h3>Hàn Quốc</h3>
                				<span class="thoigian">3 ngày 2 đêm</span>
                				<span class="gia">2.380.000đ</span>				          
              				</div>                 		
            			</div>
        			</a>
  				</div>
			</div>

			<div class="tour_item col-sm-4 col-md-4">
				<div class="wrap">
					<a href="#">
            			<img src="../public/assets/img/tour/hot/3.png" class="attachment-tour_big_index wp-post-image" alt="title">
            			<div class="tbToursInfo">
              				<div class="left">
                				<h3>Sài Gòn – TP.HCM</h3>
                				<span class="thoigian">1 ngày</span>
                				<span class="gia">399,000 VND</span>				          
              				</div>                 		
            			</div>
        			</a>
  				</div>
			</div>
			<!-- @for($i=0;$i<6;$i++)
				<div class="tour_item col-sm-4 col-md-4">
					<div class="wrap">
						<a href="#">
                			<img src="../public/assets/img/tour/tour1/1.jpg" class="attachment-tour_big_index wp-post-image" alt="title">
                			<div class="tbToursInfo">
                  				<div class="left">
                    				<h3>Tour Hà Giang mùa hoa tam giác mạch</h3>
                    				<span class="thoigian">3 ngày 2 đêm</span>
                    				<span class="gia">2.380.000đ</span>				          
                  				</div>                 		
                			</div>
            			</a>
      				</div>
				</div>
			@endfor -->
		</div>
	</div>
@endsection
