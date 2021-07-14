<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.head')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/my-style.css') }}">

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>

    @livewireStyles

    <style></style>
    @yield('style')

    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css"> 
</head>

<body>

    <div class="loader">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="spinner">
                    <div class="rect1"></div>
                    <div class="rect2"></div>
                    <div class="rect3"></div>
                    <div class="rect4"></div>
                    <div class="rect5"></div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')
    {{-- <a id="scrollup">Scroll</a> --}}


    @include('layouts.script')

    @livewireScripts


    @yield('script')


    {{--<script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>--}}

    
</body>

</html>
