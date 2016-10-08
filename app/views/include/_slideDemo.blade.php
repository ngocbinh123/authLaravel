 
<div id="slider" class="nivoSlider">
    @for($i =1; $i < 6; $i++)
        <img src="../public/assets/img/slider/img_slider_0{{$i}}.jpg" />
    @endfor 
</div>
<link rel="stylesheet" type="text/css" href="{{Asset('assets/css/nivo-slider.css')}}">
<script type="text/javascript" src="{{Asset('assets/js/jquery.nivo.slider.js')}}"></script>
 <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider({
            boxCols:8, 
            boxRows:4,
            controlNav: true,
            manualAdvance: false,
            prevText: '',
            nextText: '',

        });
    });
</script>




