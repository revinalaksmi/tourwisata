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
	                    <th> Action </th> -->

            </table> 

			<!-- datatables -->
			<link href="<?php echo base_url('/assets/datatables/css/dataTables.bootstrap.min.css');?>" rel="stylesheet" type="text/css" media="all">
			<link href="<?php echo base_url('./assets/datatables/css/jquery.dataTables.min.css');?>" rel="stylesheet" type="text/css" media="all">
			<script  src="<?php echo base_url('./assets/datatables/js/dataTables.bootstrap.min.js');?>"></script>
			<script  src="<?php echo base_url('./assets/datatables/js/jquery.dataTables.min.js');?>"></script>
			<script type="text/javascript">
			$(document).ready(function(){
			$('#myTable').DataTable();
			});
			</script>

        </div>
		
		