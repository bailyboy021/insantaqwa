<script src="<?php echo base_url();?>../assets/admin/tinymce/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
    file_browser_callback: function(field, url, type, win) {
        tinyMCE.activeEditor.windowManager.open({
            file: '<?php echo base_url() ?>assets/kcfinder/browse.php?opener=tinymce4&field=' + field + '&type=' + type,
            title: 'KCFinder',
            width: 700,
            height: 500,
            inline: true,
            close_previous: false
        }, {
            window: win,
            input: field
        });
        return false;
    },
    selector: "#keterangan",
    height: 150,
    plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
});
</script>

<?php 
// cetak error kalau ada salah input
echo validation_errors('<div class="alert alert-warning">','</div>');

echo form_open(base_url('admin/video/tambah'));
?>
<div class="col-md-12">

<div class="form-group">
<label>Judul</label>
<input type="text" name="judul" class="form-control" placeholder="Judul video" value="<?php echo set_value('judul') ?>">
</div>

<div class="form-group">
<label>Keterangan / Deskripsi Video</label>
<textarea name="keterangan" class="form-control" placeholder="Keterangan" id="keterangan"><?php echo set_value('keterangan') ?></textarea>
</div>

</div>

<div class="col-md-12"> 

<div class="form-group">
 <label>Video code (from Youtube)</label>
 </div>
<div class="form-group input-group">
<span class="input-group-addon">https://www.youtube.com/watch?v=</span>
<input type="text" name="video" class="form-control" placeholder="Kode video Youtube" value="<?php echo set_value('url') ?>"/>
</div>

<div class="form-group">
<input type="submit" name="submit" class="btn btn-primary btn-lg" value="Simpan">
</div>

</div>

<?php echo form_close() ?>