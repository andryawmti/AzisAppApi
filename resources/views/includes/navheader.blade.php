<header class="header-container">
    <nav>
        <ul class="d-lg-none">
            <li><a class="menu-link menu-link-slide" id="sidebar-toggler" href="#"><span><em></em></span></a></li>
        </ul>
        <ul class="d-none d-sm-block">
            <li><a class="menu-link menu-link-slide" id="offcanvas-toggler" href="#"><span><em></em></span></a></li>
        </ul>
        <h3 class="header-title">@yield('header_title')</h3>
        <ul class="float-right">
            {{--<li><a class="ripple" id="header-search" href="#"><em class="ion-ios-search-strong"></em></a></li>--}}
            <li><spane>Welcome {{ Auth::user('admin')->first_name }}</spane></li>
            <li class="dropdown">
                <a class="dropdown-toggle has-badge ripple" href="#" data-toggle="dropdown">
                    <em class="ion-person"></em>{{--<sup class="badge bg-danger">3</sup>--}}</a>
                <ul class="dropdown-menu dropdown-menu-right md-dropdown-menu">
                    <li><a href="{{ route('profile') }}"><em class="ion-home icon-fw"></em>Profile</a></li>
                    {{--<li><a href="messages.html"><em class="ion-gear-a icon-fw"></em>Messages</a></li>--}}
                    <li class="dropdown-divider" role="presentation"></li>
                    <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><em class="ion-log-out icon-fw"></em>Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </li>
            {{--<li><a class="ripple" id="header-settings" href="#"><em class="ion-gear-b"></em></a></li>--}}
        </ul>
    </nav>
</header>