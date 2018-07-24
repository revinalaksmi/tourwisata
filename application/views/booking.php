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
								<li><a href="<?php echo base_url('./transaction/do_insert/'); ?>">BOOKING</a></li> 
								<li><a href="<?php echo base_url('./transaction'); ?>">TRANSACTION</a></li>  
							</ul>
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

					 <?php    
                        $this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');
                         ?>
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
											 <li class="span1_of_3 right">
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
				
			<div class="how-to">
				<!-- container -->
				<div class="container">
					<div class="how-to-info">
						<h3>CARA BOOKING TIKET</h3>
						<h4>Booking tiket merupakan proses pemesanan tiket berdasarkan jumlah penumpang, tanggal keberangkatan dan pemilihan paket liburan.
						</h4>
						<p>Pada saat melakukan booking tiket tercantum harga yang harus segera dibayarkan sebelum time limit habis dan harga tiket belum tentu sama jika calon penumpang melakukan booking sejam berikutnya atau dua jam berikutnya bahkan untuk satu, dua, tiga hari ke depan. </p>
					</div>
					<div class="how-grids">
						<div class="col-md-4 how-grid">
							<span>1</span>
							<a href="#">Isi Identitas Dengan Lengkap</a>
							<p>Mengisi identitas dengan lengkap tanpa ada kessalahan apapun seperti username, nama , alamat, no telp sesuai identitas yang tertera pada KTP anda.</p>
						</div>
						<div class="col-md-4 how-grid">
							<span>2</span>
							<a href="#">Isi Paket Wisata Sesuai Dengan Destination</a>
							<p>Mengisi paket wisata dengan lengkap sesuai destinansi yang anda inginkan.</p>
						</div>
						<div class="col-md-4 how-grid">
							<span>3</span>
							<a href="#">Bayar Harga Paket Wisata Tepat Waktu</a>
							<p>Bayar harga tiket yang sudah anda booking. harga yang tercantum harus segera dibayarkan sebelum time limit habis.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<!-- //container -->
			</div>
			
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