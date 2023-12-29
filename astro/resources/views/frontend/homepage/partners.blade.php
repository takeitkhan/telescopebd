@php
    $partners = $the::settings('partners');
    $partners_img = explode(',', $partners);
@endphp

<div class="panel-type-6 text-center my-5">
    <h3>Our Partners</h3>
    <div class="row">
        @foreach($partners_img as $k => $v)
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                {{--                <div class="img-holder">--}}
                <img src="{{ $the::media($v) }}" alt=""/>
                {{--                </div>--}}
            </div>
        @endforeach
    </div>

</div>

