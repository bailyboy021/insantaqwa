
<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Intaq News</title>
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
				<li>Berita</li>
			</ul>
		</div>
	</div>
<!-- //banner1 -->
<!-- icons -->
	<div class="banner-bottom" id="about">
		<div class="container">
						<h2 class="w3_heade_tittle_agile"><u>Intaq News</u></h2>
			        <p class="sub_t_agileits"></p>
			<div class="single-grid">
				<div class="col-md-8 w3ls-blog-left">
					<div class="w3-blog-left-grid">
						
						<?php foreach ($query as $row)
							{
								$originalDate = $row->tglposting;
								$tanggal = date("d-m-Y H:i:s", strtotime($originalDate));
						?>
						<div class="w3ls-blog-leftl">
							<h4><?php echo $tanggal;?></h4>
						</div>
						<div class="w3ls-blog-leftr">
							<h3><?php echo $row->judul;?></h3>
							
							<img src="<?php echo base_url()?>assets/images/thumbs/<?php echo $row->photo;?>" class="img-responsive" />
							<p><?php echo $row->isi;?></p>
							
						</div>
						<?php } ?>
						<div class="clearfix"> </div>
						
						
						
					</div>
				</div>
				<div class="col-md-4 w3-agile-blog-right">
					
					<div class="agile-info-recentss">
						<h3>Recent Posts</h3>
						<div class="w3ls-recent-grids">
								<?php foreach ($kueri as $row)
									{
								?>
							<div class="w3l-recent-grid">
								
								<div class="wom">
									<a href="<?php echo base_url();?>sdit/berita/<?php echo $row->head_berita?>"><img src="<?php echo base_url()?>assets/images/thumbs/<?php echo $row->photo;?>" alt=" " width="256px" height="330px" class="img-responsive" /></a>
								</div>
								<div class="wom-right">
									<h4><a href="<?php echo base_url();?>sdit/berita/<?php echo $row->head_berita?>"><?php echo $row->judul;?></a></h4>
									<p><?php echo $row->tglposting;?></p>
								</div>
								
								<div class="clearfix"> </div>
								
								
							</div>
								<?php } ?>
							
						</div>
					</div>
					
				</div>
				<div class="clearfix"> </div>
			</div>
<!-- //single -->
		</div>
	</div>
<!-- icons -->




	<?php echo $bawah; ?>
</body>
</html>