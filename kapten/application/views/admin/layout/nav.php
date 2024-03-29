<nav class="navbar-default navbar-side" role="navigation">
<div class="sidebar-collapse">
<ul class="nav" id="main-menu">
    
    <!-- Dasbor --> 
    <li><a href="<?php echo base_url('admin/dasbor');?>"><i class="fa fa-dashboard"></i> Dasbor</a></li>       
    
    <!-- Guru -->           
    <li><a href="#"><i class="fa fa-book"></i> Guru<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li><a href="<?php echo base_url('admin/guru');?>">Data Guru</a></li>
            <li><a href="<?php echo base_url('admin/guru/tambah');?>">Tambah Guru</a></li>
        </ul>
    </li> 
	
	<!-- Murid -->           
    <li><a href="#"><i class="fa fa-book"></i> Murid<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li><a href="<?php echo base_url('admin/murid');?>">Data Murid</a></li>
            <li><a href="<?php echo base_url('admin/murid/tambah');?>">Tambah Murid</a></li>
        </ul>
    </li>
	
	<!-- PSB -->           
    <li><a href="<?php echo base_url('admin/psb');?>"><i class="fa fa-book"></i> PSB</a>
        
    </li>
    
    <!-- Berita -->           
   <li><a href="#"><i class="fa fa-newspaper-o"></i> Berita<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li><a href="<?php echo base_url('admin/berita');?>">Data Berita</a></li>
            <li><a href="<?php echo base_url('admin/berita/tambah');?>">Tambah Berita</a></li>
        </ul>
    </li> 
	
	<!-- Galleri Foto -->           
    <li><a href="#"><i class="fa fa-image"></i> Galeri<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li><a href="<?php echo base_url('admin/galeri');?>">Galeri Foto</a></li>
            <li><a href="<?php echo base_url('admin/galeri/tambah');?>">Tambah Galeri Foto</a></li>
        </ul>
    </li>
    
    <!-- Modul Video -->
    <li><a href="#"><i class="fa fa-film"></i> Video<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li><a href="<?php echo base_url('admin/video');?>">Data Video</a></li>
            <li><a href="<?php echo base_url('admin/video/tambah');?>">Tambah Video</a></li>
        </ul>
    </li> 
    
    <!-- Modul User -->
    <li><a href="#"><i class="fa fa-users"></i> User/Administrator<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li><a href="<?php echo base_url('admin/user');?>">Data User/Administrator</a></li>
            <li><a href="<?php echo base_url('admin/user/tambah');?>">Tambah User/Admin</a></li>
        </ul>
    </li> 
    
    <!-- Modul Konfigurasi -->
    <li><a href="#"><i class="fa fa-wrench"></i> Konfigurasi Website<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li><a href="<?php echo base_url('admin/dasbor/konfigurasi');?>">Konfigurasi Umum</a></li>
        </ul>
    </li>  
 
</ul>

</div>

</nav>  
<!-- /. NAV SIDE  -->
<div id="page-wrapper" >
<div id="page-inner">
<div class="row">
    <div class="col-md-12">
     <h2><?php echo $title?></h2>         
    </div>
</div>
 <!-- /. ROW  -->
 <hr />

<div class="row">
<div class="col-md-12">
    <!-- Advanced Tables -->
    <div class="panel panel-default">
            <div class="panel-body">
            <div class="table-responsive">
