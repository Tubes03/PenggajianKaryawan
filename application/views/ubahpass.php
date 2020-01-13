<?php if ($this->session->userdata('message') <> ''){?>
<div class="alert alert-danger alert-dismissible">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	<h4><i class="icon fa fa-ban"></i>&nbsp; <?php echo $this->session->userdata('message') ?> </h4>
</div>
<?php } ?>


<form action="" method="post">
	<div class="form-group">
		<label>Password Lama</label>
		<input type="text" name="pass_lama" class="form-control" >
	</div>
	<div class="form-group">
		<label>Password Baru</label>
		<input type="text" name="pass_baru" class="form-control" >
	</div>
	<div class="form-group">
		<button class="btn btn-primary" type="submit">Ubah</button>
	</div>
</form>