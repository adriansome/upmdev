<!doctype html>
<html lang="en">
<head>
	<title></title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="css/styles.css" />
	<script src="js/jquery-1.10.2.min.js"></script>
	<script src="js/jquery.carouFredSel-6.2.1.min.js"></script>
   	<script>
		$(document).ready(function() {

			$("#home-header .slider").carouFredSel({
				/*
				items       : {
					visible     : 1,
					height      : "26.27%"
				},*/
				items: 1,
				scroll: 500,
				responsive: true,
				auto: 2000,
				prev: "#control-previous",
				next: "#control-next"
			});

		});
	</script>
	<!--[if lte IE 8]>
		<link rel="stylesheet" href="css/styles-lte-ie8.css" />
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>

<body id="home">
	
	<!-- Begin #page-header -->
	<header id="page-header">
		<div class="constrained">
			<a href="/" class="span-3"><img src="images/logo.png" alt="Morecraft Drury" class="logo" /></a>

			<nav id="main-navigation" class="span-12">
				<ul>
					<li class="active"><a href="index_old.html">Home</a></li>
					<li><a href="services.html">Services</a></li>
					<li><a href="news.html">News</a></li>
					<li><a href="contact.html">Contact Us</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">About Us</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<!-- End #page-header -->

	<!-- Begin #home-header -->
	<div id="home-header">
		<div class="constrained">
		<ul class="slider">
			<li id="slide1">
				<img src="example-content/home-slider1.jpg" alt="" />
				<section class="slide-content">
					<h1>Management Consulting</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum et risus porta, aliquam sapien scelerisque, blandit quam. Morbi ut tor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum </p>
					<a href="#" class="more">View service</a>
				</section>
			</li>
			<li id="slide2">
				<img src="example-content/home-slider1.jpg" alt="" />
				<section class="slide-content">
					<h1>Slide 2</h1>
					<p>Tes</p>
					<a href="#" class="more">View service</a>
				</section>
			</li>
			<li id="slide3">
				<img src="example-content/home-slider1.jpg" alt="" />
				<section class="slide-content">
					<h1>Slide 3</h1>
					<p>Tes</p>
					<a href="#" class="more">View service</a>
				</section>
			</li>
			<li id="slide4">
				<img src="example-content/home-slider1.jpg" alt="" />
				<section class="slide-content">
					<h1>Slide 4</h1>
					<p>Tes</p>
					<a href="#" class="more">View service</a>
				</section>
			</li>
			<li id="slide5">
				<img src="example-content/home-slider1.jpg" alt="" />
				<section class="slide-content">
					<h1>Slide 5</h1>
					<p>Tes</p>
					<a href="#" class="more">View service</a>
				</section>
			</li>
		</ul>

	<div style="position: absolute; left: 0px; top: 0px; opacity: 0.0;">
		<div id="control-previous">Previous</div>
		<div id="control-next">Next</div>
	</div>

		<ul class="sub-navigation slide-controls">
			<li><a href="#slide1">Programme &amp; Project Management</a></li>
			<li><a href="#slide2">Quantity Surveying &amp; Commercial Management</a></li>
			<li><a href="#slide3">Legal Advisers &amp; Claims Consultancy</a></li>
			<li><a href="#slide4">Expert Witness &amp; Forensic Services</a></li>
			<li><a href="#slide5">Strategic Procurement &amp; Management Consultancy</a></li>
		</ul>
	</div>
	<!-- End #home-header -->

	<!-- Begin #main-content-wrapper -->
	<div id="main-content-wrapper">
		<div class="constrained">
			<div class="span-4 nugget">
				<h2>Our Team</h2>
				<div class="text">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum et risus porta, aliquam sapien scelerisque, blandit quam. Morbi ut torto. aliquam sapien scelerisque, blandit quam. Morbi ut torto.</p>
				</div>
				<div class="thumbnail">
					<img src="example-content/nugget-team.png" alt="" />
				</div>
			</div>

			<div class="span-4 nugget">
				<h2>Blog Entries</h2>
				<div class="date">01/02/03</div>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum et risus porta, aliquam sapien scelerisque, </p>
				<div class="date">01/02/03</div>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum et risus porta, aliquam sapien scelerisque, </p>
			</div>

			<div class="span-7 nugget nugget-case-studies">
				<h2>Case Studies</h2>
				<ul class="items">
					<li class="item">
						<h3>Case Study 1</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscingVestibulum et risus porta, aliquam sapien</p>
						<a href="#" class="more">View full case study</a>
					</li>
					<li class="item">
						<h3>Case Study 1</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscingVestibulum et risus porta, aliquam sapien</p>
						<a href="#" class="more">View full case study</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- End #main-content-wrapper -->

	<!-- Begin #page-footer -->
	<footer id="page-footer">
		<div class="constrained">
			<div class="span-6">
				<h2>About Us</h2>
				<p>Estia Consulting is a Construction Consultancy, providing a wide range of construction and property advice to private, public, commercial and industrial clients.</p>
				<p>We specialise in project management, quantity surveying, procurement, project recovery, dispute resolution and business management services. Our mission is to provide high value consultancy advice that will help improve our client’s performance, profits and future prosperity.</p>
			</div>
			<div class="span-3"><!-- footer nav can go here --></div>
			<div class="span-3"><!-- Twitter widget can go here --></div>
			<div class="span-3">
				<p class="icon-address">Castlemead, Lower Castle Street, Bristol, BS1 3AG</p>

				<p class="icon-tel">0117 917 5200</p>

				<p class="icon-address">Central Court, 25 Southampton Buildings, London, WC2A 1AL</p>
				<p class="icon-tel">020 776 96781</p>

				<p class="icon-email"><a href="mailto:enquires@morecraftdrury.com">enquires@morecraftdrury.com</a></p>
			</div>
		</div>
	</footer>
	<!-- End #page-footer -->
	
</body>
</html>