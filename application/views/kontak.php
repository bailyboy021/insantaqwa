
<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">
<head>
<title>SDIT Insan Taqwa - Kontak</title>
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
				<li>Kontak</li>
			</ul>
		</div>
	</div>
<!-- //banner1 -->
	<div class="banner-bottom" id="about">
		<div class="container">
			<h2 class="w3_heade_tittle_agile">Contact Us</h2>
		    <p class="sub_t_agileits">Get in touch...</p>

           <div class="contact-top-agileits">
               <div class="col-md-4 contact-grid ">
					<div class="contact-grid1 agileits-w3layouts">
						<i class="fa fa-location-arrow"></i>
						<div class="con-w3l-info">
						   <h4>Address </h4>
						  <p>Cluster Agra Kemala Bahagia <span>Perumahan Villa Gading Harapan Blok BD</span><span>Kel. Bahagia Kec. Babelan - Kab. Bekasi</span></p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="col-md-4 contact-grid">
					<div class="contact-grid2 w3">
						<i class="fa fa-phone" aria-hidden="true"></i>
						<div class="con-w3l-info">
						  <h4>Call Us</h4>
						   <p>0858 9098 8281 </p>
						   <p>0896 0301 1287</p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="col-md-4 contact-grid">
					<div class="contact-grid3 w3l">
						<i class="fa fa-envelope"></i>
						<div class="con-w3l-info">
						  <h4>Email</h4>
						  <p><a href="mailto:intaq.bekasi@gmail.com">intaq.bekasi@gmail.com</a>
						 
						  </p></div>
						  <div class="clearfix"></div>
					</div>
				</div>
				<div class="clearfix"></div>
				
			</div>
			<div class="contact-form-aits">
				<?php echo $this->session->flashdata('save_pesan'); ?>
				 <form action="<?php echo base_url();?>sdit/kirim_pesan" method="post">
					<input type="text" class="margin-right" name="nama" id="nama" placeholder="Name" required="">
					<input type="email" name="email" id="email" placeholder="Email" required="">
					<input type="text" class="margin-right" name="telp" id="telp" placeholder="Phone Number" required="">
					<input type="text" name="subject" id="subject" placeholder="Subject" required="">
					<textarea name="pesan" id="pesan" placeholder="Message" required=""></textarea>
					<div class="send-button agileits w3layouts">
						<button class="btn btn-primary">SEND MESSAGE</button>
					</div>
				  </form>
				  <ul class="agileits_social_list two">
				        <li class="fallow"> Follow Us :</li>
								<li><a href="https://www.facebook.com/intaq.sdit" target="_blank" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="https://twitter.com/sdit_intaq" target="_blank" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="https://www.instagram.com/sdit_intaq/" target="_blank" class="w3_agile_dribble"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							</ul>
				         
			   </div>
	    </div>
	</div>

<div class="map_agile">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1667.7680197400773!2d107.02841380920074!3d-6.178493604866216!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69895ac7bd1dff%3A0xe3bbac2e8bd35345!2sSDIT%20Insan%20Taqwa!5e0!3m2!1sid!2sid!4v1574429443845!5m2!1sid!2sid" style="border:0;" allowfullscreen=""></iframe>
</div>

<?php echo $bawah; ?>
</body>
</html>