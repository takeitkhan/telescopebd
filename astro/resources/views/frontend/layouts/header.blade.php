<form id="logout-form" action="{{ route('logout') }}" method="POST">
    @csrf
</form>

<!-- Header start -->
<div id="header">
    <div class="navbar">
        <div class="glow-bottom-8px">
        </div>

        <div class="logo-holder">
            <a href="/">
                <img src="{{ $the::siteLogo() }}" alt="Telescope Bangladesh" class="img-responsive">
            </a>
        </div>
        <div class="menu">
            <?php
            $user_id = Auth::user();
            ?>
            <a class="btn-type-1-blue menu-hover-start-button">Explore</a>


            @if(!empty($user_id))
                <a onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                   class="btn-type-1-blue menu-hover-start-button1"
                   href="{{ route('logout') }}">
                    Sign Out
                </a>
                <a href="{{ route('frontend_dashboard') }}" class="btn-type-1-blue menu-hover-start-button1">Profile</a>
            @else
                <a href="{{ route('why_register') }}" class="btn-type-1-blue menu-hover-start-button1">Sign Up</a>
                <a href="{{ route('member_signin') }}" class="btn-type-1-blue menu-hover-start-button1">Sign In</a>
            @endif
            <a href="{{ url('/') }}" class="btn-type-1-blue menu-hover-start-button1">
                <img src="public/frontend/images/icons/me
                nu_home.png" width="30"/>
            </a>
        </div>
    </div>

    <div class="menu-hover-backdrop" style="display: none;"></div>
    @php
        $exploreMenus = Menu::getByName($the::settings('header_menu_name'));
    @endphp

    <div class="menu-hover" style="display: none;">
        <div class="menu-content">
            @foreach($exploreMenus as $key => $item)
                @if($item['link'] == Request::segment('1'))
                    @php
                        $active = ' active';
                    @endphp
                @else
                    @php
                        $active = ' ';
                    @endphp
                @endif
                <a class="menu-hover-button main {{ $item['class'] ?? NULL }} selected"
                   href="{{ url($item['link'] ?? NULL) }}">
                    <div class="bg"></div>
                    <div class="icon"></div>
                    {!! $item['label'] ?? NULL !!}
                </a>
            @endforeach
        </div>
    </div>

</div>
