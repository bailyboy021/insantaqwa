<p>
<a href="<?php echo base_url('admin/guru/tambah') ?>" class="btn btn-primary">
<i class="fa fa-plus"></i> Tambah Data Guru</a>
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
        <th>NIP</th>
        <th>Nama</th>
        <th>Alamat</th>
		<th>Email</th>
		<th>Telp</th>
		<th>Foto</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>
<?php $i=1; foreach($guru as $guru) { ?>
    <tr class="odd gradeX">
        <td><?php echo $i ?></td>
		<td><?php echo $guru->nip ?></td>
		<td><?php echo $guru->nama_lengkap ?></td>
		<td><?php echo $guru->alamat ?></td>
		<td><?php echo $guru->email ?></td>
		<td><?php echo $guru->telp ?></td>
        <td>
        <img src="<?php echo base_url('../assets/images/thumbs/'.$guru->foto) ?>" class="img img-responsive" width="60">
        </td>
        <td>
        <a href="<?php echo base_url('admin/guru/edit/'.$guru->id) ?>"class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
        
        <?php include('delete.php') ?>
        
        </td>
    </tr>
<?php $i++; } ?>
</tbody>
</table>