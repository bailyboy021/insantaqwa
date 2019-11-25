<style>
ul.gallery {
    clear: both;
    float: left;
    width: 100%;
    margin-bottom: -10px;
    padding-left: 3px;
}
ul.gallery li.item {
    width: 30%;
    height: 215px;
    display: block;
    float: left;
    margin: 0px 15px 15px 0px;
    font-size: 12px;
    font-weight: normal;
    background-color: #d3d3d3;
    padding: 10px;
    box-shadow: 10px 10px 5px #888888;
}

.item img{width: 100%; height: 184px;}

.item p {
    color: #6c6c6c;
    letter-spacing: 1px;
    text-align: center;
}
</style>
	
	
		
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
	
	<div class="col-md-12">
        <ul class="gallery">
            <?php if(!empty($galeri_foto)): foreach($galeri_foto as $file): ?>
            <li class="item">
                <img src="<?php echo base_url('.././assets/images/galeri/'.$file['file_name']); ?>" alt="" >
               
            </li>
            <?php endforeach; else: ?>
            <p>Image(s) not found.....</p>
            <?php endif; ?>
        </ul>
   </div>