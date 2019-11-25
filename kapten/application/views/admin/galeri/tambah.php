
<div class="col-md-12">
		<p><?php echo $this->session->flashdata('statusMsg'); ?></p>
		<form enctype="multipart/form-data" action="" method="post">
			<div class="form-group">
				<label>Nama Album</label>
				<input type="text" class="form-control" name="album" />
			</div>
			<div class="form-group">
				<label>Choose Files</label>
				<input type="file" class="form-control" name="userFiles[]" multiple/>
			</div>
			<div class="form-group">
				<input class="btn btn-primary" type="submit" name="fileSubmit" value="UPLOAD"/>
			</div>
		</form>
		</div>
	
	
