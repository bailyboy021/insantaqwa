<?php 
// cetak error kalau ada salah input
echo validation_errors('<div class="alert alert-warning">','</div>');

echo form_open(base_url('admin/psb/edit/'.$psb->id));
?>
<div class="form-group">
<label>Tahun Pelajaran</label>
<input type="text" name="thn_ajar" class="form-control" placeholder="Tahun Pelajaran" value="<?php echo $psb->tahun_ajaran;?>">
</div>

<div class="form-group">
<label>Administrasi Pendaftaran</label>
<input type="text" name="adm_daftar" class="form-control" placeholder="Administrasi Pendaftaran" value="<?php echo $psb->administrasi_pendaftaran;?>">
</div>

<div class="form-group">
<label>Jariah Gedung</label>
<input type="text" name="uang_gd" class="form-control" placeholder="Jariah Gedung" value="<?php echo $psb->jariah_gedung;?>">
</div>

<div class="col-md-6">
<div class="form-group">
<label>Seragam Putra 5 Stel</label>
<input type="text" name="seragam_pa" class="form-control" placeholder="Seragam 5 Stel" value="<?php echo $psb->seragam_pa;?>">
</div>
</div>

<div class="col-md-6">
<div class="form-group">
<label>Seragam Putri 5 Stel</label>
<input type="text" name="seragam_pi" class="form-control" placeholder="Seragam 5 Stel" value="<?php echo $psb->seragam_pi;?>">
</div>
</div>


<div class="form-group">
<label>Buku Paket</label>
<input type="text" name="buku" class="form-control" placeholder="Buku Paket" value="<?php echo $psb->buku_paket;?>">
</div>

<div class="form-group">
<label>Kegiatan 1 Tahun</label>
<input type="text" name="kegiatan" class="form-control" placeholder="Kegiatan 1 Tahun" value="<?php echo $psb->kegiatan_setahun;?>">
</div>

<div class="form-group">
<label>SPP</label>
<input type="text" name="spp" class="form-control" placeholder="SPP" value="<?php echo $psb->spp;?>">
</div>   

<div class="form-group">
<input type="submit" name="submit" class="btn btn-primary btn-lg" value="Simpan">
</div>

<?php echo form_close() ?>