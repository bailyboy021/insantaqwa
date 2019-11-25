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
	echo form_open_multipart('admin/user/tambah');
?>
<div class="form-group">
<label>Nama Lengkap</label>
<input type="text" name="nama" class="form-control" placeholder="Nama lengkap" value="<?php echo set_value('nama') ?>">
</div>

<div class="form-group">
<label>Email</label>
<input type="email" name="email" class="form-control" placeholder="email" value="<?php echo set_value('email') ?>">
</div>

<div class="form-group">
<label>Username</label>
<input type="text" name="username" class="form-control" placeholder="username" value="<?php echo set_value('username') ?>">
</div>

<div class="form-group">
<label>Password</label>
<input type="password" name="password" class="form-control" placeholder="password" value="<?php echo set_value('password') ?>">
</div>
    

<div class="form-group">
<input type="submit" name="submit" class="btn btn-primary btn-lg" value="Simpan">
</div>

<?php echo form_close();?>