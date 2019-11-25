<p>
<a href="<?php echo base_url('admin/galeri/tambah') ?>" class="btn btn-primary">
<i class="fa fa-plus"></i> Tambah Foto</a>
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
        <th>Foto</th>
        <th>Album</th>
        <th>Keterangan</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>
<?php $i=1; foreach($galeri as $galeri) { ?>
    <tr class="odd gradeX">
        <td><?php echo $i ?></td>
		<td><img src="<?php echo base_url('../assets/images/galeri/'.$galeri->file_name) ?>" class="img img-responsive" width="60"></td>
		<td><?php echo $galeri->kategori; ?></td>
		<td><?php echo $galeri->keterangan; ?></td>
        <td>
        <a href="<?php echo base_url('admin/galeri/edit/'.$galeri->id) ?>"class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
        
        <?php include('delete.php') ?>
        
        </td>
    </tr>
<?php $i++; } ?>
</tbody>
</table>