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
		<!-- start-smoth-scrolling -->
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
					<a href="index.html"><img src="images/logo1.png" alt="" /></a>
				</div>
				<div class="top-nav">
						<span class="menu"><img src="images/menu.png" alt=""></span>
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
		<!-- booking -->
		<div class="booking">
			<!-- container -->
			<div class="container">
				<div class="booking-info">
					<h3>booking</h3>
				</div>
				<div class="booking-form">
					<!---strat-date-piker---->
					<link rel="stylesheet" href="css/jquery-ui.css" />
					<script src="js/jquery-ui.js"></script>
							  <script>
									  $(function() {
										$( "#datepicker,#datepicker1" ).datepicker();
									  });
							  </script>
					<!---/End-date-piker---->
					<link type="text/css" rel="stylesheet" href="css/JFGrid.css" />
					<link type="text/css" rel="stylesheet" href="css/JFFormStyle-1.css" />
					<script type="text/javascript" src="js/JFCore.js"></script>
					<script type="text/javascript" src="js/JFForms.js"></script>
					<!-- Set here the key for your domain in order to hide the watermark on the web server -->
					<script type="text/javascript">
						(function() {
							JC.init({
								domainKey: ''
							});
						})();
					</script>
					
					
				</div>
				<div class="clearfix"></div>
				<div class="booking-grids">
					<h3>WE ARE PROVIDE</h3>
					<div class="col-md-7 booking-grid-left">
					<?php foreach ($isi as $data) { ?>
						<div class="head-prev">
							<h1> <?php echo $data['nama']; ?></h1>
						</div> 
						<h4><b>Tempat yang akan dikunjungi</b></h4>
							<p><?php echo $data['tempat']; ?></p>
						<p><h4><b>Fasilitas</b></h4></p>
							<p><?php echo $data['fasilitas']; ?></p>
						<div class="col-md-4">
							<p><h4><b>Harga dewasa</b></h4></p>
							<p><font color="blue"><?php echo $data['hrg_dewasa']; ?></font></p>
						</div>
						<div class="col-md-4">
							<p><h4><b>Harga anak-anak</b></h4></p>
							<p><font color="blue"><?php echo $data['hrg_anak']; ?></font></p>
						</div>
					</div>
					<div class="col-md-5 booking-grid-right">
						<img src="<?php echo base_url('assets/images/'.$data['gambar']); ?>">
					</div>
					<div class="col-md-7 booking-grid-left">
						<p><h4><b>Syarat dan Ketentuan</b></h4></p>
							<p><?php echo $data['syarat']; ?></p>
						<div class="read-more red">
							<a href="#">Booking Now</a>
						</div>
					</div>
					 <?php } ?>
					<div class="clearfix"> </div>
				</div>
			</div>
				


			<!-- //container 
			<div class="how-to">
				<!-- container -->
				<div class="container">
					<div class="how-to-info">
						<h3>HOW TO BOOK</h3>
						<h4>Quisque lectus ipsum, fermentum eu sodales non, auctor in mauris. Nulla pretium cursus nulla, ac rutrum magna laoreet eu.
							Phasellus vel est vel odio finibus lacinia. Donec a diam dictum, elementum ipsum et, pulvina
						</h4>
						<p>Duis vulputate auctor libero, eget viverra ante dapibus sit amet. Vestibulum auctor pellentesque enim, 
						sed ornare metus vehicula eu. Etiam rhoncus eu urna ac feugiat. Praesent sed tempor urna, laoreet dignissim est. 
						Aenean nec justo vitae arcu consequat lobortis. Sed iaculis et dui eu sollicitudin. Morbi id felis porttitor tellus 
						viverra pulvinar. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nullam cursus 
						leo nec enim vulputate finibus. Nulla at dui non nisi molestie posuere non sed ante. 
						Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.Nulla at dui non nisi molestie posuere non sed ante. </p>
					</div>
					<div class="how-grids">
						<div class="col-md-4 how-grid">
							<span>1</span>
							<a href="#">LOREM IPSUM DOLOR SIT</a>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat.</p>
						</div>
						<div class="col-md-4 how-grid">
							<span>2</span>
							<a href="#">LOREM IPSUM DOLOR SIT</a>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat.</p>
						</div>
						<div class="col-md-4 how-grid">
							<span>3</span>
							<a href="#">LOREM IPSUM DOLOR SIT</a>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<!-- //container -->
			</div>
			<div class="visiting">
				<!-- container -->
				<div class="container">
					<div class="visiting-info">
						<h3>VISITING PLACES</h3>
					</div>
					<div class="top-grids">
						<div class="top-grid">
							<img src="images/6.jpg" alt="">
							<div class="top-grid-info visiting-grid">
								<h3>Vestibulum auctor</h3>
								<p>Morbi id felis porttitor tellus viverra pulvinar. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices .</p>
							</div>
						</div>
						<div class="top-grid">
							<img src="images/3.jpg" alt="">
							<div class="top-grid-info visiting-grid">
								<h3>Vestibulum auctor</h3>
								<p>Morbi id felis porttitor tellus viverra pulvinar. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices .</p>
							</div>
						</div>
						<div class="top-grid">
							<img src="images/2.jpg" alt="">
							<div class="top-grid-info visiting-grid">
								<h3>Vestibulum auctor</h3>
								<p>Morbi id felis porttitor tellus viverra pulvinar. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices .</p>
							</div>
						</div>
						<div class="top-grid">
							<img src="images/4.jpg" alt="">
							<div class="top-grid-info visiting-grid">
								<h3>Vestibulum auctor</h3>
								<p>Morbi id felis porttitor tellus viverra pulvinar. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices .</p>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<!-- //container -->
			</div>
		</div>
		<!-- booking -->
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