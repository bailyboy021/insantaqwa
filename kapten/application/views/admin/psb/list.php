<div class="table-responsive">
<?php $i=1; foreach($psb as $psb) { 
	$total_pa = $psb->administrasi_pendaftaran + $psb->jariah_gedung + $psb->seragam_pa + $psb->buku_paket + $psb->kegiatan_setahun + $psb->spp ;
	$total_pi = $psb->administrasi_pendaftaran + $psb->jariah_gedung + $psb->seragam_pi + $psb->buku_paket + $psb->kegiatan_setahun + $psb->spp ;
?>
	<a href="<?php echo base_url('admin/psb/edit/'.$psb->id) ?>"class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit Biaya Pendaftaran Siswa Baru</a>
	<br><br>
	<h3>Rincian Biaya Siswa Baru SDIT Insan Taqwa Tahun Pelajaran <?php echo $psb->tahun_ajaran;?></h3>
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


<?php $i++; } ?>