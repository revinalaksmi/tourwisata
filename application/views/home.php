		<!-- banner-grids -->
		<div class="banner-grids">
			<!-- container -->
			<div class="container">
				<div class="banner-grid-info">
					<h3>TOP DESTINATIONS</h3>
					<p>Pellentesque tempor sem in scelerisque mollis.</p>
				</div>
				<div class="read-more red">
					<a href="<?php echo base_url('./tour/add_data/'); ?>">New Destination</a>
				</div>
				<div class="top-grids">
				<?php foreach($all_categories as $d){ ?>
					<div class="top-grid">
						<img src="<?php echo base_url('assets/images/'.$d['gambar']); ?>">
						<div class="top-grid-info">
							<h3><?php echo $d['nama']; ?></h3>
							<div class="read-more red">
								<a  href="<?php echo base_url()."tour/do_preview/".$d['id']; ?>">Read More</a>
								<a href="<?php echo base_url()."tour/hapus/".$d['id']; ?>">Delete</a>
							</div>
						</div>
					</div> <?php } ?> 
						<div class="container" style="margin-top: 200px;">
					<?php 
  					echo $links;
					?>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<!-- //container -->
		</div>
		<!-- //banner-grids -->
		<!-- before -->
		<div class="before">
			<!-- container -->
			<div class="container">
				<h2>Before you leave</h2>
				<div class="before-grids">
					<div class="before-grid">
						<h3>visa & documents</h3>
						<p>Morbi id felis porttitor tellus viverra pulvinar. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices.
							Morbi id felis porttitor tellus viverra pulvinar. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices.
						</p>
					</div>
					<div class="before-grid">
						<h3>visa & documents</h3>
						<p>Morbi id felis porttitor tellus viverra pulvinar. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices.
							Morbi id felis porttitor tellus viverra pulvinar. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices.
						</p>
					</div>
					<div class="before-grid">
						<h3>visa & documents</h3>
						<p>Morbi id felis porttitor tellus viverra pulvinar. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices.
							Morbi id felis porttitor tellus viverra pulvinar. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices.
						</p>
					</div>
					<div class="clearfix"> </div>
					<div class="search">
						<p>get hottest deals to your inbox</p>
						<form>
							<input type="text" placeholder="Email address" required="">
							<input type="submit" value="Subscribe">
						</form>
					</div>
				</div>
			</div>
			<!-- //container -->
		</div>
		<!-- //before -->