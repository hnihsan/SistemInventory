
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Sistem Pengadaan dan Pengeluaran Barang</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet" />
		<link href="{{url('css/bootstrap-theme.min.css')}}" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="{{url('css/animate.min.css')}}" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="{{url('css/light-bootstrap-dashboard.css')}}" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{url('css/demo.css')}}" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="{{url('css/fontawesome.min.css')}}" rel="stylesheet">
    <link href="{{url('css/roboto-font.css')}}" rel='stylesheet' type='text/css'>
    <link href="{{url('css/pe-icon-7-stroke.css')}}" rel="stylesheet" />

		<!--     Data Tables     -->
		<link href="{{url('css/dataTables.bootstrap.min.css')}}" rel="stylesheet" />

		<!-- Date Picker -->
		<link href="{{url('css/jquery.datetimepicker.min.css')}}" rel="stylesheet" />

		<!-- Select 2 -->
		<link href="{{url('css/select2.css')}}" rel="stylesheet" />

		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


</head>

<body>
	<div class="wrapper">
		@include('layouts.sidebar')
		<div class="main-panel">
			@include('layouts.navbar')
			@yield('content')
			@include('layouts.footer')
		</div>
	</div>
</body>

    <!--   Core JS Files   -->

    <script src="{{url('js/jquery-1.12.4.js')}}" type="text/javascript"></script>
		<script src="{{url('js/bootstrap.min.js')}}" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="{{url('js/bootstrap-checkbox-radio-switch.js')}}" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="{{url('js/chartist.min.js')}}" type="text/javascript"></script>

    <!--  Notifications Plugin    -->
    <script src="{{url('js/bootstrap-notify.js')}}" type="text/javascript"></script>

    <!--  Google Maps Plugin
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
		-->

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="{{url('js/light-bootstrap-dashboard.js')}}" type="text/javascript"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="{{url('js/demo.js')}}" type="text/javascript"></script>

	<!-- Data Tables  -->
	<script src="{{url('js/dataTables.bootstrap.min.js')}}" type="text/javascript"></script>
	<script src="{{url('js/jquery.dataTables.min.js')}}" type="text/javascript"></script>

	<!-- Date Picker  -->
	<script src="{{url('js/jquery.datetimepicker.full.min.js')}}" type="text/javascript"></script>

	<!-- Data Tables  -->
	<script src="{{url('js/select2.js')}}" type="text/javascript"></script>

	<script src="{{url('js/all.tag.object.js')}}" type="text/javascript"></script>
</html>
