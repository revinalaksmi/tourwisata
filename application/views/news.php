<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
	<head>
		<title>Travel-mate Bootstarp Website Template | Home :: w3layouts</title>
		<link href="<?php echo base_url('./assets/css/style.css');?>" rel="stylesheet" type="text/css" media="all" >
		<link href="<?php echo base_url('./assets/css/bootstrap.css');?>" rel="stylesheet" type="text/css" media="all">
		<!-- web-font -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
		<!-- web-font -->
		<!-- js -->
		<script src="<?php echo base_url('./assets/js/jquery.min.js');?>"></script>
		<script src="<?php echo base_url('./assets/js/modernizr.custom.js');?>"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!-- js -->
		<script src="<?php echo base_url('./assets/js/modernizr.custom.js');?>"></script>
		<script type="text/javascript" src="<?php echo base_url('./assets/js/move-top.js');?>"></script>
		<script type="text/javascript" src="<?php echo base_url('./assets/js/easing.js');?>"></script>
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
		<div class="head-bg green">
			<!-- container -->
			<div class="container">
				<div class="head-logo">
					<a href="index.html"><img src="<?php echo base_url('./assets/images/logo1.png');?>" alt="" /></a>
				</div>
				<div class="top-nav">
						<span class="menu"><img src="<?php echo base_url('./assets/images/menu.png');?>" alt=""></span>
							<ul class="cl-effect-1">
								<li><a href="<?php echo base_url('./tour'); ?>">HOME</a></li>  
								<li><a  href="<?php echo base_url('./Tour/about'); ?>">ABOUT</a></li>
								<li><a href="<?php echo base_url('./Tour/booking'); ?>">BOOKING</a></li> 
								<li><a href="<?php echo base_url('./Tour/news'); ?>">NEWS</a></li> 
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
		<!-- news -->
		<div class="news">
			<h3>LATEST NEWS</h3>
			<!-- container -->
			<div class="container">
				<div class="news-grids">
					<div class="col-md-4 news-grid">
						<div class="news-grid-text">
							<h4>LOREM IPSUM DOLOR SIT</h4>
							<span>10.00 - 12.00 | sep 24,2014</span>
						</div>
						<img src="images/14.jpg" alt="" />
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat.</p>
						<div class="read-more blue">
							<a href="#">Read More &gt;&gt;</a>
						</div>
					</div>
					<div class="col-md-4 news-grid">
						<div class="news-grid-text">
							<h4>LOREM IPSUM DOLOR SIT</h4>
							<span>8.00 - 10.00 | JUN 09,2014</span>
						</div>
						<img src="images/13.jpg" alt="" />
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat.</p>
						<div class="read-more blue">
							<a href="#">Read More &gt;&gt;</a>
						</div>
					</div>
					<div class="col-md-4 news-grid">
						<div class="news-grid-text">
							<h4>LOREM IPSUM DOLOR SIT</h4>
							<span>9.00 - 10.00 | FEB 15,2014</span>
						</div>
						<img src="images/15.jpg" alt="" />
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat.</p>
						<div class="read-more blue">
							<a href="#">Read More &gt;&gt;</a>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<!-- //container -->
			<div class="news-slid">
				<!-- banner Slider starts Here -->
					<script src="<?php echo base_url('./assets/js/responsiveslides.min.js'); ?>"></script>
					 <script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider2").responsiveSlides({
							auto: true,
							pager: true,
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
						<ul class="rslides" id="slider2">
							<li>
								<div class="news-slid-info">
									<h2> Duis purus leo faucibus eu semper ut, hendrerit</h2>
									<div class="read-more gray">
										<a href="#">READ MORE</a>
									</div>
								</div>
							</li>
							<li>
								<div class="news-slid-info">
									<h2>Fusce non sem vulputate, lacinia ipsum mollis</h2>
									<div class="read-more gray">
										<a href="#">READ MORE</a>
									</div>
								</div>
							</li>
							<li>
								<div class="news-slid-info">
									<h2> pharetra aliquam. Aenean velit elit, rutrum sit amet </h2>
									<div class="read-more gray">
										<a href="#">READ MORE</a>
									</div>
								</div>
							</li>
						</ul>
					</div>
			</div>
			<div class="latest-events">
				<!-- container -->
				<div class="container">
					<div class="news-grids">
					<div class="col-md-4 news-grid">
						<div class="news-grid-text">
							<span>10.00 - 12.00 | sep 24,2014</span>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat.</p>
						<div class="read-more blue">
							<a href="#">Read More &gt;&gt;</a>
						</div>
					</div>
					<div class="col-md-4 news-grid">
						<div class="news-grid-text">
							<span>8.00 - 10.00 | JUN 09,2014</span>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat.</p>
						<div class="read-more blue">
							<a href="#">Read More &gt;&gt;</a>
						</div>
					</div>
					<div class="col-md-4 news-grid">
						<div class="news-grid-text">
							<span>9.00 - 10.00 | FEB 15,2014</span>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat.</p>
						<div class="read-more blue">
							<a href="#">Read More &gt;&gt;</a>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				</div>
				<!-- //container -->
			</div>
		</div>
		<!-- //news -->
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