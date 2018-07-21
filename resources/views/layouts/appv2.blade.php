<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Kebumen Spot Dashboard">
    <meta name="keywords" content="kebumen, spot wisata, pantai, goa, tempat wisata, gunung, liburan, rekreasi">
    <title>@yield('page_title')</title>
    <!-- Vendor styles-->
    <link rel="stylesheet" href="{{ asset('centric/css/vendor.css') }}">
    <!-- App styles-->
    <link rel="stylesheet" href="{{ asset('centric/css/app.css') }}">
    {{--<script src="{{ asset('centric/ga.js') }}"></script>--}}
    @yield('page_css')
</head>
<body class="theme-1">
<div class="layout-container">
    <!-- top navbar-->
    @include('includes.navheader')
    <!-- sidebar-->
    <aside class="sidebar-container">
        <div class="sidebar-header">
            <div class="float-right pt-lg text-muted invisible"><em class="ion-close-round"></em></div>
            <a class="sidebar-header-logo" href="#">
                <img src="{{ asset('centric/images/logo.png') }}" data-svg-replace="{{ asset('centric/images/logo.svg') }}" alt="Logo">
                <span class="sidebar-header-logo-text">Kebumen Spot</span>
            </a>
        </div>
        <div class="sidebar-content">
            <div class="sidebar-toolbar text-center">
                <a href="#"><img class="rounded-circle thumb64" src="{{ asset('centric/images/01.jpg') }}" alt="Profile"></a>
                <div class="mt">Welcome, Gondez</div>
            </div>
            @include('includes.navigation')
        </div>
    </aside>
    <div class="sidebar-layout-obfuscator"></div>
    <!-- Main section-->
    <main class="main-container">
        <!-- Page content-->
        <section>
            @yield('main_content')
        </section>
        <!-- Page footer-->
        <footer><span>{{ date('Y') }} &copy; Kebumen Spot.</span></footer>http://127.0.0.1:8000/centric/images/logo.svg
    </main>
</div>
<!-- Google Maps API-->
{{--<script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyBNs42Rt_CyxAqdbIBK0a5Ut83QiauESPA"></script>--}}
<!-- Vendor script-->
<script src="{{ asset('centric/js/vendor.js') }}"></script>
<!-- App script-->
<script src="{{ asset('centric/js/app.js') }}"></script>
{{--<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p03.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582NzYpoUazw5mj00o1ZNBI6UTXwbs7gYdRrnRK9a8%2fs%2biRw4Odo1XAv2X3sVEpenLi1wYV%2b2M03wn5B0NsKX0EGHHGySYhKCgtdp7N6bg%2bKZFaMhMP79kTb3vPRFZ1d48%2bdk%2fkUMuVxtXosqRobtBV1jSMcgilKHv3kwVCCJ2CVgfBdDGCfExYXT2ck4dNLcnOSCHfnnRMGQT4UNfLPSebDfbPxZqF21fEROSFiyinkJQIeT64JJ2Ub%2fq4eojkeQGWQarZXU%2bXDT9VNqjIKNZsknnythRlYay3MkN2bPNrTwNb2CcJiLs4q9xTwq%2fi5Kx3crNWfF4PY6fsKKdHbDeH2bBwVgg6ID2HLxSGM2YmDw0420mGA%2ftWTvt50llsSmxhCpMcpOdJgK2SBulg9oJBbJdr20wS%2bCnwDGw%2bo9QJ%2f%2bu9pypfds3rTo4v0mgDZGz74OxqWrQ6caGIIf09xDkZFPm0rdEyozBHFWuepzu9N4ZAgOyaLC0lMwA2JJ1mroKM78%2bHI9cnjuY9rwnYSPjvwQH%2fLT1rcDJFw%3d%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script>--}}
@yield('page_js')
</body>

</html>