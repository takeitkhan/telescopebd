@php
    $vision_speech_section_title = $the::settings('vision_speech_section_title');
    $vision_speech = $the::settings('vision_speech');
    $home_vision_donate = $the::settings('home_vision_donate');
    $home_vision_donate_link = $the::settings('home_vision_donate_link');
@endphp
<div class="panel-welcome panel-type-10 my-5">
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-9">
            {!! $vision_speech_section_title ?? NULL !!}
            {!! $vision_speech ?? NULL !!}
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
            <div class="max-width-holder custom_donate_bg panel-type-1">
                {!! $home_vision_donate ?? NULL  !!}
                <a class="panel-type-10 button-desktop" href="{{ $home_vision_donate_link ?? NULL }}" target="_self">
                    Donate Now
                </a>
            </div>
        </div>
    </div>
</div>
