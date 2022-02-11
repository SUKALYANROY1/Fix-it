<!DOCTYPE html>
<html>

<head>
	<title>Login Here</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Mobile Service Center Software" />
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
		.contact-but-user input[type="submit"] {
			color: #fcfcfc;
			outline: none;
			font-family: "Open Sans", sans-serif;
			font-size: 15px;
			padding: 15px 15px;
			margin-bottom: 1em;
			background-color: #505866;
			-webkit-appearance: none;
			font-weight: 600;
			width: 43%;
			border-radius: 0.3em;
			border-style: none;
		}
	</style>
</head>

<body>
	<!--start-header-->
	<div class="header" id="home">
		<div class="container">
			<div class="head">
				<div class="logo">
					<img src="images/logo1.png" alt="" />
				</div>
				<div class="navigation">
					<span class="menu"></span>
					<ul class="navig">
						<li><a href="index.html" >Home</a></li>
						<li><a href="login.php">Login</a></li>

						<!-- <li><a href="contact.html"  class="active">Contact</a></li> -->
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