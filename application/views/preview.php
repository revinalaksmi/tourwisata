		<!-- booking -->
		<div class="booking">
			<!-- container -->
			<div class="container">
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
						<h1><b><?php echo $data['nama']; ?><b></h1>
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
							<a href="<?php echo base_url()."tour/edit_data/".$data['id']; ?>">Update</a>
						</div>
					</div>
					 <?php } ?>
					<div class="clearfix"> </div>
				</div>
			</div>
				


			
			</div>
<<<<<<< HEAD
			
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
=======
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
>>>>>>> 48a377a113617f2b8be0b759e1ee25326630e59a
