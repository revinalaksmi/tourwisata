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
															<input type="submit"  value="Simpan" />
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