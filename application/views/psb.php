
<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>SDIT Insan Taqwa - Penerimaan Siswa Baru</title>
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
				<li>PSB</li>
			</ul>
		</div>
	</div>
<!-- //banner1 -->
<!-- icons -->
	<div class="banner-bottom" id="about">
		<div class="container">
							<?php $i=1; foreach($query as $psb) { 
								$total_pa = $psb->administrasi_pendaftaran + $psb->jariah_gedung + $psb->seragam_pa + $psb->buku_paket + $psb->kegiatan_setahun + $psb->spp ;
								$total_pi = $psb->administrasi_pendaftaran + $psb->jariah_gedung + $psb->seragam_pi + $psb->buku_paket + $psb->kegiatan_setahun + $psb->spp ;
							?>
						<h2 class="w3_heade_tittle_agile">Penerimaan Siswa Baru</h2>
			        <p class="sub_t_agileits">Tahun Ajaran <?php echo $psb->tahun_ajaran;?></p>
			<div class="single-grid">
				
					<div class="w3-blog-left-grid">
					
						<div class="admin-text">
								<h5>Sekretariat Pendaftaran</h5>
								
									<p>PAUD CERDAS CERIA 1 &amp; 2 <br />Perum. Griya Asri Bahagia <br />Blok H4 No. 1 RT. 02 RW. 041 <br />&amp; Blok F4 No. 1 RT. 004 RW. 033 <br />Kel. Bahagia Kec. Babelan <br />Telp. 0858 9098 8281, 0896 0301 1287</p>
								<div class="clearfix"> </div>
						</div>
						
						<div class="admin-text">
								<h5>Syarat Pendaftaran</h5>
								
									<ol>
										<li>Telah mencapai usia kematangan sekolah (Usia 7 Tahun)&nbsp;</li>
										<li>Mengisi Formulir dengan melampirkan:
											<ol style="list-style-type: lower-alpha;">
												<li>Foto Copy Akte Kelahiran&nbsp;</li>
												<li>Foto Copy KK dan KTP Orang tua&nbsp;</li>
												<li>Foto Copy Ijazah TK (yang memiliki)</li>
											</ol>
										</li>
									</ol>
									
								<div class="clearfix"> </div>
						</div>
						
						<div class="admin-text">
								<h5>Waktu Pendaftaran</h5>
								
									<p>Pendaftaran dapat dilakukan setiap hari kerja mulai <strong>Pukul : 08.00 - 15.00 WIB</strong> <br />di Sekretariat Pendaftaran SDIT Insan Taqwa.</p>
									
								<div class="clearfix"> </div>
						</div>
						
						<div class="admin-text">
								<h5>Pembayaran</h5>
								
									<p>Pembayaran melalui BSM (Bank Syariah Mandiri)</p>
									
								<div class="clearfix"> </div>
						</div>
						
						<div class="admin-text">
							
								<h5>Rincian Biaya Siswa Baru SDIT Insan Taqwa Tahun Pelajaran <?php echo $psb->tahun_ajaran;?></h5>
								<div class="table-responsive">
									<table border="1" class="table table-striped">
										<thead>
											<tr>
												<th rowspan="2" style="text-align: center; vertical-align: middle;"><p style="text-align: center;"><strong>No</strong></p></th>
												<th rowspan="2" style="text-align: center; vertical-align: middle;"><p style="text-align: center;"><strong>Alokasi</strong></p></th>
												<th colspan="2"><p style="text-align: center;"><strong>Biaya</strong></p></th>
											</tr>
											<tr>
												<th><p style="text-align: center;"><strong>Putera</strong></p></th>
												<th><p style="text-align: center;"><strong>Puteri</strong></p></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><p style="text-align: center;">1</p></td>
												<td><p>&nbsp; Administrasi Pendaftaran</p></td>
												<td><p style="text-align: right;"><?php echo number_format($psb->administrasi_pendaftaran, 0, ',', '.');?></p></td>
												<td><p style="text-align: right;"><?php echo number_format($psb->administrasi_pendaftaran, 0, ',', '.');?></p></td>
											</tr>
											<tr>
												<td><p style="text-align: center;">2</p></td>
												<td><p>&nbsp; Jariah Gedung / Uang Pangkal</p></td>
												<td><p style="text-align: right;"><?php echo number_format($psb->jariah_gedung, 0, ',', '.');?></p></td>
												<td><p style="text-align: right;"><?php echo number_format($psb->jariah_gedung, 0, ',', '.');?></p></td>
											</tr>
											<tr>
												<td><p style="text-align: center;">3</p></td>
												<td><p>&nbsp; Pakaian Seragam 5 Stel</p></td>
												<td><p style="text-align: right;"><?php echo number_format($psb->seragam_pa, 0, ',', '.');?></p></td>
												<td><p style="text-align: right;"><?php echo number_format($psb->seragam_pi, 0, ',', '.');?></p></td>
											</tr>
											<tr>
												<td><p style="text-align: center;">4</p></td>
												<td><p>&nbsp; Buku Paket</p></td>
												<td><p style="text-align: right;"><?php echo number_format($psb->buku_paket, 0, ',', '.');?></p></td>
												<td><p style="text-align: right;"><?php echo number_format($psb->buku_paket, 0, ',', '.');?></p></td>
											</tr>
											<tr>
												<td><p style="text-align: center;">5</p></td>
												<td><p>&nbsp; Kegiatan Satu Tahun</p></td>
												<td><p style="text-align: right;"><?php echo number_format($psb->kegiatan_setahun, 0, ',', '.');?></p></td>
												<td><p style="text-align: right;"><?php echo number_format($psb->kegiatan_setahun, 0, ',', '.');?></p></td>
											</tr>
											<tr>
												<td><p style="text-align: center;">6</p></td>
												<td><p>&nbsp; SPP Bulan Juli&nbsp;&nbsp;</p></td>
												<td><p style="text-align: right;"><?php echo number_format($psb->spp, 0, ',', '.');?></p></td>
												<td><p style="text-align: right;"><?php echo number_format($psb->spp, 0, ',', '.');?></td>
											</tr>
											<tr>
												<td colspan="2"><p style="text-align: center;">&nbsp;&nbsp;<strong> Jumlah</strong></p></td>
												<td><p style="text-align: right;"><strong><?php echo number_format($total_pa, 0, ',', '.');?></strong></p></td>
												<td><p style="text-align: right;"><strong><?php echo number_format($total_pi, 0, ',', '.');?></strong></p></td>
											</tr>			
										</tbody>
									</table>
								</div>
								<div class="clearfix"> </div>
							<?php }?>
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