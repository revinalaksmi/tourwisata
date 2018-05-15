<!DOCTYPE html>
<html>
	<head>
		<title>Travel-mate Bootstarp Website Template | Home :: w3layouts</title>
		<link href="assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
		<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
		<!-- web-font -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
		<!-- web-font -->
		<!-- js -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/modernizr.custom.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!-- js -->
		<script src="assets/js/modernizr.custom.js"></script>
		<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="<?php echo base_url('./assets/js/move-top.js');?>"></script>
		<script type="text/javascript" src="js/easing.js"></script>

		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
		<!-- start-smoth-scrolling -->
	</head>
	<body>
		<!-- header -->
		<div class="header">
			<div class="head-bg">
				<!-- container -->
				<div class="container">
					<div class="head-logo">
						<a href="index.html"><img src="<?php echo base_url('./assets/images/logo1.png');?>" alt="" /></a>
					</div>
					<div class="top-nav">
						<span class="menu"><img src="<?php echo base_url('./assets/images/menu.png');?>" alt=""></span>
							<ul class="cl-effect-1">
								<li><a href="<?php echo base_url('./tour'); ?>">HOME</a></li>  
								<li><a href="<?php echo base_url('./transaction/do_insert/'); ?>">BOOKING</a></li> 
								<li><a href="<?php echo base_url('./transaction'); ?>">TRANSACTION</a></li>  
							</ul>
							<!-- script-for-menu -->
							 <script>
							   $( "span.menu" ).click(function() {
								 $( "ul.cl-effect-1" ).slideToggle( 300, function() {
								 // Animation complete.
								  });
								 });
							</script>
						<!-- /script-for-menu -->
					</div>
					<div class="clearfix"> </div>
				</div>
				<!-- //container -->
			</div>
			<!-- container -->
			<div class="container">
				<!-- banner Slider starts Here -->
					<script src="assets/js/responsiveslides.min.js"></script>
					 <script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider3").responsiveSlides({
							auto: true,
							pager: false,
							nav: false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							  $('.events').append("<li>before event fired.</li>");
							},
							after: function () {
							  $('.events').append("<li>after event fired.</li>");
							}
						  });
					
						});
					  </script>
					<!--//End-slider-script -->
					<div  id="top" class="callbacks_container">
						<ul class="rslides" id="slider3">
							<li>
								<div class="head-info">
									<h1> goBali Travel</h1>
									<p>Pesan tour wisata dengan mudah dan murah</p>
								</div>
							</li>
							<!-- <li>
								<div class="head-info">
									<h1>Aenean suscipit<span>Suspendisse venenatis volutpat </span></h1>
									<p>Morbi id felis porttitor tellus viverra pulvinar. Vestibulum </p>
								</div>
							</li>
							<li>
								<div class="head-info">
									<h1>Gestas vulputate<span>Morbi id felis porttitor tellus</span></h1>
									<p>Morbi id felis porttitor tellus viverra pulvinar.ante ipsum </p>
								</div>
							</li> -->
						</ul>
					</div>

			</div>
			<!-- container -->
		</div>
		<!-- //header -->
		<!-- banner-grids -->
		<div class="banner-grids">
			<!-- container -->
			<div class="container">
				<div class="banner-grid-info">
					<h3>TOP DESTINATIONS</h3>
					<p>Pellentesque tempor sem in scelerisque mollis.</p>
				</div>
				<div class="read-more red">
					<a href="<?php echo base_url('./tour/add_data/'); ?>">New Destination</a>
				</div>
				<div class="top-grids">
				<?php foreach($all_categories as $d){ ?>
					<div class="top-grid">
						<img src="<?php echo base_url('assets/images/'.$d['gambar']); ?>">
						<div class="top-grid-info">
							<h3><?php echo $d['nama']; ?></h3>
							<div class="read-more red">
								<a  href="<?php echo base_url()."tour/do_preview/".$d['id']; ?>">Read More</a>
								<a href="<?php echo base_url()."tour/hapus/".$d['id']; ?>">Delete</a>
							</div>
						</div>
					</div> <?php } ?> 
						<div class="container" style="margin-top: 200px;">
					<?php 
  					echo $links;
					?>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<!-- //container -->
		</div>
		<!-- //banner-grids -->
		<!-- before -->
		<div class="before">
			<!-- container -->
			<div class="container">
				<h2>Before you leave</h2>
				<div class="before-grids">
					<div class="before-grid">
						<h3>visa & documents</h3>
						<p>Morbi id felis porttitor tellus viverra pulvinar. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices.
							Morbi id felis porttitor tellus viverra pulvinar. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices.
						</p>
					</div>
					<div class="before-grid">
						<h3>visa & documents</h3>
						<p>Morbi id felis porttitor tellus viverra pulvinar. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices.
							Morbi id felis porttitor tellus viverra pulvinar. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices.
						</p>
					</div>
					<div class="before-grid">
						<h3>visa & documents</h3>
						<p>Morbi id felis porttitor tellus viverra pulvinar. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices.
							Morbi id felis porttitor tellus viverra pulvinar. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices.
						</p>
					</div>
					<div class="clearfix"> </div>
					<div class="search">
						<p>get hottest deals to your inbox</p>
						<form>
							<input type="text" placeholder="Email address" required="">
							<input type="submit" value="Subscribe">
						</form>
					</div>
				</div>
			</div>
			<!-- //container -->
		</div>
		<!-- //before -->
		<!-- footer -->
		<div class="footer">
			<!-- container -->
			<div class="container">
				<div class="footer-left">
					<p>Design by <a href="http://w3layouts.com/">W3layouts</a></p>
				</div>
				<div class="footer-right">
					<div class="footer-nav">
						<ul>
							<li><a href="index.html">HOME</a></li>                                                  
							<li><a href="about.html">ABOUT</a></li>  
							<li><a href="booking.html">BOOKING</a></li>  
							<li><a href="news.html">NEWS</a></li>  
							<li><a href="mail.html">MAIL US</a></li>  
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<!-- //container -->
		</div>
		<!-- //footer -->
		<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
									<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- content-Get-in-touch -->
	</body>
</html>