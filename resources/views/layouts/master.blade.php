<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Light Bootstrap Dashboard by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="css/fontawesome.min.css" rel="stylesheet">
    <link href='css/roboto-font.css' rel='stylesheet' type='text/css'>
    <link href="css/pe-icon-7-stroke.css" rel="stylesheet" />


		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

		<!-- Styles -->
		<style>
				html, body {
						background-color: #fff;
						color: #636b6f;
						font-family: 'Raleway', sans-serif;
						font-weight: 100;
						height: 100vh;
						margin: 0;
				}

				.full-height {
						height: 100vh;
				}

				.flex-center {
						align-items: center;
						display: flex;
						justify-content: center;
				}

				.position-ref {
						position: relative;
				}

				.top-right {
						position: absolute;
						right: 10px;
						top: 18px;
				}

				.content {
						text-align: center;
				}

				.title {
						font-size: 84px;
				}

				.links > a {
						color: #636b6f;
						padding: 0 25px;
						font-size: 12px;
						font-weight: 600;
						letter-spacing: .1rem;
						text-decoration: none;
						text-transform: uppercase;
				}

				.m-b-md {
						margin-bottom: 30px;
				}
		</style>
</head>

<body>
    @yield('content')
</body>

    <!--   Core JS Files   -->

    <script src="js/jquery-1.10.2.js" type="text/javascript"></script>
		<script src="js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src="js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
		-->

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="js/demo.js"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'pe-7s-gift',
            	message: "Welcome to <b>Light Bootstrap Dashboard</b> - a beautiful freebie for every web developer."

            },{
                type: 'info',
                timer: 4000
            });

    	});
	</script>

</html>
