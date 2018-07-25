			<div class="container">
            <h3>PAKET</h3><br>

            <div class="read-more red">
					<a href="<?php echo base_url('./paket/do_insert/'); ?>">New Paket</a>
			</div>

            <table id="myTable" class="display" border="1" cellspacing="10" width="100%">
                <thead>
                    <tr>
	                    <th>ID</th>
	                    <th>Nama</th>
	                    <th>Tempat</th>
	                    <th>Hrg Penumpang Dewasa</th>
	                    <th>Hrg Penumpang Anak-anak</th>
	                    <th>Fasilitas</th>
	                    <th>Syarat</th>
	                    <th>Gambar</th>
	                    <th style="width:125px;">Action </p></th>
        
                    </tr>
                </thead>
                <tbody>
                		<?php foreach($result as $d){ ?>
          			<tr>
		               <td><?php echo $d['id']; ?></td>
		               <td><?php echo $d['nama']; ?></td>
		               <td><?php echo $d['tempat']; ?></td>
		               <td><?php echo $d['hrg_dewasa']; ?></td>
		               <td><?php echo $d['hrg_anak']; ?></td>
		               <td><?php echo $d['fasilitas']; ?></td>
		               <td><?php echo $d['syarat']; ?></td>
		               <td><img width="95" height="105" src="<?php echo base_url('assets/images/'.$d['gambar']); ?>"></td>
		               	<td>
									<a class="btn btn-warning" href="<?php echo base_url()."tour/edit_data/".$d['id']; ?>">Edit</a>
									<a class="btn btn-danger" href="<?php echo base_url()."tour/hapus/".$d['id']; ?>">Delete</a>


								</td>
		            </tr> <?php } ?>
                </tbody>
                	<!-- <tr>
	                    <th>ID</th>
	                    <th>Paket Wisata</th>
	                    <th>Username</th>
	                    <th>Tanggal Berangkat</th>
	                    <th>Penumpang Dewasa</th>
	                    <th>Penumpang Anak-anak</th>
	                    <th>Pembayaran</th>
	                    <th> Action </th>

            </table> -->
        </div>

        <div class="footer">
				<!-- container -->
				
			<!-- //footer -->
		
		<script type="text/javascript">
		$(document).ready(function(){
			$('#myTable').DataTable();
		});
		</script>
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