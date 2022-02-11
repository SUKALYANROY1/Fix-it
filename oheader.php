<!DOCTYPE html>
<html>

<head>
	<title>Owner Header</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Mobile Service Center" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<script src="js/jquery-1.11.0.min.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	<!---- start-smoth-scrolling---->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
		<script type="text/javascript" src="js/showpassword.js"></script>

	<!--start-smoth-scrolling-->
	<!--start-top-nav-script-->
	<script>
		$(function() {
			var pull = $('#pull');
			menu = $('nav ul');
			menuHeight = menu.height();
			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});
			$(window).resize(function() {
				var w = $(window).width();
				if (w > 320 && menu.is(':hidden')) {
					menu.removeAttr('style');
				}
			});
		});
	</script>
	<!--End-top-nav-script-->
	<style>
		.contact-mian {
			padding: 0 300px;
			text-align: center;
		}

		.contact-mian input,
		select {
			width: 100%;
		}

		.contact-mian h3 {
			margin: 0 0 45px;
		}

		.user-input {
			color: #999999;
			outline: none;
			font-family: "Open Sans", sans-serif;
			font-size: 15px;
			margin-left: 0px;
			padding: 15px 15px;
			margin-bottom: 1em;
			border: solid 1px #d5d4d4;
			-webkit-appearance: none;
			font-weight: 600;
			border-radius: 0.3em;
		}

		.contact-but-user input[type="submit"] {
			color: #fcfcfc;
			outline: none;
			font-family: "Open Sans", sans-serif;
			font-size: 15px;
			margin-left: 0px;
			padding: 15px 15px;
			margin-bottom: 1em;
			background-color: #505866;
			border: 1px solid #505866;
			-webkit-appearance: none;
			font-weight: 600;
			border-radius: 0.3em;
		}

		/* ---------tableDesign---------- */

		#customers {
			font-family: Arial, Helvetica, sans-serif;
			border-collapse: collapse;
			width: 100%;
			text-align: center;
		}

		#customers td,
		#customers th {
			border: 1px solid #ddd;
			padding: 8px;
			text-align: center;
		}

		#customers tr:nth-child(even) {
			background-color: #f2f2f2;
		}

		#customers tr:hover {
			background-color: #ddd;
		}

		#customers th {
			padding-top: 12px;
			padding-bottom: 12px;
			background-color: #505866;
			color: white;
		}

		/* ---------tableDesign---------- */
		
	</style>
</head>

<body>
	<!--start-header-->
	<div class="header" id="home">
		<div class="container">
			<div class="head">
			<div class="logo">
				<img src="images/logo1.png" alt="" />
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;
				<b style=" color: white; font-size: x-large; "><u>OWNER</u></b>

			</div>
				<div class="navigation">
					<span class="menu"></span>
					<ul class="navig">
						<li style="padding-top: 15px;"><a href="ohome.html"  >Home</a></li>
						<li><a href="owner_add_staff.php">Add Staff</a></li>
						<li><a href="owner_view_staff.php">View Staff</a></li>
						<li><a href="owner_view_products.php">View Stock</a></li>
						<li><a href="owner_view_booking.php">Pending Bookings</a></li>
						<li><a href="owner_view_completebooking.php">All Bookings</a></li>
						<li ><a href="owner_view_statisticaldata.php">Statistical Analysis</a></li>

						<li style="padding-top: 22px;"><a href="index.html">LogOut</a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- script-for-menu -->
	<!-- script-for-menu -->
	<script>
		$("span.menu").click(function() {
			$(" ul.navig").slideToggle("slow", function() {});
		});
	</script>
	<!-- script-for-menu -->

	<BR>
	<BR><BR>