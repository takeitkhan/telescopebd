<div class="sub-page-header">
    <div class="title-holder show-on-start">
        <div class="title-1">{{ $page->name }}</div>
        <div class="title-2" style="max-width:510px; margin-left: auto; margin-right: auto;">
            {!! $Post::customField('page_short_description', $page->id) !!}
            <div style="color: #00c4b8; margin-top: 10px;">
                {!! $Post::customField('page_sub_title', $page->id) !!}
            </div>
        </div>
    </div>
</div>
<div class="solar-model-bottom"></div>
<div class="container solar-content">
    <div class="row">
        <div class="col-xs-12">
            {!! $page->description !!}
        </div>
    </div>


</div>
