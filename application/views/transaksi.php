<!DOCTYPE html>
<html>
	<head>
		<title>Travel-mate Bootstarp Website Template | Home :: w3layouts</title>
		<link href="<?php echo base_url('/assets/datatables/css/dataTables.bootstrap.min.css');?>" rel="stylesheet" type="text/css" media="all">
		<link href="<?php echo base_url('./assets/css/style.css');?>" rel="stylesheet" type="text/css" media="all" >
		<link href="<?php echo base_url('./assets/css/bootstrap.css');?>" rel="stylesheet" type="text/css" media="all">
		
		
		<!-- web-font -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
		<!-- web-font -->
		<!-- js -->
		<script src="<?php echo base_url('./assets/js/jquery.min.js');?>"></script>
		<link href="<?php echo base_url('./assets/datatables/css/jquery.dataTables.min.css');?>" rel="stylesheet" type="text/css" media="all">
		<script  src="<?php echo base_url('./assets/datatables/js/dataTables.bootstrap.min.js');?>"></script>
		 <script  src="<?php echo base_url('./assets/datatables/js/jquery.dataTables.min.js');?>"></script>

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
					<a href="index.html"><img src="<?php echo base_url('./assets/images/logo1.png');?>" alt="" /></a>
				</div>
				<div class="top-nav">
						<span class="menu"><img src="<?php echo base_url('./assets/images/menu.png');?>" alt=""></span>
							<ul class="cl-effect-1">
								<li><a href="<?php echo base_url('./tour'); ?>">HOME</a></li>  
								<li><a  href="<?php echo base_url('./Tour/about'); ?>">ABOUT</a></li>
								<li><a href="<?php echo base_url('./Tour/booking'); ?>">BOOKING</a></li> 
								<li><a href="<?php echo base_url('./Tour/news'); ?>">NEWS</a></li>  
								<li><a href="<?php echo base_url('./transaction'); ?>">TRANSACTION</a></li>  
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


			<div class="container">
            <h3>TRANSACTION</h3><br>

            <div class="read-more red">
					<a href="<?php echo base_url('./transaction/do_insert/'); ?>">New Transaction</a>
			</div><br><br>

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
                    </tr>
                </thead>
                <tbody>
                		<?php foreach($result as $d){ ?>
          			<tr>
		               <td><?php echo $d['id']; ?></td>
		               <td><?php echo $d['id_paket']; ?></td>
		               <td><?php echo $d['id_member']; ?></td>
		               <td><?php echo $d['tanggalbrgkt']; ?></td>
		               <td><?php echo $d['jml_dewasa']; ?></td>
		               <td><?php echo $d['jml_anak']; ?></td>
		               <td><?php echo $d['pembayaran']; ?></td>
		            </tr> <?php } ?>
                </tbody>
            </table>
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