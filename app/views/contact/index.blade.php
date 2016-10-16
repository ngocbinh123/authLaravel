@extends('main')

@section('title')
	Trang liên hệ
@endsection

@section('content')
<h3 class="title">Thông tin liên hệ VIỆT STEP: </h3>
<div class="row">
	<div class="col-md-8">
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=IzaSyBWg_kKRzXK-7J6QZM-yeYnKyVBZ309l-M=initMap"
 type="text/javascript"></script>
		<script async defer src="https://maps.googleapis.com/maps/api/js…"type="text/javascript"></script>
		<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
		<div style='overflow:hidden;height:440px;width:700px;'>
			<div id='gmap_canvas' style='height:440px;width:700px;'></div>
			<div>
				<small>
					<a href="http://embedgooglemaps.com">embed google maps</a>
				</small>
			</div>
			<div>
				<small>
					<a href="https://disclaimergenerator.net">disclaimer generator</a>
				</small>
			</div>
			<style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
		</div>
		<script type='text/javascript'>
			function init_map(){
				var myOptions = {
					zoom:17,
					center:new google.maps.LatLng(10.8155483,106.67479500000002),
					mapTypeId: google.maps.MapTypeId.ROADMAP
				};
				map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
				marker = new google.maps.Marker({
					map: map,position: new google.maps.LatLng(10.8155483,106.67479500000002)
				});
				infowindow = new google.maps.InfoWindow({
					content:'<strong>Viet Step</strong><br>159 Bach Dang, Tan Binh, Ho Chi Minh, Viet Nam<br>'
				});
				google.maps.event.addListener(marker, 'click', function(){
					infowindow.open(map,marker);
				});
				infowindow.open(map,marker);
			}
				google.maps.event.addDomListener(window, 'load', init_map);
		</script>
	</div>
	<div class="col-md-4">
		<h3>Văn phòng chính: </h3>
		<p>Tên công ty: VIỆT STEP</p>
		<P>Địa chỉ: 20 Cộng Hoà, Quận Tân Bình, Hồ Chí Minh, ViỆT Nam</P>
		<p>Email: info@vietstep.com.vn</p>
		<p>Địện thoại: 09 33 363 636</p>

		<div class="description">
		</div>
	</div>
</div>
@endsection 