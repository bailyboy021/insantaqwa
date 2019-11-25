<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title><?php echo $title ?></title>
<link href="<?php echo base_url('../assets/images/logo.png');?>" rel="shortcut icon">
<!-- BOOTSTRAP STYLES-->
<link href="<?php echo base_url();?>../assets/admin/css/bootstrap.css" rel="stylesheet" />
<!-- FONTAWESOME STYLES-->
<link href="<?php echo base_url();?>../assets/admin/css/font-awesome.css" rel="stylesheet" />
<!-- CUSTOM STYLES-->
<link href="<?php echo base_url();?>../assets/admin/css/custom.css" rel="stylesheet" />
<!-- GOOGLE FONTS-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

<style>
body{
	background: url(../assets/images/bg2.jpg) no-repeat center center fixed; 
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
}
</style>
</head>
<body>
<div class="container">
<div class="row text-center ">
<div class="col-md-12">
<br /><br />
<img src="../assets/images/avtar.png" align="center" width="100">
<h2> <?php echo $title ?></h2>


</div>
</div>
<div class="row ">

<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
<div class="panel panel-primary">
<div class="panel-heading">
<center><strong> Masukkan Username & Password </strong></center>
</div>
<div class="panel-body">

<?php
// cetak error
if($this->session->flashdata('sukses')) {
	echo '<div class="alert alert-success">';
	echo $this->session->flashdata('sukses');
	echo '</div>';
}

// Cetak validasi error
echo validation_errors('<div class="alert alert-success">','</div>');
?>

<form role="form" method="post" action="<?php echo base_url('login');?>">
   <br />
 <div class="form-group input-group">
        <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
        <input type="text" name="username" class="form-control" placeholder="Your Username " />
    </div>
                                          <div class="form-group input-group">
        <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
        <input type="password" name="password" class="form-control"  placeholder="Your Password" />
    </div>
<div class="form-group">
       
    </div>
 
 <input type="submit" name="submit" value="Login" class="btn btn-primary">
<hr />
</form>
</div>

</div>
</div>


</div>
</div>


<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<!-- JQUERY SCRIPTS -->
<script src="<?php echo base_url();?>../assets/admin/js/jquery-1.10.2.js"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="<?php echo base_url();?>../assets/admin/js/bootstrap.min.js"></script>
<!-- METISMENU SCRIPTS -->
<script src="<?php echo base_url();?>../assets/admin/js/jquery.metisMenu.js"></script>
<!-- CUSTOM SCRIPTS -->
<script src="<?php echo base_url();?>../assets/admin/js/custom.js"></script>

</body>
</html>
