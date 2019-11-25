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
	echo form_open_multipart('admin/murid/tambah');
?>

<div class="col-md-8">
	<div class="form-group form-group-lg">
		<label>Nama</label>
		<input type="text" name="nama_murid" placeholder="Nama Lengkap" value="<?php echo set_value('nama_murid');?>" required class="form-control">
	</div>
</div>

<div class="col-md-4">
	<div class="form-group form-group-lg">
		<label>NIS</label>
		<input type="text" name="nis" placeholder="NIS" value="<?php echo set_value('NIS');?>" required class="form-control">
	</div>
</div>

<div class="col-md-3">
	<div class="form-group form-group-lg">
		<label>Tempat Lahir</label>
		<input type="text" name="tmplahir" placeholder="Tempat Lahir" value="<?php echo set_value('tmp_lahir');?>" required class="form-control">
	</div>
</div>

<div class="col-md-3">
	<div class="form-group form-group-lg">
		<label>Tgl Lahir</label>
		<input type="date" name="tgllahir" placeholder="Tanggal Lahir" value="<?php echo set_value('tgl_lahir');?>" required class="form-control">
	</div>
</div>

<div class="col-md-3">
	<div class="form-group form-group-lg">
		<label>Jenis Kelamin</label>
		<input type="text" name="jenis_kelamin" placeholder="L/P" value="<?php echo set_value('jenis_kelamin');?>" required class="form-control">
	</div>
</div>


<div class="col-md-3">
	<div class="form-group form-group-lg">
		<label>Agama</label>
		<select name="agama" class="form-control">
			<option value="Islam">Islam</option>
			<option value="Kristen">Kristen Protestan</option>
			<option value="Katolik">Katolik</option>
			<option value="Hindu">Hindu</option>
			<option value="Buddha">Buddha</option>
			<option value="Kong Hu Cu">Kong Hu Cu</option>
		</select>
	</div>
</div>

<div class="col-md-4">
	<div class="form-group form-group-lg">
		<label>Telp</label>
		<input type="text" name="telp" placeholder="Telp" value="<?php echo set_value('telp');?>" required class="form-control">
	</div>
</div>

<div class="col-md-8">
	<div class="form-group">
		<label>Alamat</label>
		<textarea name="alamat" class="form-control" placeholder="Alamat" id="alamat"><?php echo set_value('alamat');?></textarea>
	</div>
</div>

<div class="col-md-4">
	<div class="form-group form-group-lg">
		<label>Nama Ayah</label>
		<input type="text" name="ayah" placeholder="Nama Ayah" value="<?php echo set_value('nama_ayah');?>" required class="form-control">
	</div>
</div>

<div class="col-md-4">
	<div class="form-group form-group-lg">
		<label>Nama Ibu</label>
		<input type="text" name="ibu" placeholder="Nama Ibu" value="<?php echo set_value('nama_ibu');?>" required class="form-control">
	</div>
</div>

<div class="col-md-4">
	<div class="form-group form-group-lg">
		<label>Nama Wali</label>
		<input type="text" name="wali" placeholder="Nama Wali" value="<?php echo set_value('nama_wali');?>" class="form-control">
	</div>
</div>

<div class="col-md-4">
	<div class="form-group form-group-lg">
		<label>Pekerjaan Ayah</label>
		<input type="text" name="pekerjaan_ayah" placeholder="Pekerjaan Ayah" value="<?php echo set_value('pekerjaan_ayah');?>" required class="form-control">
	</div>
</div>

<div class="col-md-4">
	<div class="form-group form-group-lg">
		<label>Pekerjaan Ibu</label>
		<input type="text" name="pekerjaan_ibu" placeholder="Pekerjaan Ibu" value="<?php echo set_value('pekerjaan_ibu');?>" required class="form-control">
	</div>
</div>

<div class="col-md-4">
	<div class="form-group form-group-lg">
		<label>Pekerjaan Wali</label>
		<input type="text" name="pekerjaan_wali" placeholder="Pekerjaan Wali" value="<?php echo set_value('pekerjaan_wali');?>" class="form-control">
	</div>
</div>

<div class="col-md-6">
	<div class="form-group">
		<label>Alamat Orang Tua</label>
		<textarea name="alamat_ortu" class="form-control" placeholder="Alamat Orang Tua" id="alamat"><?php echo set_value('alamat_ortu');?></textarea>
	</div>
</div>

<div class="col-md-6">
	<div class="form-group">
		<label>Alamat Wali</label>
		<textarea name="alamat_wali" class="form-control" placeholder="Alamat Wali" id="alamat"><?php echo set_value('alamat_wali');?></textarea>
	</div>
</div>

<div class="col-md-4">
	<div class="form-group form-group-lg">
		<label>Tgl Masuk</label>
		<input type="date" name="tgl_masuk" placeholder="Tanggal Masuk" value="<?php echo set_value('tgl_masuk');?>" required class="form-control">
	</div>
</div>

<div class="col-md-4">
	<div class="form-group form-group-lg">
		<label>Kelas</label>
		<input type="text" name="kelas" placeholder="Kelas" value="<?php echo set_value('kelas');?>" required class="form-control">
	</div>
</div>

<div class="col-md-12">

	
	<div class="form-group">
		<input type="submit" name="submit" value="Simpan Data" class="btn btn-primary btn-lg">
		<input type="reset" name="reset" value="Reset" class="btn btn-default btn-lg">
	</div>
</div>

<?php echo form_close();?>