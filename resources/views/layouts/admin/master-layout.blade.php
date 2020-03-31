<!doctype html>
<html class="no-js" lang="">

<head>
    <title>CyberSoft Dashboard</title>
    @include('layouts.admin.includes.meta')
    @include('layouts.admin.includes.css')
    
    <!-- modernizr JS ============================================ -->
    <script src="{{ asset('assets/admin/js/vendor/modernizr-2.8.3.min.js') }}"></script>

    @yield('header-script')
</head>

<body>

    @include('layouts.admin.includes.header')

    @include('layouts.admin.includes.mobile-menu')

    @include('layouts.admin.includes.main-menu')

    <div class="main-content" style="min-height: 300px;">
        @yield('main-content')
    </div>
    

    @include('layouts.admin.includes.footer')

    @include('layouts.admin.includes.js')

    @yield('footer-script')
</body>

</html>