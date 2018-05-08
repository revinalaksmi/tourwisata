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
					<a href="index.html"><img src="<?php echo base_url('./assets/images/logo1.png'); ?>" alt="" /></a>
				</div>
				<div class="top-nav">
						<span class="menu"><img src=<?php echo base_url('./assets/images/menu.png'); ?>" alt=""></span>
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
					<h3>DESTINATION</h3>
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
					<div class="online_reservation">
					<?php    
                        $this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');
                         ?>
					 <?php echo validation_errors(); ?>
					 <?php echo form_open_multipart('./tour/do_insert/'); ?>
					  <form>
							<div class="b_room">
								<div class="booking_room">
									<div class="reservation">
										<ul>		
											<li  class="span1_of_1 left">
												 <h5>Nama</h5>
												 <div class="book_date">
													
														<input type="text" name="nama" value="<?php echo set_value('nama')?>" required="Field Nama harus diisi">
												 </div>					
											 </li>
											 <li  class="span1_of_1 left">
												 <h5>Tempat</h5>
												 <div class="book_date">
													<input type="text" name="tempat" value="<?php echo set_value('tempat')?>" required="">
												 </div>		
											 </li>
											 <li  class="span1_of_1 left">
												 <h5>Harga Penumpang Dewasa</h5>
												 <div class="book_date">
													 <input type="text" name="hrg_dewasa" value="<?php echo set_value('hrg_dewasa')?>" required=>
												 </div>					
											 </li>
											 <li  class="span1_of_1 left">
												 <h5>Harga Penumpang Anak-Anak</h5>
												 <div class="book_date">
													<input type="text" name="hrg_anak" value="<?php echo set_value('hrg_anak')?>" required=>
												 </div>		
											 </li>
											 <li  class="span1_of_1 left">
												 <h5>Fasilitas</h5>
												 <div class="book_date">
													<input type="text" name="fasilitas" value="<?php echo set_value('fasilitas')?>" required=>
												 </div>		
											 </li>
											 <li  class="span1_of_1 left">
												 <h5>Syarat</h5>
												 <div class="book_date">
													<input type="text" name="syarat" value="<?php echo set_value('syarat')?>" required=>
												 </div>		
											 </li>
											 <li  class="span1_of_1 left">
												 <h5>Gambar</h5>
												 <div class="book_date">
													<input type="file" name="userfile" required=>
												 </div>		
											 </li>
											 
											 <li class="span1_of_3">
													<div class="date_btn">
															<input type="submit" name="btnSubmit" value="Simpan" />
													</div>
											 </li>
											 <div class="clearfix"></div>
										</ul>
									 </div>
							</form>
								</div>
								<div class="clearfix"></div>
							</div>
					</div>
					
			
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