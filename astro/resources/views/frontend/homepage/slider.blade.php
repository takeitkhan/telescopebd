@php
    $sliders = $Post::term('slider');
@endphp
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        @foreach($sliders as $k => $v)
            <li data-target="#myCarousel" data-slide-to="{{ $k }}" class="{{ $k == 0 ? ' active' : NULL }}"></li>
        @endforeach
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        @foreach($sliders as $k => $v)
            <div class="item {{ $k == 0 ? 'active' : NULL }}">
                <img src="{{ $the::media($v->featured_image) }}" alt="Los Angeles" style="width:100%;">
                <div class="carousel-caption">
                    <h3>{!! $v->name ?? NULL !!}</h3>
                    <p>{!! $v->description ?? NULL !!}</p>
                </div>
            </div>
        @endforeach

    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="solar-model-bottom">
</div>
