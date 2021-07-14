<!DOCTYPE html>
<html>
    <head>
        @include('layouts.dash.head')

        <script defer src="{{ asset('js/app.js') }}"></script>

        @yield('style')

        @livewireStyles


    </head>
    <body>

        <div id="preloader">
            <div class="sk-three-bounce">
                <div class="sk-child sk-bounce1"></div>
                <div class="sk-child sk-bounce2"></div>
                <div class="sk-child sk-bounce3"></div>
            </div>
        </div>
        
        <div id="main-wrapper">
            <!--************Nav Header********-->
            @include('layouts.dash.nav-header')
            <!--**********Header end******************* <a href="{{ url()->previous() }}"> -->

            <!--************Header start***************-->
            @include('layouts.dash.header')         
            <!--**********Header end ti-comment-alt****************-->

            <!--*********Sidebar start**********-->
            @include('layouts.dash.sidebar')
            <!--**********Sidebar end*****************-->
        
            <!--***********Content body start***********************-->
            
            {{ $slot }}

            {{-- @yield('content') --}}



            <!--***********Footer start****************-->
            <div class="footer">
                <div class="copyright">
                    <p>Copyright © Designed &amp; Developed by <a href="../index.htm" target="_blank">DexignLab</a> 2020</p>
                </div>
            </div>
            <!--***************Footer end************-->
                
        </div>
        <!-- Required vendors -->

        @include('layouts.dash.script')

        @yield('script')

        <!-- Datatable -->


        @livewireScripts
        <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false" data-turbo-eval="false"></script>
    </body>
</html>