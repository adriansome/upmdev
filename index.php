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
	
    <div id="wrapper">

	<!-- Begin #home-header -->
	<div id="home-header">
            <!-- Begin #page-header -->
	<header id="page-header">
		<div class="constrained">
			<a href="/" class="span-3">
                            <img src="" alt="university press marketing" class="logo" /></a>

			<nav id="main-navigation" class="span-8">
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
	</div>
        </div>
	<!-- End #home-header -->

	<!-- Begin #main-content-wrapper -->
	<div id="main-content-wrapper">
		<div class="constrained">
			<div class="span-4 nugget">
				<h2>Latest Book Reviews</h2>
                                <div class="book-review-holder">
                               
                                <div class="thumbnail">
					<img src="example-content/book.png" alt="" width="60" height="86"/>
				</div>
				<div class="text">
                                     <div class="book-title">01/02/03</div>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            Vestibulum et risus porta, aliquam sapien scelerisque, </p>
				 </div>
                                    </div>
                                    <div class="book-review-holder">
                                      
                                        <div class="thumbnail">
					<img src="example-content/book.png" alt="" />
				</div>
                                        <div class="text">
                                              <div class="book-title">01/02/03</div>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                    Vestibulum et risus porta, aliquam sapien scelerisque, </p>
				</div>
			    </div> </div>
			

			<div class="span-4 nugget">
                          
				<h2>University Presses Marketing</h2>
                                
				<div class="date">01/02/03</div>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                    Vestibulum et risus porta, aliquam sapien scelerisque, </p>
                               
                            
                                <div class="date">01/02/03</div>				
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Vestibulum et risus porta, aliquam sapien scelerisque, </p>
			</div>
                            

			<div class="span-4 nugget">
				<h2>University Presses Marketing</h2>
				<div class="date">01/02/03</div>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum et risus porta, aliquam sapien scelerisque, </p>
				<div class="date">01/02/03</div>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum et risus porta, aliquam sapien scelerisque, </p>
			</div>
		</div>
	</div>
	<!-- End #main-content-wrapper -->

	<!-- Begin #page-footer -->
	<footer id="page-footer">
		<div class="constrained">
			<div class="span-4">
				<h2>Contact us</h2>
				<p>Estia Consulting is a Construction Consultancy, providing a wide range of construction and property advice to private, public, commercial and industrial clients.</p>
				<p>We specialise in project management, quantity surveying, procurement, project recovery, dispute resolution and business management services. Our mission is to provide high value consultancy advice that will help improve our client’s performance, profits and future prosperity.</p>
                                <p class="icon-facebook">.</p>

				<p class="icon-twitter">.</p>
				<p class="icon-google">.</p>

				<p class="icon-email">.</p>
			</div>
			<div class="span-4">
                            <h2>Latest blogs</h2>Latest blogs</div>
			
			<div class="span-4">
				 <h2>Latest tweets</h2>

				
			</div>
		</div>
	</footer>
	<!-- End #page-footer -->
	</div><!-- End #page-wrapper -->
</body>
</html>