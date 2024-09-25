<!doctype html>
<html lang="en" class="semi-dark">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="{{asset('backend/images/favicon-32x32.png')}}" type="image/png" />
	<!--plugins-->
	<link href="{{asset('backend/plugins/notifications/css/lobibox.min.css}')}}" rel="stylesheet"/>
	<link href="{{asset('backend/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet"/>
	<link href="{{asset('backend/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
	<link href="{{asset('backend/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
	<link href="{{asset('backend/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
	<!-- loader-->
	<link href="{{asset('backend/css/pace.min.css')}}" rel="stylesheet"/>
	<script src="{{asset('backend/js/pace.min.js')}}"></script>
	<!-- Bootstrap CSS -->
	<link href="{{asset('backend/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('backend/css/bootstrap-extended.css')}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="{{asset('backend/css/app.css')}}" rel="stylesheet">
	<link href="{{asset('backend/css/icons.css')}}" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="{{asset('backend/css/dark-theme.css')}}" />
	<link rel="stylesheet" href="{{asset('backend/css/semi-dark.css')}}" />
	<link rel="stylesheet" href="{{asset('backend/css/header-colors.css')}}" />
	<title>Rocker - Bootstrap 5 Admin Dashboard Template</title>
    @stack('css')
</head>

<body onload="info_noti()">
	<!--wrapper-->
	<div class="wrapper">
    <!--header-->
    @include('admin.layouts.header')
    <!--end header-->
    <!--sidebar-->
    @include('admin.layouts.sidebar')
    <!--end sidebar-->
    @yield('content')

    <!--footer-->
    @include('admin.layouts.footer')
    <!--endfooter-->

    </div>

    <!-- Bootstrap JS -->
	<script src="{{asset('backend/js/bootstrap.bundle.min.js')}}"></script>
	<!--plugins-->
	<script src="{{asset('backend/js/jquery.min.js')}}"></script>
	<script src="{{asset('backend/plugins/simplebar/js/simplebar.min.js')}}"></script>
	<script src="{{asset('backend/plugins/metismenu/js/metisMenu.min.js')}}"></script>
	<script src="{{asset('backend/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
	<script src="{{asset('backend/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
    <script src="{{asset('backend/plugins/vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
	<script src="{{asset('backend/plugins/chartjs/js/chart.js')}}"></script>
	<script src="{{asset('backend/plugins/sparkline-charts/jquery.sparkline.min.js')}}"></script>
	<!--notification js -->
	<script src="{{asset('backend/plugins/notifications/js/lobibox.min.js')}}"></script>
	<script src="{{asset('backend/plugins/notifications/js/notifications.min.js')}}"></script>
	<script src="{{asset('backend/js/index3.js')}}"></script>
	<!--app JS-->
	<script src="{{asset('backend/js/app.js')}}"></script>
    @stack('js')
</body>

</html>



