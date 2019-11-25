<p>
<a href="<?php echo base_url('admin/murid/tambah') ?>" class="btn btn-primary">
<i class="fa fa-plus"></i> Tambah Data Murid</a>
</p>

<?php
// Notifikasi
if($this->session->flashdata('sukses')) {
	echo '<div class="alert alert-success">';
	echo $this->session->flashdata('sukses');
	echo '</div>';
}

// Error
echo validation_errors('<div class="alert alert-success">','</div>');
?>

<table class="table table-striped table-bordered table-hover" id="dataTables-example">
<thead>
    <tr>
        <th>No</th>
        <th>NIS</th>
        <th>Nama</th>
        <th>TTL</th>
		<th>Jns_Kelamin</th>
		<th>Agama</th>
		<th>Alamat</th>
		<th>Tgl Masuk</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>
<?php $i=1; foreach($murid as $murids) { 
	$originalDate = $murids->tgl_lahir;
	$daftar = $murids->tgl_masuk;
	$tanggal_masuk = date("d-m-Y", strtotime($daftar));
	$tanggal_lahir = date("d-m-Y", strtotime($originalDate));
?>

    <tr class="odd gradeX">
        <td><?php echo $i ?></td>
		<td><?php echo $murids->NIS ?></td>
		<td><?php echo $murids->nama_murid ?></td>
		<td><?php echo $murids->tmp_lahir ?>, <?php echo $tanggal_lahir; ?></td>
		<td><?php echo $murids->jenis_kelamin ?></td>
		<td><?php echo $murids->agama ?></td>
		<td><?php echo $murids->alamat ?></td>
		<td><?php echo $tanggal_masuk; ?></td>
        <td>
        <a href="<?php echo base_url('admin/murid/edit/'.$murids->NIS) ?>"class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
        
        <?php include('delete.php') ?>
        <a href="<?php echo base_url('admin/murid/detail/'.$murids->NIS) ?>"class="btn btn-primary btn-sm">Detail</a>
        
        </td>
    </tr>
<?php $i++; } ?>
</tbody>
</table>