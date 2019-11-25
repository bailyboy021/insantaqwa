<?php
	// Error
	if(isset($error)) {
		echo '<div class="alert alert-warning">';
		echo $error;
		echo '</div>';
	}

	// Validasi
	echo validation_errors('<div class="alert alert-danger">','</div>');

	// Form
	echo form_open_multipart('admin/guru/tambah');
?>

<div class="col-md-8">
	<div class="form-group form-group-lg">
		<label>Nama</label>
		<input type="text" name="nama_guru" placeholder="Nama Lengkap" value="<?php echo set_value('nama_lengkap');?>" required class="form-control">
	</div>
</div>

<div class="col-md-4">
	<div class="form-group form-group-lg">
		<label>NIP</label>
		<input type="text" name="nip" placeholder="NIP" value="<?php echo set_value('nip');?>" required class="form-control">
	</div>
</div>

<div class="col-md-8">
	<div class="form-group form-group-lg">
		<label>Email</label>
		<input type="email" name="email" placeholder="Email" value="<?php echo set_value('email');?>" required class="form-control">
	</div>
</div>

<div class="col-md-4">
	<div class="form-group form-group-lg">
		<label>Telp</label>
		<input type="text" name="telp" placeholder="Telp" value="<?php echo set_value('telp');?>" required class="form-control">
	</div>
</div>

<div class="col-md-12">
	<div class="form-group">
		<label>Alamat</label>
		<textarea name="alamat" class="form-control" placeholder="Alamat" id="alamat"><?php echo set_value('alamat');?></textarea>
	</div>
</div>

<div class="col-md-12">
	<div class="form-group form-group-lg">
		<label>Facebook</label>
		<input type="text" name="fb" placeholder="https://www.facebook.com/namafacebook" value="<?php echo set_value('fb');?>" class="form-control">
	</div>
</div>

<div class="col-md-12">
	<div class="form-group form-group-lg">
		<label>Twitter</label>
		<input type="text" name="twitter" placeholder="https://www.twitter.com/namatwitter" value="<?php echo set_value('twitter');?>" class="form-control">
	</div>
</div>

<div class="col-md-12">
	<div class="form-group form-group-lg">
		<label>Instagram</label>
		<input type="text" name="ig" placeholder="https://www.instagram.com/namainstagram" value="<?php echo set_value('ig');?>" class="form-control">
	</div>
</div>

<div class="col-md-12">
	<div class="form-group">
		<label>Foto</label>
		<input type="file" name="gambar" class="form-control">
	</div>
	
	<div class="form-group">
		<input type="submit" name="submit" value="Simpan Data" class="btn btn-primary btn-lg">
		<input type="reset" name="reset" value="Reset" class="btn btn-default btn-lg">
	</div>
</div>



<?php echo form_close();?>