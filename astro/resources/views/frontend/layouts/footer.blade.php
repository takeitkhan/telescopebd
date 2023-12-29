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
    <div class="container">
        <div class="row hidden-xs">
            <div class="col-xs-12">
                <div class="footer-menu">
                    @foreach($footer_nav as $key => $link)
                        <a class="footer-menu-btn home text-glow" href="{{ url($link['link']) }}">
                            {{-- selected --}}
                            {!! $link['label'] !!}
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-4">
                <div class="footer-col-topic">contact us</div>
                <div class="footer-col-content">
                    <a class="email" href="mailto:contact@telescopebangladesh.com">contact@telescopebangladesh.com</a>
                    <div class="footer-col-dist"></div>
                    <div class="footer-social-btns">
                        <a class="footer-social-btn fb" href="#" target="_blank">
                        </a>
                        <a class="footer-social-btn tw" href="#" target="_blank"></a>
                        <a class="footer-social-btn yt" href="#" target="_blank"></a>
                        <!--<a class="footer-social-btn gp" href="" target="_blank"></a>-->
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4">
                <img src="{{ $frontendAssets }}/images/footer_logo.png" width="113" height="141"
                     alt="Telescope Bangladesh"/>
                <div class="footer-logo-line"></div>
                Designed and Developed<br/>
                by <a href="#" target="_blank">MathMozo</a>
            </div>
            <div class="col-xs-12 col-sm-4">

                <div class="footer-col-topic">POPULAR SPACEPEDIA</div>
                <div class="footer-col-content footer-col-content-spacepedia">
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
        </div>
        <!--        <div class="row">-->
        <!--            <div class="col-xs-12">-->
        <!--                <div class="footer-privacy">-->
        <!--                    <a href="embed">Embed</a> - -->
        <!--                    <a href="privacy-policy">Privacy policy</a> - -->
        <!--                    <a href="sitemap.xml">Sitemap</a> - 2019-->
        <!--                    <a href="http://inove.eu.com" target="_blank">INOVE</a>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
    </div>
</div>


<!-- Footer ------------------------------------- -->
{{--<div class="bot1_wrapper">--}}
{{--    <div class="container">--}}
{{--        <div class="col-md-12">--}}
{{--            <h5 class="text-center pb-4">Payment Methods</h5>--}}
{{--            <img src="{{ $frontendAssets }}/images/SSLCommerz.png" width="100%" alt="sslcommerze"/>--}}
{{--        </div>--}}
{{--        <div class="row my-4">--}}
{{--            <div class="col-md-1">--}}
{{--                <strong>Quick Links</strong>--}}
{{--            </div>--}}
{{--            <div class="col-md-11 d-flex">--}}
{{--                @php--}}
{{--                    $footer_nav = Menu::getByName('Footer navigation');--}}
{{--                @endphp--}}
{{--                <ul class="footerUl">--}}
{{--                    @foreach($footer_nav as $key => $link)--}}
{{--                        <li>--}}
{{--                            <a href="{{ url($link['link']) }}">--}}
{{--                                {!! $link['label'] !!}--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    @endforeach--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row my-4">--}}
{{--            <div class="col-md-1">--}}
{{--                <strong>Address</strong>--}}
{{--            </div>--}}
{{--            <div class="col-md-11 d-flex">--}}
{{--                <div class="fluid">--}}
{{--                    {!! $the::settings('footer_content') !!}--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row my-2">--}}
{{--            <div class="col-md-1">--}}
{{--                <strong>Connect Us</strong>--}}
{{--            </div>--}}
{{--            <div class="col-md-11 d-flex">--}}
{{--                <div class="fluid">--}}
{{--                    <a class="btn btn-sm btn-social btn-fb" href="{{url($the::settings('facebook_url'))}}"--}}
{{--                       target="_blank" title="Share this post on Facebook">--}}
{{--                        <i class="fa fa-facebook"></i> Share--}}
{{--                    </a>--}}
{{--                    <a class="btn btn-sm btn-social btn-tw"--}}
{{--                       href="{{url($the::settings('twitter_url'))}}" target="_blank"--}}
{{--                       title="Share this post on Twitter">--}}
{{--                        <i class="fa fa-twitter"></i> Tweet--}}
{{--                    </a>--}}
{{--                    <a class="btn btn-sm btn-social btn-in"--}}
{{--                       href="{{url($the::settings('linkedin_url'))}}"--}}
{{--                       target="_blank" title="Share this post on LinkedIn">--}}
{{--                        <i class="fa fa-linkedin" data-fa-transform="grow-2"></i>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--    </div>--}}
{{--</div>--}}


{{--<div class="bot2_wrapper">--}}
{{--    <div class="container">--}}
{{--        <div class="left_side">--}}
{{--            {!! $the::settings('bottom_footer_content') !!}--}}
{{--            <span>|</span>--}}
{{--            <a href="{{ url('privacy_policy') }}">Privacy Policy</a>--}}
{{--            <span>|</span>--}}
{{--            <a href="{{ url('refund_policy') }}">Refund Policy</a>--}}
{{--            <span>|</span>--}}
{{--            <a href="{{ url('privacy_policy') }}">Contact Support</a>--}}
{{--        </div>--}}
{{--        <div class="right_side">--}}
{{--            Designed by <a href="https://mathmozo.com" target="_blank"><strong>MathMozo</strong></a>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
