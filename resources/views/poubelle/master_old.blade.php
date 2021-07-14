<!DOCTYPE html>
<html lang="en">

	<head>
		@include('layouts.head')
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/my-style.css') }}">

		@livewireStyles
		<style>
			/* body{
				min-height: 2000px;
  				padding-top: 70px;
			} */
		</style>
		@yield('style')
	</head>

	<body>
		@include('layouts.header')

		<div style="margin-top:60px">
			@yield('content')
		</div>
		

		@include('layouts.footer')
		<a id="scrollup">Scroll</a>


		@include('layouts.script')

		@livewireScripts

		@yield('script')
	</body>
</html>