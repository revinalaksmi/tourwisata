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
								<h3>DreamLand</h3>
								<p>DreamLand Asyik.</p>
							</div>
						</div>
						<div class="top-grid">
							<img src="images/3.jpg" alt="">
							<div class="top-grid-info visiting-grid">
								<h3>Pantai</h3>
								<p>Menikmati Senja .</p>
							</div>
						</div>
						<div class="top-grid">
							<img src="images/2.jpg" alt="">
							<div class="top-grid-info visiting-grid">
								<h3>Pusat Oleh-oleh</h3>
								<p>Enjoy Shopping.</p>
							</div>
						</div>
						<div class="top-grid">
							<img src="images/4.jpg" alt="">
							<div class="top-grid-info visiting-grid">
								<h3>PlayGround</h3>
								<p>Enjoy Play the Game .</p>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<!-- //container -->
			</div>
		</div>
		<!-- booking -->