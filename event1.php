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
		<title>Jacobs Startup Competition - JEvents</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage">

			<header id="header">
				<div class="logo"><a href="index.php">Hello <span>from JEvents!</span></a></div>
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

			<section id="One" class="wrapper style3">
				<div class="inner">
					<header class="align-center">
						<p>Jacobs StartUp Competition</p>
						<h2>Event organized by the JStartUp Team</h2>
					</header>
				</div>
			</section>

			<section id="two" class="wrapper style2">
				<div class="inner">
					<div class="box">
						<div class="content">
							<header class="align-center">
								<p>Jacobs StartUp Competition</p>
								<h2>Date: 12th - 13th March 2021</h2>
							</header>
							<p>The Jacobs Startup Competition is an international competition for student entrepreneurs from all over the world - organized entirely by students. Every year, we welcome teams from all over the world, give them access to a large network of founders, mentors and experts, and provide a platform to pitch their ideas to judges and investors, according to our slogan - dare to stand out!</p>

							<p> We offer a wide range of mentorship, webinars, workshops and coaching opportunities to our participants in order to support them in founding their own business in the best way possible. Therefore, we appreciate anyone who would like to offer their expertise, time and experience – be it teaching, working for a large multinational corporation or founding their own startup – and support our participants throughout the competition. </p>

							<p> Additionally, as JSC is entirely student-run, we rely solely on sponsors and are always looking for financial support. We offer a wide range of opportunities for advertisement and cooperation and are more than happy to discuss individualized partnerships. </p>

							<p> You can find more information about Jacobs StartUp Competition on the website: <a href="https://www.jacobs-startup.com/" target="_blank">https://www.jacobs-startup.com/</a> </p>
							<header class="align-center">
								<img src="images/startuplogo1.jpg" width="500" height="200" alt="" />
							</header>
						</div>
					</div>
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
