<nav class="sidebar-nav">
    <ul>
        <li><a class="ripple" href="{{ route('dashboard') }}">
                <span class="nav-icon">
                    <img class="invisible" data-svg-replace="{{ asset('centric/images/aperture.svg') }}" alt="MenuItem">
                </span>
                <span>Dashboard</span>
            </a>
        </li>
        <li>
            <a class="ripple" href="{{ route('destination.index') }}">
                <span class="nav-icon"><img class="invisible" data-svg-replace="{{ asset('centric/images/planet.svg') }}" alt="MenuItem"></span>
                <span>Destinations</span>
            </a>
        </li>
        {{--<li><a class="ripple" href="cards.html"><span class="float-right nav-label"></span><span class="nav-icon"><img class="invisible" data-svg-replace="images/radio-waves.svg" alt="MenuItem"></span><span>Cards</span></a></li>
        <li><a class="ripple" href="#"><span class="float-right nav-caret"><em class="ion-ios-arrow-right"></em></span><span class="float-right nav-label"></span><span class="nav-icon"><img class="invisible" data-svg-replace="images/connection-bars.svg" alt="MenuItem"></span><span>Charts</span></a>
            <ul class="sidebar-subnav">
                <li><a class="ripple" href="flot.html"><span class="float-right nav-label"></span><span>Flot</span></a></li>
                <li><a class="ripple" href="radial.html"><span class="float-right nav-label"></span><span>Radial</span></a></li>
                <li><a class="ripple" href="rickshaw.html"><span class="float-right nav-label"></span><span>Rickshaw</span></a></li>
            </ul>
        </li>
        <li><a class="ripple" href="#"><span class="float-right nav-caret"><em class="ion-ios-arrow-right"></em></span><span class="float-right nav-label"></span><span class="nav-icon"><img class="invisible" data-svg-replace="images/clipboard.svg" alt="MenuItem"></span><span>Forms</span></a>
            <ul class="sidebar-subnav">
                <li><a class="ripple" href="forms.classic.html"><span class="float-right nav-label"></span><span>Classic</span></a></li>
                <li><a class="ripple" href="validation.html"><span class="float-right nav-label"></span><span>Validation</span></a></li>
                <li><a class="ripple" href="forms.advanced.html"><span class="float-right nav-label"></span><span>Advanced</span></a></li>
                <li><a class="ripple" href="material.html"><span class="float-right nav-label"></span><span>Material</span></a></li>
                <li><a class="ripple" href="editor.html"><span class="float-right nav-label"></span><span>Editors</span></a></li>
                <li><a class="ripple" href="dropzone.html"><span class="float-right nav-label"></span><span>Dropzone</span></a></li>
                <li><a class="ripple" href="xeditable.html"><span class="float-right nav-label"></span><span>xEditable</span></a></li>
                <li><a class="ripple" href="wizard.html"><span class="float-right nav-label"></span><span>Wizard</span></a></li>
            </ul>
        </li>
        <li><a class="ripple" href="#"><span class="float-right nav-caret"><em class="ion-ios-arrow-right"></em></span><span class="float-right nav-label"></span><span class="nav-icon"><img class="invisible" data-svg-replace="images/navicon.svg" alt="MenuItem"></span><span>Tables</span></a>
            <ul class="sidebar-subnav" id="tables">
                <li><a class="ripple" href="tables.classic.html"><span class="float-right nav-label"></span><span>Classic</span></a></li>
                <li><a class="ripple" href="datatable.html"><span class="float-right nav-label"></span><span>Datatable</span></a></li>
                <li><a class="ripple" href="bootgrid.html"><span class="float-right nav-label"></span><span>Bootgrid</span></a></li>
            </ul>
        </li>
        <li><a class="ripple" href="#"><span class="float-right nav-caret"><em class="ion-ios-arrow-right"></em></span><span class="float-right nav-label"></span><span class="nav-icon"><img class="invisible" data-svg-replace="images/grid.svg" alt="MenuItem"></span><span>Layouts</span></a>
            <ul class="sidebar-subnav" id="layouts">
                <li><a class="ripple" href="layouts.columns.html"><span class="float-right nav-label"></span><span>Columns</span></a></li>
                <li><a class="ripple" href="layouts.overlap.html"><span class="float-right nav-label"></span><span>Overlap</span></a></li>
                <li><a class="ripple" href="layouts.boxed.html"><span class="float-right nav-label"></span><span>Boxed</span></a></li>
                <li><a class="ripple" href="layouts.tabs.html"><span class="float-right nav-label"></span><span>Tabs</span></a></li>
                <li><a class="ripple" href="layouts.containers.html"><span class="float-right nav-label"></span><span>Containers</span></a></li>
            </ul>
        </li>
        <li><a class="ripple" href="#"><span class="float-right nav-caret"><em class="ion-ios-arrow-right"></em></span><span class="float-right nav-label"></span><span class="nav-icon"><img class="invisible" data-svg-replace="images/levels.svg" alt="MenuItem"></span><span>Elements</span></a>
            <ul class="sidebar-subnav" id="elements">
                <li><a class="ripple" href="colors.html"><span class="float-right nav-label"></span><span>Colors</span></a></li>
                <li><a class="ripple" href="whiteframes.html"><span class="float-right nav-label"></span><span>Whiteframes</span></a></li>
                <li><a class="ripple" href="lists.html"><span class="float-right nav-label"></span><span>Lists</span></a></li>
                <li><a class="ripple" href="bootstrapui.html"><span class="float-right nav-label"></span><span>Bootstrap</span></a></li>
                <li><a class="ripple" href="buttons.html"><span class="float-right nav-label"></span><span>Buttons</span></a></li>
                <li><a href="sweetalert.html"><span class="float-right nav-label"></span><span>Sweet-alert</span></a></li>
                <li><a class="ripple" href="spinners.html"><span class="float-right nav-label"></span><span>Spinners</span></a></li>
                <li><a class="ripple" href="nestable.html"><span class="float-right nav-label"></span><span>Nestable</span></a></li>
                <li><a class="ripple" href="grid.html"><span class="float-right nav-label"></span><span>Grid</span></a></li>
                <li><a class="ripple" href="grid-masonry.html"><span class="float-right nav-label"></span><span>Grid Masonry</span></a></li>
                <li><a class="ripple" href="typography.html"><span class="float-right nav-label"></span><span>Typography</span></a></li>
                <li><a class="ripple" href="icons.html"><span class="float-right nav-label"></span><span>Icons</span></a></li>
                <li><a class="ripple" href="utilities.html"><span class="float-right nav-label"></span><span>Utilities</span></a></li>
            </ul>
        </li>
        <li><a class="ripple" href="#"><span class="float-right nav-caret"><em class="ion-ios-arrow-right"></em></span><span class="float-right nav-label"></span><span class="nav-icon"><img class="invisible" data-svg-replace="images/planet.svg" alt="MenuItem"></span><span>Maps</span></a>
            <ul class="sidebar-subnav" id="maps">
                <li><a class="ripple" href="google-map-full.html"><span class="float-right nav-label"></span><span>Google Maps Full</span></a></li>
                <li><a class="ripple" href="google-map.html"><span class="float-right nav-label"></span><span>Google Maps</span></a></li>
                <li><a class="ripple" href="vector-map.html"><span class="float-right nav-label"></span><span>Vector Maps</span></a></li>
                <li><a class="ripple" href="datamaps.html"><span class="float-right nav-label"></span><span>Datamaps</span></a></li>
            </ul>
        </li>
        <li><a class="ripple" href="#"><span class="float-right nav-caret"><em class="ion-ios-arrow-right"></em></span><span class="float-right nav-label"></span><span class="nav-icon"><img class="invisible" data-svg-replace="images/ios-browsers.svg" alt="MenuItem"></span><span>Pages</span></a>
            <ul class="sidebar-subnav" id="pages">
                <li><a class="ripple" href="timeline.html"><span class="float-right nav-label"></span><span>Timeline</span></a></li>
                <li><a class="ripple" href="invoice.html"><span class="float-right nav-label"></span><span>Invoice</span></a></li>
                <li><a class="ripple" href="pricing.html"><span class="float-right nav-label"></span><span>Pricing</span></a></li>
                <li><a class="ripple" href="contacts.html"><span class="float-right nav-label"></span><span>Contacts</span></a></li>
                <li><a class="ripple" href="faq.html"><span class="float-right nav-label"></span><span>FAQ</span></a></li>
                <li><a class="ripple" href="projects.html"><span class="float-right nav-label"></span><span>Projects</span></a></li>
                <li><a class="ripple" href="blog.html"><span class="float-right nav-label"></span><span>Blog</span></a></li>
                <li><a class="ripple" href="blog.article.html"><span class="float-right nav-label"></span><span>Article</span></a></li>
                <li><a class="ripple" href="profile.html"><span class="float-right nav-label"></span><span>Profile</span></a></li>
                <li><a class="ripple" href="gallery.html"><span class="float-right nav-label"></span><span>Gallery</span></a></li>
                <li><a class="ripple" href="wall.html"><span class="float-right nav-label"></span><span>Wall</span></a></li>
                <li><a class="ripple" href="search.html"><span class="float-right nav-label"></span><span>Search</span></a></li>
                <li><a class="ripple" href="messages.html"><span class="float-right nav-label"></span><span>Messages Board</span></a></li>
            </ul>
        </li>
        <li><a class="ripple" href="#"><span class="float-right nav-caret"><em class="ion-ios-arrow-right"></em></span><span class="float-right nav-label"></span><span class="nav-icon"><img class="invisible" data-svg-replace="images/person-stalker.svg" alt="MenuItem"></span><span>User</span></a>
            <ul class="sidebar-subnav" id="user">
                <li><a class="ripple" href="login.html"><span class="float-right nav-label"></span><span>Login</span></a></li>
                <li><a class="ripple" href="signup.html"><span class="float-right nav-label"></span><span>Signup</span></a></li>
                <li><a class="ripple" href="lock.html"><span class="float-right nav-label"></span><span>Lock</span></a></li>
                <li><a class="ripple" href="recover.html"><span class="float-right nav-label"></span><span>Recover</span></a></li>
            </ul>
        </li>
        <li><a class="ripple" href="http://themicon.co/theme/centric/angularjs/"><span class="nav-icon"><em class="ion-android-open"></em></span><span>AngularJS</span></a></li>--}}
    </ul>
</nav>