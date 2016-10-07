<!-- Indicators -->
<ol class="carousel-indicators">
   @for ( $i=1;$i<count($data['pro']);$i++)
        <li data-target="#myCarousel" data-slide-to="{{$i}}"></li>
    @endfor 
</ol>

<!-- Wrapper for slides -->
<div class="carousel-inner">
    <?php $flag=1; ?>
    @foreach ($data['pro'] as $item)
        @if($flag==1)
            <div class="item active">
                <div class="fill" >
                    <a href="">
                        <img src="{{$item->img}}">
                    </a>       
                </div>
                <div class="carousel-caption">
                    <h2>{{$item->name}}</h2>
                </div>   
            </div> 
            <?php $flag=0; ?> 
        @else
            <div class="item">
                <div class="fill" >
                    <a href="">
                        <img src="{{$item->img}}">
                    </a>       
                </div>
                <div class="carousel-caption">
                    <h2>{{$item->name}}</h2>
                </div>   
            </div> 
        @endif
    @endforeach 
 </div> 
<!-- Controls -->
<a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="icon-prev"></span>
</a>
<a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="icon-next"></span>
</a>