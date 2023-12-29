@php
    $in_media = $Post::category(3);
@endphp
<div class="panel-screenshots solar-content panel-type-1 pswp-gallery my-5">
    <h3>We are in media</h3>
    <div class="row">
        @foreach($in_media as $k => $v)
            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
                <a href="{{ $Post::customField('custom_url', $v->id) }}" target="_blank">
                    <div class="img-holder">
                        <img src="{{ $the::media($v->featured_image) }}"
                             alt="{{ $v->name ?? NULL }}"/>
                    </div>
                    <h5 class="fs-3">{{ $v->name ?? NULL }}</h5>
                </a>
            </div>
        @endforeach
    </div>
</div>
