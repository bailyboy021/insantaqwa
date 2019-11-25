
<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">
<head>
<title>SDIT Insan Taqwa - Profil</title>
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
				<li>Tentang Kami</li>
			</ul>
		</div>
	</div>
<!-- //banner1 -->


<!-- //banner -->

<!-- about -->
	<div class="about" id="about">
		<div class="container">
			<h2 class="w3_heade_tittle_agile">Alamat Sekolah</h2>
			<p align="center">Cluster Agra Kemala Bahagia Perumahan Villa Gading Harapan Blok BD <br />Kel. Bahagia, Kec. Babelan - Kab. Bekasi <br />Kode Pos 17610</p>
			<br clear="all"><br clear="all">
			<div class="about-w3lsrow"> 
				
				<div class="col-md-6 w3about-img"> 
				    <img src="<?php echo base_url();?>assets/images/about.jpg" alt=" " class="img-responsive">
				</div> 
				<div class="col-md-6 col-sm-7 w3about-img two"> 
					<div class="w3about-text"> 
						<h5 class="w3l-subtitle">Fasilitas SDIT Insan Taqwa</h5>
						<p>
							
								<li>Gedung Milik Sendiri dan Representatif</li>
								<li>Sarana Ibadah/ Masjid Yang Memadai</li>
								<li>Lokasi Belajar Strategis dan Nyaman</li>
								<li>Lapangan Olahraga Yang Luas</li>
								<li>Arena Bermain Yang Menyenangkan</li>
								<li>Ruang UKS dan Pelayanan Kesehatan</li>
								<li>Kantin Sekolah Yang Bersih</li>
								<li>Catering Yang Sehat dan Halal</li>
								<li>Ruang Perpustakaan</li>
								<li>Ruang Komputer dan Multimedia</li>
								<li>Ruang Konseling</li>
							
						</p>
						  
					</div>
				</div> 
				<div class="clearfix"> </div>
			</div>
		</div>
</div>
<!-- /about-bottom -->


	<div class="agile_menu" id="menu">
		<div class="container">
			<h3 class="w3_heade_tittle_agile">Visi - Misi</h3>
			<p class="sub_t_agileits">SDIT Insan Taqwa</p>
			<div class="menu_w3ls_agile_top_section">
				<div class="ziehharmonika">
					<h3>VISI</h3>
					<div>
						<div class="w3_agile_recipe-grid">
                            <div class="col-md-6 col-sm-6 tab-info">
								<p>Mewujudkan sekolah Islam unggul dalam sains dan Qur'an</p>
							</div>
							<div class="clearfix"></div>
					    </div>

					</div>
					<h3>MISI</h3>
					<div>
						<div class="w3_agile_recipe-grid">
                            <div class="col-md-6 col-sm-6 tab-info two">
								<p>
									<ul>
										<li>Mengembangkan potensi siswa meraih keunggulan sains dengan metode pendekatan Al-Qur'an.</li>
										<li>Mengembangkan potensi siswa meraih keunggulan sains dengan metode pendekatan Al-Qur'an.</li>
										<li>Menyelenggarakan pendidikan dengan pendekatan cinta dan keteladanan. Memadukan pemahaman Al-Qur'an dan kemampuan intelektual.</li>
									</ul>
								</p>
							</div>
							<div class="clearfix"></div>
					    </div>

					</div>
					<h3>TUJUAN</h3>
					<div>
						<div class="w3_agile_recipe-grid">
                            <div class="col-md-6 col-sm-6 tab-info two">
								<p>
									<ul>
										<li>Menghasilkan generasi Muslim yang kuat aqidah, gemar ibadah, mandiri, dan berakhlak Islami.</li>
										<li>Menghasilkan siswa yang terampil dan kompetitif dalam persaingan global.</li>
										<li>Mengembangkan model pendidikan yang kondusif bagi terwujudnya generasi qur'ani yang cerdas, mandiri dan berdedikasi.</li>
									</ul>
								</p>
							</div>
							<div class="clearfix"></div>
					    </div>

					</div>
				</div>
			</div>
		</div>
	</div>


<!-- team -->
	<div class="team portfolio " id="team">
		<div class="container">
<h3 class="w3_heade_tittle_agile">Tenaga Pengajar</h3>
		<p class="sub_t_agileits">Meet Our Teacher...</p>
			<div class="w3layouts-grids">
				
				<?php foreach ($query as $row)
					{
				?>
				
				
				<div class="col-md-3 wthree_team_grid">
					<div class="wthree_team_grid1">
						<div class="hover14 column">
							<div>
								<figure><img src="<?php echo base_url()?>assets/images/thumbs/<?php echo $row->foto;?>" width="256px" height="330px" /></figure>
							</div>
						</div>
						<div class="wthree_team_grid1_pos">
							<h4><?php echo $row->nama_lengkap;?></h4>
						</div>
					</div>
					<div class="wthree_team_grid2">
						<ul class="social-icons">
							 <li><a href="<?php echo $row->fb;?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
							<li><a href="<?php echo $row->twitter;?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
							
							<li><a href="<?php echo $row->ig;?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					</div>
				</div>
				<?php } ?>
				<div class="clearfix"> </div>
				
			</div>
			
			
			
			
			
			
		</div>
	</div>
<!-- //team -->

<?php echo $bawah; ?>
</body>
</html>