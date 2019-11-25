<?php
	// Error
	if(isset($error)) {
		echo '<div class="alert alert-warning">';
		echo $error;
		echo '</div>';
	}

	// Validasi
	echo validation_errors('<div class="alert alert-success">','</div>');

	// Form
	echo form_open_multipart('admin/galeri/edit/'.$galeri->id);
?>

<div class="col-md-12">
	<div class="form-group">
		<label>Foto</label>
		<img src="<?php echo base_url('../assets/images/galeri/'.$galeri->file_name) ?>" class="img img-responsive" width="60">
	</div>
</div>

<div class="col-md-12">
	<div class="form-group form-group-lg">
		<label>Nama Album</label>
		<input type="text" name="album" placeholder="Nama Album" value="<?php echo $galeri->kategori ?>" required class="form-control">
	</div>
</div>


<div class="col-md-12">
	<div class="form-group">
		<label>Keterangan</label>
		<textarea name="keterangan" class="form-control" placeholder="Keterangan" id="keterangan"><?php echo $galeri->keterangan ?></textarea>
	</div>
	
	<div class="form-group">
	<input type="submit" name="submit" value="Simpan Data" class="btn btn-primary btn-lg">
	<input type="reset" name="reset" value="Reset" class="btn btn-default btn-lg">
	</div>
	
</div>



<?php echo form_close();?>