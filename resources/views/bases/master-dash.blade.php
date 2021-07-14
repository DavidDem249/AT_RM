<!DOCTYPE html>
<html>
	<head>
		@include('layouts.dash.headT')

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

			@include('layouts.dash.nav-header')
	   		<!--**********Header end******************* <a href="{{ url()->previous() }}"> -->

	        <!--************Header start***************-->
	        @include('layouts.dash.headerT')	        
	        <!--**********Header end ti-comment-alt****************-->

	        <!--*********Sidebar start**********-->
	        @include('layouts.dash.sidebarT')
        	<!--**********Sidebar end*****************-->

			<div class="content-body">
	            <div class="container-fluid">
	            	@yield('content')
	            </div>
	        </div>

	        <div class="footer">
	            <div class="copyright">
	                <p>Copyright © Designed &amp; Developed by <a href="../index.htm" target="_blank">DexignLab</a> 2020</p>
	            </div>
	        </div>

		</div>

		@include('layouts.dash.scriptT')

	    @yield('script')

        @livewireScripts

	</body>
</html>