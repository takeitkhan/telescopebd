<?php
$home_url = url('/');
$footer_bg = request()->url() == $home_url ? 'footer-bg' : '';
?>


<div class="footer-dist-before"></div>
<div id="footer">
    <div class="footer-background"></div>
    @php
        $footer_nav = Menu::getByName('Footer navigation');
    @endphp
    <div class="container-fluid">
        {{--        <div class="row hidden-xs">--}}
        {{--            <div class="col-xs-12">--}}
        {{--                <div class="footer-menu">--}}
        {{--                    @foreach($footer_nav as $key => $link)--}}
        {{--                        <a class="footer-menu-btn home text-glow" href="{{ url($link['link']) }}">--}}
        {{--                            --}}{{-- selected --}}
        {{--                            {!! $link['label'] !!}--}}
        {{--                        </a>--}}
        {{--                    @endforeach--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}
        <div class="row">
            <div class="col-xs-12 col-sm-3">
                <img src="{!! $the::media($the::settings('footer_logo')) !!}" width="113" alt="Telescope Bangladesh"/>
                <div class="footer-logo-line"></div>
                Designed and Developed<br/>
                by <a href="#" target="_blank">MathMozo</a>
            </div>
            <div class="col-xs-12 col-sm-3">
                <div class="footer-col-topic">Contact Us</div>
                <div class="footer-col-content">
                    <a class="email" href="mailto:contact@telescopebangladesh.com">
                        info@telescopebangladesh.com
                    </a>
                </div>
                <div class="footer-col-dist"></div>
                <div class="footer-social-btns">
                    <a class="footer-social-btn fb" href="#" target="_blank">
                    </a>
                    <a class="footer-social-btn tw" href="#" target="_blank"></a>
                    <a class="footer-social-btn yt" href="#" target="_blank"></a>
                    <!--<a class="footer-social-btn gp" href="" target="_blank"></a>-->
                </div>
            </div>
            <div class="col-xs-12 col-sm-3">
                <div class="footer-col-topic" style="">POPULAR SPACEPEDIA</div>
                <div class="footer-col-content footer-col-content-spacepedia" style="margin-left: 70px;">
                    <a href="#">
                        <span>1.</span>
                        <!--<span>Feb 01</span>-->
                        <span>Orbital and rotational characteristics...</span>
                    </a>
                    <a href="#">
                        <span>2.</span>
                        <!--<span>Jan 31</span>-->
                        <span>Handbook - The Sun</span>
                    </a>
                    <a href="#">
                        <span>3.</span>
                        <!--<span>Jan 31</span>-->
                        <span>Handbook - Mars</span>
                    </a>
                    <a href="#">
                        <span>4.</span>
                        <!--<span>Jan 31</span>-->
                        <span>Handbook - Jupiter</span>
                    </a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3">

            </div>

        </div>
    </div>
</div>
