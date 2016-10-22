@extends('main')

@section('title')
	Trang liên hệ
@endsection

@section('content')
<h3 class="title">Thông tin liên hệ VIỆT STEP: </h3>
<div class="row">
	<div class="col-md-8">
	<!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA3SLEQ6aJbxF0ggqTnnKbaRc3aSh4dN4Y=initMap"
 type="text/javascript"></script> -->
 		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCyrCMlIMI8OoEf2Y9ukaE7Sys63UZg2Ww&callback=initMap"
    async defer></script>
		<script async defer src="https://maps.googleapis.com/maps/api/js…"type="text/javascript"></script>
		<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
		<div style='overflow:hidden;height:440px;width:600px;'>
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
					content:'<strong>DU LỊCH BƯỚC ĐI VIỆT</strong><br>159/40 Bạch Đằng, Phường 02, Quân Tân Bình, TP.HCM<br>'
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
		<p>Tên công ty: CÔNG TY TNHH THƯƠNG MẠI DỊCH VỤ DU LỊCH BƯỚC ĐI VIỆT</p>
		<P>Địa chỉ: 159/40 Bạch Đằng, Phường 02, Quân Tân Bình, TP.HCM</P>
		<p>Email: info@vietsteptravel.com.vn</p>
		<p>Địện thoại: ……………………………</p>

		<div class="description">
		</div>
	</div>
</div>
@endsection 