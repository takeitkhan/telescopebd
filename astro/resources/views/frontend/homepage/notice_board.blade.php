@php
    $notices = $Post::category(1);
@endphp
<div class="panel-screenshots solar-content panel-type-1 pswp-gallery my-5">
    <h3>Notice Board</h3>
    <div class="row">
        @foreach($notices as $key => $value)
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                <a href="#">
                    <div class="img-holder">
                        <img src="{{ $the::media($value->featured_image) }}"
                             alt="{{ $value->name ?? NULL }}"/>
                    </div>
                    <h5 class="fs-3">{{ $value->name ?? NULL }}</h5>
                </a>
            </div>
        @endforeach
    </div>
</div>
