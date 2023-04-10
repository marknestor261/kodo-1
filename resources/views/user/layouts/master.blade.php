<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title> Dashboard </title>
    <!-- initiate head with meta tags, css and script -->
    @include('user.include.head')

</head>
<body class="ltr app sidebar-mini {{ $theme.'-'. 'mode' }}" data-base-url="{{url('/')}}">
    <!-- Loader -->
    @include('user.include.loader')
    <!--  /Loader -->

    
	<!-- PAGE -->
	<div class="page">
		<div class="page-main">
            <!-- Header -->
            @include('user.include.header')
            <!-- /Header -->
            
			<!--APP-SIDEBAR-->
            @include('user.include.sidebar')
			<!--/APP-SIDEBAR-->

            <!-- Main Body -->
            @yield('content')
            <!-- /Main Body -->

        </div>

        <!-- FOOTER -->
		@include('user.include.footer')
		<!-- /FOOTER -->

        @if (($apply ?? false) == true)
            <!-- APPLICATION MODAL -->
            @include('user.components.application_modal', ['x' => $x])
            <!-- /APPLICATION MODAL -->
        @endif
    </div>

	<!-- BACK-TO-TOP -->
	<a href="#top" id="back-to-top"><i class="fa fa-long-arrow-up"></i></a>

    <!-- Common Script Starts -->
    @include('user.include.scripts')

    <!-- Common Script Ends -->

</body>
</html>
