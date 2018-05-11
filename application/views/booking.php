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
					<div class="online_reservation">
					<?php    
                        $this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');
                         ?>
					 <?php echo validation_errors(); ?>
					 <?php echo form_open_multipart('./transaction/do_insert/'); ?>
						<form>
							<div class="b_room">
								<div class="booking_room">
									<div class="reservation">
										<ul>		
											<li  class="span1_of_1 left">
												 <h5>Paket Wisata</h5>
												 <div class="book_date">
														<select name="id_paket"  required>
								                            <option value="">Pilih Paket Wisata</option>
								                            <?php foreach($result as $transaksi){ ?>
								                            <option value="<?php echo $transaksi['id']; ?>"><?php echo $transaksi['nama']; ?></option>
								                            <?php } ?>
								                        </select>
												 </div>					
											 </li>
											 <li  class="span1_of_1 left">
												 <h5>Username</h5>
												 <div class="book_date">
													<input type="text" name="id_member" value="<?php echo set_value('id_member')?>" required="">
												 </div>		
											 </li>
											 <li  class="span1_of_1 left">
												 <h5>Tanggal Berangkat</h5>
												 <div class="book_date">
													<input type="date" name="tanggalbrgkt" value="<?php echo set_value('tanggalbrgkt')?>" required="">
												 </div>		
											 </li>
											 <li  class="span1_of_1 left">
												 <h5>Jumlah Penumpang Dewasa</h5>
												 <div class="book_date">
													<input type="text" name="jml_dewasa" value="<?php echo set_value('jml_dewasa')?>" required="">
												 </div>		
											 </li>
											 <li  class="span1_of_1 left">
												 <h5>Jumlah Penumpang Anak-anak</h5>
												 <div class="book_date">
													<input type="text" name="jml_anak" value="<?php echo set_value('jml_anak')?>" required="">
												 </div>		
											 </li>
											 <li  class="span1_of_1 left">
												 <h5>Pembayaran</h5>
												 <div class="book_date">
													<input type="text" name="pembayaran" value="<?php echo set_value('pembayaran')?>" required="">
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
								</div>
								<div class="clearfix"></div>
							</div>
						</form>
					</div>
					<!--
				</div>
				<div class="clearfix"></div>
				<div class="booking-grids">
					<h3>WE ARE PROVIDE</h3>
					<div class="col-md-7 booking-grid-left">
						<h4>QUISQUE LECTUS IPSUM, FERMENTUM EU SODALES NON, AUCTOR IN MAURIS. NULLA PRETIUM CURSUS NULLA, AC RUTRUM MAGNA LAOREET EU.</h4>
						<p>Maecenas ultricies molestie efficitur. Maecenas bibendum tincidunt nulla at scelerisque. Fusce sodales nibh ex. Proin vel commodo neque. In congue neque ac venenatis aliquam. Sed vestibulum cursus velit faucibus tempor. Maecenas posuere pellentesque erat, vel auctor mauris fringilla ac. Proin euismod orci nec felis efficitur, a pulvinar nisl viverra. Etiam eu finibus ipsum, id molestie nunc</p>
						<p>Maecenas ultricies molestie efficitur. Maecenas bibendum tincidunt nulla at scelerisque. Fusce sodales nibh ex. Proin vel commodo neque. In congue neque ac venenatis aliquam.Maecenas bibendum tincidunt nulla at scelerisque.</p>
						<div class="read-more red">
							<a href="#">Read More >></a>
						</div>
					</div>
					<div class="col-md-5 booking-grid-right">
						<img src="images/11.jpg" alt="">
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<!-- //container -->
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