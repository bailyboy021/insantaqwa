<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Galeri Foto SDIT Insan Taqwa</title>
	<?php echo $atas; ?>
</head>
	
<body>
	<?php echo $header; ?>
<!-- banner1 -->
	<div class="banner1 jarallax">
		<div class="container">
		</div>
	</div>

	<div class="services-breadcrumb">
		<div class="container">
			<ul>
				<li>SDIT Insan Taqwa<i>|</i></li>
				<li>Gallery</li>
			</ul>
		</div>
	</div>
<!-- //banner1 -->


<!-- Portfolio -->
	<div class="portfolio" id="specials">
			<div class="container">
				

			<div class="tabs tabs-style-bar">
				
				<nav>
					<ul>
						<li><a href="#section-bar-1" class="icon icon-box"><span>Galeri Foto SDIT Insan Taqwa</span></a></li>
					</ul>
				</nav>

				<div class="content-wrap">

					<!-- Tab-1 -->
					<section id="section-bar-1" class="agileits w3layouts">
						<?php foreach ($foto as $rows)
							{
						?>
						<div class="gallery-grids">
							<div class="col-md-4 col-sm-4 gallery-top">
								<a href="<?php echo base_url()?>assets/images/galeri/<?php echo $rows->file_name;?>" class="swipebox">
									<figure class="effect-apollo">
										<img src="<?php echo base_url()?>assets/images/galeri/<?php echo $rows->file_name;?>" width="620px" height="420px">
										<figcaption><?php echo $rows->keterangan;?></figcaption>
									</figure>
								</a>
							
							
						
							<div class="clearfix"></div>
						</div>
						<?php } ?>
					</section>
					
					
					<!-- //Tab-1 -->

					
					
				</div><!-- //Content -->
				<div class="clearfix"></div>
				
				  <ul class="pagination">
					<li><?php echo $halaman;?></li>
				  </ul>
				
				
			</div><!-- //Tabs -->

		</div>
	</div>
	<!-- //Portfolio -->



	<?php echo $bawah; ?>
</body>
</html>