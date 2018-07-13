			<div class="container">
            <h3>TRANSACTION</h3><br>

            <div class="read-more red">
					<a href="<?php echo base_url('./transaction/do_insert/'); ?>">New Transaction</a>
			</div>

            <table id="myTable" class="display" cellspacing="0" width="100%">
                <thead>
                    <tr>
	                    <th>ID</th>
	                    <th>Paket Wisata</th>
	                    <th>Username</th>
	                    <th>Tanggal Berangkat</th>
	                    <th>Penumpang Dewasa</th>
	                    <th>Penumpang Anak-anak</th>
	                    <th>Pembayaran</th>
	                    <th style="width:125px;">Action </p></th>
        
                    </tr>
                </thead>
                <tbody>
                		<?php foreach($result as $transaksi){ ?>
          			<tr>
		               <td><?php echo $transaksi['id']; ?></td>
		               <td><?php echo $transaksi['nama']; ?></td>
		               <td><?php echo $transaksi['id_member']; ?></td>
		               <td><?php echo $transaksi['tanggalbrgkt']; ?></td>
		               <td><?php echo $transaksi['jml_dewasa']; ?></td>
		               <td><?php echo $transaksi['jml_anak']; ?></td>
		               <td><?php echo $transaksi['pembayaran']; ?></td>
		               								<td>
									<a class="btn btn-warning" href="<?php echo base_url()."Transaction/edit_data/".$transaksi['id']; ?>">Edit</a>
									<a class="btn btn-danger" href="<?php echo base_url()."Transaction/delete_transaksi/".$transaksi['id']; ?>">Delete</a>


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