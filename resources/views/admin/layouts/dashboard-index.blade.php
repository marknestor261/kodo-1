<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Admin Dashboard </title>
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
            @include('admin.include.sidebar')
			<!--/APP-SIDEBAR-->

            <!-- Main Body -->
            @yield('content')
            <!-- /Main Body -->

        </div>

        <!-- FOOTER -->
		@include('user.include.footer')
		<!-- /FOOTER -->
    </div>

	<!-- BACK-TO-TOP -->
	<a href="#top" id="back-to-top"><i class="fa fa-long-arrow-up"></i></a>
   
	<!-- JQUERY JS -->
	<script src={{ asset("assets/js/jquery.min.js") }}></script>

	<!-- BOOTSTRAP JS -->
	<script src={{ asset("assets/plugins/bootstrap/js/popper.min.js") }}></script>
	<script src={{ asset("assets/plugins/bootstrap/js/bootstrap.min.js") }}></script>

	<!-- SIDE-MENU JS-->
	<script src={{ asset("assets/plugins/sidemenu/sidemenu.js") }}></script>

	<!-- APEXCHART JS -->
	<script src={{ asset("assets/js/apexcharts.js") }}></script>

	<!-- INTERNAL SELECT2 JS -->
	<script src={{ asset("assets/plugins/select2/select2.full.min.js") }}></script>

	<!-- CHART-CIRCLE JS-->
	<script src={{ asset("assets/js/circle-progress.min.js") }}></script>

	<!-- INTERNAL DATA-TABLES JS-->
	<script src={{ asset("assets/plugins/datatable/js/jquery.dataTables.min.js") }}></script>
	<script src={{ asset("assets/plugins/datatable/js/dataTables.bootstrap5.js") }}></script>
	<script src={{ asset("assets/plugins/datatable/dataTables.responsive.min.js") }}></script>

	<!-- INDEX JS -->
	<script src={{ asset("assets/js/index1.js") }}></script>

	<!-- REPLY JS-->
	<script src={{ asset("assets/js/reply.js") }}></script>

	
	<!-- ECHART JS -->
	<script src={{ asset("assets/plugins/echarts/echarts.js") }}></script>
	<script src={{ asset("assets/js/echarts.js") }}></script>

	<!-- PERFECT SCROLLBAR JS-->
	<script src={{ asset("assets/plugins/p-scroll/perfect-scrollbar.js") }}></script>
	<script src={{ asset("assets/plugins/p-scroll/pscroll.js") }}></script>

	<!-- STICKY JS -->
	<script src={{ asset("assets/js/sticky.js") }}></script>

	<!-- COLOR THEME JS -->
	<script src={{ asset("assets/js/themeColors.js") }}></script>

	<!-- CUSTOM JS -->
	<script src={{ asset("assets/js/custom.js") }}></script>

</body>
</html>
