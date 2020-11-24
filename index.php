<?php
error_reporting(E_ALL); 
ini_set('ignore_repeated_errors', TRUE); 
ini_set('display_errors', FALSE);
ini_set('log_errors', TRUE); 
ini_set('error_log', '/logs/error_log.txt');
include_once('Logger.php');
$filename = basename(__FILE__);
Logger::info("$filename accessed");
?>

<html>
	<head>
		<title>JEvents</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<header id="header" class="alt">
			<div class="logo"><a href="index.php">Hello <span> from JEvents</span></a></div>
			<input type=button onClick="parent.location='search.php'" value='Search' style="color: white;">
			<a href="#menu">Menu</a>
		</header>

		<nav id="menu">
			<ul class="links">
				<li><a href="login.php">Log In</a></li>
				<li><a href="index.php">Home</a></li>
				<li><a href="event1.php">Events</a></li>
				<li><a href="login.php">Organizer</a></li>
				<li><a href="imprint.php">Imprint</a></li>
				<li><a href="login.php">Maintenance</a></li>
			</ul>
		</nav>

		<section class="banner full">
			<article>
				<img src="images/slide01.jpg" alt="" />
				<div class="inner">
					<header>
						<p>If it’s happening, you will find it here!</p>
						<h2>Welcome to JEvents!</h2>
					</header>
				</div>
			</article>
			<article>
				<img src="images/slide02.jpg" alt="" />
				<div class="inner">
					<header>
						<p>Jacobs University has so much to offer</p>
						<h2>And we are here for it!</h2>
					</header>
				</div>
			</article>
			<article>
				<img src="images/slide03.jpg" alt="" />
				<div class="inner">
					<header>
						<p>You can just click here to find</p>
						<h2>All events on campus!</h2>
					</header>
				</div>
			</article>
			<article>
				<img src="images/slide04.jpg" alt="" />
				<div class="inner">
					<header>
						<p>Club President or Event Organiser?</p>
						<h2>
							Promote your event with us!
						</h2>
					</header>
				</div>
			</article>
			<article>
				<img src="images/slide05.jpg" alt="" />
				<div class="inner">
					<header>
						<p>
							A responsive, interactive platform for Jacobs Community
						</p>
						<h2>To explore events!</h2>
					</header>
				</div>
			</article>
		</section>

		<section id="three" class="wrapper style2">
			<div class="inner">
				<header class="align-center">
					<p class="special">Here are the highlights - some of our most popular activities!</p>
					<h2>Check out this month's events!</h2>
				</header>
				<div class="gallery">
					<div>
						<div class="image fit">
							<a href="#"><img src="images/pic01.jpg" alt="" /></a>
						</div>
					</div>
					<div>
						<div class="image fit">
							<a href="#"><img src="images/pic02.jpg" alt="" /></a>
						</div>
					</div>
					<div>
						<div class="image fit">
							<a href="#"><img src="images/pic03.jpg" alt="" /></a>
						</div>
					</div>
					<div>
						<div class="image fit">
							<a href="#"><img src="images/pic04.jpg" alt="" /></a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="two" class="wrapper style3">
			<div class="inner">
				<header class="align-center">
					<p>Anything you want to add</p>
					<h2>Just let us know!</h2>
				</header>
			</div>
		</section>

		<footer id="footer">
			<div class="container">
				<ul class="icons">
					<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
					<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
					<li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
				</ul>
			</div>
			<div class="copyright">
				&copy; JEvents. All rights reserved. <a href="imprint.php">Imprint.</a>
			</div>
		</footer>

		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/jquery.scrollex.min.js"></script>
		<script src="assets/js/skel.min.js"></script>
		<script src="assets/js/util.js"></script>
		<script src="assets/js/main.js"></script>

	</body>
</html>
