<div class="sub-page-header">
    <div class="title-holder show-on-start">
        <div class="title-1">{{ $page->name }}</div>
        {{--        <div class="title-2" style="max-width:510px; margin-left: auto; margin-right: auto;">--}}
        {{--            Every donation, no matter how small, can make a difference. So please consider donating to a cause that you--}}
        {{--            care about today.--}}
        {{--            <div style="color: #00c4b8; margin-top: 10px;">Thank you for your generosity!--}}
        {{--            </div>--}}
        {{--        </div>--}}
    </div>
</div>
<div class="solar-model-bottom"></div>
<div class="container solar-content">
    <div class="row">
        <div class="col-xs-12">
            <div class="solar-h1">{{ $page->name }}</div>
        </div>
    </div>

    {!! $page->description !!}
</div>
