<?php  
	$originalDate = $murid->tgl_lahir;
	$daftar = $murid->tgl_masuk;
	$tanggal_masuk = date("d-m-Y", strtotime($daftar));
	$tanggal_lahir = date("d-m-Y", strtotime($originalDate));
?>

<table class="table table-striped table-bordered table-hover" id="dataTables-example">
	<tr>
		<td>Nama</td>
		<td><?php echo $murid->nama_murid;?></td>
	</tr>
	<tr>
		<td>NIS</td>
		<td><?php echo $murid->NIS;?></td>
	</tr>
	<tr>
		<td>Tempat, Tanggal Lahir</td>
		<td><?php echo $murid->tmp_lahir;?>, <?php echo $tanggal_lahir;?></td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td><?php echo $murid->jenis_kelamin;?></td>
	</tr>
	<tr>
		<td>Agama</td>
		<td><?php echo $murid->agama;?></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><?php echo $murid->alamat;?></td>
	</tr>
	<tr>
		<td>Kelas</td>
		<td><?php echo $murid->kelas;?></td>
	</tr>
	<tr>
		<td>Nama Ayah</td>
		<td><?php echo $murid->nama_ayah;?></td>
	</tr>
	<tr>
		<td>Nama Ibu</td>
		<td><?php echo $murid->nama_ibu;?></td>
	</tr>
	<tr>
		<td>Pekerjaan Ayah</td>
		<td><?php echo $murid->pekerjaan_ayah;?></td>
	</tr>
	<tr>
		<td>Pekerjaan Ibu</td>
		<td><?php echo $murid->pekerjaan_ibu;?></td>
	</tr>
	<tr>
		<td>Alamat Orang Tua</td>
		<td><?php echo $murid->alamat_ortu;?></td>
	</tr>
	<tr>
		<td>Wali</td>
		<td><?php echo $murid->nama_wali;?></td>
	</tr>
	<tr>
		<td>Pekerjaan Wali</td>
		<td><?php echo $murid->pekerjaan_wali;?></td>
	</tr>
	<tr>
		<td>Alamat Wali</td>
		<td><?php echo $murid->alamat_wali;?></td>
	</tr>
	<tr>
		<td>No Telp</td>
		<td><?php echo $murid->telp;?></td>
	</tr>
	<tr>
		<td>Tanggal Masuk</td>
		<td><?php echo $murid->tgl_masuk;?></td>
	</tr>
	<tr>
		<td>Status</td>
		<td><?php echo $murid->status;?></td>
	</tr>
</table>

    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="<?php echo base_url();?>../assets/admin/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?php echo base_url();?>../assets/admin/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="<?php echo base_url();?>../assets/admin/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="<?php echo base_url();?>../assets/admin/js/dataTables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url();?>../assets/admin/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="<?php echo base_url();?>../assets/admin/js/custom.js"></script>