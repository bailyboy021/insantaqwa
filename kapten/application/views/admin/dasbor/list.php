<div class="row">
	<!-- Guru -->
	<div class="col-md-4 col-sm-6 col-xs-6">           
	<div class="panel panel-back noti-box">
	<span class="icon-box bg-color-red set-icon">
		<i class="fa fa-users"></i>
	</span>
	<div class="text-box" >
		<p class="main-text"><?php echo count($guru);?></p>
		<p class="text-muted"><a href="<?php echo base_url('admin/guru');?>">Guru</a></p>
	</div>
	</div>
	</div>

	<!-- Murid -->
	<div class="col-md-4 col-sm-6 col-xs-6">           
	<div class="panel panel-back noti-box">
	<span class="icon-box bg-color-red set-icon">
		<i class="fa fa-child"></i>
	</span>
	<div class="text-box" >
		<p class="main-text"><?php echo count($murid);?></p>
		<p class="text-muted"><a href="<?php echo base_url('admin/murid');?>">Murid</a></p>
	</div>
	</div>
	</div>

	
	
	<!-- Berita -->
	<div class="col-md-4 col-sm-6 col-xs-6">           
	<div class="panel panel-back noti-box">
	<span class="icon-box bg-color-red set-icon">
		<i class="fa fa-newspaper-o"></i>
	</span>
	<div class="text-box" >
		<p class="main-text"><?php echo count($berita);?></p>
		<p class="text-muted"><a href="<?php echo base_url('admin/berita');?>">Berita</a></p>
	</div>
	</div>
	</div>

	<!-- Galeri Foto -->
	<div class="col-md-4 col-sm-6 col-xs-6">           
	<div class="panel panel-back noti-box">
	<span class="icon-box bg-color-red set-icon">
		<i class="fa fa-image"></i>
	</span>
	<div class="text-box" >
		<p class="main-text"><?php echo count($galeri);?></p>
		<p class="text-muted"><a href="<?php echo base_url('admin/foto');?>">Foto</a></p>
	</div>
	</div>
	</div>

	<!-- Video -->
	<div class="col-md-4 col-sm-6 col-xs-6">           
	<div class="panel panel-back noti-box">
	<span class="icon-box bg-color-red set-icon">
		<i class="fa fa-film"></i>
	</span>
	<div class="text-box" >
		<p class="main-text"><?php echo count($video);?></p>
		<p class="text-muted"><a href="<?php echo base_url('admin/video');?>">Video</a></p>
	</div>
	</div>
	</div>







</div>